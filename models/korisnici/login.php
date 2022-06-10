<?php
 session_start();
 if(isset($_POST['logBtn'])){

    $meil = $_POST['lgName'];
    
    $pass = $_POST['lgPass'];
    $errors = [];
     $reLozinka = "/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/";

    //  if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    //     $errors[] = "Email nije ok";
    //  }

     if(!preg_match($reLozinka, $pass)){
        $errors[] = "Lozinka nije ok.";
    }

    if(count($errors) > 0){
        $_SESSION['greske'] = $errors;
        header("Location: ../../index.php?page=logIn");
        $code =404;
            
        
    }
    
        else{
    
            require_once('../../config/connection.php');
     
     

     $query="SELECT * FROM korisnici WHERE lozinka = :lozinka and email = :email";
     $izmena = $konekcija->prepare($query);
     $izmena->bindParam(":lozinka", $pass);
     $izmena->bindParam(":email", $meil);
     
     try {
        $izmena->execute();
        $korisnik = $izmena->fetch();
        if($korisnik){ 
            if($korisnik->idUloga == 2){
    
            header("Location: ../../index.php?page=home");
    
            $_SESSION['korisnikLog'] = $korisnik;
           
            $code = 201;
        }
        else{
            $_SESSION['admin'] = $korisnik;
            header("Location: ../../index.php?page=admin");
           
        }
        } else {
            header("Location: ../../index.php?page=logIn");
            $code = 500;
        }
    }
    catch(PDOException $e){
        echo $e->getMessage();
       // mail($meil, "logovanje", "Pogresno logovanje");
    }
        
  

}
 

}
