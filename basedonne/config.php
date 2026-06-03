<?php

$databaseUrl = getenv('MYSQL_PUBLIC_URL');

if ($databaseUrl) {
    $parts = parse_url($databaseUrl);
    $host = $parts['host'] ?? '';
    $port = $parts['port'] ?? '3306';
    $dbname = ltrim($parts['path'] ?? '', '/');
    $user = $parts['user'] ?? '';
    $password = $parts['pass'] ?? '';
} else {
    $host = getenv('MYSQLHOST') ?: 'shortline.proxy.rlwy.net';
    $port = getenv('MYSQLPORT') ?: '43045';
    $dbname = getenv('MYSQLDATABASE') ?: 'railway';
    $user = getenv('MYSQLUSER') ?: 'root';
    $password = getenv('MYSQLPASSWORD') ?: 'GjuJdPzwOtsaPbRgNEjItijqatwNDezh';
}

$dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $e) {
    die('Erreur de connexion a la base de donnees. Veuillez reessayer plus tard.');
}
