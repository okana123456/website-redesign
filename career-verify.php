<?php

require_once '_career_assessment.php';
career_boot_session();

function career_verify_redirect($status, $target = 'jobs.php') {
    header('Location: ' . $target . '?status=' . urlencode($status) . '#assessment');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !career_valid_form_csrf($_POST['csrf_token'] ?? '')) {
    career_verify_redirect('invalid');
}

$emailKey = $_SESSION['career_email_key'] ?? '';
$attempt = $emailKey ? career_load_attempt_by_key($emailKey) : null;
$code = preg_replace('/\D+/', '', (string) ($_POST['verification_code'] ?? ''));

if (!$attempt || strlen($code) !== 6 || empty($attempt['verification_hash'])) {
    career_verify_redirect('verification_invalid');
}

if (time() > ($attempt['verification_expires_at'] ?? 0)) {
    career_verify_redirect('verification_expired');
}

if (($attempt['verification_failures'] ?? 0) >= 5) {
    unset($attempt['verification_hash'], $attempt['verification_expires_at'], $attempt['verification_failures'], $attempt['verification_purpose']);
    career_save_attempt($attempt);
    career_verify_redirect('verification_locked');
}

if (!password_verify($code, $attempt['verification_hash'])) {
    $attempt['verification_failures'] = ($attempt['verification_failures'] ?? 0) + 1;
    $locked = $attempt['verification_failures'] >= 5;
    if ($locked) {
        unset($attempt['verification_hash'], $attempt['verification_expires_at'], $attempt['verification_failures'], $attempt['verification_purpose']);
    }
    career_save_attempt($attempt);
    career_verify_redirect($locked ? 'verification_locked' : 'verification_invalid');
}

$purpose = $attempt['verification_purpose'] ?? 'new_attempt';
session_regenerate_id(true);
$_SESSION['career_verified_key'] = $emailKey;
unset(
    $attempt['verification_hash'],
    $attempt['verification_expires_at'],
    $attempt['verification_failures'],
    $attempt['verification_purpose'],
    $attempt['verification_sent_at']
);

if ($purpose === 'resume_application' && ($attempt['status'] ?? '') === 'passed') {
    career_issue_application_token($attempt);
    career_save_attempt($attempt);
    career_verify_redirect('assessment_passed');
}

if ($purpose === 'resume_test' && ($attempt['status'] ?? '') === 'active') {
    if (time() <= ($attempt['expires_at'] ?? 0)) {
        career_save_attempt($attempt);
        header('Location: career-assessment.php');
        exit();
    }
    $attempt = career_refresh_attempt_status($attempt);
    career_verify_redirect('assessment_expired');
}

$now = time();
$attempt['status'] = 'active';
$attempt['started_at'] = $now;
$attempt['expires_at'] = $now + (CAREER_ASSESSMENT_MINUTES * 60);
$attempt['next_eligible_at'] = $now + (CAREER_RETRY_DAYS * 86400);
$attempt['questions'] = career_build_questions();
$attempt['assessment_csrf'] = bin2hex(random_bytes(24));
$attempt['focus_changes'] = 0;
$attempt['score'] = null;

if (!career_save_attempt($attempt)) {
    career_verify_redirect('assessment_storage');
}

header('Location: career-assessment.php');
exit();
