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
                <img src="../img/shina3.webp" alt="">
            </div>
            <div class="dane">
                <h2>Bridgestone Turanza T005 DriveGuard</h2>
                <p>Nr artykułu: 243328</p>
                <h2>499 zl</h2>
                <form class="add-to-cart-form" method="post">
                    <input type="hidden" name="article" value="243328">
                    <input type="hidden" name="name" value="Bridgestone Turanza T005 DriveGuard">
                    <input type="hidden" name="price" value="499">
                    <input type="hidden" name="image" value="../img/shina3.webp">

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
                    <li>Bridgestone</li>
                    <li>Polska </li>
                    <li>10 kg</li>
                    <li>243328</li>
                </ul>
            </div>
            <div class="opis">
                <h4>Opis</h4>
                <p>Opony Bridgestone Turanza T005 DriveGuard to letnie opony klasy premium, 
                    wyposażone w technologię Run Flat, 
                    która umożliwia kontynuowanie jazdy nawet po utracie ciśnienia. 
                    Zapewniają doskonałą przyczepność na mokrej nawierzchni, 
                    krótką drogę hamowania oraz wytrzymałość, 
                    a także zwiększone bezpieczeństwo w razie awarii.
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
                <img src="../img/shina.webp" alt="">
                <p>Michelin E Primacy 225/45R17 94 W XL</p>
                <button type="button" onclick="location.href='opony_michelin.php'">493 zl</button>
            </div>
        </div>
    </div>

<?php require_once "../blocks/footer.php"; ?>

<script src="/MOTO/js/cart.js"></script>
