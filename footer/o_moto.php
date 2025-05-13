<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/MOTO/style/main.css">
    <title>Co to jest MOTO</title>
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
            <h1>Co to jest Moto.pl</h1>
            <p>
                Moto.pl to nowoczesna platforma internetowa, stworzona z myślną 
                o kierowcach i pasjonatach motoryzacji. Oferuje szeroki wybór czę-
                ści samochodowych zarówno oryginalnych, jak i zamienników 
                w konkurencyjnych cenach.
            </p>
            <br>
            <p>
                Naszą misją jest uproszczenia zakupu części samochodowych.
                Oferujemy intuicyjną wyszukiwarkę pozwalającą na odnalezienie 
                produktów po nazwie lub numerze VIN, co znacząco skraca czas 
                potrzebny na znalezienie odpowiedniego komponenta.
            </p>
            <br>
        </div>
        <div class="text2">
            <p>
                1. Szeroka gama produktów do róznych marek i modeli <br>
                2. Bezpieczne płatności i szybka realizacja zamówień <br>
                3. Profesjonalna obsługa klienta  
            </p>
        </div>
    </div>
    
    <?php require_once "../blocks/footer.php" ?>
</body>
</html>