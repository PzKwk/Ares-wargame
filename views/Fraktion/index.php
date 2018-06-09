<?php


?>
<div class="row">
    <div class="col-6">
<a  class="badge badge-<?php if (strcmp ( $this->Team , "Achse" )==0){echo "danger";}else {echo "primary";} ?> mt-5 ml-5" href='<?php echo URL."/".$this->Team;?>'>zur Auswahl <?php echo $this->Team;?></a>
    </div>
    <?php
    /*
    <div class="col-6 mt-2">
        <h3 id='Einkommen' class='display-4'><?php echo $this->Einkommen."$";?> Einkommen</h3>
        <h3 id='Guthaben' class='display-4'><?php echo $this->Guthaben."$";?> Guthaben</h3>
    </div>
    */
    ?>
    <div class="col-3 mt-2">
        <h3  class='display-4'>Ressourcen</h3>
        <h3  class='display-4'><?php echo $this->Öl;?>  <img src="<?php echo URL;?>/public/Bilder/ÖL.JPG" alt="Öl"  width="60"></h3>
        <h3  class='display-4'><?php echo $this->Stahl;?>  <img src="<?php echo URL;?>/public/Bilder/Stahl.JPG" alt="Stahl" width="60"></h3>
        <h3  class='display-4'><?php echo $this->OSR;?>  <img src="<?php echo URL;?>/public/Bilder/OSR.JPG" alt="OSR"  width="72"></h3>
    </div>
    <div class="col-3 mt-2">
        <h3  class='display-4'>Einkommen</h3>
        <h3  class='display-4'><?php echo $this->EinkommenÖl;?>  <img src="<?php echo URL;?>/public/Bilder/ÖL.JPG" alt="Öl"  width="60"></h3>
        <h3  class='display-4'><?php echo $this->EinkommenStahl;?>  <img src="<?php echo URL;?>/public/Bilder/Stahl.JPG" alt="Stahl" width="60"></h3>
        <h3  class='display-4'><?php echo $this->EinkommenOSR;?>  <img src="<?php echo URL;?>/public/Bilder/OSR.JPG" alt="OSR"  width="72"></h3>
    </div>
    <form class="form-inline ml-5" action="<?php echo URL;?>/Fraktion/<?php echo $this->Land;?>" method="POST">
        <button class="btn btn-outline-success ml-5" name="neuesSpiel" value="true">neues Spiel</button>
    </form>
</div>


<h2 class="display-2 ml-5 mt-5"><?php echo $this->Bündnis;?></h2>
<h2 class="display-4 ml-5"><?php echo $this->Land;?></h2>


<div class="row">
    <div class="col-3">

        <form class="form-inline" action="<?php echo URL;?>/Fraktion/<?php echo $this->Land;?>" method="POST">
            <button class="btn btn-outline-warning ml-5" name="alleslöschen" value="true"> alles löschen</button>
        </form>
        </div><div class="col-6">
        <form class="form-inline" action="<?php echo URL;?>/Fraktion/<?php echo $this->Land;?>" method="POST">
        <button class="btn btn-outline-danger" name="bestätigen" value="true">bestätigen(nach aufbau)</button>
        </form>
        
    </div>
    <div class="col-3">
    <a href="/../Einkommen/<?php echo $this->Land;?>" class="badge badge-success"><h5 class="display-5 p-3">Einkommen aktualisieren</h5></a>
<?php /*
        <form  class="form-inline"  action="<?php echo URL;?>/Fraktion/<?php echo $this->Land;?>" method="POST">

            <input  class="form-control" type="text" name="Einkommen" placeholder="neues Einkommen">
            <input  class="btn btn-success ml-5 mt-5" type="submit" value="Einkommen aktualisieren">
        </form>*/
?>
    </div>
</div>


<form class="form-inline mt-5"  action="<?php echo URL;?>/Fraktion/<?php echo $this->Land;?>" method="GET">
<div class="row mt-6">
    <div class="col-2 ml-2">
        <input  class="form-control" id="MainForm" type="text" name="Anzahl" placeholder="Anzahl">
    </div><div class="col-4">

        <select id="MainForm2" class="custom-select" name="Was" >
            <option id="MainForm2" selected>Was?</option>
            <option id="MainForm2" value="alles">alles</option>
            
            <option id="MainForm2" value="U">U-Boot</option>
         
            <option id="MainForm2" value="K">Kreuzer</option>
           
            <option id="MainForm2" value="S">Schlachtschiff</option>
            <option id="MainForm2" value="T">Flugzeugträger</option>
           
            <option id="MainForm2" value="I">Infanterie</option>
            <option id="MainForm2" value="A">Artillerie</option>
            <option id="MainForm2" value="P">Panzer</option>
            <option id="MainForm2" value="J">Jäger</option>
            <option id="MainForm2" value="B">Bomber</option>
        </select>
    </div> <div class="col-2">

        <input  class="form-control" id="MainForm" type="text" name="Von" placeholder="Von wo?">
    </div>  <div class="col-2">
        <input  class="form-control" id="MainForm" type="text" name="Wohin" placeholder="Wohin?">
    </div> <div class="col-1">
        <input  class="form-control" id="MainForm" type="text" name="moveÖl" placeholder="moveÖl?">
    </div> 
</div>
    <div class="row">
        <input class="btn btn-dark ml-5" id="MainForm" type="submit" value="Eintragen">
</div>
    </form>




<?php



for($zz=1;$zz<26;$zz++){
    if(isset($this->Anzahl[$zz-1])&&$this->Anzahl[$zz-1]!=""&&$this->Anzahl[$zz-1]!= null&&isset($this->Was[$zz-1])) {
        if  (strcmp($this->Was[$zz-1], "alles") != 0 && isset($this->Von[$zz-1])&&$this->Von[$zz-1]!=""){
           ?> <div class="row">
    <div class="col-8">
        <?php
            echo "<h1 class='display-5 mt-4 ml-5'>";
            echo " " . $this->Anzahl[$zz-1] . "  x  " . $this->Was[$zz-1]."  von  ".$this->Von[$zz-1]." nach ".$this->Wohin[$zz-1]." für ".$this->MoveOil[$zz-1]."<img src='".URL."/public/Bilder/ÖL.JPG' alt='Öl'  width='60'>";
            echo "</h1>";
?>
    </div>

<div class="col-1 mt-4"><form class="form-inline" action="<?php echo URL;?>/Fraktion/<?php echo $this->Land;?>" method="POST">
<input type="hidden" name="minus" value="<?php echo $zz-1 ;?>">
<input  class="form-control"  type="submit" value="-">
</form></div>



<div class='col-2 mt-4'><form  class='form-inline' action="<?php echo URL;?>/Fraktion/<?php echo $this->Land;?>" method='POST'>
<input type="hidden" name="löschen" value="<?php echo $zz-1 ;?>">
<input class="form-control"   type="submit" value="löschen">
</form></div>





<div class="col-1 mt-4"> <form class="form-inline" action="<?php echo URL;?>/Fraktion/<?php echo $this->Land;?>" method="POST">
<input type="hidden" name="plus" value="<?php echo $zz-1 ;?>">
<input class="form-control"  type="submit" value="+">
</form></div></div>


<?php 
        }
        else if(strcmp($this->Was[$zz-1], "alles") == 0){
?> <div class="row">
        <div class="col-8">
            <?php
            echo "<h1 class='display-5 mt-4 ml-5'>";
            echo"Alles von ".$this->Von[$zz-1]." nach ".$this->Wohin[$zz-1]." für ".$this->MoveOil[$zz-1]."<img src='".URL."/public/Bilder/ÖL.JPG' alt='Öl'  width='60'>";
            echo "</h1>";
?>

        </div>
<div class="col-1 mt-4"><form class="form-inline" action="<?php echo URL;?>/Fraktion/<?php echo $this->Land;?>" method="POST">
<input type="hidden" name="minus" value="<?php echo $zz-1 ;?>">
<input  class="form-control"  type="submit" value="-">
</form></div>



<div class='col-2 mt-4'><form  class='form-inline' action="<?php echo URL;?>/Fraktion/<?php echo $this->Land;?>" method='POST'>
<input type="hidden" name="löschen" value="<?php echo $zz-1 ;?>">
<input class="form-control"   type="submit" value="löschen">
</form></div>





<div class="col-1 mt-4"> <form class="form-inline" action="<?php echo URL;?>/Fraktion/<?php echo $this->Land;?>" method="POST">
<input type="hidden" name="plus" value="<?php echo $zz-1 ;?>">
<input class="form-control"  type="submit" value="+">
</form></div></div>


 <?php 
        }
        else {
 ?> <div class="row">
            <div class="col-8">
                <?php
            echo "<h1 class='display-5 mt-4 ml-5'>";
            echo " ".$this->Anzahl[$zz-1]." x ".$this->Was[$zz-1]." nach ".$this->Wohin[$zz-1]." für ";
            if(isset($this->ÖlPreis[$zz-1])&&$this->ÖlPreis[$zz-1]!=0){echo $this->ÖlPreis[$zz-1]."<img src='".URL."/public/Bilder/ÖL.JPG' alt='Öl'  width='60'>";} 
            if(isset($this->StahlPreis[$zz-1])&&$this->StahlPreis[$zz-1]!=0){echo $this->StahlPreis[$zz-1]."<img src='".URL."/public/Bilder/Stahl.JPG' alt='Stahl'  width='60'>";} 
            if(isset($this->OSRPreis[$zz-1])&&$this->OSRPreis[$zz-1]!=0){echo $this->OSRPreis[$zz-1]."<img src='".URL."/public/Bilder/OSR.JPG' alt='OSR'  width='72'>";} 
            echo " für ".$this->MoveOil[$zz-1]."<img src='".URL."/public/Bilder/ÖL.JPG' alt='Öl'  width='60'>";
            echo "</h1>";
?>

            </div>
<div class="col-1 mt-4"><form class="form-inline" action="<?php echo URL;?>/Fraktion/<?php echo $this->Land;?>" method="POST">
<input type="hidden" name="minus" value="<?php echo $zz-1 ;?>">
<input  class="form-control"  type="submit" value="-">
</form></div>



<div class='col-2 mt-4'><form  class='form-inline' action="<?php echo URL;?>/Fraktion/<?php echo $this->Land;?>" method='POST'>
<input type="hidden" name="löschen" value="<?php echo $zz-1 ;?>">
<input class="form-control"   type="submit" value="löschen">
</form></div>





<div class="col-1 mt-4"> <form class="form-inline" action="<?php echo URL;?>/Fraktion/<?php echo $this->Land;?>" method="POST">
<input type="hidden" name="plus" value="<?php echo $zz-1 ;?>">
<input class="form-control"  type="submit" value="+">
</form></div></div>











<?php }}}
 ?>








