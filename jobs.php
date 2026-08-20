<?php
require_once '_career_assessment.php';
career_boot_session();
career_no_store_headers();
$careerAttempt = career_refresh_attempt_status(career_current_attempt());
$careerApplication = career_current_application_access();
$careerCsrf = career_form_csrf();
$careerSessionVerified = $careerAttempt
    && !empty($_SESSION['career_verified_key'])
    && hash_equals((string) $careerAttempt['email_key'], (string) $_SESSION['career_verified_key']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Careers and Field Opportunities | Rudder Research and Data Analytics LTD</title>
  <meta name="description" content="Explore careers and complete the verified applicant assessment for research, data, fieldwork, sales and technology opportunities at Rudder Research and Data Analytics LTD in Kenya.">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="https://rudderdatanalytics.co.ke/jobs.php">
  <meta property="og:title" content="Careers at Rudder Research and Data Analytics LTD">
  <meta property="og:description" content="Apply for field research, data, systems and business opportunities at Rudder Research and Data Analytics LTD.">
  <meta property="og:url" content="https://rudderdatanalytics.co.ke/jobs.php">
  <meta property="og:type" content="website">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
  <link rel="icon" href="/img/favicon.ico?v=20260819f" type="image/x-icon">
  <style>
    body { background:#f7f9fc; color:#0A2540; }
    .jobs-hero { background:#0A2540; color:#fff; padding:78px 0; position:relative; overflow:hidden; }
    .jobs-hero::before { content:""; position:absolute; inset:0; background:linear-gradient(90deg, rgba(10,37,64,.94), rgba(10,37,64,.78), rgba(10,37,64,.35)), url('img/redesign/field-enumerator-training.png') center/cover no-repeat; }
    .jobs-hero .container { position:relative; z-index:1; }
    .jobs-hero h1 { color:#fff; font-size:clamp(2.2rem, 5vw, 4rem); line-height:1.05; max-width:880px; }
    .jobs-hero p { color:rgba(255,255,255,.84); max-width:720px; font-size:1.08rem; line-height:1.75; }
    .section-kicker { color:#007d99; font-size:.78rem; font-weight:800; letter-spacing:.08em; text-transform:uppercase; }
    .job-card, .application-card, .process-card { background:#fff; border:1px solid #e3e8ef; border-radius:8px; box-shadow:0 12px 32px rgba(10,37,64,.06); }
    .job-card { padding:24px; height:100%; }
    .job-card h3 { color:#0A2540; }
    .job-meta { color:#6B6A75; font-size:.92rem; }
    .application-card { padding:30px; }
    .process-card { padding:22px; height:100%; border-left:4px solid #00b8d9; }
    .pill { display:inline-flex; padding:8px 12px; border-radius:999px; background:#eef5f9; color:#243b55; font-weight:700; font-size:.84rem; margin:4px 6px 4px 0; }
    .rrda-hidden-field { position:absolute; left:-9999px; top:auto; width:1px; height:1px; overflow:hidden; }
    .assessment-gateway { background:#fff; border:1px solid #dce5ec; border-top:5px solid #00b8d9; border-radius:8px; padding:30px; box-shadow:0 12px 32px rgba(10,37,64,.07); }
    .assessment-facts { display:grid; grid-template-columns:repeat(4, 1fr); border:1px solid #dce5ec; margin:22px 0; }
    .assessment-fact { padding:15px 12px; border-right:1px solid #dce5ec; text-align:center; }
    .assessment-fact:last-child { border-right:0; }
    .assessment-fact strong { display:block; color:#0A2540; font-family:Barlow,sans-serif; }
    .assessment-fact span { color:#6B6A75; font-size:.78rem; }
    .assessment-status { background:#eef7f8; border-left:4px solid #00b8d9; padding:16px; }
    @media (max-width: 767.98px) {
      .assessment-facts { grid-template-columns:repeat(2, 1fr); }
      .assessment-fact:nth-child(2) { border-right:0; }
      .assessment-fact:nth-child(-n+2) { border-bottom:1px solid #dce5ec; }
    }
  </style>
    <link href="css/rrda-decision.css?v=20260819g" rel="stylesheet">
</head>
<body>
  <?php include '_topbar.php'; ?>
  <?php
    $activePage = 'jobs';
    $navFixed = false;
    include '_navbar.php';
  ?>

  <main>
    <section class="jobs-hero">
      <div class="container" data-aos="fade-up">
        <div class="section-kicker text-info mb-3">Careers and field opportunities</div>
        <h1>Build your next opportunity with Rudder Research and Data Analytics LTD.</h1>
        <p class="mt-4">Applicants complete a verified, timed numerical assessment before the CV application form is unlocked. This keeps recruitment fair, structured and focused on active opportunities.</p>
        <a class="btn btn-primary px-4 py-3 mt-3" href="#assessment">Start assessment</a>
      </div>
    </section>

    <section class="py-5">
      <div class="container">
        <?php if (isset($_GET['status'])): ?>
          <?php
            $statusMessages = [
                'success' => 'Application submitted successfully. We will review it and contact shortlisted candidates.',
                'missing' => 'Please complete all required fields before submitting.',
                'missing_cv' => 'Please attach your CV before submitting.',
                'large' => 'Your CV is too large. Please upload a PDF, DOC or DOCX file that is not more than 2MB.',
                'type' => 'Please upload your CV as a PDF, DOC or DOCX file.',
                'email' => 'Please enter a valid email address.',
                'mail_config' => 'The application form needs the website email settings to be checked before it can send applications.',
                'mail' => 'The form was completed, but the email could not be sent. Please try again later or email us directly.',
                'upload' => 'The CV upload did not complete. Please try again with a smaller file.',
                'spam' => 'Your application could not be submitted. Please refresh the page and try again.',
                'too_fast' => 'Please take a moment to complete the form before submitting.',
                'rate' => 'You have already submitted recently. Please wait a few minutes before trying again.',
                'invalid' => 'Please use the application form below to submit your details.',
                'assessment_required' => 'Please verify your email and pass the careers assessment before submitting your CV.',
                'assessment_missing' => 'Enter a valid email, select the advertised role and accept the assessment terms.',
                'assessment_storage' => 'The assessment service is temporarily unavailable. Please contact the company careers team.',
                'verification_sent' => 'A six-digit verification code has been sent to your email. Enter it below within 10 minutes.',
                'verification_wait' => 'A verification code was sent recently. Please check your inbox and spam folder before requesting another.',
                'verification_rate' => 'Too many verification emails were requested from this connection. Please wait one hour and try again.',
                'verification_invalid' => 'That verification code is incorrect. Please check the email and try again.',
                'verification_expired' => 'That verification code has expired. Start again to receive a new code.',
                'verification_locked' => 'Too many incorrect verification attempts were made. Request a new code.',
                'verification_mail' => 'The verification email could not be sent. Please try again later.',
                'assessment_passed' => 'Assessment passed. Your verified application and CV upload form is now unlocked.',
                'assessment_failed' => 'The required pass mark was not reached. A new assessment can be attempted after 30 days.',
                'assessment_expired' => 'The assessment timer expired. A new assessment can be attempted after 30 days.',
                'assessment_cooldown' => 'This email has already completed an assessment attempt. The next eligible date is shown below.',
            ];
            $status = $_GET['status'];
            $message = $statusMessages[$status] ?? 'Your application could not be submitted. Please check the form and try again.';
            $positiveStatuses = ['success', 'assessment_passed'];
            $informationalStatuses = ['verification_sent', 'verification_wait', 'assessment_cooldown'];
            $alertType = in_array($status, $positiveStatuses, true) ? 'success' : (in_array($status, $informationalStatuses, true) ? 'info' : 'danger');
          ?>
          <div class="alert alert-<?= $alertType ?> alert-dismissible fade show" role="alert">
            <?= htmlspecialchars($message) ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        <?php endif; ?>

        <div class="row g-4 mb-5">
          <div class="col-lg-4" data-aos="fade-up">
            <div class="job-card">
              <span class="pill">Field Research</span>
              <h3 class="mt-3">Field Enumerators and Supervisors</h3>
              <p class="job-meta">County-based, project-based</p>
              <p>For CAPI, ODK, KoboToolbox, store audits, mystery shopping, focus group mobilization and verification assignments.</p>
              <a class="btn btn-outline-primary mt-2 js-role-link" href="#assessment" data-role-target="Field Enumerator">Apply for field work</a>
            </div>
          </div>
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="80">
            <div class="job-card">
              <span class="pill">Data and Analytics</span>
              <h3 class="mt-3">Data Analysts and Research Assistants</h3>
              <p class="job-meta">Remote, Nairobi or hybrid depending on project</p>
              <p>For data cleaning, analysis, dashboards, transcription review, report support and desk research assignments.</p>
              <a class="btn btn-outline-primary mt-2 js-role-link" href="#assessment" data-role-target="Data Analyst">Apply for data work</a>
            </div>
          </div>
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="160">
            <div class="job-card">
              <span class="pill">Systems and Growth</span>
              <h3 class="mt-3">Systems, Sales and Support Roles</h3>
              <p class="job-meta">Project-based or contract</p>
              <p>For POS, HMS, school systems, loan systems, client support, lead generation and business development assignments.</p>
              <a class="btn btn-outline-primary mt-2 js-role-link" href="#assessment" data-role-target="Sales or Business Development">Apply for systems or sales</a>
            </div>
          </div>
        </div>

        <div class="row g-5 align-items-start">
          <div class="col-lg-7" id="assessment">
            <?php if ($careerApplication): ?>
            <div class="application-card" data-aos="fade-up">
              <div class="section-kicker">Verified application</div>
              <h2 class="mt-2 mb-2">Complete your application</h2>
              <p class="text-muted mb-4">Assessment result: <?= (int) ($careerApplication['attempt']['score'] ?? 0) ?>%. Submit your CV within 30 days of passing.</p>
              <form action="sendjob.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="form_loaded_at" value="<?= time() ?>">
                <input type="hidden" name="assessment_token" value="<?= htmlspecialchars($careerApplication['token'], ENT_QUOTES, 'UTF-8') ?>">
                <div class="rrda-hidden-field" aria-hidden="true">
                  <label>Website</label>
                  <input type="text" name="website" tabindex="-1" autocomplete="off">
                </div>
                <div class="row g-3">
                  <div class="col-md-6">
                    <label class="form-label">Full name</label>
                    <input class="form-control" name="name" required>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" value="<?= htmlspecialchars($careerApplication['attempt']['email'], ENT_QUOTES, 'UTF-8') ?>" readonly required>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label">Phone number</label>
                    <input class="form-control" name="phone" placeholder="+254..." required>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label">County</label>
                    <input class="form-control" name="county" placeholder="Nairobi, Kisumu, Uasin Gishu..." required>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label">Role applied for</label>
                    <input class="form-control" name="role" value="<?= htmlspecialchars($careerApplication['attempt']['role'], ENT_QUOTES, 'UTF-8') ?>" readonly required>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label">Availability</label>
                    <select class="form-select" name="availability" required>
                      <option value="">Select availability</option>
                      <option>Immediately</option>
                      <option>Within 1 week</option>
                      <option>Within 2 weeks</option>
                      <option>Project dependent</option>
                    </select>
                  </div>
                  <div class="col-12">
                    <label class="form-label">Brief experience summary</label>
                    <textarea class="form-control" name="experience" rows="4" placeholder="Mention tools, sectors, counties covered, languages and relevant work." required></textarea>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label">LinkedIn or portfolio link, optional</label>
                    <input class="form-control" name="portfolio">
                  </div>
                  <div class="col-md-6">
                    <label class="form-label">Upload CV, PDF/DOC/DOCX, max 2MB</label>
                    <input type="hidden" name="MAX_FILE_SIZE" value="2097152">
                    <input type="file" class="form-control" name="cv" accept=".pdf,.doc,.docx" required>
                  </div>
                  <div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="consent" value="yes" id="consent" required>
                      <label class="form-check-label" for="consent">I confirm that the information provided is accurate and may be used by Rudder Research and Data Analytics LTD for recruitment review in accordance with the <a href="privacy.php" target="_blank" rel="noopener">Privacy Policy</a>.</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-primary w-100 py-3" type="submit">Submit application</button>
                  </div>
                </div>
              </form>
            </div>
            <?php else: ?>
            <div class="assessment-gateway" data-aos="fade-up">
              <div class="section-kicker">Applicant assessment</div>
              <h2 class="mt-2 mb-3">Qualify before submitting your CV</h2>
              <p class="text-muted">Every applicant receives a different set of numerical reasoning and data-accuracy questions. Your email must be verified before the timer begins.</p>

              <div class="assessment-facts">
                <div class="assessment-fact"><strong>8</strong><span>questions</span></div>
                <div class="assessment-fact"><strong>15 min</strong><span>server-timed</span></div>
                <div class="assessment-fact"><strong>75%</strong><span>pass mark</span></div>
                <div class="assessment-fact"><strong>30 days</strong><span>before a retry</span></div>
              </div>

              <?php if (!empty($careerAttempt['verification_hash']) && time() <= ($careerAttempt['verification_expires_at'] ?? 0)): ?>
                <div class="assessment-status mb-3">
                  <strong>Email verification required</strong>
                  <p class="mb-0 text-muted">Enter the code sent to <?= htmlspecialchars(career_mask_email($careerAttempt['email']), ENT_QUOTES, 'UTF-8') ?>.</p>
                </div>
                <form action="career-verify.php" method="POST" autocomplete="off">
                  <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($careerCsrf, ENT_QUOTES, 'UTF-8') ?>">
                  <label class="form-label" for="verificationCode">Six-digit verification code</label>
                  <input class="form-control form-control-lg text-center mb-3" id="verificationCode" name="verification_code" inputmode="numeric" pattern="[0-9]{6}" maxlength="6" autocomplete="one-time-code" required>
                  <button class="btn btn-primary w-100 py-3" type="submit">Verify and continue</button>
                </form>
              <?php elseif (($careerAttempt['status'] ?? '') === 'active' && $careerSessionVerified && time() <= ($careerAttempt['expires_at'] ?? 0)): ?>
                <div class="assessment-status mb-3">
                  <strong>Your assessment is already running.</strong>
                  <p class="mb-0 text-muted">Continue before the server timer expires.</p>
                </div>
                <a class="btn btn-primary w-100 py-3" href="career-assessment.php">Continue timed assessment</a>
              <?php elseif (($careerAttempt['next_eligible_at'] ?? 0) > time()): ?>
                <div class="assessment-status">
                  <strong>Next eligible assessment date</strong>
                  <p class="mb-0 text-muted"><?= htmlspecialchars(career_retry_date($careerAttempt), ENT_QUOTES, 'UTF-8') ?>. The same email cannot begin another attempt before this date.</p>
                </div>
              <?php else: ?>
                <form action="career-start.php" method="POST" autocomplete="off">
                  <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($careerCsrf, ENT_QUOTES, 'UTF-8') ?>">
                  <div class="rrda-hidden-field" aria-hidden="true">
                    <label>Website</label>
                    <input type="text" name="website" tabindex="-1" autocomplete="off">
                  </div>
                  <div class="row g-3">
                    <div class="col-md-6">
                      <label class="form-label">Email address</label>
                      <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="col-md-6">
                      <label class="form-label">Advertised role</label>
                      <select class="form-select" name="role" required>
                        <option value="">Select role</option>
                        <option>Field Enumerator</option>
                        <option>Field Supervisor</option>
                        <option>Research Assistant</option>
                        <option>Data Analyst</option>
                        <option>Transcriber</option>
                        <option>Sales or Business Development</option>
                        <option>Systems Developer or Support</option>
                        <option>Other advertised role</option>
                      </select>
                    </div>
                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="assessment_consent" value="yes" id="assessmentConsent" required>
                        <label class="form-check-label" for="assessmentConsent">I agree to the <a href="privacy.php" target="_blank" rel="noopener">Privacy Policy</a> and understand that the assessment is timed, automatically marked and limited to one attempt per verified email every 30 days.</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100 py-3" type="submit">Verify email and start assessment</button>
                    </div>
                  </div>
                </form>
              <?php endif; ?>
            </div>
            <?php endif; ?>
          </div>
          <div class="col-lg-5">
            <div class="row g-3">
              <div class="col-12" data-aos="fade-left">
                <div class="process-card"><h4>1. Verify and assess</h4><p class="text-muted mb-0">Verify your email and complete the timed numerical reasoning assessment.</p></div>
              </div>
              <div class="col-12" data-aos="fade-left">
                <div class="process-card"><h4>2. Submit your CV</h4><p class="text-muted mb-0">Applicants who reach the pass mark unlock the verified CV application form.</p></div>
              </div>
              <div class="col-12" data-aos="fade-left">
                <div class="process-card"><h4>3. Shortlisting</h4><p class="text-muted mb-0">We review experience, location, availability, language skills and fit for active assignments.</p></div>
              </div>
              <div class="col-12" data-aos="fade-left">
                <div class="process-card"><h4>4. Interview or briefing</h4><p class="text-muted mb-0">Shortlisted candidates may be invited to an interview, practical task or project briefing.</p></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php include '_footer.php'; ?>
  <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>
  <?php include '_scripts.php'; ?>
  <script>
    AOS.init({ duration: 700, once: true, offset: 80 });

    const roleSelect = document.querySelector('select[name="role"]');
    const setRole = (role) => {
      if (!roleSelect || !role) return;
      const match = Array.from(roleSelect.options).find(option => option.text === role);
      if (match) roleSelect.value = match.text;
    };

    document.querySelectorAll('.js-role-link').forEach(link => {
      link.addEventListener('click', () => setRole(link.dataset.roleTarget));
    });

    setRole(new URLSearchParams(window.location.search).get('role'));
  </script>
</body>
</html>
