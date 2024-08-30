<?php

    try {
        $conn = new PDO('mysql:host=localhost;dbname=sistema_usuarios','root','')
    } catch (PDOException $e) {
        $e->getMessage();
    }