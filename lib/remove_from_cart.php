<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['article'])) {
    $article = $_POST['article'];

    if (isset($_SESSION['cart'][$article])) {
        unset($_SESSION['cart'][$article]);
    }

    // После удаления можно перенаправить назад Once deleted, you can be redirected back
    header("Location: /MOTO/cart.php");
    exit();
}
