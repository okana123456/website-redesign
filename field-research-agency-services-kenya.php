<?php
include '_field_service_content.php';
$domain = 'https://rudderdatanalytics.co.ke';
$hubServices = [
  ['key' => 'mystery-shopping-store-audits', 'url' => 'mystery-shopping-store-audits-kenya.php'],
  ['key' => 'retail-competitor-price-intelligence', 'url' => 'retail-competitor-price-intelligence-kenya.php'],
  ['key' => 'cx-call-audits', 'url' => 'customer-experience-call-audits-kenya.php'],
  ['key' => 'location-verification-property-scouting', 'url' => 'location-verification-property-scouting-kenya.php'],
  ['key' => 'on-demand-field-enumerators', 'url' => 'on-demand-field-enumerators-capi-odk-kenya.php'],
  ['key' => 'qualitative-transcription', 'url' => 'qualitative-audio-video-transcription-kenya.php'],
  ['key' => 'focus-group-mobilization-facilitation', 'url' => 'focus-group-mobilization-facilitation-kenya.php'],
  ['key' => 'local-business-concierge', 'url' => 'local-business-concierge-registry-errands-kenya.php'],
  ['key' => 'brand-ambassadors-street-promoters', 'url' => 'brand-ambassadors-street-promoters-kenya.php'],
  ['key' => 'b2b-lead-generation', 'url' => 'b2b-lead-generation-directory-building-kenya.php']
];
function eh($value) { return htmlspecialchars($value, ENT_QUOTES, 'UTF-8'); }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Field Research & Agency Services in Kenya | RRDA Nairobi</title>
  <meta name="description" content="Rudder Research provides field research and agency services in Kenya, including mystery shopping, price checks, field enumerators, transcription, focus group mobilization and B2B directory building.">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="https://rudderdatanalytics.co.ke/field-research-agency-services-kenya.php">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Field Research & Agency Services in Kenya">
  <meta property="og:description" content="Practical Nairobi and Kenya field support for research, retail checks, participant mobilization and agency errands.">
  <meta property="og:url" content="https://rudderdatanalytics.co.ke/field-research-agency-services-kenya.php">
  <meta property="og:image" content="https://rudderdatanalytics.co.ke/img/services/field-enumerators.png">
  <meta name="twitter:card" content="summary_large_image">
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
    body { padding-top: 6rem; background: #f7f9fc; color: #0A2540; }
    .navbar-brand h1 { font-size: clamp(1.35rem, 3vw, 2.1rem); }
    .hub-hero { position: relative; min-height: 520px; display: flex; align-items: center; background: #0A2540; overflow: hidden; }
    .hub-hero::before { content: ""; position: absolute; inset: 0; background: linear-gradient(90deg, rgba(10,37,64,.94), rgba(10,37,64,.72), rgba(10,37,64,.25)), url('img/services/field-enumerators.png') center/cover no-repeat; }
    .hub-hero .container { position: relative; z-index: 1; }
    .hub-hero h1 { color: #fff; font-size: clamp(2.2rem, 5vw, 4.2rem); line-height: 1.05; max-width: 850px; }
    .hub-hero p { color: rgba(255,255,255,.86); font-size: 1.12rem; line-height: 1.8; max-width: 720px; }
    .hub-kicker { display: inline-flex; align-items: center; gap: 8px; color: #b8efff; border: 1px solid rgba(255,255,255,.25); background: rgba(255,255,255,.08); border-radius: 999px; padding: 8px 13px; font-size: .8rem; font-weight: 700; letter-spacing: .05em; text-transform: uppercase; }
    .section-kicker { color: #007d99; font-weight: 800; letter-spacing: .08em; text-transform: uppercase; font-size: .78rem; }
    .section-title { color: #0A2540; font-size: clamp(1.85rem, 4vw, 2.8rem); line-height: 1.12; }
    .hub-card { display: block; height: 100%; background: #fff; border: 1px solid #e3e8ef; border-radius: 8px; color: #0A2540; text-decoration: none; overflow: hidden; box-shadow: 0 12px 32px rgba(10,37,64,.06); transition: transform .25s ease, border-color .25s ease; }
    .hub-card:hover { transform: translateY(-6px); border-color: var(--primary); color: #0A2540; }
    .hub-card img { width: 100%; height: 190px; object-fit: cover; display: block; }
    .hub-card-body { padding: 22px; }
    .cta-panel { background: #0A2540; color: #fff; border-radius: 8px; }
    .cta-panel p { color: rgba(255,255,255,.78); }
    @media (max-width: 991.98px) {
      body { padding-top: 4.75rem; }
      .hub-hero::before { background: linear-gradient(180deg, rgba(10,37,64,.94), rgba(10,37,64,.82)), url('img/services/field-enumerators.png') center/cover no-repeat; }
    }
  </style>
</head>
<body>
  <?php include '_topbar.php'; ?>
  <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0 fixed-top">
    <a href="index.php" class="navbar-brand p-0"><h1 class="text-uppercase text-primary">Rudder Research & Data Analytics</h1></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav ms-auto py-0 me-n3">
        <a href="index.php" class="nav-item nav-link">Home</a>
        <a href="about.php" class="nav-item nav-link">About</a>
        <a href="services.php" class="nav-item nav-link active">Services</a>
        <a href="blog.php" class="nav-item nav-link">Blog</a>
        <a href="contact.php" class="nav-item nav-link">Contact</a>
      </div>
    </div>
  </nav>
  <main>
    <section class="hub-hero">
      <div class="container" data-aos="fade-up">
        <div class="hub-kicker"><i class="bi bi-geo-alt"></i>Field Research & Agency Services</div>
        <h1 class="mt-3 mb-4">Practical field support for research, retail checks and agency work in Kenya.</h1>
        <p>RRDA supports teams that need people on the ground. We handle field visits, store checks, participant mobilization, transcription, directory building and light agency tasks with clear reporting.</p>
        <a href="contact.php" class="btn btn-primary px-4 py-3 mt-3">Discuss a Field Assignment</a>
      </div>
    </section>
    <section class="py-6">
      <div class="container">
        <div class="row justify-content-center text-center mb-5" data-aos="fade-up">
          <div class="col-lg-9">
            <div class="section-kicker">Service hub</div>
            <h2 class="section-title mt-2">Choose the field support you need</h2>
            <p class="text-muted">These services sit under our market research and qualitative research work, with a few lighter agency tasks linked for clients who need local support.</p>
          </div>
        </div>
        <div class="row g-4">
          <?php foreach ($hubServices as $item): $service = $fieldServices[$item['key']]; ?>
            <div class="col-lg-4 col-md-6" data-aos="fade-up">
              <a class="hub-card" href="<?= eh($item['url']) ?>">
                <img src="<?= eh($service['image']) ?>" alt="<?= eh($service['title']) ?>">
                <div class="hub-card-body">
                  <div class="section-kicker"><?= eh($service['category']) ?></div>
                  <h5 class="mt-2"><?= eh($service['title']) ?></h5>
                  <p class="text-muted mb-0"><?= eh($service['meta_description']) ?></p>
                </div>
              </a>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
    <section class="py-6">
      <div class="container">
        <div class="cta-panel p-5" data-aos="fade-up">
          <div class="row align-items-center g-4">
            <div class="col-lg-8"><h2 class="text-white mb-3">Have a field task that is not listed?</h2><p class="mb-0">Send the task, location, timing and proof needed. We will tell you whether it fits our field support model.</p></div>
            <div class="col-lg-4 text-lg-end"><a class="btn btn-primary px-5 py-3" href="contact.php">Contact RRDA</a></div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php include '_footer.php'; ?>
  <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>
  <?php include '_scripts.php'; ?>
  <script>AOS.init({ duration: 700, once: true, offset: 80 });</script>
</body>
</html>
