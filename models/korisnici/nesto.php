<?php
    function dohvatiK(){
        require_once("config/connection.php");
        global $odgovor;
        $upit2 = "SELECT * from korisnici";
        $rezultat = $konekcija->query($upit2);
        return $odgovor = $rezultat->fetchAll();
        }

?>