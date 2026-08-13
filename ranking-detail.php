<?php
require '_data_rankings.php';

$slug = $rankingSlug ?? ($_GET['ranking'] ?? '');
$ranking = rrda_get_ranking_page($slug);

if (!$ranking) {
    http_response_code(404);
    $ranking = [
        'title' => 'Data Pool Not Found',
        'description' => 'The requested RRDA data pool could not be found.',
        'category' => 'Data',
        'location' => 'Kenya',
        'image' => 'img/blog/import-export-data-kenya-smes.png',
        'chart_color' => '#F3525A',
        'cta' => 'Request data',
        'rows' => [],
    ];
}

$pageUrl = 'https://rudderdatanalytics.co.ke/' . htmlspecialchars($slug) . '.php';
$chartId = 'rankingChart';
$labels = array_column($ranking['rows'], 'name');
$ratings = array_column($ranking['rows'], 'rating');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($ranking['title']) ?> | RRDA Data Pool</title>
  <meta name="description" content="<?= htmlspecialchars($ranking['description']) ?>">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="<?= $pageUrl ?>">
  <meta property="og:title" content="<?= htmlspecialchars($ranking['title']) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($ranking['description']) ?>">
  <meta property="og:url" content="<?= $pageUrl ?>">
  <meta property="og:type" content="article">
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
    .ranking-hero { color:#fff; padding:76px 0; position:relative; overflow:hidden; }
    .ranking-hero::before { content:""; position:absolute; inset:0; background:linear-gradient(90deg, rgba(10,37,64,.95), rgba(10,37,64,.82), rgba(10,37,64,.36)), url('<?= htmlspecialchars($ranking['image']) ?>') center/cover no-repeat; }
    .ranking-hero .container { position:relative; z-index:1; }
    .ranking-hero h1 { color:#fff; font-size:clamp(2.1rem, 5vw, 4rem); line-height:1.05; max-width:940px; }
    .ranking-hero p { color:rgba(255,255,255,.86); max-width:780px; font-size:1.08rem; line-height:1.75; }
    .section-kicker { color:#007d99; font-size:.78rem; font-weight:800; letter-spacing:.08em; text-transform:uppercase; }
    .ranking-panel, .side-panel, .pool-card { background:#fff; border:1px solid #e3e8ef; border-radius:8px; box-shadow:0 12px 32px rgba(10,37,64,.06); }
    .ranking-panel, .side-panel { padding:28px; }
    .rank-badge { width:42px; height:42px; border-radius:50%; display:inline-flex; align-items:center; justify-content:center; background:#0A2540; color:#fff; font-weight:800; }
    .rating-chip { display:inline-flex; align-items:center; gap:6px; padding:7px 10px; border-radius:999px; background:#fff4d8; color:#7a4f00; font-weight:800; white-space:nowrap; }
    .chart-box { min-height:360px; }
    .data-note { font-size:.9rem; color:#6B6A75; }
    .pool-card { display:block; height:100%; padding:20px; color:#0A2540; text-decoration:none; transition:transform .25s ease, border-color .25s ease; }
    .pool-card:hover { transform:translateY(-4px); border-color:var(--primary); color:#0A2540; }
    .pill { display:inline-flex; padding:8px 12px; border-radius:999px; background:#eef5f9; color:#243b55; font-weight:700; font-size:.84rem; margin:4px 6px 4px 0; }
  </style>
</head>
<body>
  <?php include '_topbar.php'; ?>
  <?php
    $activePage = 'data';
    $navFixed = false;
    include '_navbar.php';
  ?>

  <main>
    <section class="ranking-hero">
      <div class="container" data-aos="fade-up">
        <div class="section-kicker text-info mb-3"><?= htmlspecialchars($ranking['category']) ?> data pool</div>
        <h1><?= htmlspecialchars($ranking['title']) ?></h1>
        <p class="mt-4"><?= htmlspecialchars($ranking['description']) ?></p>
        <div class="mt-4">
          <a class="btn btn-primary px-4 py-3 me-2" href="#ranking-table">View ranking</a>
          <a class="btn btn-light px-4 py-3" href="contact.php"><?= htmlspecialchars($ranking['cta']) ?></a>
        </div>
      </div>
    </section>

    <section class="py-5" id="ranking-table">
      <div class="container">
        <div class="row g-4">
          <div class="col-lg-8" data-aos="fade-up">
            <div class="ranking-panel">
              <div class="d-flex flex-wrap justify-content-between align-items-end gap-3 mb-3">
                <div>
                  <div class="section-kicker"><?= htmlspecialchars($ranking['location']) ?> ranking</div>
                  <h2 class="mt-2 mb-0">Top 10 results</h2>
                </div>
                <p class="data-note mb-0">Last refreshed: August 2026</p>
              </div>
              <div class="table-responsive">
                <table class="table align-middle">
                  <thead>
                    <tr>
                      <th>Rank</th>
                      <th>Name</th>
                      <th>Area</th>
                      <th>Rating</th>
                      <th>Review footprint</th>
                      <th>Visible signal</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($ranking['rows'] as $index => $row): ?>
                      <tr>
                        <td><span class="rank-badge"><?= $index + 1 ?></span></td>
                        <td><strong><?= htmlspecialchars($row['name']) ?></strong></td>
                        <td><?= htmlspecialchars($row['area']) ?></td>
                        <td><span class="rating-chip"><?= htmlspecialchars(number_format((float) $row['rating'], 1)) ?>/5</span></td>
                        <td><?= htmlspecialchars($row['reviews']) ?></td>
                        <td><?= htmlspecialchars($row['signal']) ?></td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-lg-4" data-aos="fade-left">
            <div class="side-panel chart-box mb-4">
              <canvas id="<?= $chartId ?>"></canvas>
            </div>
            <div class="side-panel">
              <div class="section-kicker">Full dataset</div>
              <h3 class="mt-2">Request the complete file</h3>
              <p class="text-muted">Available fields can include name, category, county, town, location, online rating, review footprint, contact visibility, service notes, lead status and refresh date.</p>
              <a class="btn btn-primary w-100 py-3" href="contact.php"><?= htmlspecialchars($ranking['cta']) ?></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-5 bg-white">
      <div class="container">
        <div class="row mb-4">
          <div class="col-lg-8">
            <div class="section-kicker">More data pools</div>
            <h2 class="mt-2">Explore other ranking datasets</h2>
          </div>
        </div>
        <div class="row g-4">
          <?php foreach (rrda_get_ranking_pages() as $otherSlug => $other): ?>
            <?php if ($otherSlug === $slug) { continue; } ?>
            <div class="col-lg-4 col-md-6" data-aos="fade-up">
              <a class="pool-card" href="<?= htmlspecialchars($otherSlug) ?>.php">
                <span class="pill"><?= htmlspecialchars($other['category']) ?></span>
                <h3 class="mt-3"><?= htmlspecialchars($other['short_title']) ?></h3>
                <p class="text-muted mb-0"><?= htmlspecialchars($other['location']) ?> online reputation ranking.</p>
              </a>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
  </main>

  <?php include '_footer.php'; ?>
  <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>
  <?php include '_scripts.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    new Chart(document.getElementById('<?= $chartId ?>'), {
      type: 'bar',
      data: {
        labels: <?= json_encode($labels) ?>,
        datasets: [{ label: 'Online rating', data: <?= json_encode($ratings) ?>, backgroundColor: '<?= htmlspecialchars($ranking['chart_color']) ?>' }]
      },
      options: { indexAxis:'y', responsive:true, maintainAspectRatio:false, plugins:{ legend:{ display:false } }, scales:{ x:{ beginAtZero:true, max:5 } } }
    });
    AOS.init({ duration: 700, once: true, offset: 80 });
  </script>
</body>
</html>
