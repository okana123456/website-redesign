<?php
header('Content-Type: application/json');
require_once __DIR__ . '/config.php';

$data = json_decode(file_get_contents('php://input'), true);
if (empty($data['post_id']) || empty($data['text'])) {
    http_response_code(400);
    echo json_encode(['error'=>'Missing fields']);
    exit;
}

$name = trim($data['name']) ?: 'Anon';
$stmt = $pdo->prepare("INSERT INTO comments (post_id, name, text) VALUES (?, ?, ?)");
$stmt->execute([$data['post_id'], $name, $data['text']]);

echo json_encode(['success'=>true]);
