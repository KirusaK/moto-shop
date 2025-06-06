<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klocki | MOTO.PL</title>
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
                <img src="../img/klocki.jpg" alt="">
            </div>
            <div class="dane">
                <h2>BREMBO P 23 070 Klocki hamulcowe</h2>
                <p>Numer artykułu: 345777</p>
                <h2>87,31 zl</h2>
                <form class="add-to-cart-form" method="post">
                    <input type="hidden" name="article" value="345777">
                    <input type="hidden" name="name" value="BREMBO P 23 070 Klocki hamulcowe">
                    <input type="hidden" name="price" value="87,31">
                    <input type="hidden" name="image" value="../img/klocki.jpg">

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
                    <li>BREMBO</li>
                    <li>Włoszech </li>
                    <li>10 kg</li>
                    <li>345777</li>
                </ul>
            </div>
            <div class="opis">
                <h4>Opis</h4>
                <p>Klocki hamulcowe Brembo P 23 070 
                    to wysokiej jakości produkt przeznaczony do samochodów marek Fiat, 
                    Alfa Romeo i Lancia. Gwarantują skuteczne i stabilne hamowanie, 
                    a dzięki zastosowaniu materiałów premium cechują się trwałością i cichą pracą. 
                    Wyprodukowane we Włoszech, spełniają rygorystyczne normy bezpieczeństwa.
                </p>
            </div>
        </div>
        <hr>
        <div class="text">
            <h4>Podobne produkty</h4>
        </div>
        <div class="podobne">
            <div class="block">
                <img src="../img/h-preview.jpg" alt="">
                <p>BREMBO COATED DISC LINE</p>
                <button type="button" onclick="location.href='dyski_brembo.php'">187,41 zl</button>
            </div>
            <div class="block">
                <img src="../img/h-preview1.jpg" alt="">
                <p>BREMBO P 78 020X Klocki hamulcowe</p>
                <button type="button" onclick="location.href='klocki_brembo.php'">187,41 zl</button>
            </div>
        </div>
    </div>

<?php require_once "../blocks/footer.php"; ?>

<script src="/MOTO/js/cart.js"></script>
