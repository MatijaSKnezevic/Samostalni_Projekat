<?php

session_start();
if(isset($_POST["dugme"])) {
    header("Location: ../../index.php?page=korisnik");
        $slika = $_FILES["file"];
    $naziv = time()."_".$slika["name"];

    $tmpPutanja = $slika["tmp_name"];
    $novaPutanja = "../../assets/images/$naziv";
    if(isset($_SESSION['korisnikLog'])){
        $_SESSION['slika']="malaslika_".$naziv;
    }

    $uploaded = move_uploaded_file($tmpPutanja, $novaPutanja);

    $dimenzije = getimagesize($novaPutanja);
    $sirina = $dimenzije[0];
    $visina = $dimenzije[1];
    // var_dump($dimenzije);

    $novaSirina = 100;

    $novaVisina = $visina / ($sirina / $novaSirina);

    // SMANJENJE
    $ekstezija = pathinfo($novaPutanja, PATHINFO_EXTENSION);

    if($ekstezija == "jpg") {
        $uploadedSlika = imagecreatefromjpeg($novaPutanja); // RESOURCE
        $platno = imagecreatetruecolor($novaSirina, $novaVisina);
        imagecopyresampled($platno, $uploadedSlika, 0, 0, 0, 0, $novaSirina, $novaVisina, $sirina, $visina);

        imagejpeg($platno, "../../assets/images/malaslika_".time()."_".$slika["name"], 100);
        
    }
    else { // PNG
        $uploadedSlika = imagecreatefrompng($novaPutanja); // RESOURCE
        $platno = imagecreatetruecolor($novaSirina, $novaVisina);
        imagecopyresampled($platno, $uploadedSlika, 0, 0, 0, 0, $novaSirina, $novaVisina, $sirina, $visina);

        imagepng($platno, "../../assets/images/malaslika_".time().".png", 100);
    }

}