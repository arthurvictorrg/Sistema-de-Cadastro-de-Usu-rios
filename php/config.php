<?php
$host = 'localhost';
$dbname = 'cadastro_usuarios';
$user = 'root'; // ou seu usuário do MySQL
$password = ''; // ou sua senha do MySQL

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro ao conectar com o banco de dados: " . $e->getMessage());
}
?>