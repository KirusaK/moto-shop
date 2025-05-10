<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olej | MOTO.PL</title>
    <link rel="stylesheet" href="style/main.css">
</head>
<body>
    <div class="conteiner">
    <?php require_once "blocks/header2.php"; ?>
        <hr>

        <nav class="categories">
            <div class="dropdown">
                <button class="btn">Wszystkie kategorie</button>
                <div class="dropdown-content">
                    <a href="orig.php">Oryginalne części</a>
                    <a href="nieorig.php">Nieoryginalne części</a>
                    <a href="vaz.php">Części zamienne VAZ, GAZ, KAMAZ</a>
                    <a href="nadwozie.php">Części nadwozia</a>
                    <a href="to.php">Części dla TO</a>
                    <a href="szklo.php">Szkło samochodowe</a>
                    <a href="olej.php">Olej</a>
                    <a href="chemia.php">Chemia samochodowa</a>
                    <a href="opony.php">Opony</a>
                    <a href="akumulatory.php">Baterie</a>
                    <a href="zarowki.php">Lampy samochodowe</a>
                </div>
            </div>
            <button class="to"><a href="to.php">Części do TO</a></button>
            <button class="olej"><a href="olej.php">Olej</a></button>
            <button class="original"><a href="orig.php">Oryginalne części</a></button>
            <button class="nieoriginal"><a href="nieorig.php">Nieoryginalne części</a></button>
            <button class="zarowka"><a href="zarowki.php">Żarówki</a></button>
            <button class="bateria"><a href="akumulatory.php">Baterie</a></button>
            <button class="kosz"><a href="cart.php">Kosz</a></button>
            <img src="img/Shopping Cart.png" alt="">
        </nav>
    </div>

    <div class=" wrapper2 box">
        <div class="olej-text">
            <h2>Katalog olejuw</h2>
        </div>
        <div class="olej">
            <div class="blockk">
                <h3>Marka</h3>
                <input type="text" placeholder="Szybkie wyszukiwanie">
                <div class="char">
                    <input type="checkbox" class="ol">
                    <label for="text">LIQUI MOLY</label>
                    <input type="checkbox" class="ol">
                    <label for="text">SHELL</label>
                    <input type="checkbox" class="ol">
                    <label for="text">OPEL GM</label>
                </div>
            </div>
            <div class="block">     
                <img src="img/h-preview2.jpg" alt="">
                <h2>LIQUI MOLY</h2>
                <h6>LIQUI MOLY Top Tec 4100</h6>
                <p>Nr artykułu: 153789</p>
                <button type="button" onclick="location.href='produkt/olej_liquemoly.php'">315 zl</button>
            </div>
            <div class="block">
                <img src="img/h-preview3.jpg" alt="">
                <h2>SHELL</h2>
                <h6>SHELL Helix Ultra A5/B5</h6>
                <p>Nr artykułu: 153788</p>
                <button type="button" onclick="location.href='produkt/olej_shell.php'">197 zl</button>
            </div>
            <div class="block">
                <img src="img/h-preview4.jpg" alt="">
                <h2>OPEL GM</h2>
                <h6>OPEL GM</h6>
                <p>Nr artykułu: 153787</p>
                <button type="button" onclick="location.href='produkt/olej_gm.php'">130 zl</button>
            </div>
        </div>
    </div>

    <?php require_once "blocks/footer.php"; ?>
</body>
</html>