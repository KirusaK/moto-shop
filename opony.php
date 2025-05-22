<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opony | MOTO.PL</title>
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
            <h2>Opony</h2>
        </div>
        <div class="left-column">
            <div class="blockk">
                <h3>Marka</h3>
                <form id="filter-form" method="POST" action="opony.php">
                    <?php $products = require 'lib/filter.php'; ?>

                    <div class="char brand-filter">
                        <input type="checkbox" id="michelin" name="brand" value="Michelin" class="ol">
                        <label for="Michelin">Michelin</label>
                        <input type="checkbox" id="fulda" name="brand" value="Fulda" class="ol">
                        <label for="Fulda">Fulda</label>
                        <input type="checkbox" id="bridgestone" name="brand" value="Bridgestone" class="ol">
                        <label for="Bridgestone">Bridgestone</label>
                    </div>
                </form>
            </div>
            <div class="block" data-brand="Michelin">     
                <img src="img/shina.webp" alt="">
                <h2>Michelin</h2>
                <h6>Michelin E Primacy 225/45R17 94 W XL</h6>
                <p>Numer artykułu: 583485</p>
                <button type="button" onclick="location.href='produkt/opony_michelin.php'">493 zl</button>
            </div>
            <div class="block" data-brand="Fulda">
                <img src="img/shina2.webp" alt="">
                <h2>Fulda</h2>
                <h6>Fulda EcoControl HP2</h6>
                <p>Nr artykułu: 141824</p>
                <button type="button" onclick="location.href='produkt/opony_fulda.php'">300 zl</button>
            </div>
            <div class="block" data-brand="Bridgestone">
                <img src="img/shina3.webp" alt="">
                <h2>Bridgestone</h2>
                <h6>Bridgestone Turanza T005 DriveGuard</h6>
                <p>Nr artykułu: 243328</p>
                <button type="button" onclick="location.href='produkt/opony_bridgeston.php'">499 zl</button>
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