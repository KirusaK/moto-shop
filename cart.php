<?php
session_start();
$cart = $_SESSION['cart'] ?? [];
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Koszyk | MOTO.PL</title>
    <link rel="stylesheet" href="/MOTO/style/main.css"> <!-- подставь правильный путь -->
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

        img {
            width: 100px;
            height: auto;
        }

        h2 {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php require_once "blocks/header2.php"; ?> <!-- Подключаю хедер Connecting the header -->
        <h2>Twój koszyk</h2>

        <?php if (empty($cart)): ?>
            <p>Koszyk jest pusty.</p>
        <?php else: ?>
            <table>
                <thead>
                    <tr>
                        <th>Zdjęcie</th>
                        <th>Nazwa</th>
                        <th>Nr artykułu</th>
                        <th>Cena</th>
                        <th>Ilość</th>
                        <th>Suma</th>
                        <th>Usuń</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $total = 0;
                    foreach ($cart as $item):
                        $sum = $item['price'] * $item['quantity'];
                        $total += $sum;
                    ?>
                        <tr>
                            <td><img src="<?= htmlspecialchars($item['image']) ?>" alt="produkt"></td>
                            <td><?= htmlspecialchars($item['name']) ?></td>
                            <td><?= htmlspecialchars($item['article']) ?></td>
                            <td><?= number_format($item['price'], 2) ?> zł</td>
                            <td><?= $item['quantity'] ?></td>
                            <td><?= number_format($sum, 2) ?> zł</td>
                            <td>
                                <form class="remove-from-cart-form" method="post" action="lib/remove_from_cart.php">
                                    <input type="hidden" name="article" value="<?= htmlspecialchars($item['article']) ?>">
                                    <button type="submit">Usuń</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="5"><strong>Łącznie:</strong></td>
                        <td><strong><?= number_format($total, 2) ?> zł</strong></td>
                    </tr>
                </tfoot>
            </table>
                <?php if (isset($_COOKIE['email'])): ?>
                    <form method="post" action="lib/checkout.php">
                        <button type="submit">Zamów teraz</button>
                    </form>
                <?php else: ?>
                    <p><em>Musisz się <a href="/MOTO/login.php">zalogować</a>, aby złożyć zamówienie.</em></p>
                <?php endif; ?>
        <?php endif; ?>

        <p><a href="/MOTO/index.php">← Kontynuuj zakupy</a></p>
    </div>

    <?php require_once "blocks/footer.php"; ?>
</body>
</html>
