<?php
include 'conexion.php';

$sql = "SELECT * FROM users";
$stmt = $pdo->query($sql);
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
