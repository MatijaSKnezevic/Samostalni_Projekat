<?php
$imeBaze = "atelje";
$imeServera = "localhost";
$username  = "root";
$password = "";
try{
$konekcija = new PDO("mysql:host=$imeServera;dbname=$imeBaze",$username, $password);
$konekcija->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$konekcija->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
//var_dump($konekcija);
}catch(PDOException $e){
    
    echo $e->getMessage();

}


