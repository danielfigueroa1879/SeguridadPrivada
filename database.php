<?php  
$server = 'localhost';
$username = 'drhrquzi_daniel';
$password = 'Acua4040_';
$database = 'drhrquzi_logindb';



try {
    $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Error de conexión: ' . $e->getMessage());
}


?>
