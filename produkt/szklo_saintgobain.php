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
                <img src="../img/szyba2.jpg" alt="">
            </div>
            <div class="dane1">
                <h2>SAINT-GOBAIN Szyba tylna do AUDI A6, A3 </h2>
                <p>Nr artykułu: 243635</p>
                <h2>833,42 zl</h2>
                <form class="add-to-cart-form" method="post">
                    <input type="hidden" name="article" value="243635">
                    <input type="hidden" name="name" value="SAINT-GOBAIN Szyba tylna do AUDI A6, A3">
                    <input type="hidden" name="price" value="833,42">
                    <input type="hidden" name="image" value="../img/szyba2.jpg">

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
                    <li>SAINT-GOBAIN</li>
                    <li>Niemcy </li>
                    <li>10 kg</li>
                    <li>243635</li>
                </ul>
            </div>
            <div class="opis">
                <h4>Opis</h4>
                <p>Szyby tylne Saint-Gobain do samochodów Audi A6 i A3 są produkowane przez francuską firmę Saint-Gobain, 
                    która słynie z wysokiej jakości swoich produktów. 
                    Szyby te zapewniają bezpieczeństwo i trwałość, 
                    a także są wyposażone w dodatkowe funkcje, 
                    takie jak podgrzewanie czy zintegrowana antena.
                </p>
            </div>
        </div>
        <hr>
        <div class="text">
            <h4>Podobne produkty</h4>
        </div>
        <div class="podobne">
            <div class="block">
                <img src="../img/szyba1.jpg" alt="">
                <p>Szyba przednia odpowiednie do OPEL ASTRA </p>
                <button type="button" onclick="location.href='szklo_glavista.php'">720 zl</button>
            </div>
            <div class="block">
                <img src="../img/szyba3.jpg" alt="">
                <p>IVECO Szyba boczna </p>
                <button type="button" onclick="location.href='szklo_iveco.php'">339,80 zl</button>
            </div>
        </div>
    </div>

<?php require_once "../blocks/footer.php"; ?>

<script src="/MOTO/js/cart.js"></script>
