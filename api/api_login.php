<?php
header('Content-Type: application/json');
require_once __DIR__ . '/config.php';

$data = json_decode(file_get_contents('php://input'), true);
if (empty($data['username']) || empty($data['password'])) {
    http_response_code(400);
    echo json_encode(['error'=>'Missing credentials']);
    exit;
}

$hash = hash('sha256', $data['username'] . ':' . $data['password']);
$stmt = $pdo->prepare("SELECT 1 FROM admins WHERE username = ? AND password_hash = ?");
$stmt->execute([$data['username'], $hash]);
if ($stmt->fetch()) {
    echo json_encode(['success'=>true]);
} else {
    http_response_code(401);
    echo json_encode(['error'=>'Invalid credentials']);
}
