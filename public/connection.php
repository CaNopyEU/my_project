<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=ijdb;
    charset=utf8', 'ijdbuser', 'mypassword');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION);
    $output = 'Database connection established.';
} catch (PDOException $e) {
    $output = 'Unable to connet to the database server: ' . $e;
}

include __DIR__ . '/../templates/output.html.php';
