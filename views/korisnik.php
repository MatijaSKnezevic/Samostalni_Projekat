<div class="jumbotron jumbotron-fluid"  style="margin-bottom:0; background-image: url('assets/images/maps.jpg'); background-size: cover; height:500px;">
<div class="row"> 
    <div class="col-sm-4"></div>
        
	<div class="col-sm-4" style="text-align:center;">
            <h3>Welcome <?=$_SESSION['korisnikLog']->email?></h3>
            
            <label for="file">
            <?php
           
              if(isset($_SESSION['slika'])){
           echo '<img src="assets/images/'.$_SESSION["slika"].'" alt="tvojaSlika" id="tvojaSlika">';
          }else{
            echo " Your image here";
            //assets/images/malaslika_1592869355_Accesories.jpg"
          }
            ?>
           </label>
            
            <div class="input-field">
                        <form action="models/korisnici/radSaSlikom.php" method="POST" enctype="multipart/form-data">
                            <input type="file" name="file" id="file" class="btn btn-secondary" />
                            
                        <input type="submit" id="uploadSlike" name="dugme" value="Upload file" class="btn btn-success"/>
                    
                            </form>
                        </div>
    </div>
    <div class="col-sm-4"></div>

</div>
<div class="row pt-5" >
	<div class="col-sm-2">
    </div>
    
    <div class="col-sm-8">
    
<div class="container "  style="background-color: white;">
    <form>
  <div class="form-group pt-5">
    <label for="formGroupExampleInput">Name</label>

    <input type="text" class=" linija form-control" placeholder="Name">
  </div>
  <div class="form-group pt-5">
    <label for="formGroupExampleInput">Lastname</label>
    <input type="text" class=" linija form-control" placeholder="Lastname">
  </div>
  <div class="form-group pt-5">
    <label for="formGroupExampleInput2">E-mail</label>
    <input type="email" class=" linija form-control" placeholder="Email">
  </div>
  
  <div class="form-group pt-5">
    <label for="formGroupExampleInput">Message</label>
    <input type="text" class=" linija form-control" placeholder="Message">
  </div>

  
  <div class="form-group pt-5">
  <input type="button" class="form-control" value="Send">
  </div>
</form>
  </div>
		</div>
</div>
</div>

<div class="jumbotron jumbotron-fluid"  style=" margin-bottom:0; background-color: #F8F8F8; height:300px;">
</div>