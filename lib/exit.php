<?php 
    setcookie('email', $email, time() + 3600 * 24 * 30, "/");
    header('Location: ../index.php');
?>