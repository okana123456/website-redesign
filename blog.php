<?php
include '_blog_posts.php';
$posts = rrda_visible_blog_posts($blogPosts);
$latest = $posts[0] ?? null;
$categories = array_values(array_unique(array_map(function ($post) { return $post['category']; }, $posts)));
$tags = [];
foreach ($posts as $post) {
    foreach ($post['tags'] as $tag) {
        $tags[$tag] = true;
    }
}
function blog_e($value) { return htmlspecialchars($value, ENT_QUOTES, 'UTF-8'); }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Research, Data and Business Insights Blog | RRDA Kenya</title>
  <meta name="description" content="Practical RRDA articles on market research, data analytics, field research, import and export data, and business systems in Kenya.">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="https://rudderdatanalytics.co.ke/blog.php">
  <meta property="og:type" content="website">
  <meta property="og:title" content="RRDA Research, Data and Business Insights Blog">
  <meta property="og:description" content="Practical articles for NGOs, SMEs and companies using research, data and field intelligence in Kenya.">
  <meta property="og:url" content="https://rudderdatanalytics.co.ke/blog.php">
  <?php if ($latest): ?><meta property="og:image" content="https://rudderdatanalytics.co.ke/<?= blog_e($latest['image']) ?>"><?php endif; ?>
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
    body { background:#f7f9fc; color:#0A2540; }
    .blog-hero { background:#0A2540; color:#fff; padding:90px 0 70px; }
    .blog-hero h1 { color:#fff; font-size:clamp(2.2rem, 5vw, 4rem); line-height:1.05; max-width:840px; }
    .blog-hero p { color:rgba(255,255,255,.82); max-width:720px; font-size:1.08rem; line-height:1.75; }
    .blog-card { display:block; height:100%; background:#fff; border:1px solid #e3e8ef; border-radius:8px; overflow:hidden; color:#0A2540; text-decoration:none; box-shadow:0 12px 32px rgba(10,37,64,.06); transition:transform .25s ease, border-color .25s ease; }
    .blog-card:hover { transform:translateY(-5px); color:#0A2540; border-color:var(--primary); }
    .blog-card img { width:100%; height:230px; object-fit:cover; display:block; }
    .blog-card-body { padding:24px; }
    .blog-kicker { color:#007d99; font-size:.78rem; font-weight:800; letter-spacing:.08em; text-transform:uppercase; }
    .blog-meta { color:#6B6A75; font-size:.92rem; }
    .sidebar-box { background:#fff; border:1px solid #e3e8ef; border-radius:8px; padding:24px; box-shadow:0 12px 32px rgba(10,37,64,.05); }
    .tag-pill { display:inline-flex; margin:4px; padding:8px 12px; border-radius:999px; background:#eef5f9; color:#243b55; font-weight:700; font-size:.85rem; }
  </style>
</head>
<body>
  <?php include '_topbar.php'; ?>
  <?php
    $activePage = 'blog';
    $navFixed = false;
    include '_navbar.php';
  ?>

  <main>
    <section class="blog-hero">
      <div class="container" data-aos="fade-up">
        <div class="blog-kicker text-info mb-3">RRDA Insights</div>
        <h1>Practical research, data and business intelligence articles for Kenya.</h1>
        <p class="mt-4">We publish useful notes for NGOs, SMEs, research teams and companies that need better fieldwork, cleaner data and stronger business decisions.</p>
      </div>
    </section>

    <section class="py-6">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-8">
            <div class="row g-4">
              <?php foreach ($posts as $post): ?>
                <div class="col-md-6" data-aos="fade-up">
                  <a class="blog-card" href="blog-detail.php?post=<?= blog_e($post['slug']) ?>">
                    <img src="<?= blog_e($post['image']) ?>" alt="<?= blog_e($post['image_alt']) ?>">
                    <div class="blog-card-body">
                      <div class="blog-kicker"><?= blog_e($post['category']) ?></div>
                      <h3 class="h4 mt-2"><?= blog_e($post['title']) ?></h3>
                      <p class="blog-meta mb-3"><?= date('F j, Y', strtotime($post['publish_date'])) ?> by RRDA</p>
                      <p class="text-muted"><?= blog_e($post['excerpt']) ?></p>
                      <span class="fw-bold text-primary">Read article <i class="bi bi-arrow-right-short"></i></span>
                    </div>
                  </a>
                </div>
              <?php endforeach; ?>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="sidebar-box mb-4" data-aos="fade-left">
              <h3 class="mb-3">Recent Posts</h3>
              <?php foreach (array_slice($posts, 0, 5) as $post): ?>
                <a class="d-block border-bottom py-3 text-dark" href="blog-detail.php?post=<?= blog_e($post['slug']) ?>"><?= blog_e($post['title']) ?></a>
              <?php endforeach; ?>
            </div>
            <div class="sidebar-box mb-4" data-aos="fade-left">
              <h3 class="mb-3">Categories</h3>
              <?php foreach ($categories as $category): ?>
                <span class="tag-pill"><?= blog_e($category) ?></span>
              <?php endforeach; ?>
            </div>
            <div class="sidebar-box" data-aos="fade-left">
              <h3 class="mb-3">Topics</h3>
              <?php foreach (array_keys($tags) as $tag): ?>
                <span class="tag-pill"><?= blog_e($tag) ?></span>
              <?php endforeach; ?>
            </div>
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
