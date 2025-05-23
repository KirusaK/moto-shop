<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nadwozia | MOTO.PL</title>
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
            <h2>Nadwozie</h2>
        </div>
        <div class="left-column">
            <div class="blockk">
                <h3>Marka</h3>
                <form id="filter-form" method="POST" action="nadwozie.php">
                    <?php $products = require 'lib/filter.php'; ?>

                    <div class="char brand-filter">
                        <input type="checkbox" id="van wezel" name="brand" value="VAN WEZEL" class="ol">
                        <label for="VAN WEZEL">VAN WEZEL</label>
                        <input type="checkbox" id="blic" name="brand" value="BLIC" class="ol">
                        <label for="BLIC">BLIC </label>
                    </div>
                </form>
            </div>
            <div class="block" data-brand="VAN WEZEL">     
                <img src="img/nadwozie1.jpg" alt="">
                <h2>VAN WEZEL</h2>
                <h6>VAN WEZEL Maska silnika odpowiednie do MERCEDES-BENZ Klasa A </h6>
                <p>Numer artykułu: 035933</p>
                <button type="button" onclick="location.href='produkt/nadwozie_vanwezel.php'">2774,74 zl</button>
            </div>
            <div class="block" data-brand="VAN WEZEL">
                <img src="img/nadwozie2.jpg" alt="">
                <h2>VAN WEZEL</h2>
                <h6>VAN WEZEL Zderzak odpowiednie do OPEL ASTRA</h6>
                <p>Nr artykułu: 141824</p>
                <button type="button" onclick="location.href='produkt/nadwozie_vanwezel2.php'">576,81 zl</button>
            </div>
            <div class="block" data-brand="BLIC">
                <img src="img/nadwozie3.jpg" alt="">
                <h2>BLIC </h2>
                <h6>BLIC Zderzak odpowiednie do OPEL ASTRA </h6>
                <p>Nr artykułu: 142474</p>
                <button type="button" onclick="location.href='produkt/nadwozie_blic.php'">208 zl</button>
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