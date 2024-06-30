<?php
$host = 'localhost'; 
$db   = 'haftalik_ders_programi';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    
    echo "Veritabanı bağlantısı başarılı.";
} catch (\PDOException $e) {
    echo "Bağlantı hatası: " . $e->getMessage();
}
?>