<?php

$host = getenv('MYSQL_HOST') ?: 'shortline.proxy.rlwy.net';
$port = getenv('MYSQL_PORT') ?: '3306';
$dbname = getenv('MYSQL_DATABASE') ?: 'railway';
$user = getenv('MYSQLUSER') ?: 'root';
$password = getenv('MYSQL_PASSWORD') ?: 'GjuJdPzwOtsaPbRgNEjItijqatwNDezh';


$dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $e) {
    die('Erreur de connexion a la base de donnees. Veuillez reessayer plus tard.');
}
