<?php
  if(isset($_SESSION['korisnik'])){
  echo "bravo";          
           
  }
?>
<div class="jumbotron jumbotron-fluid"  style="margin-bottom:0; background-image: url('assets/images/maps.jpg'); background-size: cover; height:500px;">
<div class="row pt-5" >
	<div class="col-sm-3">
    </div>
    
	<div class="col-sm-3">
    </div>
    <div class="col-sm-3">

<div class="container "  style="background-color: white;">
    <form method="POST" action="">
  <div class="form-group pt-5">
    <label for="formGroupExampleInput">First Name</label>
    <input id="ime" type="text" class=" linija form-control" placeholder="Name">
  </div>
  <div class="form-group pt-5">
    <label for="formGroupExampleInput">Last Name</label>
    <input id="prezime" type="text" class=" linija form-control" placeholder="Lastname">
  </div>
  <div class="form-group pt-5">
    <label for="formGroupExampleInput2">E-mail</label>
    <input id="email" type="email" class=" linija form-control" placeholder="Email">
  </div>
  
  <div class="form-group pt-5">
    <label for="formGroupExampleInput">Password</label>
    <input id="lozinka" type="password" class=" linija form-control" placeholder="Password">
  </div>

  
  <div class="form-group pt-5">
  <input id="dugme" type="button" class="form-control" value="Submit">

  </div>
  <div id="ispisK"></div>
</form>

  </div>
		</div>
</div>
</div>

<div class="jumbotron jumbotron-fluid"  style=" margin-bottom:0; background-color: #F8F8F8; height:100%;">
<div class="row">
<div class="col-sm-2">
</div>

<div class="col-sm-2">
<ul class="list-group list-group-flush">
         <li class='p-3 list-group-item bg-light'><p>Nesto</p></li>
         <li class='p-3 list-group-item bg-light'><p>Nesto</p></li>
         <li class='p-3 list-group-item bg-light'><p>Nesto</p></li>
         <li class='p-3 list-group-item bg-light'><p>Nesto</p></li>
        
        </ul>
</div>

<div class="col-sm-2">
<ul class="list-group list-group-flush">
         <li class='p-3 list-group-item bg-light'><p>Nesto</p></li>
         <li class='p-3 list-group-item bg-light'><p>Nesto</p></li>
        </ul>
</div>


</div>