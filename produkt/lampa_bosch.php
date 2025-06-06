<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lampa | MOTO.PL</title>
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
                <img src="../img/zarowka2.jpg" alt="">
            </div>
            <div class="dane1">
                <h2>BOSCH Żarówka, reflektor dalekosiężny </h2>
                <p>Nr artykułu: 685827</p>
                <h2>7,29 zl</h2>
                <form class="add-to-cart-form" method="post">
                    <input type="hidden" name="article" value="685827">
                    <input type="hidden" name="name" value="BOSCH Żarówka, reflektor dalekosiężny">
                    <input type="hidden" name="price" value="7,29">
                    <input type="hidden" name="image" value="../img/zarowka2.jpg">

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
                    <li>BOSCH</li>
                    <li>Niemcy </li>
                    <li>0,1 kg</li>
                    <li>685827</li>
                </ul>
            </div>
            <div class="opis">
                <h4>Opis</h4>
                <p>Żarówki BOSCH do reflektorów dalekosiężnych to produkty najwyższej jakości, 
                    które zapewniają doskonałą widoczność i bezpieczeństwo na drodze. 
                    Dzięki precyzyjnemu wykonaniu i zastosowaniu nowoczesnych technologii, 
                    oferują długowieczność oraz efektywne oświetlenie, 
                    nawet w trudnych warunkach atmosferycznych.
                </p>
            </div>
        </div>
        <hr>
        <div class="text">
            <h4>Podobne produkty</h4>
        </div>
        <div class="podobne">
            <div class="block">
                <img src="../img/zarowka1.jpg" alt="">
                <p>MAGNETI MARELLI Żarówka, reflektor dalekosiężny</p>
                <button type="button" onclick="location.href='lampa_magneti.php'">7,75 zl</button>
            </div>
            <div class="block">
                <img src="../img/zarowka3.jpg" alt="">
                <p>ALCA Żarówka, reflektor dalekosiężny</p>
                <button type="button" onclick="location.href='lampa_alca.php'">10,05 zl</button>
            </div>
        </div>
    </div>

<?php require_once "../blocks/footer.php"; ?>

<script src="/MOTO/js/cart.js"></script>
