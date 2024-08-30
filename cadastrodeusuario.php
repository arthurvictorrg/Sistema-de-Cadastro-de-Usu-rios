<?php

    include_once('conexao.php');

    $nome_usuario=$_POST('nome_usuario');
    $email=$_POST('email_usuario');
    $senha=$_POST('senha_usuario');

    $sql = "INSERT INTO usuarios(nome_usuario,email_usuario,senha_usuario) VALUES ('nome_usuario','email','senha')";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nome_usuario'$nome_usuario);
    $stmt->bindParam(':email_usuario'$email_usuario);
    $stmt->bindParam(':senha_usuario'$senha_usuario);
    $stmt->execute();
