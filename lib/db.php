<?php
    // Подключение к базе данных Database connection     
    $pdo = new PDO('mysql:host=localhost;dbname=website_moto_pl;port=3306', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);