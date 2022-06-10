console.log("radi");


$(document).ready(function(){
    console.log("radi jquery");


        var ime, prezime, email, lozinka;

        document.querySelector("#dugme").addEventListener("click", function(){

        ime = document.querySelector("#ime").value;
        prezime= document.querySelector("#prezime").value;
        email = document.querySelector("#email").value;
        lozinka = document.querySelector("#lozinka").value;
        
            console.log(ime, prezime, email, lozinka);

                //REGEX


            	$.ajax({
                    
                    url: "models/korisnici/registracija.php",
                    method: "POST",
                    dataType: "json",
                    data: {
                        ime : ime,
                        prezime : prezime,
                        email : email,
                        lozinka : lozinka,
                        poslato : true
                    },
                    success: function(korisnik){
                        console.log("Uspesno ste upisali nalog");
                        ispisiKorisnike(korisnik);
                        
                    },
                    error: function(xhr, statusTxt, error){
                            console.log("ne radi"+xhr , statusTxt, error) ;        
                        
                    }
                    
                });

                function ispisiKorisnike(korisnik){
                  console.log("proslaFunkcij")

                    // ispis = "Greske";
                    // $("#ispisK").html(ispis);

                    
                  

                    // var ispis = "";
                    // for(var korisni in korisnik){
                    //     ispis+="<p>"korisnik[korisni].ime "</p>"
                    // }
                    // $document.querySelector(#ispisK).html(ispis);
                }

                        // document.querySelector("#tabela2").add.classList


                    });                
               
    
    
                    document.querySelector("#uploadSlike").addEventListener("click", function(){

                            var file = document.querySelector("#file");
                        $.ajax({
                    
                            url: "models/korisnici/radSaSlikom.php",
                            method: "POST",
                            dataType: "json",
                            data: {
                               file:file
                            },
                            success: function(slika){
                                console.log("Uspesno ste upisali sliku");
                                ispisiSliku(slika);
                                
                            },
                            error: function(xhr, statusTxt, error){
                                    console.log("ne radi"+xhr , statusTxt, error) ;        
                                
                            }
                            
                        });
                        function ispisiSliku(slika){
                                
                        }
                    
                    });
});