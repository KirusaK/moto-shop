<?php
    $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_SPECIAL_CHARS));
    $password = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));

    if (strlen($email) < 5 && !str_contains($email,'@')) {
        echo "Email error";
        exit;
    }

    if (strlen($password) < 10) {
        echo "Haslo error";
        exit;
    }

// Password 

$salt = 'gj58(fjoaj48&[;rjal%ehfahw4728$^&C*';
$password = md5($salt.$password);

// DB 

require "db.php";

//INSERT

$sql = 'INSERT INTO users(email,password) VALUES (?, ?)';
$query = $pdo->prepare($sql);
$query->execute([$email, $password]);

header('Location: ../login.php');