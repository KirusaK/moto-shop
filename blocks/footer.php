<!-- 
 This file contains the footer code for the website, which includes:
  - The company menu with informational links
  - The catalogs section with parts categories
  - The help section with order and delivery information
  - The products and brands section with a list of brands
  
  The footer file has been separated into its own file to avoid duplicating the same code on every page of the site.
  Instead of copying and pasting the same HTML block into each page file, we include `footer.php` via PHP. This approach simplifies development and code maintenance:
  - If any changes are needed in the footer (e.g., adding new links, updating payment methods, etc.),
    you only need to update one file, and those changes will automatically appear across all pages of the site. 
-->

<footer>
        <div class="blocks conteiner">
            <div class="abc1">
                <h3>Menu firmowe</h3>
                <ul>
                    <li><a href="#">Co to jest Moto.pl</a></li>
                </ul>
            </div>

            <div class="abc2">
                <h3>Katalogi</h3>
                <ul>
                    <li><a href="/MOTO/orig.php">Oryginalne części </a></li>
                    <li><a href="/MOTO/nieorig.php">Nieoryginalne części </a></li>
                    <li><a href="/MOTO/to.php">Części do TO</a></li>
                    <li><a href="/MOTO/olej.php">Olej</a></li>
                    <li><a href="/MOTO/akumulatory.php">Bateria</a></li>    
                </ul>
            </div>

            <div class="abc3">
                <h3>Pomoc</h3>
                <ul>
                    <li><a href="#">Opłata za zamówienie</a></li>
                    <li><a href="#">Dostawa zamówień</a></li>
                </ul>
            </div>

            <div class="abc4">
                <h3>Produkty i marki</h3>
                <ul>
                    <li><a href="#">Lista marek</a></li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="footers">
            <p>Copyright © ООО «Moto.pl» 2025. All rights reserved.</p>
            <div class="oplaty">
                <p>Przyjmujemy płatności</p>
                <img src="/Moto/img/Visa_Brandmark_Blue_RGB.png" alt="">
                <img src="/Moto/img/Mastercard.png" alt="">
                <img src="/Moto/img/BLIK-LOGO-RGB.png" alt="">
            </div>
        </div>
    </footer>