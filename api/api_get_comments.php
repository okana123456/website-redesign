<?php
header('Content-Type: application/json');
require_once __DIR__ . '/config.php';

$post_id = isset($_GET['post_id']) ? (int)$_GET['post_id'] : 0;
$stmt = $pdo->prepare("SELECT name, text, created_at FROM comments WHERE post_id = ? ORDER BY created_at ASC");
$stmt->execute([$post_id]);
$comments = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($comments);
