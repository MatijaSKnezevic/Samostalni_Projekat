
<div class="jumbotron jumbotron-fluid"  style="margin-bottom:0; background-image: url('assets/images/maps.jpg'); background-size: cover; height:500px;">
<div class="row"> 
    <div class="col-sm-4"></div>
        
	<div class="col-sm-4" style="text-align:center;">
            <h3><?php if(isset($_SESSION['korisnikLog'])){

            echo  $_SESSION['korisnikLog']->email;

            } 
            
            ?> Log in</h3>
    </div>
    <div class="col-sm-4"></div>

</div>
<div class="row pt-5" >
	<div class="col-sm-2">
    </div>
    
    <div class="col-sm-8">
    
<div class="container "  style="background-color: white;">
    <form method="POST" action="models/korisnici/login.php">

  <div class="form-group pt-5">
    <label>E-mail</label>
    <input type="text" class=" linija form-control"name="lgName" placeholder="Email">
  </div>
  
  <div class="form-group pt-5">
    <label>Password</label>
    <input type="password" class=" linija form-control" name="lgPass" placeholder="Password">
  </div>

  
  <div class="form-group pt-5">
  <input type="submit" name="logBtn" class="form-control" value="Log in">
  </div>
</form>
  </div>
		</div>
</div>
</div>

<div class="jumbotron jumbotron-fluid"  style=" margin-bottom:0; background-color: #F8F8F8; height:300px;">
</div>