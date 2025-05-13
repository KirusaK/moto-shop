<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opony | MOTO.PL</title>
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
                <img src="../img/shina.webp" alt="">
            </div>
            <div class="dane">
                <h2>Michelin E Primacy 225/45R17 94 W XL</h2>
                <p>Numer artykułu: 583485</p>
                <h2>493 zl</h2>
                <form class="add-to-cart-form" method="post">
                    <input type="hidden" name="article" value="583485">
                    <input type="hidden" name="name" value="Michelin E Primacy 225/45R17 94 W XL">
                    <input type="hidden" name="price" value="493">
                    <input type="hidden" name="image" value="../img/shina.webp">

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
                    <li>Michelin</li>
                    <li>Niemcy </li>
                    <li>15,7 kg</li>
                    <li>583485</li>
                </ul>
            </div>
            <div class="opis">
                <h4>Opis</h4>
                <p>Opony Michelin e.Primacy 225/45R17 94W XL 
                    to letnie opony klasy premium, 
                    zaprojektowane z myślą o oszczędności paliwa i wysokim komforcie jazdy. 
                    Dzięki niskim oporom toczenia i doskonałej przyczepności na mokrej nawierzchni zapewniają 
                    bezpieczeństwo oraz mniejsze zużycie energii. 
                    Produkowane są w Europie, m.in. we Francji, Niemczech i Hiszpanii.
                </p>
            </div>
        </div>
        <hr>
        <div class="text">
            <h4>Podobne produkty</h4>
        </div>
        <div class="podobne">
            <div class="block">
                <img src="../img/shina2.webp" alt="">
                <p>Fulda EcoControl HP2</p>
                <button type="button" onclick="location.href='opony_fulda.php'">300 zl</button>
            </div>
            <div class="block">
                <img src="../img/shina3.webp" alt="">
                <p>Bridgestone Turanza T005 DriveGuard</p>
                <button type="button" onclick="location.href='opony_bridgeston.php'">499 zl</button>
            </div>
        </div>
    </div>

<?php require_once "../blocks/footer.php"; ?>

<script src="/MOTO/js/cart.js"></script>
