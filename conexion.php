<?php
$host = 'localhost';
$dbname = 'crud_example';
$username = 'tu_usuario_mysql';
$password = 'tu_contraseña_mysql';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error al conectar a la base de datos: " . $e->getMessage());
}
?>
