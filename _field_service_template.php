<?php
$domain = 'https://rudderdatanalytics.co.ke';
$currentPage = basename($_SERVER['PHP_SELF']);
function e($value) { return htmlspecialchars($value, ENT_QUOTES, 'UTF-8'); }
$faqSchema = [
  '@context' => 'https://schema.org',
  '@type' => 'FAQPage',
  'mainEntity' => array_map(function ($item) {
    return [
      '@type' => 'Question',
      'name' => $item['q'],
      'acceptedAnswer' => [
        '@type' => 'Answer',
        'text' => $item['a']
      ]
    ];
  }, $page['faqs'])
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= e($page['meta_title']) ?></title>
  <meta name="description" content="<?= e($page['meta_description']) ?>">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="<?= e($domain . '/' . $currentPage) ?>">
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?= e($page['title']) ?>">
  <meta property="og:description" content="<?= e($page['meta_description']) ?>">
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
  <link rel="icon" href="/img/favicon.ico" type="image/x-icon">
  <script type="application/ld+json"><?= json_encode($faqSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?></script>
  <style>
    body { padding-top: 6rem; background: #f7f9fc; color: #0A2540; }
    .navbar-brand h1 { font-size: clamp(1.35rem, 3vw, 2.1rem); }
    .field-hero {
      position: relative;
      min-height: 520px;
      display: flex;
      align-items: center;
      background: #0A2540;
      overflow: hidden;
    }
    .field-hero::before {
      content: "";
      position: absolute;
      inset: 0;
      background:
        linear-gradient(90deg, rgba(10,37,64,.94), rgba(10,37,64,.72), rgba(10,37,64,.26)),
        var(--hero-image) center/cover no-repeat;
    }
    .field-hero .container { position: relative; z-index: 1; }
    .field-kicker {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      color: #b8efff;
      border: 1px solid rgba(255,255,255,.25);
      background: rgba(255,255,255,.08);
      border-radius: 999px;
      padding: 8px 13px;
      font-size: .8rem;
      font-weight: 700;
      letter-spacing: .05em;
      text-transform: uppercase;
    }
    .field-hero h1 { max-width: 830px; color: #fff; font-size: clamp(2.2rem, 5vw, 4.15rem); line-height: 1.05; margin: 22px 0; }
    .field-hero p { max-width: 720px; color: rgba(255,255,255,.86); font-size: 1.1rem; line-height: 1.8; }
    .section-kicker { color: #007d99; font-weight: 800; letter-spacing: .08em; text-transform: uppercase; font-size: .78rem; }
    .section-title { color: #0A2540; font-size: clamp(1.85rem, 4vw, 2.8rem); line-height: 1.12; }
    .content-panel, .faq-item, .process-card, .related-card {
      background: #fff;
      border: 1px solid #e3e8ef;
      border-radius: 8px;
      box-shadow: 0 12px 32px rgba(10,37,64,.06);
    }
    .content-panel { padding: 34px; }
    .content-panel p { color: #52657d; line-height: 1.8; }
    .check-list { list-style: none; padding: 0; margin: 0; }
    .check-list li { display: flex; gap: 12px; padding: 10px 0; border-bottom: 1px solid #edf2f7; color: #52657d; }
    .check-list li:last-child { border-bottom: 0; }
    .check-list i { color: var(--primary); margin-top: 4px; }
    .process-card { height: 100%; padding: 24px; }
    .process-card span { color: var(--primary); font-weight: 800; }
    .pricing-box { background: #0A2540; color: #fff; border-radius: 8px; padding: 32px; }
    .pricing-box p { color: rgba(255,255,255,.78); }
    .faq-item { padding: 24px; margin-bottom: 16px; }
    .related-card { display: block; height: 100%; padding: 22px; color: #0A2540; text-decoration: none; transition: transform .25s ease, border-color .25s ease; }
    .related-card:hover { transform: translateY(-5px); border-color: var(--primary); color: #0A2540; }
    .cta-panel { background: #0A2540; color: #fff; border-radius: 8px; }
    .cta-panel p { color: rgba(255,255,255,.78); }
    @media (max-width: 991.98px) {
      body { padding-top: 4.75rem; }
      .field-hero { min-height: 500px; }
      .field-hero::before { background: linear-gradient(180deg, rgba(10,37,64,.94), rgba(10,37,64,.82)), var(--hero-image) center/cover no-repeat; }
      .content-panel { padding: 26px; }
    }
  </style>
</head>
<body>
  <?php include '_topbar.php'; ?>
  <?php
    $activePage = 'field-services';
    $navFixed = true;
    include '_navbar.php';
  ?>

  <main>
    <section class="field-hero" style="--hero-image: url('<?= e($page['image']) ?>');">
      <div class="container" data-aos="fade-up">
        <div class="field-kicker"><i class="bi bi-geo-alt"></i><?= e($page['category']) ?></div>
        <h1><?= e($page['title']) ?></h1>
        <p><?= e($page['intro']) ?></p>
        <a href="contact.php" class="btn btn-primary px-4 py-3 mt-3">Request a Quote</a>
      </div>
    </section>
    <section class="py-6">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-8">
            <div class="content-panel" data-aos="fade-up">
              <div class="section-kicker">What it is</div>
              <h2 class="section-title mt-2 mb-4"><?= e($page['what_title']) ?></h2>
              <?php foreach ($page['what'] as $paragraph): ?><p><?= e($paragraph) ?></p><?php endforeach; ?>
            </div>
            <div class="content-panel mt-4" data-aos="fade-up">
              <div class="section-kicker">Who it is for</div>
              <h2 class="section-title mt-2 mb-4"><?= e($page['who_title']) ?></h2>
              <?php foreach ($page['who'] as $paragraph): ?><p><?= e($paragraph) ?></p><?php endforeach; ?>
              <ul class="check-list mt-3">
                <?php foreach ($page['fit'] as $item): ?><li><i class="bi bi-check-circle-fill"></i><span><?= e($item) ?></span></li><?php endforeach; ?>
              </ul>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="pricing-box sticky-top" style="top: 120px;" data-aos="fade-left">
              <div class="section-kicker text-info">Pricing model</div>
              <h3 class="text-white mt-2"><?= e($page['pricing_title']) ?></h3>
              <p><?= e($page['pricing']) ?></p>
              <p class="mb-0"><?= e($page['deposit']) ?></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="py-6 bg-white">
      <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
          <div class="section-kicker">Our process</div>
          <h2 class="section-title mt-2">How we deliver the work</h2>
        </div>
        <div class="row g-4">
          <?php foreach ($page['process'] as $index => $step): ?>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="<?= $index * 80 ?>">
              <div class="process-card">
                <span>Step <?= $index + 1 ?></span>
                <h5 class="mt-2"><?= e($step['title']) ?></h5>
                <p class="text-muted mb-0"><?= e($step['text']) ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
    <section class="py-6">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-7" data-aos="fade-right">
            <div class="section-kicker">FAQ</div>
            <h2 class="section-title mt-2 mb-4">Common questions</h2>
            <?php foreach ($page['faqs'] as $faq): ?>
              <div class="faq-item">
                <h5><?= e($faq['q']) ?></h5>
                <p class="text-muted mb-0"><?= e($faq['a']) ?></p>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="col-lg-5" data-aos="fade-left">
            <div class="section-kicker">Related services</div>
            <h2 class="section-title mt-2 mb-4">Useful next pages</h2>
            <div class="row g-3">
              <?php foreach ($page['related'] as $related): ?>
                <div class="col-12"><a class="related-card" href="<?= e($related['url']) ?>"><h5><?= e($related['title']) ?></h5><p class="text-muted mb-0"><?= e($related['text']) ?></p></a></div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="py-6">
      <div class="container">
        <div class="cta-panel p-5" data-aos="fade-up">
          <div class="row align-items-center g-4">
            <div class="col-lg-8"><h2 class="text-white mb-3"><?= e($page['cta_title']) ?></h2><p class="mb-0"><?= e($page['cta_text']) ?></p></div>
            <div class="col-lg-4 text-lg-end"><a class="btn btn-primary px-5 py-3" href="contact.php">Talk to Rudder</a></div>
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
