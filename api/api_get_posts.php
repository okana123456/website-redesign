<?php
header('Content-Type: application/json');
require_once __DIR__ . '/config.php';

// Pull in every field we need, including the full `content`
$stmt = $pdo->query("
  SELECT
    id,
    title,
    image,
    content,
    excerpt,
    created_at
  FROM posts
  ORDER BY created_at DESC
");

// Fetch into an array of associative arrays
$posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Output as JSON
echo json_encode($posts);
