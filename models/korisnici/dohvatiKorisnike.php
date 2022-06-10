<?php

require("../../config/connection.php");

$upit2 = "SELECT * from korisnici";
$rezultat = $konekcija->query($upit2);
 $odgovor = $rezultat->fetchAll();

 echo json_encode($odgovor);
 