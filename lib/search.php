<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOTO.PL | Home</title>
    <link rel="stylesheet" href="/MOTO/style/main.css">
</head>
<body>          
    <div class="conteiner">
        <?php require_once "../blocks/header3.php"; ?>
        <hr>

        <nav class="categories">
            <div class="dropdown">
                <button class="btn">Wszystkie kategorie</button>
                <div class="dropdown-content">
                    <a href="/MOTO/orig.php">Oryginalne części</a>
                    <a href="/MOTO/nieorig.php">Nieoryginalne części</a>
                    <a href="/MOTO/vaz.php">Części zamienne VAZ, GAZ, KAMAZ</a>
                    <a href="/MOTO/nadwozie.php">Części nadwozia</a>
                    <a href="/MOTO/to.php">Części dla TO</a>
                    <a href="/MOTO/szklo.php">Szkło samochodowe</a>
                    <a href="/MOTO/olej.php">Olej</a>
                    <a href="/MOTO/chemia.php">Chemia samochodowa</a>
                    <a href="/MOTO/opony.php">Opony</a>
                    <a href="/MOTO/akumulatory.php">Baterie</a>
                    <a href="/MOTO/zarowki.php">Lampy samochodowe</a>
                </div>
            </div>
            <button class="to"><a href="/MOTO/to.php">Części do TO</a></button>
            <button class="olej"><a href="/MOTO/olej.php">Olej</a></button>
            <button class="original"><a href="/MOTO/orig.php">Oryginalne części</a></button>
            <button class="nieoriginal"><a href="/MOTO/nieorig.php">Nieoryginalne części</a></button>
            <button class="zarowka"><a href="/MOTO/zarowki.php">Żarówki</a></button>
            <button class="bateria"><a href="/MOTO/akumulatory.php">Baterie</a></button>
            <button class="kosz"><a href="/MOTO/cart.php">Kosz</a></button>
            <img src="/MOTO/img/Shopping Cart.png" alt="">
        </nav>
    </div>

    <?php 
        // Подключение к базе данных Database connection
        $pdo = new PDO('mysql:host=localhost;dbname=website_moto_pl;port=3306', 'root', '');

        // Проверяем есть ли запрос от пользователя Check if there is a request from the user 
        if (isset($_POST['search-term']) && !empty(trim($_POST['search-term']))) {
            $search = trim($_POST['search-term']);

            // Готовим запрос: по артикулу и названию Preparing a query: by article and name 
            $stmt = $pdo->prepare("SELECT * FROM parts WHERE article LIKE :search OR name LIKE :search");
            $stmt->execute(['search' => "%$search%"]);

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if ($result) {
                echo "<h2>Wyniki wyszukiwania: </h2>";
                foreach ($result as $part) {
                    echo "<div style='border:1px solid #ccc; margin:10px; padding:10px; text-align:center;'>";
            
                    // Фото Photo
                    echo "<img src='/MOTO/img/" . htmlspecialchars($part['image']) . "' alt='" . htmlspecialchars($part['name']) . "' style='width:200px; height:auto;'><br><br>";

                    // Название Title
                    echo "<h3>" . htmlspecialchars($part['name']) . "</h3>";

                    // Артикул Item
                    echo "<p><strong>Nr artykułu:</strong> " . htmlspecialchars($part['article']) . "</p>";

                    // Цена Price
                    echo "<p><strong>Cena:</strong> " . htmlspecialchars($part['price']) . " zł</p>";

                    // Кнопка "Подробнее" The “Read More” button
                    echo "<a href='/MOTO/" . htmlspecialchars($part['url']) . "' style='display:inline-block; margin-top:10px; padding:10px 20px; background:#5946d7; color:#fff; text-decoration:none; border-radius:5px;'>Zobacz produkt</a>";


                    echo "</div>";
                }
            } else {
                echo "<p>Nic nie zostało znalezione na żądanie: <strong>" . htmlspecialchars($search) . "</strong></p>";
            }
        } else {
            echo "<p>Wprowadź numer artykułu lub nazwę do wyszukania.</p>";
        }
    ?>


    <div class="conteiner">
        <div class="reklama">
            <div class="block">
                <img src="/MOTO/img/mini-banners_cleanup.png" alt="">
                <h3>Oleje silnikowe Genesis</h3>
                <button type="button" onclick="location.href='/MOTO/olej.php'">Przejdź</button>
            </div>
            <div class="block">
                <img src="/MOTO/img/mini-banners1_cleanup.png" alt="">
                <h3>Opony zimowe są tańsze </h3>
                <button type="button" onclick="location.href='/MOTO/opony.php'">Wybrać</button>
            </div>
            <div class="block">
                <img src="/MOTO/img/mini-banners2_cleanup.png" alt="">
                <h3>Części do TO</h3>
                <button type="button" onclick="location.href='/MOTO/to.php'">Oglądaj</button>
            </div>
        </div>
    </div>

    <?php require_once "../blocks/footer.php"; ?>
</body>
</html>
