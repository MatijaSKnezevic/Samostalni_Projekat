<?php

header('Content-Type:application/json');
if(isset($_POST["poslato"])){

    $ime = $_POST["ime"];
    $prezime = $_POST["prezime"];
    $email = $_POST["email"];
    $lozinka = $_POST["lozinka"];
    $id = $_POST["id"];
   

    require_once "../../config/connection.php";
    
$upit = "UPDATE korisnici SET ime=:ime, prezime=:prezime,
email=:email, lozinka=:lozinka WHERE idKorisnik=:id";
//$lozinka=md5($lozinka);
$izmena = $konekcija->prepare($upit); 
$izmena->bindParam(":ime",$ime);
$izmena->bindParam(":prezime",$prezime);
$izmena->bindParam(":email",$email);
$izmena->bindParam(":lozinka",$lozinka);
$izmena->bindParam(":id",$id);

$kod = $izmena->execute()? 204:500;


$upit2 = "SELECT * from korisnici";
$rezultat = $konekcija->query($upit2);
$odgovor = $rezultat->fetchAll();

http_response_code($kod);
echo json_encode($odgovor);
}

