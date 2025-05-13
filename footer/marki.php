<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/MOTO/style/main.css">
    <title>Marki</title>
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
            <h1>Dostępne marki produktuw</h1>
        <p>
            Aby zapewnić Ci najwyzsczej jakośći i szeroki wybór częsci oraz motoryzacyjnych,
            wspólpracujemy wylącznie ze sprawdzonymi renomowanymi producentami.
            Ponizej znajdziesz listę dostępnych marek
        </p>
            <h2>Marki dostępne w MOTO.pl</h2>
        </div>
        <div class="marki">
            <div class="marki1">
            <p> LIQUI MOLY </p>
            <p>SHELL</p>
            <p>OPEL GM</p>
            <p>BREMBO</p>
            <p>Michelin</p>
            <p>Fulda</p>
        </div>
        <div class="marki2">
            <p>Bridgestone</p>
            <p>MAGNETI MARELLI</p>
            <p>BOSCH</p>
            <p>ALCA</p>
            <p>MAXGEAR</p>
            <p>K2</p>
        </div>
        <div class="marki3">
            <p>MANNOL</p>
            <p>GLAVISTA</p>
            <p>SAINT-GOBAIN</p>
            <p>IVECO</p>
            <p>VAN WEZEL</p>
            <p>BLIC</p>
        </div>
        </div>
        <div class="text1">
            <p>
                Z nami masz pewność, że otrzymujesz sprawdzone produkty od uznanych 
                producentów - wszystko dla Twojego bezpieczeństwa i komfortu.
            </p>
        </div>
    </div>
    
    <?php require_once "../blocks/footer.php" ?>
</body>
</html>