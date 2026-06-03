<?php

$host = 'shortline.proxy.rlwy.net';
$port = '3306';
$dbname = 'railway';
$user = 'root';
$password = 'GjuJdPzwOtsaPbRgNEjItijqatwNDezh';


$dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        1009 => true,
        1014 => false,
    ]);
} catch (PDOException $e) {
    die('Erreur de connexion : ' . $e->getMessage());
}
