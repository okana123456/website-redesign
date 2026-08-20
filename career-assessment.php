<?php

require_once '_career_assessment.php';
career_boot_session();
career_no_store_headers();

function career_assessment_redirect($status) {
    header('Location: jobs.php?status=' . urlencode($status) . '#assessment');
    exit();
}

$attempt = career_refresh_attempt_status(career_current_attempt());
$verifiedKey = $_SESSION['career_verified_key'] ?? '';
if (!$attempt || !hash_equals((string) ($attempt['email_key'] ?? ''), (string) $verifiedKey) || ($attempt['status'] ?? '') !== 'active') {
    if (($attempt['status'] ?? '') === 'passed') {
        career_assessment_redirect('assessment_passed');
    }
    career_assessment_redirect(($attempt['status'] ?? '') === 'expired' ? 'assessment_expired' : 'assessment_required');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $csrf = (string) ($_POST['assessment_csrf'] ?? '');
    if (empty($attempt['assessment_csrf']) || !hash_equals($attempt['assessment_csrf'], $csrf)) {
        career_assessment_redirect('invalid');
    }

    if (time() > ($attempt['expires_at'] ?? 0)) {
        $attempt['status'] = 'expired';
        $attempt['score'] = 0;
        $attempt['submitted_at'] = time();
        career_save_attempt($attempt);
        career_assessment_redirect('assessment_expired');
    }

    $score = career_score_answers($attempt, $_POST['answers'] ?? []);
    $attempt['score'] = $score['percent'];
    $attempt['correct_answers'] = $score['correct'];
    $attempt['question_count'] = $score['total'];
    $attempt['focus_changes'] = max(0, min(100, (int) ($_POST['focus_changes'] ?? 0)));
    $attempt['submitted_at'] = time();
    unset($attempt['assessment_csrf']);

    if ($score['percent'] >= CAREER_ASSESSMENT_PASS_PERCENT) {
        $attempt['status'] = 'passed';
        $attempt['passed_at'] = time();
        career_issue_application_token($attempt);
        career_save_attempt($attempt);
        career_assessment_redirect('assessment_passed');
    }

    $attempt['status'] = 'failed';
    career_save_attempt($attempt);
    career_assessment_redirect('assessment_failed');
}

$remainingSeconds = max(0, ($attempt['expires_at'] ?? time()) - time());
$questions = $attempt['questions'] ?? [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex, nofollow">
  <title>Timed Careers Assessment | Rudder Research and Data Analytics LTD</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/rrda-decision.css?v=20260820a" rel="stylesheet">
  <link rel="icon" href="/img/favicon.ico?v=20260819f" type="image/x-icon">
  <style>
    body { background:#eef3f7; color:#0A2540; min-height:100vh; }
    .assessment-header { background:#0A2540; color:#fff; border-bottom:5px solid #00b8d9; }
    .assessment-brand { font-family:Barlow,sans-serif; font-weight:700; font-size:1rem; line-height:1.25; }
    .assessment-shell { max-width:920px; margin:auto; }
    .assessment-card { background:#fff; border:1px solid #dce5ec; border-radius:8px; box-shadow:0 18px 48px rgba(10,37,64,.10); }
    .assessment-intro { padding:26px; border-bottom:1px solid #e3e8ef; }
    .assessment-question { padding:26px; border-bottom:1px solid #e3e8ef; }
    .assessment-question:last-of-type { border-bottom:0; }
    .question-number { color:#087d97; font-weight:800; font-size:.76rem; letter-spacing:.08em; text-transform:uppercase; }
    .question-text { font-size:1.05rem; line-height:1.65; font-weight:600; user-select:none; -webkit-user-select:none; }
    .timer { min-width:132px; text-align:center; background:#fff; color:#0A2540; border-radius:5px; padding:10px 14px; font-weight:800; font-variant-numeric:tabular-nums; }
    .timer.timer-warning { background:#ffcd1a; color:#16233f; }
    .timer.timer-critical { background:#d91f26; color:#fff; }
    .integrity-note { background:#f5f9fc; border-left:4px solid #00b8d9; padding:14px 16px; color:#52657c; }
    .submit-bar { padding:24px 26px; background:#f8fafc; border-top:1px solid #e3e8ef; }
    @media (max-width: 575.98px) {
      .assessment-question, .assessment-intro, .submit-bar { padding:20px; }
      .assessment-brand { max-width:210px; }
    }
  </style>
</head>
<body>
  <header class="assessment-header py-3">
    <div class="container assessment-shell d-flex align-items-center justify-content-between gap-3">
      <div class="assessment-brand">Rudder Research and Data Analytics LTD<br><span class="fw-normal text-white-50">Careers assessment</span></div>
      <div class="timer" id="assessmentTimer" aria-live="polite">15:00</div>
    </div>
  </header>

  <main class="container assessment-shell py-5">
    <form method="POST" id="assessmentForm" class="assessment-card" autocomplete="off">
      <input type="hidden" name="assessment_csrf" value="<?= htmlspecialchars($attempt['assessment_csrf'], ENT_QUOTES, 'UTF-8') ?>">
      <input type="hidden" name="focus_changes" id="focusChanges" value="0">

      <div class="assessment-intro">
        <p class="question-number mb-2">Verified assessment</p>
        <h1 class="h2 mb-3">Numerical reasoning and data accuracy test</h1>
        <p class="text-muted mb-3">Answer all <?= count($questions) ?> questions. Enter numbers only, without currency symbols or percentage signs. Decimal answers should be rounded exactly as requested.</p>
        <div class="integrity-note">The questions and numerical values are generated specifically for this attempt. Copying, pasting and right-click actions are disabled. The server enforces the timer even if this page is refreshed.</div>
      </div>

      <?php foreach ($questions as $index => $question): ?>
        <section class="assessment-question">
          <div class="question-number mb-2">Question <?= $index + 1 ?> of <?= count($questions) ?></div>
          <label class="question-text d-block mb-3" for="answer-<?= htmlspecialchars($question['id'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($question['prompt'], ENT_QUOTES, 'UTF-8') ?></label>
          <input
            class="form-control form-control-lg assessment-answer"
            id="answer-<?= htmlspecialchars($question['id'], ENT_QUOTES, 'UTF-8') ?>"
            name="answers[<?= htmlspecialchars($question['id'], ENT_QUOTES, 'UTF-8') ?>]"
            type="number"
            step="any"
            inputmode="decimal"
            required
            autocomplete="off"
            aria-label="Numeric answer for question <?= $index + 1 ?>">
        </section>
      <?php endforeach; ?>

      <div class="submit-bar d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3">
        <p class="text-muted mb-0">Pass mark: <?= CAREER_ASSESSMENT_PASS_PERCENT ?>%. Answers are marked automatically.</p>
        <button class="btn btn-primary px-5 py-3" type="submit" id="submitAssessment">Submit assessment</button>
      </div>
    </form>
  </main>

  <script>
    const assessmentForm = document.getElementById('assessmentForm');
    const timer = document.getElementById('assessmentTimer');
    const submitButton = document.getElementById('submitAssessment');
    const focusInput = document.getElementById('focusChanges');
    let remaining = <?= (int) $remainingSeconds ?>;
    let submitted = false;
    let focusChanges = 0;

    const renderTimer = () => {
      const minutes = Math.floor(Math.max(remaining, 0) / 60);
      const seconds = Math.max(remaining, 0) % 60;
      timer.textContent = String(minutes).padStart(2, '0') + ':' + String(seconds).padStart(2, '0');
      timer.classList.toggle('timer-warning', remaining <= 300 && remaining > 120);
      timer.classList.toggle('timer-critical', remaining <= 120);
    };

    const countdown = window.setInterval(() => {
      remaining -= 1;
      renderTimer();
      if (remaining <= 0 && !submitted) {
        submitted = true;
        window.clearInterval(countdown);
        submitButton.disabled = true;
        assessmentForm.submit();
      }
    }, 1000);

    assessmentForm.addEventListener('submit', () => {
      submitted = true;
      submitButton.disabled = true;
      submitButton.textContent = 'Submitting...';
    });

    document.addEventListener('visibilitychange', () => {
      if (document.hidden && !submitted) {
        focusChanges += 1;
        focusInput.value = String(focusChanges);
      }
    });

    document.addEventListener('contextmenu', event => event.preventDefault());
    document.addEventListener('copy', event => event.preventDefault());
    document.addEventListener('cut', event => event.preventDefault());
    document.addEventListener('paste', event => event.preventDefault());
    document.addEventListener('dragstart', event => event.preventDefault());

    renderTimer();
  </script>
</body>
</html>
