<?php
header("Content-type: application/json");

if(isset($_POST["id"])){

$id = $_POST["id"];
require("../../config/connection.php");


$upit2 = "SELECT * from korisnici where idKorisnik = ?";

$rezultat = $konekcija->prepare($upit2);
$rezultat->bindValue(1 ,$id);

$rezultat->execute();
$odgovor = $rezultat->fetch();

$kod = 201;



http_response_code($kod);
echo json_encode($odgovor);
}

