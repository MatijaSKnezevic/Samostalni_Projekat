
<div class="row pt-5">
<div class="col-sm-2"></div>
<div class="col-sm-8">

<table class="table" style="background-color: #F8F8F8;">
<thead>
<tr>
<th scope="col">Fullname</th>
<th scope="col">Email</th>
    
<th scope="col">Update </th>
    
<th scope="col">Delete </th>
</tr>
</thead>
<tbody id="ispis">

<?php

include("models/korisnici/nesto.php");
dohvatiK();

foreach($odgovor as $odg):
?>
<tr>
<td id="<?="dugme".$odg->id?>"> <?=$odg->ime." ".$odg->prezime?></td>
<td>  <?=$odg->email?> </td>
<td>   <input class="dugmeUpd" type="button" data-id="<?=$odg->idKorisnik?>" value="UPDATE">  </td>
<td>  <input class="dugmeDlt" type="button" data-id="<?=$odg->idKorisnik?>" value="DELETE"> </td>

</tr>
<?php
    endforeach;
  
?>
</tbody>

</table>
</div>

<div class="col-sm-2"></div>
</div>
<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-4">

<table class="table" style="background-color: #F8F8F8;">
<thead>
</thead>
<tbody>
<th scope="row">#</th>
<th scope="row">Values</th>

    
<tr>
      <th scope="row">Name</th>
      <td><input id="UpIme" type="text" placeholder="Name" ></td>
    </tr>
    <tr>
      <th scope="row">Lastname</th>
      <td><input id="UpPrezime" type="text" placeholder="LastName"></td>
    </tr>
    <tr>
      <th scope="row">Password</th>
      <td><input id="UpLozinka" type="text" placeholder="Password"></td>
    </tr>
    <tr>
      <th scope="row">Email</th>
      <td><input id="UpEmail" type="text" placeholder="Email"></td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td><input id="submitUp" type="button" value="Submit" data-id=""></td>
      <input type="hidden" id="hiddenId">
    </tr>
    
</tbody>

</table>
</div>
<div class="col-sm-4">
<table class="table" style="background-color: #F8F8F8;">
<thead>
</thead>
<tbody>
<th scope="row">#</th>
<th scope="row">Values</th>

    
<tr>
      <th scope="row">Something</th>
      <td><input id="UpIme" type="text" placeholder="Name" ></td>
    </tr>
    <tr>
      <th scope="row">Lastname</th>
      <td><input id="UpPrezime" type="text" placeholder="LastName"></td>
    </tr>
    <tr>
      <th scope="row">Password</th>
      <td><input id="UpLozinka" type="text" placeholder="Password"></td>
    </tr>
    <tr>
      <th scope="row">Email</th>
      <td><input id="UpEmail" type="text" placeholder="Email"></td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td><input id="submitUp" type="button" value="Submit" data-id=""></td>
      <input type="hidden" id="hiddenId">
    </tr>
    
</tbody>

</table>

</div>
<div class="col-sm-2">


</div>


</div>


<!-- <input type="button" id="btnBrisanje" value="DELETE">
 <input type="button" id="btnIzmeni" value="UPDATE"> 
 -->
 
 
 
 
