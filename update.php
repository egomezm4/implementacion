<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "UPDATE users SET name=:name, email=:email WHERE id=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id, 'name' => $name, 'email' => $email]);

    header("Location: index.php");
    exit;
}
?>
