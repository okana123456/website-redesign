<?php
include '_blog_posts.php';
$slug = $_GET['post'] ?? '';
$post = rrda_find_blog_post(rrda_visible_blog_posts($blogPosts), $slug);
if (!$post) {
    http_response_code(404);
}
function detail_e($value) { return htmlspecialchars($value, ENT_QUOTES, 'UTF-8'); }
function detail_word_count($value) {
    if (is_array($value)) {
        return array_sum(array_map('detail_word_count', $value));
    }
    return is_string($value) ? str_word_count(strip_tags($value)) : 0;
}
$domain = 'https://rudderdatanalytics.co.ke';
$isIndexable = $post && (($post['indexable'] ?? true) !== false);
$readingMinutes = $post ? max(3, (int) ceil(detail_word_count($post['content']) / 220)) : 0;
$structuredData = [];
if ($post) {
    $articleUrl = $domain . '/blog-detail.php?post=' . $post['slug'];
    $structuredData[] = [
        '@context' => 'https://schema.org',
        '@type' => 'BlogPosting',
        'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => $articleUrl],
        'headline' => $post['title'],
        'description' => $post['excerpt'],
        'image' => [$domain . '/' . $post['image']],
        'datePublished' => $post['publish_date'],
        'dateModified' => $post['date_modified'] ?? $post['publish_date'],
        'author' => ['@type' => 'Organization', 'name' => 'Rudder Research and Data Analytics LTD', 'url' => $domain . '/about.php'],
        'publisher' => [
            '@type' => 'Organization',
            'name' => 'Rudder Research and Data Analytics LTD',
            'url' => $domain,
            'logo' => ['@type' => 'ImageObject', 'url' => $domain . '/img/rudderlogo.png']
        ],
        'wordCount' => detail_word_count($post['content']),
        'articleSection' => $post['category'],
        'keywords' => implode(', ', $post['tags'] ?? [])
    ];
    $structuredData[] = [
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $domain . '/'],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Insights', 'item' => $domain . '/blog.php'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => $post['title'], 'item' => $articleUrl]
        ]
    ];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $post ? detail_e($post['meta_title']) : 'Blog Post Not Found | Rudder Research and Data Analytics LTD' ?></title>
  <meta name="description" content="<?= $post ? detail_e($post['meta_description']) : 'The requested Rudder Research and Data Analytics LTD blog post could not be found.' ?>">
  <meta name="robots" content="<?= $isIndexable ? 'index, follow, max-image-preview:large' : 'noindex, follow' ?>">
  <link rel="canonical" href="<?= $post ? detail_e($domain . '/blog-detail.php?post=' . $post['slug']) : detail_e($domain . '/blog.php') ?>">
  <?php if ($post): ?>
  <meta property="og:type" content="article">
  <meta property="og:title" content="<?= detail_e($post['title']) ?>">
  <meta property="og:description" content="<?= detail_e($post['excerpt']) ?>">
  <meta property="og:url" content="<?= detail_e($domain . '/blog-detail.php?post=' . $post['slug']) ?>">
  <meta property="og:image" content="<?= detail_e($domain . '/' . $post['image']) ?>">
  <meta property="og:image:width" content="1280">
  <meta property="og:image:height" content="720">
  <meta property="article:published_time" content="<?= detail_e($post['publish_date']) ?>">
  <meta property="article:modified_time" content="<?= detail_e($post['date_modified'] ?? $post['publish_date']) ?>">
  <?php endif; ?>
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
  <?php if ($structuredData): ?>
  <script type="application/ld+json"><?= json_encode($structuredData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?></script>
  <?php endif; ?>
  <style>
    body { background:#f7f9fc; color:#0A2540; }
    .article-hero { background:#0A2540; color:#fff; padding:80px 0 50px; }
    .article-hero h1 { color:#fff; font-size:clamp(2.1rem, 5vw, 4rem); line-height:1.08; max-width:920px; }
    .article-meta { color:rgba(255,255,255,.78); }
    .article-image { width:100%; max-height:520px; object-fit:cover; border-radius:8px; box-shadow:0 18px 46px rgba(10,37,64,.22); }
    .article-body { background:#fff; border:1px solid #e3e8ef; border-radius:8px; padding:36px; box-shadow:0 12px 32px rgba(10,37,64,.06); }
    .article-body p { color:#52657c; line-height:1.85; font-size:1.03rem; }
    .article-body h2 { margin-top:30px; color:#0A2540; }
    .article-body li { color:#52657c; line-height:1.75; margin-bottom:8px; }
    .article-byline { display:flex; flex-wrap:wrap; gap:10px 18px; color:#52657c; font-size:.94rem; }
    .article-byline a { color:#007d99; font-weight:700; }
    .article-faq { border-top:1px solid #e3e8ef; padding:20px 0; }
    .article-faq:last-child { padding-bottom:0; }
    .related-card { display:block; background:#fff; border:1px solid #e3e8ef; border-radius:8px; padding:20px; color:#0A2540; text-decoration:none; }
    .related-card:hover { border-color:var(--primary); color:#0A2540; }
  </style>
  <?php include_once __DIR__ . '/_meta_pixel.php'; ?>
</head>
<body>
  <?php include '_topbar.php'; ?>
  <?php
    $activePage = 'blog';
    $navFixed = false;
    include '_navbar.php';
  ?>

  <main>
    <?php if (!$post): ?>
      <section class="article-hero">
        <div class="container">
          <h1>Blog post not found</h1>
          <p class="article-meta mt-3">The article may have been moved or is not yet published.</p>
        </div>
      </section>
      <section class="py-6"><div class="container"><a class="btn btn-primary" href="blog.php">Return to Blog</a></div></section>
    <?php else: ?>
      <section class="article-hero">
        <div class="container" data-aos="fade-up">
          <nav class="article-meta mb-3" aria-label="Breadcrumb"><a class="text-white" href="index.php">Home</a> / <a class="text-white" href="blog.php">Insights</a> / <?= detail_e($post['category']) ?></nav>
          <p class="article-meta mb-3"><?= detail_e($post['category']) ?> | <?= date('F j, Y', strtotime($post['publish_date'])) ?></p>
          <h1><?= detail_e($post['title']) ?></h1>
          <p class="article-meta mt-4"><?= detail_e($post['excerpt']) ?></p>
        </div>
      </section>

      <section class="py-6">
        <div class="container">
          <div class="row g-5">
            <div class="col-lg-8">
              <img class="article-image mb-4" src="<?= detail_e($post['image']) ?>" alt="<?= detail_e($post['image_alt']) ?>" width="1280" height="720" fetchpriority="high" decoding="async" data-aos="fade-up">
              <article class="article-body" data-aos="fade-up">
                <div class="article-byline mb-4">
                  <span>By <a href="about.php">Rudder Research and Data Analytics LTD</a></span>
                  <span><?= $readingMinutes ?> minute read</span>
                  <span>Reviewed <?= date('F j, Y', strtotime($post['date_modified'] ?? $post['publish_date'])) ?></span>
                </div>
                <?php foreach ($post['content'] as $section): ?>
                  <h2><?= detail_e($section['h2']) ?></h2>
                  <?php foreach ($section['p'] as $paragraph): ?>
                    <p><?= detail_e($paragraph) ?></p>
                  <?php endforeach; ?>
                  <?php if (!empty($section['bullets'])): ?>
                    <ul>
                      <?php foreach ($section['bullets'] as $bullet): ?><li><?= detail_e($bullet) ?></li><?php endforeach; ?>
                    </ul>
                  <?php endif; ?>
                <?php endforeach; ?>
                <?php if (!empty($post['faqs'])): ?>
                  <h2>Frequently asked questions</h2>
                  <?php foreach ($post['faqs'] as $faq): ?>
                    <div class="article-faq">
                      <h3 class="h5"><?= detail_e($faq['question']) ?></h3>
                      <p class="mb-0"><?= detail_e($faq['answer']) ?></p>
                    </div>
                  <?php endforeach; ?>
                <?php endif; ?>
              </article>
            </div>

            <div class="col-lg-4">
              <div class="article-body mb-4" data-aos="fade-left">
                <h3>Related Services</h3>
                <?php foreach ($post['related'] as $related): ?>
                  <a class="related-card my-3" href="<?= detail_e($related['url']) ?>"><?= detail_e($related['title']) ?></a>
                <?php endforeach; ?>
              </div>
              <?php if (!empty($post['related_articles'])): ?>
              <div class="article-body mb-4" data-aos="fade-left">
                <h3>Related Articles</h3>
                <?php foreach ($post['related_articles'] as $related): ?>
                  <a class="related-card my-3" href="<?= detail_e($related['url']) ?>"><?= detail_e($related['title']) ?></a>
                <?php endforeach; ?>
              </div>
              <?php endif; ?>
              <div class="article-body" data-aos="fade-left">
                <h3>Need help with this?</h3>
                <p>Talk to Rudder Research and Data Analytics LTD about fieldwork, research, data analysis or business intelligence support in Kenya.</p>
                <a class="btn btn-primary" href="contact.php">Contact Rudder Research and Data Analytics LTD</a>
              </div>
            </div>
          </div>
        </div>
      </section>
    <?php endif; ?>
  </main>

  <?php include '_footer.php'; ?>
  <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>
  <?php include '_scripts.php'; ?>
  <script>AOS.init({ duration: 700, once: true, offset: 80 });</script>
</body>
</html>
