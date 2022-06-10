

$(document).ready(function(){
    console.log("radi jquery");

$(document).on("click", ".dugmeUpd", function(e){
    e.preventDefault();
    console.log("kliknucli ste");
    var id = $(this).data('id');
    console.log(id);
    $.ajax({
        url:"models/korisnici/updatePriprema.php",
        method:"POST",
        dataType:"json", 
        data:{
            id:id
        },
        success: function(data){
                console.log(data);
                
                popuniFormu1(data);
        },
        error: function(xhr, status, message){
                console.log("neece nestp"+message+""+status+xhr);
                
        }
    })


   

});

var ime, prezime, email, lozinka, id;

document.querySelector("#submitUp").addEventListener("click", function(){

ime = document.querySelector("#UpIme").value;
prezime= document.querySelector("#UpPrezime").value;
email = document.querySelector("#UpEmail").value;
lozinka = document.querySelector("#UpLozinka").value;
id = document.querySelector("#hiddenId").value;

    console.log(ime, prezime, email, lozinka, id);

        //REGEX


        $.ajax({
            
            url: "models/korisnici/update.php",
            method: "POST",
            dataType: "json",
            data: {
                id : id,
                ime : ime,
                prezime : prezime,
                email : email,
                lozinka : lozinka,
                poslato : true
            },
            success: function(data){
                console.log("Uspesno ste promenili nalog"+data);
                popuniPonovo();
            },
            error: function(xhr, statusTxt, error){
                    console.log("ne radi"+xhr , statusTxt, error) ;        
                
            }
            
        });



});



$(document).on("click", ".dugmeDlt", function(){
    
    console.log("kliknucli ste delite");
    var id = $(this).data('id');
    console.log(id);
    $.ajax({
        url:"models/korisnici/delete.php",
        method:"get",
        dataType:"json", 
        data:{
            id:id
        },
        success: function(data){

                popuniPonovo(data);
                
        },
        error: function(xhr, status, message){
                console.log("neece nestp"+message+""+status+xhr);
                
        }
    })


});


});


function popuniPonovo(){

    $.ajax({
        url:"models/korisnici/dohvatiKorisnike.php",
        method:"get",
        dataType:"json", 
        data:{
    
        },
        success: function(data){
                console.log(data);
                
             popuniFormu(data);
         },
        error: function(xhr, status, message){
                console.log("neece nestp"+message+""+status+xhr);
                
        }
    })
    
    
    function popuniFormu(podaci){
        var ispis="";
    
        for(var i of podaci){
            ispis+=`<tr><td>${i.ime+" "+i.prezime}</td>
            <td> ${i.email} </td>
            <td>   <input class="dugmeUpd" type="button" data-id="${i.idKorisnik}" value="UPDATE">  </td>
            <td>  <input class="dugmeDlt" type="button" data-id="${i.idKorisnik}" value="DELETE"> </td>
            </tr>
            `
        }
        document.getElementById("ispis").innerHTML = ispis;
    }
    
    }
    function popuniFormu1(podaci){
        $("#UpIme").val(podaci.ime);
		$("#UpPrezime").val(podaci.prezime);
        $("#UpLozinka").val(podaci.lozinka);
        $("#UpEmail").val(podaci.email);
        $("#hiddenId").val(podaci.idKorisnik);
        

    }