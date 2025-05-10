<?php
session_start();

// Проверка авторизации Authorization check
if (!isset($_SESSION['user'])) {
    header('Location: /MOTO/login.php');
    exit;
}

require_once 'lib/db.php';

// Получение ID пользователя Getting user ID
$userId = $_SESSION['user']['id'];

// Получение заказов пользователя Receiving user orders
$sql = 'SELECT * FROM orders WHERE users_id = ? ORDER BY created_at DESC';
$query = $pdo->prepare($sql);
$query->execute([$userId]);
$orders = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Historia zamówień</title>
    <link rel="stylesheet" href="/MOTO/style/main.css">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            border-bottom: 1px solid #ccc;
            text-align: center;
        }

        h2 {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php require_once "blocks/header2.php"; ?>

        <h2>Historia Twoich zamówień</h2>

        <?php if (empty($orders)): ?>
            <p>Brak zamówień.</p>
        <?php else: ?>
            <table>
                <thead>
                    <tr>
                        <th>Nazwa części</th>
                        <th>Nr artykułu</th>
                        <th>Cena</th>
                        <th>Ilość</th>
                        <th>Data zamówienia</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($orders as $order): ?>
                        <tr>
                            <td><?= htmlspecialchars($order['parts_name']) ?></td>
                            <td><?= htmlspecialchars($order['parts_article']) ?></td>
                            <td><?= number_format($order['parts_price'], 2) ?> zł</td>
                            <td><?= $order['quantity'] ?></td>
                            <td><?= $order['created_at'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>

        <p><a href="/MOTO/users.php">← Powrót do gabinetu</a></p>
    </div>

    <?php require_once "blocks/footer.php"; ?>
</body>
</html>
