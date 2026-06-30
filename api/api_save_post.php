<?php
header('Content-Type: application/json');
require_once __DIR__ . '/config.php';

$data = json_decode(file_get_contents('php://input'), true);
if (empty($data['title']) || empty($data['image']) || empty($data['content'])) {
    http_response_code(400);
    echo json_encode(['error'=>'Missing fields']);
    exit;
}

$excerpt = substr(strip_tags($data['content']), 0, 100) . '…';
$stmt = $pdo->prepare("INSERT INTO posts (title, image, content, excerpt) VALUES (?, ?, ?, ?)");
$stmt->execute([$data['title'], $data['image'], $data['content'], $excerpt]);

echo json_encode(['success'=>true, 'id'=>$pdo->lastInsertId()]);
