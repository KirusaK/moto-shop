<!--This file contains the code for the website's header, which includes:

    The navigation menu

    The logo

This file has been separated into its own file to avoid code duplication on each page of the site. 
Instead of copying and pasting the same HTML block into every page file, we include header.php via PHP. 
This simplifies further development and code maintenance:

    If something needs to be changed in the header (for example, adding a new link or modifying the menu),
    you only need to update one file, and the changes will automatically reflect on all pages of the site.
-->

<div class="logo">
    <a href="/Moto/index.php" class="moto">Moto.pl</a>
        <div class="search">
            <form action="/MOTO/lib/search.php" method="post">
                <input type="text" name="search-term" placeholder="Wprowadź nazwę lub VIN">
            </form>
        </div>
        <div class="block">
            <img src="/MOTO/img/Pin, Location.png" alt="">
            <p>Ciechanów</p>
        </div>
        
        <div class="block">
            <img src="/MOTO/img/Phone, Call.svg" alt="">
            <p>+48 888 888 888</p>
        </div>
        
        <div class="block">
            <img src="/MOTO/img/User,Profile.png" alt="">
            
            <?php 
                    if (isset($_COOKIE['email']))
                        echo '
                            <div class = "gabinet">
                                <a href="#">Gabinet</a>
                                <div class = "exit">
                                    <a href="/MOTO/users.php">Mój profil</a>
                                    <a href="/MOTO/order_history.php">Historia zamówień</a>
                                    <a href="/MOTO/lib/exit.php">Wyloguj się</a>
                                </div>
                            </div>
                        ';
                    else 
                        echo '<a href="/MOTO/login.php">Logowanie/</a>
                              <a href="/MOTO/register.php">Rejestracja</a>';
                ?>
        </div>
</div>