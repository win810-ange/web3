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
    ]);
} catch (PDOException $e) {
    die('Erreur de connexion a la base de donnees. Veuillez reessayer plus tard.');
}
