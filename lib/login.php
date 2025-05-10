<?php
session_start(); // ОБЯЗАТЕЛЬНО! MUST!

$email = trim(filter_var($_POST['email'], FILTER_SANITIZE_SPECIAL_CHARS));
$password = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));

if (strlen($email) < 5 || !str_contains($email, '@')) {
    echo "Email error";
    exit;
}

if (strlen($password) < 10) {
    echo "Hasło error";
    exit;
}

// Хешируем пароль Hashing the password
$salt = 'gj58(fjoaj48&[;rjal%ehfahw4728$^&C*';
$hashedPassword = md5($salt . $password);

// Подключение к БД Database connection
require "db.php";

// Проверка пользователя User verification
$sql = 'SELECT id, email FROM users WHERE email = ? AND password = ?';
$query = $pdo->prepare($sql);
$query->execute([$email, $hashedPassword]);

$user = $query->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    echo "Nie ma takiego użytkownika!";
} else {
    // Сохраняем в cookie (если хочешь) Save it as a cookie (if you want)
    setcookie('email', $email, time() + 3600 * 24 * 30, "/");

    // Сохраняем в сессию Save to session
    $_SESSION['user'] = [
        'id' => $user['id'],
        'email' => $user['email']
    ];

    // Перенаправление Redirection
    header('Location: ../users.php');
    exit;
}
