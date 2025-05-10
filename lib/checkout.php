<?php
session_start();
require_once "../lib/db.php";

if (!isset($_SESSION['user'])) {
    header('Location: /MOTO/login.php');
    exit;
}

$cart = $_SESSION['cart'] ?? [];

if (!empty($cart)) {
    $user_id = $_SESSION['user']['id'];

    foreach ($cart as $item) {
        $stmt = $pdo->prepare("INSERT INTO orders (users_id, parts_name, parts_article, parts_price, quantity, created_at)
                               VALUES (?, ?, ?, ?, ?, NOW())");
        $stmt->execute([
            $user_id,
            $item['name'],
            $item['article'],
            $item['price'],
            $item['quantity']
        ]);
    }

    $_SESSION['cart'] = []; // Очищаем корзину Emptying the shopping cart
    $message = "Dziękujemy za zamówienie! Twoje zamówienie zostało przyjęte.";
} else {
    $message = "Koszyk jest pusty. Nie można złożyć zamówienia.";
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zamówienie</title>
    <link rel="stylesheet" href="/MOTO/style/main.css">
</head>
<body>
    <div class="container">
        <h2><?= $message ?></h2>
        <p><a href="/MOTO/index.php">← Powrót na stronę główną</a></p>
    </div>
</body>
</html>
