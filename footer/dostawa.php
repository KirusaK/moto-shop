<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/MOTO/style/main.css">
    <title>Dostawa</title>
</head>
<body>
    <?php require_once "../blocks/header.php" ?>

    <div class="conteiner">
        <nav class="categories">
            <div class="dropdown-omoto">
                <button class="btn">Wszystkie kategorie</button>
                <div class="dropdown-content">
                    <a href="../orig.php">Oryginalne części</a>
                    <a href="../nieorig.php">Nieoryginalne części</a>
                    <a href="../vaz.php">Części zamienne VAZ, GAZ, KAMAZ</a>
                    <a href="../nadwozie.php">Części nadwozia</a>
                    <a href="../to.php">Części dla TO</a>
                    <a href="../szklo.php">Szkło samochodowe</a>
                    <a href="../olej.php">Olej</a>
                    <a href="../chemia.php">Chemia samochodowa</a>
                    <a href="../opony.php">Opony</a>
                    <a href="../akumulatory.php">Baterie</a>
                    <a href="../zarowki.php">Lampy samochodowe</a>
                </div>
            </div>
            <div class="omoto">
                <button class="to"><a href="../to.php">Części do TO</a></button>
                <button class="olej"><a href="../olej.php">Olej</a></button>
                <button class="original"><a href="../orig.php">Oryginalne części</a></button>
                <button class="nieoriginal"><a href="../nieorig.php">Nieoryginalne części</a></button>
                <button class="zarowka"><a href="../zarowki.php">Żarówki</a></button>
                <button class="bateria"><a href="../akumulatory.php">Baterie</a></button>
                <button class="kosz"><a href="../cart.php">Kosz</a></button>
                <img src="../img/Shopping Cart.png" alt="">
            </div>
        </nav>
    </div>

    <div class="wrapper2">
        <div class="text1">
            <h1>Dostępne metody dostawy</h1>
            <p>
                Aby twoje zamówienie dotarło szybko i bezpiecznie,
                oferujemy rózne opcje dostawy:
            </p>
        </div>
        <div class="dostawa1">
            <img src="../img/InPost_logo.svg" alt="">
            <p><b>Paczkomat InPost</b></p>
        </div>
        <div class="dostawa2">
            <img src="../img/car.png" alt="">
            <p><b>Kurier InPost</b></p>
        </div>
        <div class="dostawa3">
            <img src="../img/home.png" alt="">
            <p><b>Dostawa do domu</b></p>
        </div>
        <div class="text1">
            <p>Zawsze możesz liczyć na sprawną realizację
                i pełne bezpieczeństwo przesyłki.
            </p>
        </div>
    </div>
    
    <?php require_once "../blocks/footer.php" ?>
</body>
</html>