<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jobs and Field Opportunities | Rudder Research & Data Analytics</title>
  <meta name="description" content="Apply for research, data, field enumerator, sales and technology opportunities at Rudder Research & Data Analytics in Kenya.">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="https://rudderdatanalytics.co.ke/jobs.php">
  <meta property="og:title" content="Jobs and Field Opportunities at RRDA">
  <meta property="og:description" content="Apply for field research, data, systems and business opportunities at Rudder Research & Data Analytics.">
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
  <link rel="icon" href="/img/favicon.ico" type="image/x-icon">
  <style>
    body { background:#f7f9fc; color:#0A2540; }
    .jobs-hero { background:#0A2540; color:#fff; padding:78px 0; position:relative; overflow:hidden; }
    .jobs-hero::before { content:""; position:absolute; inset:0; background:linear-gradient(90deg, rgba(10,37,64,.94), rgba(10,37,64,.78), rgba(10,37,64,.35)), url('img/blog/ngo-field-data-collection-kenya.png') center/cover no-repeat; }
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
  </style>
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
        <h1>Apply for research, data and field opportunities at RRDA.</h1>
        <p class="mt-4">Use this page when RRDA shares an opportunity link. Your application goes directly to our official email with your CV attached.</p>
        <a class="btn btn-primary px-4 py-3 mt-3" href="#apply">Apply now</a>
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
            ];
            $status = $_GET['status'];
            $message = $statusMessages[$status] ?? 'Your application could not be submitted. Please check the form and try again.';
          ?>
          <div class="alert alert-<?= $status === 'success' ? 'success' : 'danger' ?> alert-dismissible fade show" role="alert">
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
              <a class="btn btn-outline-primary mt-2 js-role-link" href="#apply" data-role-target="Field Enumerator">Apply for field work</a>
            </div>
          </div>
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="80">
            <div class="job-card">
              <span class="pill">Data and Analytics</span>
              <h3 class="mt-3">Data Analysts and Research Assistants</h3>
              <p class="job-meta">Remote, Nairobi or hybrid depending on project</p>
              <p>For data cleaning, analysis, dashboards, transcription review, report support and desk research assignments.</p>
              <a class="btn btn-outline-primary mt-2 js-role-link" href="#apply" data-role-target="Data Analyst">Apply for data work</a>
            </div>
          </div>
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="160">
            <div class="job-card">
              <span class="pill">Systems and Growth</span>
              <h3 class="mt-3">Systems, Sales and Support Roles</h3>
              <p class="job-meta">Project-based or contract</p>
              <p>For POS, HMS, school systems, loan systems, client support, lead generation and business development assignments.</p>
              <a class="btn btn-outline-primary mt-2 js-role-link" href="#apply" data-role-target="Sales or Business Development">Apply for systems or sales</a>
            </div>
          </div>
        </div>

        <div class="row g-5 align-items-start">
          <div class="col-lg-7" id="apply">
            <div class="application-card" data-aos="fade-up">
              <div class="section-kicker">Application form</div>
              <h2 class="mt-2 mb-4">Submit your application</h2>
              <form action="sendjob.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="form_loaded_at" value="<?= time() ?>">
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
                    <input type="email" class="form-control" name="email" required>
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
                      <label class="form-check-label" for="consent">I confirm that the information provided is accurate and may be used by RRDA for recruitment review.</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-primary w-100 py-3" type="submit">Submit application</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="row g-3">
              <div class="col-12" data-aos="fade-left">
                <div class="process-card"><h4>1. Apply online</h4><p class="text-muted mb-0">Submit the form and attach your CV. Applications are received by the RRDA team through official email.</p></div>
              </div>
              <div class="col-12" data-aos="fade-left">
                <div class="process-card"><h4>2. Shortlisting</h4><p class="text-muted mb-0">We review experience, location, availability, language skills and fit for active assignments.</p></div>
              </div>
              <div class="col-12" data-aos="fade-left">
                <div class="process-card"><h4>3. Briefing or interview</h4><p class="text-muted mb-0">Shortlisted applicants may be contacted for a briefing, test task or interview depending on the role.</p></div>
              </div>
              <div class="col-12" data-aos="fade-left">
                <div class="process-card"><h4>4. Assignment pool</h4><p class="text-muted mb-0">Qualified field and research applicants can be considered for future project-based work.</p></div>
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
