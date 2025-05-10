<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOTO.PL | Home</title>
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

    <div class="wrapper">
       <div class="fone">
        <img src="img/fone27.jpg" alt="">
        </div>
        <div class="present">
            <h1>Oryginalne oleje silnikowe z rabatem <span class="foneprocent">15%</span></h1>
            <p>Promocja obowiązuje od 1 do 30 czerwca 2025 r.</p>
            <img src="img/image_862.png" alt="">
        </div>

        <div class="nav">
            <div class="block">
                <button type="button" onclick="location.href='orig.php'"><img src="img/line_icons.png" alt=""><h4>Oryginalne części</h4><p>24 produkty</p></button>
            </div>
            <div class="block">
                <button type="button" onclick="location.href='nieorig.php'"><img src="img/line_icons2.png" alt=""><h4>Nieoryginalne części</h4><p>3 produkty</p></button>
            </div>
            <div class="block">
                <button type="button" onclick="location.href='vaz.php'"><img src="img/line_icons3.png" alt=""><h4>Części zamienne VAZ, GAZ, KAMAZ</h4><p>3 produkty</p></button>
            </div>
            <div class="block">
                <button type="button" onclick="location.href='nadwozie.php'"><img src="img/line_icons4.png" alt=""><h4>Części nadwozia</h4><p>3 produkty</p></button>
            </div>
            <div class="block">
                <button type="button" onclick="location.href='to.php'"><img src="img/line_icons5.png" alt=""><h4>Części dla TO</h4><p>27 produkty</p></button>
            </div>
            <div class="block">
                <button type="button"  onclick="location.href='szklo.php'"><img src="img/line_icons6.png" alt=""><h4>Szkło samochodowe</h4><p>3 produkty</p></button>
            </div>
            <div class="block">
                <button type="button" onclick="location.href='olej.php'"><img src="img/line_icons7.png" alt=""><h4>Olej</h4><p>3 produkty</p></button>
            </div>
            <div class="block">
                <button type="button" onclick="location.href='chemia.php'"><img src="img/line_icons8.png" alt=""><h4>Chemia samochodowa</h4><p>3 produkty</p></button>
            </div>
            <div class="block">
                <button type="button" onclick="location.href='opony.php'"><img src="img/line_icons9.png" alt=""><h4>Opony</h4><p>3 produkty</p></button>
            </div>
            <div class="block">
                <button type="button" onclick="location.href='akumulatory.php'"><img src="img/line_icons10.png" alt=""><h4>Baterie</h4><p>3 produkty</p></button>
            </div>
            <div class="block">
                <button type="button" onclick="location.href='zarowki.php'"><img src="img/line_icons11.png" alt=""><h4>Lampy samochodowe</h4><p>3 produkty</p></button>
            </div>
            
        </div>
    </div>

    <div class="conteiner">
        <div class="div1">
            <div class="olej">
                
            </div>
            <div class="mobil">
                <img src="img/cards.png" alt="">
                <button type="button" onclick="location.href='produkt/olej_liquemoly.php'"><img src="img/h-preview2.jpg" alt=""><p>Nr artykułu: 153789</p><h4>LIQUI MOLY Top Tec 4100 </h4><h1>315 zl</h1></button>
                <button type="button" onclick="location.href='produkt/olej_shell.php'"><img src="img/h-preview3.jpg" alt=""><p>Nr artykułu: 153788</p><h4>SHELL Helix Ultra A5/B5 </h4><h1>197 zl</h1></button>
                <button type="button" onclick="location.href='produkt/olej_gm.php'"><img src="img/h-preview4.jpg" alt=""><p>Nr artykułu: 153787</p><h4>OPEL GM </h4><h1>130 zl</h1></button>
            </div>
        </div>
        <div class="reklama">
            <div class="block">
                <img src="img/mini-banners_cleanup.png" alt="">
                <h3>Oleje silnikowe Genesis</h3>
                <button type="button" onclick="location.href='olej.php'">Przejdź</button>
            </div>
            <div class="block">
                <img src="img/mini-banners1_cleanup.png" alt="">
                <h3>Opony zimowe są tańsze </h3>
                <button type="button" onclick="location.href='opony.php'">Wybrać</button>
            </div>
            <div class="block">
                <img src="img/mini-banners2_cleanup.png" alt="">
                <h3>Części do TO</h3>
                <button type="button" onclick="location.href='to.php'">Oglądaj</button>
            </div>
        </div>

        <div class="polecenie">
            <h2>Polecane</h2>
            <div class="objects1">
                <button type="button" onclick="location.href='produkt/olej_gm.php'"><img src="img/h-preview4.jpg" alt=""><p>Nr artykułu: 153789</p><h4>OPEL GM</h4><h1>130 zl</h1></button>
                <button type="button" onclick="location.href='produkt/dyski_brembo.php'"><img src="img/h-preview.jpg" alt=""><p>Numer artykułu: 759837</p><h4>BREMBO COATED DISC LINE</h4><h1>254,41 zl</h1></button>
                <button type="button" onclick="location.href='produkt/klocki_brembo.php'"><img src="img/h-preview1.jpg" alt=""><p>Numer artykułu: 028858</p><h4>BREMBO P 78 020X Klocki hamulcowe</h4><h1>187,41 zl</h1></button>
                <button type="button" onclick="location.href='produkt/opony_michelin.php'"><img src="img/shina.webp" alt=""><p>Numer artykułu: 583485</p><h4>Michelin E Primacy 225/45R17 94 W XL</h4><h1>493 zl</h1></button>
            </div>
        </div>
        <div class="frequentlysold">
            <h2>Często sprzedawane</h2>
            <div class="objects2">
                <button type="button" onclick="location.href='produkt/klocki_brembo.php'"><img src="img/h-preview1.jpg" alt=""><p>Numer artykułu: 028858</p><h4>BREMBO P 78 020X Klocki hamulcowe</h4><h1>187,41 zl</h1></button>
                <button type="button" onclick="location.href='produkt/opony_michelin.php'"><img src="img/shina.webp" alt=""><p>Numer artykułu: 583485</p><h4>Michelin E Primacy 225/45R17 94 W XL</h4><h1>493 zl</h1></button>
                <button type="button" onclick="location.href='produkt/olej_gm.php'"><img src="img/h-preview4.jpg" alt=""><p>Nr artykułu: 153789</p><h4>OPEL GM</h4><h1>130 zl</h1></button>
                <button type="button" onclick="location.href='produkt/dyski_brembo.php'"><img src="img/h-preview.jpg" alt=""><p>Numer artykułu: 759837</p><h4>BREMBO COATED DISC LINE</h4><h1>254,41 zl</h1></button>
            </div>
        </div>
    </div>

    <?php require_once "blocks/footer.php"; ?>
</body>
</html>
