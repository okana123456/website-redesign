<?php
include '_blog_posts.php';
$domain = 'https://rudderdatanalytics.co.ke';
$posts = rrda_visible_blog_posts($blogPosts);
header('Content-Type: application/xml; charset=UTF-8');
echo '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <url>
    <loc><?= htmlspecialchars($domain . '/blog.php', ENT_XML1, 'UTF-8') ?></loc>
    <lastmod><?= date('Y-m-d') ?></lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.75</priority>
  </url>
<?php foreach ($posts as $post): ?>
  <url>
    <loc><?= htmlspecialchars($domain . '/blog-detail.php?post=' . $post['slug'], ENT_XML1, 'UTF-8') ?></loc>
    <lastmod><?= htmlspecialchars($post['publish_date'], ENT_XML1, 'UTF-8') ?></lastmod>
    <changefreq>monthly</changefreq>
    <priority>0.72</priority>
  </url>
<?php endforeach; ?>
</urlset>
