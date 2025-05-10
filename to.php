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

    <div class=" wrapper2 box1">
        <div class="olej-text">
            <h2>TO</h2>
        </div>
        <div class="olej1">
            <div class="left-column">
                <div class="blockk2">
                    <h3>Marka</h3>
                    <input type="text" placeholder="Szybkie wyszukiwanie">
                    <div class="char">
                        <input type="checkbox" class="ol">
                        <label for="text">LIQUI MOLY</label>
                        <input type="checkbox" class="ol">
                        <label for="text">SHELL</label>
                        <input type="checkbox" class="ol">
                        <label for="text">OPEL GM</label>
                        <input type="checkbox" class="ol">
                        <label for="text">BREMBO</label>
                        <input type="checkbox" class="ol">
                        <label for="text">OPEL GM</label>
                        <input type="checkbox" class="ol">
                        <label for="text">OPEL GM</label>
                        <input type="checkbox" class="ol">
                        <label for="text">Michelin</label>
                        <input type="checkbox" class="ol">
                        <label for="text">Fulda</label>
                        <input type="checkbox" class="ol">
                        <label for="text">Bridgestone</label>
                        <input type="checkbox" class="ol">
                        <label for="text">MAGNETI MARELLI</label>
                        <input type="checkbox" class="ol"> 
                        <label for="text">BOSCH</label>
                        <input type="checkbox" class="ol">
                        <label for="text">ALCA</label>
                        <input type="checkbox" class="ol">
                        <label for="text">MAXGEAR</label>
                        <input type="checkbox" class="ol">
                        <label for="text">K2</label>
                        <input type="checkbox" class="ol">
                        <label for="text">MANNOL</label>
                        <input type="checkbox" class="ol">
                        <label for="text">GLAVISTA</label>
                        <input type="checkbox" class="ol">
                        <label for="text">SAINT-GOBAIN</label>
                        <input type="checkbox" class="ol">
                        <label for="text">IVECO</label>
                        <input type="checkbox" class="ol">
                        <label for="text">VAN WEZEL</label>
                        <input type="checkbox" class="ol">
                        <label for="text">BLIC</label>
                    </div>
                </div>
            </div>
            <div class="right-column">
                <div class="block1">     
                    <img src="img/h-preview2.jpg" alt="">
                    <h2>LIQUI MOLY</h2>
                    <h6>LIQUI MOLY Top Tec 4100</h6>
                    <p>Nr artykułu: 153789</p>
                    <button type="button" onclick="location.href='produkt/olej_liquemoly.php'">315 zl</button>
                </div>
                <div class="block1">
                    <img src="img/h-preview3.jpg" alt="">
                    <h2>SHELL</h2>
                    <h6>SHELL Helix Ultra A5/B5</h6>
                    <p>Nr artykułu: 153788</p>
                    <button type="button" onclick="location.href='produkt/olej_shell.php'">197 zl</button>
                </div>
                <div class="block1">
                    <img src="img/h-preview4.jpg" alt="">
                    <h2>OPEL GM</h2>
                    <h6>OPEL GM</h6>
                    <p>Nr artykułu: 153787</p>
                    <button type="button" onclick="location.href='produkt/olej_gm.php'">130 zl</button>
                </div>
                <div class="block1">
                    <img src="img/h-preview.jpg" alt="">
                    <h2>BREMBO</h2>
                    <h6>BREMBO COATED DISC LINE</h6>        
                    <p>Numer artykułu: 759837</p>
                    <button type="button" onclick="location.href='produkt/dyski_brembo.php'">254,41 zl</button>
                </div>
                <div class="block1">
                    <img src="img/h-preview1.jpg" alt="">
                    <h2>BREMBO</h2>
                    <h6>BREMBO P 78 020X Klocki hamulcowe</h6>
                    <p>Numer artykułu: 028858</p>
                    <button type="button" onclick="location.href='produkt/klocki_brembo.php'">187,41 zl</button>
                </div>
                <div class="block1">
                    <img src="img/klocki.jpg" alt="">
                    <h2>BREMBO </h2>
                    <h6>BREMBO P 23 070 Klocki hamulcowe</h6>
                    <p>Numer artykułu: 345777</p>
                    <button type="button" onclick="location.href='produkt/klocki_brembo2.php'">87,31 zl</button>
                </div>
                <div class="block1">
                    <img src="img/shina.webp" alt="">
                    <h2>Michelin</h2>
                    <h6>Michelin E Primacy 225/45R17 94 W XL</h6>
                    <p>Numer artykułu: 583485</p>
                    <button type="button" onclick="location.href='produkt/opony_michelin.php'">493 zl</button>
                </div>
                <div class="block1">
                    <img src="img/shina2.webp" alt="">
                    <h2>Fulda</h2>
                    <h6>Fulda EcoControl HP2</h6>
                    <p>Nr artykułu: 141824</p>
                    <button type="button" onclick="location.href='produkt/opony_fulda.php'">300 zl</button>
                </div>
                <div class="block1">
                    <img src="img/shina3.webp" alt="">
                    <h2>Bridgestone</h2>
                    <h6>Bridgestone Turanza T005 DriveGuard</h6>
                    <p>Nr artykułu: 243328</p>
                    <button type="button" onclick="location.href='produkt/opony_bridgeston.php'">499 zl</button>
                </div>
                <div class="block1">
                    <img src="img/zarowka1.jpg" alt="">
                    <h2>MAGNETI MARELLI</h2>
                    <h6>MAGNETI MARELLIŻarówka, reflektor dalekosiężny </h6>
                    <p>Nr artykułu: 123345</p>
                    <button type="button" onclick="location.href='produkt/lampa_magneti.php'">7,75 zl</button>
                </div>
                <div class="block1">
                    <img src="img/zarowka2.jpg" alt="">
                    <h2>BOSCH </h2>
                    <h6>BOSCH Żarówka, reflektor dalekosiężny </h6>
                    <p>Nr artykułu: 685827</p>
                    <button type="button" onclick="location.href='produkt/lampa_bosch.php'">7,29 zl</button>
                </div>
                <div class="block1">
                    <img src="img/zarowka3.jpg" alt="">
                    <h2>ALCA</h2>
                    <h6>ALCA Żarówka, reflektor dalekosiężny</h6>
                    <p>Nr artykułu: 257976</p>
                    <button type="button" onclick="location.href='produkt/lampa_alca.php'">10,05 </button>
                </div>
                <div class="block1">
                    <img src="img/akumulator1.png" alt="">
                    <h2>MAXGEAR</h2>
                    <h6>MAXGEAR Akumulator </h6>
                    <p>Nr artykułu: 366352</p>
                    <button type="button" onclick="location.href='produkt/akum_maxgear.php'">450,53 zl</button>
                </div>
                <div class="block1">
                    <img src="img/akumulator2.jpg" alt="">
                    <h2>MAXGEAR </h2>
                    <h6>MAXGEAR Akumulator</h6>
                    <p>Nr artykułu: 114352</p>
                    <button type="button" onclick="location.href='produkt/akum_maxgear2.php'">460,28 zl</button>
                </div>
                <div class="block1">
                    <img src="img/akumulator3.jpg" alt="">
                    <h2>BOSCH </h2>
                    <h6>BOSCH S3 002 Akumulato</h6>
                    <p>Nr artykułu: 205827</p>
                    <button type="button" onclick="location.href='produkt/akum_bosch.php'">280,52 zl</button>
                </div>
                <div class="block1">
                    <img src="img/chemia1.jpg" alt="">
                    <h2>K2</h2>
                    <h6>K2 Czysciwo tworzyw sztucznych</h6>
                    <p>Nr artykułu: 134163</p>
                    <button type="button" onclick="location.href='produkt/chemia_k2.php'">12,52 zl</button>
                </div>
                <div class="block1">
                    <img src="img/chemia2.jpg" alt="">
                    <h2>MANNOL</h2>
                    <h6>MANNOL Felgen Cleaner</h6>
                    <p>Nr artykułu: 123363</p>
                    <button type="button" onclick="location.href='produkt/chemia_mannol.php'">17,85 zl</button>
                </div>
                <div class="block1">
                    <img src="img/chemia3.jpg" alt="">
                    <h2>LIQUI MOLY</h2>
                    <h6>LIQUI MOLY Ochrona podwozia </h6>
                    <p>Nr artykułu: 241548</p>
                    <button type="button" onclick="location.href='produkt/chemia_liquemoly.php'">26,34 zl</button>
                </div>
                <div class="block1">
                    <img src="img/szyba1.jpg" alt="">
                    <h2>GLAVISTA </h2>
                    <h6>Szyba przednia odpowiednie do OPEL ASTRA </h6>
                    <p>Numer artykułu: 143644</p>
                    <button type="button" onclick="location.href='produkt/szklo_glavista.php'">720 zl</button>
                </div>
                <div class="block1">
                    <img src="img/szyba2.jpg" alt="">
                    <h2>SAINT-GOBAIN</h2>
                    <h6>SAINT-GOBAIN Szyba tylna do AUDI A6, A3 </h6>
                    <p>Nr artykułu: 243635</p>
                    <button type="button" onclick="location.href='produkt/szklo_saintgobain.php'">833,42 zl</button>
                </div>
                <div class="block1">
                    <img src="img/szyba3.jpg" alt="">
                    <h2>IVECO</h2>
                    <h6>IVECO Szyba boczna </h6>
                    <p>Nr artykułu: 123475</p>
                    <button type="button" onclick="location.href='produkt/szklo_iveco.php'">339,80 zl</button>
                </div>
                <div class="block1">
                    <img src="img/nadwozie1.jpg" alt="">
                    <h2>VAN WEZEL</h2>
                    <h6>VAN WEZEL Maska silnika odpowiednie do MERCEDES-BENZ Klasa A </h6>
                    <p>Numer artykułu: 035933</p>
                    <button type="button" onclick="location.href='produkt/nadwozie_vanwezel.php'">2774,74 zl</button>
                </div>
                <div class="block1">
                    <img src="img/nadwozie2.jpg" alt="">
                    <h2>VAN WEZEL</h2>
                    <h6>VAN WEZEL Zderzak odpowiednie do OPEL ASTRA</h6>
                    <p>Nr artykułu: 141824</p>
                    <button type="button" onclick="location.href='produkt/nadwozie_vanwezel2.php'">576,81 zl</button>
                </div>
                <div class="block1">
                    <img src="img/nadwozie3.jpg" alt="">
                    <h2>BLIC </h2>
                    <h6>BLIC Zderzak odpowiednie do OPEL ASTRA </h6>
                    <p>Nr artykułu: 142474</p>
                    <button type="button" onclick="location.href='produkt/nadwozie_blic.php'">208 zl</button>
                </div>
                <div class="block1">     
                    <img src="img/vaz1.jpg" alt="">
                    <br>
                    <h6>PRZERYWACZ KIERUNKOWSKAZÓW ZIŁ URAL GAZ PAZ</h6>
                    <p>Numer artykułu: 123544</p>
                    <button type="button" onclick="location.href='produkt/vaz1.php'">50 zl</button>
                </div>
                <div class="block1">
                    <img src="img/vaz2.jpg" alt="">
                    <br>
                    <h6>REFLEKTOR PRZEDNI LEWY SOCZEWKA KAMAZ EURO</h6>
                    <p>Nr artykułu: 586980</p>
                    <button type="button" onclick="location.href='produkt/vaz2.php'">700 zl</button>
                </div>
                <div class="block1">
                    <img src="img/vaz3.jpg" alt="">
                    <br>
                    <h6>SIŁOWNIK AMORTYZATOR ZAWIESZENIA KABINY KAMAZ</h6>
                    <p>Nr artykułu: 123475</p>
                    <button type="button" onclick="location.href='produkt/vaz3.php'">1200 zl</button>
                </div>
            </div>
        </div>
    </div>

    <?php require_once "blocks/footer.php"; ?>
</body>
</html>