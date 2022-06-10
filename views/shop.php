
<div class="row">

    <div class="col-sm-3 pt-5 pl-5  sidenav text-left list-group">
        <h2><b>Categories</b></h2>
        
    </div>

    <div class="col-sm-9">
        <div class="row">
        <?php   
        require_once "config/connection.php";
            $query = "SELECT * FROM slike";
            $rezultat = $konekcija->query($query);
            $konacno = $rezultat->fetchAll();
            foreach($konacno as $kon):
        ?>
    
            <div class="col-sm-4 pt-5" style="text-align:center;">
                <img src="assets/images/<?=$kon->putanja?>.jpg" alt="<?=$kon->alt?>" width="80%" height="80%">
                <div style="text-align:center;"><p class="opis">Ovo je neki prozivod</p></div>
            </div>
            <?php endforeach;?>
            <div class="col-sm-4 pt-5">
                <img src="assets/images/stolica.jpg" alt="stolica" width="100%" height="100%">

            </div>  

            <div class="col-sm-4 pt-5">
                <img src="assets/images/stolica.jpg" alt="stolica" width="100%" height="100%">

            </div>  


            <div class="col-sm-4 pt-5">
                <img src="assets/images/stolica.jpg" alt="stolica" width="100%" height="100%">

            </div>  

            <div class="col-sm-4 pt-5">
                <img src="assets/images/stolica.jpg" alt="stolica" width="100%" height="100%">

            </div>  

            <div class="col-sm-4 pt-5">
                <img src="assets/images/stolica.jpg" alt="stolica" width="100%" height="100%">

            </div>  

            <div class="col-sm-4 pt-5">
                <img src="assets/images/stolica.jpg" alt="stolica" width="100%" height="100%">

            </div>  

            <div class="col-sm-4 pt-5">
                <img src="assets/images/stolica.jpg" alt="stolica" width="100%" height="100%">

            </div>  

            <div class="col-sm-4 pt-5">
                <img src="assets/images/stolica.jpg" alt="stolica" width="100%" height="100%">

            </div>  


        </div>

    </div>
</div>
