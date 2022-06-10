<?php
session_start();
  include 'views/fixed/header.php';

  include 'views/fixed/nav.php';
   
if(isset($_GET['page'])){
    $page = $_GET['page'];
    
    
switch($page){
  case "contact":
      include "views/contact.php";
      break;
  case "shop":
      include "views/shop.php";
      break;
  case "about":
      include "views/about.php";
      break;
  case "home":
      include "views/home.php";
      break;
      case "shopUser":
      include "views/shopUser.php";
      break;
  case "shopBag":
    include "views/shopBag.php";
    break;
    case "korisnik":
    include "views/korisnik.php";
    break;   
    case "admin";
    if(isset($_SESSION['admin'])){
 
    include "views/adminPanel.php";
}else{
    include "views/login.php"; 
}
    break;   

    case "logIn";
    include "views/logIn.php";
    break;   
    
    default:
    include "views/home.php";
    break;
}
}

else{
    include 'views/home.php';
   
  
    }
 
include 'views/fixed/foot.php';
include 'views/fixed/footer.php';


