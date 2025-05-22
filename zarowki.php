<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zarówki | MOTO.PL</title>
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
            <h2>Zarowki</h2>
        </div>
        <div class="left-column">
            <div class="blockk">
                <h3>Marka</h3>
                <form id="filter-form" method="POST" action="zarowki.php">

                    <div class="char brand-filter">
                        <input type="checkbox" id="magneti" name="brand" class="ol" value="MAGNETI MARELLI">
                        <label class="ol" for="MAGNETI MARELLI">MAGNETI MARELLI</label>
                        <input  type="checkbox" id="bosch" name="brand" class="ol" value="BOSCH">
                        <label class="ol" for="BOSCH">BOSCH</label>
                        <input type="checkbox" id="alca" name="brand" class="ol" value="ALCA">
                        <label class="ol" for="ALCA">ALCA</label>
                    </div>
                </form>
            </div>
            <div class="block" data-brand="MAGNETI MARELLI">     
                <img src="img/zarowka1.jpg" alt="">
                <h2>MAGNETI MARELLI</h2>
                <h6>MAGNETI MARELLI Żarówka, reflektor dalekosiężny</h6>
                <p>Nr artykułu: 123345</p>
                <button type="button" onclick="location.href='produkt/lampa_magneti.php'">7,75 zl</button>
            </div>
            <div class="block" data-brand="BOSCH">
                <img src="img/zarowka2.jpg" alt="">
                <h2>BOSCH </h2>
                <h6>BOSCH Żarówka, reflektor dalekosiężny </h6>
                <p>Nr artykułu: 685827</p>
                <button type="button" onclick="location.href='produkt/lampa_bosch.php'">7,29 zl</button>
            </div>
            <div class="block" data-brand="ALCA">
                <img src="img/zarowka3.jpg" alt="">
                <h2>ALCA</h2>
                <h6>ALCA Żarówka, reflektor dalekosiężny</h6>
                <p>Nr artykułu: 257976</p>
                <button type="button" onclick="location.href='produkt/lampa_alca.php'">10,05 </button>
            </div>
        </div>
    </div>

    <?php require_once "blocks/footer.php"; ?>
</body>
</html>

<script>
document.querySelectorAll('.brand-filter input[type="checkbox"]').forEach(checkbox => {
  checkbox.addEventListener('change', () => {
    const checkedBrands = Array.from(document.querySelectorAll('.brand-filter input[type="checkbox"]:checked'))
                               .map(cb => cb.value);

    document.querySelectorAll('.left-column .block').forEach(block => {
      const brand = block.getAttribute('data-brand');
      if (checkedBrands.length === 0 || checkedBrands.includes(brand)) {
        block.classList.remove('hidden'); // Показываем плавно
      } else {
        block.classList.add('hidden'); // Прячем без резкого исчезновения
      }
    });
  });
});
</script>