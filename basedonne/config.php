<?php
// config.php - Database configuration

// Railway injects these environment variables automatically
$host     = getenv('MYSQLHOST')     ?: ($_ENV['MYSQLHOST']     ?? 'localhost');
$port     = getenv('MYSQLPORT')     ?: ($_ENV['MYSQLPORT']     ?? '3306');
$dbname   = getenv('MYSQLDATABASE') ?: ($_ENV['MYSQLDATABASE'] ?? 'railway');
$user     = getenv('MYSQLUSER')     ?: ($_ENV['MYSQLUSER']     ?? 'root');
$password = getenv('MYSQLPASSWORD') ?: ($_ENV['MYSQLPASSWORD'] ?? '');

$dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
    PDO::ATTR_TIMEOUT            => 5,
];

try {
    $pdo = new PDO($dsn, $user, $password, $options);
} catch (PDOException $e) {
    error_log('DB connection error: ' . $e->getMessage());
    http_response_code(500);
    die('Erreur de connexion à la base de données.');
}
