<?php

$statusCode = 404;


if(isset($_GET['id'])){
	
    $id = $_GET['id'];

    require_once "../../config/connection.php";
	
    $upit = $konekcija->prepare("DELETE FROM korisnici WHERE idKorisnik= :id");
    $upit->bindParam(':id', $id);

    try{
        $rezultat = $upit->execute();

        if($rezultat){
            $statusCode = 204;
            // unset($_SESSION['korisnik']);
            
    //   unset($_SESSION["hvala"]);
    //         header("Location: ../index.php?page=login");
        } else {
            $statusCode = 500;
        }
    }
    catch(PDOException $e){
        
        echo json_encode(["poruka"=>"Problem sa bazom".$e->getMessage()]);
        $statusCode = 500;
    }
}

http_response_code($statusCode);


