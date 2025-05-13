<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaz | MOTO.PL</title>
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
                <img src="../img/vaz1.jpg" alt="">
            </div>
            <div class="dane1">
                <h2>PRZERYWACZ KIERUNKOWSKAZÓW ZIŁ URAL GAZ PAZ</h2>
                <p>Numer artykułu: 123544</p>
                <h2>50 zl</h2>
                <form class="add-to-cart-form" method="post">
                    <input type="hidden" name="article" value="123544">
                    <input type="hidden" name="name" value="PRZERYWACZ KIERUNKOWSKAZÓW ZIŁ URAL GAZ PAZ">
                    <input type="hidden" name="price" value="50">
                    <input type="hidden" name="image" value="../img/vaz1.jpg">

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
                    <li>...</li>
                    <li>Rosja </li>
                    <li>1 kg</li>
                    <li>123544</li>
                </ul>
            </div>
            <div class="opis">
                <h4>Opis</h4>
                <p>rzerywacz kierunkowskazów do pojazdów ZiŁ, 
                    Ural, GAZ oraz PAZ jest produkowany w Rosji. 
                    Jest to część stosowana w różnych pojazdach ciężarowych i autobusach, 
                    zapewniająca niezawodność w działaniu systemu kierunkowskazów.
                </p>
            </div>
        </div>
        <hr>
        <div class="text">
            <h4>Podobne produkty</h4>
        </div>
        <div class="podobne">
            <div class="block">
                <img src="../img/vaz2.jpg" alt="">
                <p>REFLEKTOR PRZEDNI LEWY SOCZEWKA KAMAZ EURO</p>
                <button type="button" onclick="location.href='vaz2.php'">700 zl</button>
            </div>
            <div class="block">
                <img src="../img/vaz3.jpg" alt="">
                <p>SIŁOWNIK AMORTYZATOR ZAWIESZENIA KABINY KAMAZ</p>
                <button type="button" onclick="location.href='vaz3.php'">1200 zl</button>
            </div>
        </div>
    </div>

<?php require_once "../blocks/footer.php"; ?>

<script src="/MOTO/js/cart.js"></script>
