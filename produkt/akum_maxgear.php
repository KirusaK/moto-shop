<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olej | MOTO.PL</title>
    <link rel="stylesheet" href="../style/main.css">
</head>
<body>
    <div class="conteiner">
    <?php require_once "../blocks/header.php"; ?>
        <hr>

        <nav class="categories">
            <div class="dropdown">
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
            <button class="to"><a href="../to.php">Części do TO</a></button>
            <button class="olej"><a href="../olej.php">Olej</a></button>
            <button class="original"><a href="../orig.php">Oryginalne części</a></button>
            <button class="nieoriginal"><a href="../nieorig.php">Nieoryginalne części</a></button>
            <button class="zarowka"><a href="../zarowki.php">Żarówki</a></button>
            <button class="bateria"><a href="../akumulatory.php">Baterie</a></button>
            <button class="kosz"><a href="../cart.php">Kosz</a></button>
            <img src="../img/Shopping Cart.png" alt="">
        </nav>
    </div>

    <div class="wrapper char">
        <div class="towar">
            <div class="foto">
                <img src="../img/akumulator1.png" alt="">
            </div>
            <div class="dane">
                <h2>MAXGEAR Akumulator </h2>
                <p>Nr artykułu: 366352</p>
                <h2>450,53 zl</h2>
                <form class="add-to-cart-form" method="post">
                    <input type="hidden" name="article" value="366352">
                    <input type="hidden" name="name" value="MAXGEAR Akumulator">
                    <input type="hidden" name="price" value="450,53">
                    <input type="hidden" name="image" value="../img/akumulator1.png">

                    <button type="submit">Dodaj do koszyka</button>
                </form>
            </div>
        </div>
        <hr>
        <div class="op">
            <div class="charakterystyka">
                <ul>
                    <li><h4>Charakterystyka</h4></li>
                    <li>Producent</li>
                    <li>Kraj</li>
                    <li>Waga</li>
                    <li>Nr artykułu:</li>
                </ul>
            </div>
            <div class="informacja">
                <ul>
                    <li>MAXGEAR</li>
                    <li>Polska </li>
                    <li>17 kg</li>
                    <li>366352</li>
                </ul>
            </div>
            <div class="opis">
                <h4>Opis</h4>
                <p>Akumulatory MAXGEAR to produkty wysokiej jakości, 
                    które charakteryzują się dobrą wydajnością i trwałością. 
                    Dzięki szerokiej ofercie pojemności, 
                    od 45 Ah do 110 Ah, akumulatory te są idealne do różnych modeli samochodów, 
                    zapewniając niezawodność i długą żywotność.
                </p>
            </div>
        </div>
        <hr>
        <div class="text">
            <h4>Podobne produkty</h4>
        </div>
        <div class="podobne">
            <div class="block">
                <img src="../img/akumulator2.jpg" alt="">
                <p>MAXGEAR Akumulator</p>
                <button type="button" onclick="location.href='akum_maxgear2.php'">460,28 zl</button>
            </div>
            <div class="block">
                <img src="../img/akumulator3.jpg" alt="">
                <p>BOSCH S3 002 Akumulato</p>
                <button type="button" onclick="location.href='akum_bosch.php'">280,52 zl</button>
            </div>
        </div>
    </div>

<?php require_once "../blocks/footer.php"; ?>

<script src="/MOTO/js/cart.js"></script>
