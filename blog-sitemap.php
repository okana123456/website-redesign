<?php
include '_blog_posts.php';
$domain = 'https://rudderdatanalytics.co.ke';
$posts = rrda_indexable_blog_posts($blogPosts);
$blogLastModified = $posts ? max(array_column($posts, 'publish_date')) : date('Y-m-d');
header('Content-Type: application/xml; charset=UTF-8');
echo '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">
  <url>
    <loc><?= htmlspecialchars($domain . '/blog.php', ENT_XML1, 'UTF-8') ?></loc>
    <lastmod><?= htmlspecialchars($blogLastModified, ENT_XML1, 'UTF-8') ?></lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.75</priority>
  </url>
<?php foreach ($posts as $post): ?>
  <url>
    <loc><?= htmlspecialchars($domain . '/blog-detail.php?post=' . $post['slug'], ENT_XML1, 'UTF-8') ?></loc>
    <lastmod><?= htmlspecialchars($post['publish_date'], ENT_XML1, 'UTF-8') ?></lastmod>
    <changefreq>monthly</changefreq>
    <priority>0.72</priority>
    <image:image>
      <image:loc><?= htmlspecialchars($domain . '/' . $post['image'], ENT_XML1, 'UTF-8') ?></image:loc>
      <image:title><?= htmlspecialchars($post['image_alt'], ENT_XML1, 'UTF-8') ?></image:title>
    </image:image>
  </url>
<?php endforeach; ?>
</urlset>
