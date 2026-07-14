<?php
$domain = 'https://rudderdatanalytics.co.ke';
$currentPage = basename($_SERVER['PHP_SELF']);
function e($value) { return htmlspecialchars($value, ENT_QUOTES, 'UTF-8'); }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= e($page['title']) ?></title>
  <meta name="description" content="<?= e($page['description']) ?>">
  <meta name="keywords" content="<?= e($page['keywords']) ?>">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="<?= e($domain . '/' . $currentPage) ?>">
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?= e($page['og_title']) ?>">
  <meta property="og:description" content="<?= e($page['description']) ?>">
  <meta property="og:url" content="<?= e($domain . '/' . $currentPage) ?>">
  <meta property="og:image" content="<?= e($domain . '/' . $page['image']) ?>">
  <meta property="og:site_name" content="Rudder Research and Data Analytics LTD">
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
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Service",
    "name": <?= json_encode($page['service_name']) ?>,
    "provider": {
      "@type": "Organization",
      "name": "Rudder Research and Data Analytics LTD",
      "url": "https://rudderdatanalytics.co.ke",
      "telephone": "+254792719505",
      "email": "admin@rudderdatanalytics.co.ke"
    },
    "areaServed": ["Kenya", "Uganda", "Tanzania", "Rwanda", "East Africa"],
    "description": <?= json_encode($page['description']) ?>,
    "url": <?= json_encode($domain . '/' . $currentPage) ?>
  }
  </script>
  <style>
    body { padding-top: 6rem; background:#f7f9fc; color:#10243f; }
    .service-hero { position:relative; min-height:560px; display:flex; align-items:center; background:#071d35; overflow:hidden; }
    .service-hero::before { content:""; position:absolute; inset:0; background:linear-gradient(90deg,rgba(7,29,53,.94),rgba(7,29,53,.78),rgba(7,29,53,.28)), var(--hero-image) center/cover no-repeat; }
    .service-hero .container { position:relative; z-index:1; }
    .service-hero h1 { color:#fff; font-size:clamp(2.25rem,5vw,4.4rem); line-height:1.03; max-width:820px; margin:22px 0; }
    .service-hero p { color:rgba(255,255,255,.86); font-size:1.12rem; line-height:1.8; max-width:680px; }
    .eyebrow { display:inline-flex; gap:8px; align-items:center; color:#b9ecff; border:1px solid rgba(255,255,255,.24); background:rgba(255,255,255,.08); padding:8px 12px; border-radius:999px; font-size:.8rem; font-weight:700; letter-spacing:.05em; text-transform:uppercase; }
    .hero-actions { display:flex; flex-wrap:wrap; gap:14px; margin-top:28px; }
    .hero-action { display:inline-flex; gap:9px; align-items:center; border-radius:6px; padding:14px 20px; font-weight:700; text-decoration:none; }
    .hero-action.primary { background:#00b8d9; color:#fff; }
    .hero-action.secondary { background:rgba(255,255,255,.12); color:#fff; border:1px solid rgba(255,255,255,.28); }
    .hero-action:hover { background:#fff; color:#0a2540; }
    .trust-strip { background:#fff; border-bottom:1px solid #e4eaf2; }
    .trust-item { display:flex; align-items:center; gap:12px; padding:22px 0; color:#31445d; font-weight:700; }
    .trust-item i { color:#00b8d9; font-size:1.25rem; }
    .section-kicker { color:#007d99; text-transform:uppercase; letter-spacing:.08em; font-weight:800; font-size:.78rem; }
    .section-title { color:#0a2540; font-size:clamp(1.85rem,4vw,3rem); line-height:1.12; }
    .content-card { background:#fff; border:1px solid #e5edf5; border-radius:8px; padding:28px; height:100%; box-shadow:0 12px 32px rgba(10,37,64,.06); }
    .check-list { list-style:none; padding:0; margin:0; }
    .check-list li { display:flex; gap:12px; padding:11px 0; border-bottom:1px solid #edf2f7; line-height:1.55; }
    .check-list li:last-child { border-bottom:0; }
    .check-list i { color:#00b8d9; margin-top:4px; }
    .photo-panel { border-radius:8px; overflow:hidden; box-shadow:0 18px 46px rgba(10,37,64,.18); background:#dfe8f0; }
    .photo-panel img { width:100%; min-height:420px; object-fit:cover; display:block; }
    .process-card { background:#fff; border-left:4px solid #00b8d9; border-radius:8px; padding:24px; height:100%; box-shadow:0 10px 30px rgba(10,37,64,.06); }
    .process-card span { color:#007d99; font-weight:800; font-size:.82rem; }
    .sector-pill { display:inline-flex; margin:6px; padding:10px 14px; border:1px solid #dce8f3; border-radius:999px; background:#fff; color:#243b55; font-weight:700; font-size:.92rem; }
    .cta-band { background:#0a2540; color:#fff; }
    .cta-band p { color:rgba(255,255,255,.78); }
    @media (max-width:991.98px) {
      body { padding-top:4.75rem; }
      .service-hero { min-height:520px; }
      .service-hero::before { background:linear-gradient(180deg,rgba(7,29,53,.94),rgba(7,29,53,.82)), var(--hero-image) center/cover no-repeat; }
      .photo-panel img { min-height:300px; }
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
    <section class="service-hero" style="--hero-image:url('<?= e($page['image']) ?>');">
      <div class="container" data-aos="fade-up">
        <div class="eyebrow"><i class="bi bi-graph-up-arrow"></i><?= e($page['eyebrow']) ?></div>
        <h1><?= e($page['h1']) ?></h1>
        <p><?= e($page['intro']) ?></p>
        <div class="hero-actions">
          <a class="hero-action primary" href="contact.php"><i class="bi bi-send"></i>Request a quote</a>
          <a class="hero-action secondary" href="services.php"><i class="bi bi-grid"></i>View all services</a>
        </div>
      </div>
    </section>
    <section class="trust-strip">
      <div class="container"><div class="row">
        <?php foreach ($page['trust'] as $trust): ?><div class="col-md-3 col-6"><div class="trust-item"><i class="bi bi-check2-circle"></i><?= e($trust) ?></div></div><?php endforeach; ?>
      </div></div>
    </section>
    <section class="py-6">
      <div class="container"><div class="row align-items-center g-5">
        <div class="col-lg-6" data-aos="fade-right">
          <div class="section-kicker"><?= e($page['kicker']) ?></div>
          <h2 class="section-title mt-2 mb-4"><?= e($page['problem_title']) ?></h2>
          <p class="lead text-muted"><?= e($page['problem_text']) ?></p>
          <ul class="check-list mt-4">
            <?php foreach ($page['features'] as $feature): ?><li><i class="bi bi-check-circle-fill"></i><span><?= e($feature) ?></span></li><?php endforeach; ?>
          </ul>
        </div>
        <div class="col-lg-6" data-aos="fade-left"><div class="photo-panel"><img src="<?= e($page['support_image']) ?>" alt="<?= e($page['support_alt']) ?>"></div></div>
      </div></div>
    </section>
    <section class="py-6 bg-white">
      <div class="container">
        <div class="row mb-5"><div class="col-lg-8" data-aos="fade-up"><div class="section-kicker">How we work</div><h2 class="section-title mt-2">A practical delivery process</h2></div></div>
        <div class="row g-4">
          <?php foreach ($page['process'] as $index => $step): ?><div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="<?= $index * 80 ?>"><div class="process-card"><span>Step <?= $index + 1 ?></span><h5 class="mt-2"><?= e($step['title']) ?></h5><p class="text-muted mb-0"><?= e($step['text']) ?></p></div></div><?php endforeach; ?>
        </div>
      </div>
    </section>
    <section class="py-6">
      <div class="container"><div class="row g-4">
        <div class="col-lg-5" data-aos="fade-right"><div class="section-kicker">What you receive</div><h2 class="section-title mt-2"><?= e($page['deliverables_title']) ?></h2><p class="text-muted"><?= e($page['deliverables_intro']) ?></p></div>
        <div class="col-lg-7" data-aos="fade-left"><div class="content-card"><div class="row">
          <?php foreach ($page['deliverables'] as $deliverable): ?><div class="col-md-6 mb-3"><div class="d-flex gap-3"><i class="bi bi-file-earmark-check text-primary fs-4"></i><div><?= e($deliverable) ?></div></div></div><?php endforeach; ?>
        </div></div></div>
      </div></div>
    </section>
    <section class="py-6 bg-white">
      <div class="container text-center"><div class="section-kicker">Best fit</div><h2 class="section-title mt-2 mb-4">Who this service is built for</h2><div><?php foreach ($page['sectors'] as $sector): ?><span class="sector-pill"><?= e($sector) ?></span><?php endforeach; ?></div></div>
    </section>
    <section class="cta-band py-6">
      <div class="container"><div class="row align-items-center g-4">
        <div class="col-lg-8" data-aos="fade-right"><h2 class="text-white mb-3"><?= e($page['cta_title']) ?></h2><p class="mb-0"><?= e($page['cta_text']) ?></p></div>
        <div class="col-lg-4 text-lg-end" data-aos="fade-left"><a class="btn btn-primary px-5 py-3" href="contact.php">Talk to Rudder</a></div>
      </div></div>
    </section>
  </main>
  <?php include '_footer.php'; ?>
  <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>
  <?php include '_scripts.php'; ?>
  <script>AOS.init({ duration:700, once:true, offset:80 });</script>
</body>
</html>
