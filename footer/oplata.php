<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/MOTO/style/main.css">
    <title>Oplaty</title>
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
            <h1>Opłata za zamówienie</h1>
            <p>
                Dla Twojej wygody oferujemy różne metody platnosći.  
                Wybierz najdogodniejszą dla siebie opcję:
            </p>
        </div>
        <div class="oplata">
            <img src="../img/Visa_Brandmark_Blue_RGB.png" alt="">
            <img src="../img/Mastercard.png" alt="">
            <img src="../img/BLIK-LOGO-RGB.png" alt="">
        </div>
        <div class="text1">
            <p>Bezpieczne i szybkie płatności zapewniają naszym klientom komfort zakupów.</p>
        </div>
    </div>
    
    <?php require_once "../blocks/footer.php" ?>
</body>
</html>