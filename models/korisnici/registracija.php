<?php
session_start();
if(isset($_POST["poslato"])){

    $ime = $_POST["ime"];
    $prezime = $_POST["prezime"];
    $email = $_POST["email"];
    $lozinka = $_POST["lozinka"];
   $greske = [];

    $reFullName ="/^([A-Z][a-z]{2,15})+$/";
    $reUserPass = "/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/";

    require_once "../../config/connection.php";
    
 if(!preg_match($reFullName, $ime)) {
 array_push($greske, "Polje za ime nije u dobrom formatu");
 }
 if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
 array_push($greske, "Polje za email nije u dobrom formatu");
 }
 if(!preg_match($reFullName, $prezime)) {
 array_push($greske, "Korisnicko ime mora imati barem 8 karaktera");
 }
 if(!preg_match($reUserPass, $lozinka)) {
 array_push($greske, "Lozinka mora imati barem 8 karaktera");
 }
 if(count($greske)){
 $kod=422;
 $data=$greske;

 }
 else{
$upit = "INSERT INTO korisnici  (ime, prezime, email, lozinka, status, idUloga) values (:ime, :prezime, :email, :lozinka, 1, 2)";

$priprema = $konekcija->prepare($upit);
$priprema->bindParam(":ime", $ime);
$priprema->bindParam(":prezime", $prezime);
$priprema->bindParam(":email", $email);
$priprema->bindParam(":lozinka", $lozinka);

if($priprema->execute()){
$kod = 201;

}else{
    $kod=500;
}

$upit2 = "SELECT * from korisnici";
$rezultat = $konekcija->query($upit2);
$odgovor = $rezultat->fetchAll();


}

header('Content-Type:application/json');
http_response_code($kod);
echo json_encode($odgovor);
}
?>