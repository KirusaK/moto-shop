<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chemia | MOTO.PL</title>
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
            <h2>Chemia</h2>
        </div>
        <div class="olej">
            <div class="blockk">
                <h3>Marka</h3>
                <input type="text" placeholder="Szybkie wyszukiwanie">
                <div class="char">
                    <input type="checkbox" class="ol">
                    <label for="text">K2</label>
                    <input type="checkbox" class="ol">
                    <label for="text">MANNOL</label>
                    <input type="checkbox" class="ol">
                    <label for="text">LIQUI MOLY</label>
                </div>
            </div>
            <div class="block">     
                <img src="img/chemia1.jpg" alt="">
                <h2>K2</h2>
                <h6>K2 Czysciwo tworzyw sztucznych</h6>
                <p>Nr artykułu: 134163</p>
                <button type="button" onclick="location.href='produkt/chemia_k2.php'">12,52 zl</button>
            </div>
            <div class="block">
                <img src="img/chemia2.jpg" alt="">
                <h2>MANNOL</h2>
                <h6>MANNOL Felgen Cleaner</h6>
                <p>Nr artykułu: 123363</p>
                <button type="button" onclick="location.href='produkt/chemia_mannol.php'">17,85 zl</button>
            </div>
            <div class="block">
                <img src="img/chemia3.jpg" alt="">
                <h2>LIQUI MOLY</h2>
                <h6>LIQUI MOLY Ochrona podwozia </h6>
                <p>Nr artykułu: 241548</p>
                <button type="button" onclick="location.href='produkt/chemia_liquemoly.php'">26,34 zl</button>
            </div>
        </div>
    </div>

    <?php require_once "blocks/footer.php"; ?>
</body>
</html>