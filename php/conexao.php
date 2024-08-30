<?php
try {
    $conn = new PDO('mysql:host=localhost;dbname=sistema_usuarios', 'root', '');
} catch (PDOException $e) {
    die("Erro ao conectar com o banco de dados: " . $e->getMessage());
}
?>