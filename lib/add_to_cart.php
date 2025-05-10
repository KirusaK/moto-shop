<?php
session_start(); // ОБЯЗАТЕЛЬНО! MUST!

// Получаем данные Getting the data
$data = $_POST;

if ($data && isset($data['article'], $data['name'], $data['price'], $data['image'])) {
    $article = $data['article'];

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Если товар уже есть — увеличиваем количество If the product is already available, increase the quantity
    if (isset($_SESSION['cart'][$article])) {
        $_SESSION['cart'][$article]['quantity']++;
    } else {
        $_SESSION['cart'][$article] = [
            'name' => $data['name'],
            'price' => floatval(str_replace(',', '.', $data['price'])),
            'image' => $data['image'],
            'article' => $article,
            'quantity' => 1
        ];
    }

    http_response_code(200);
    echo json_encode(['status' => 'success']);
} else {
    http_response_code(400);
    echo json_encode(['status' => 'error']);
}
