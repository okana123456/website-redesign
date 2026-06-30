<?php

$pdo = new PDO(
    'mysql:host=localhost;dbname=REPLACE_WITH_DATABASE_NAME;charset=utf8mb4',
    'REPLACE_WITH_DATABASE_USER',
    'REPLACE_WITH_DATABASE_PASSWORD',
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]
);
