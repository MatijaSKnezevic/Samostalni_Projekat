<?php 
session_start();
unset($_SESSION['korisnikLog']);
unset($_SESSION['slika']);
unset($_SESSION['admin']);

header("Location: ../../index.php?page=logIn");
?>