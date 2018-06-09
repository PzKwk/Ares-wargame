<?php



class Fraktion_Model extends Model {

    function __construct()
    {
        parent::__construct();
    }



    
public function neuRes($Land){
    //echo "ich soll die Ressourcen und Einkommen von ".$Land." auf die Standardwerte zurücksetzen";
    try{
        $stmt = $this->db->query("SELECT `Öl` FROM `startressourcen` WHERE `Land` = '$Land'");

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $Öl=$row['Öl'];

        }
    }catch(PDOException $ex) {
        echo "Fehler bei Datenbankanbindung";

    }
    try{
        $stmt = $this->db->query("SELECT `Stahl` FROM `startressourcen` WHERE `Land` = '$Land'");

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $Stahl=$row['Stahl'];

        }
    }catch(PDOException $ex) {
        echo "Fehler bei Datenbankanbindung";

    }
    try{
        $stmt = $this->db->query("SELECT `OSR` FROM `startressourcen` WHERE `Land` = '$Land'");

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $OSR=$row['OSR'];

        }
    }catch(PDOException $ex) {
        echo "Fehler bei Datenbankanbindung";

    }


    if (isset($Öl)&&isset($Stahl)&&isset($OSR)){


        try{
            $stmt = $this->db->prepare("UPDATE `ressourcen` SET `Öl`='$Öl',`Stahl`='$Stahl',`OSR`='$OSR' WHERE Land='$Land'");
            $stmt->execute();

        }catch(PDOException $ex) {
            echo "Fehler bei Datenbankanbindung";

        }

    }
}
public function neuEk($Land){
    try{
        $stmt = $this->db->query("SELECT `Öl` FROM `starteinkommen` WHERE `Land` = '$Land'");

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $StartÖl=$row['Öl'];

        }
    }catch(PDOException $ex) {
        echo "Fehler bei Datenbankanbindung";

    }
    try{
        $stmt = $this->db->query("SELECT `Stahl` FROM `starteinkommen` WHERE `Land` = '$Land'");

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $StartStahl=$row['Stahl'];

        }
    }catch(PDOException $ex) {
        echo "Fehler bei Datenbankanbindung";

    }
    try{
        $stmt = $this->db->query("SELECT `OSR` FROM `starteinkommen` WHERE `Land` = '$Land'");

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $StartOSR=$row['OSR'];

        }
    }catch(PDOException $ex) {
        echo "Fehler bei Datenbankanbindung";

    }


    if (isset($StartÖl)&&isset($StartStahl)&&isset($StartOSR)){


        try{
            $stmt = $this->db->prepare("UPDATE `einkommen` SET `Öl`='$StartÖl',`Stahl`='$StartStahl',`OSR`='$StartOSR' WHERE Land='$Land'");
            $stmt->execute();

        }catch(PDOException $ex) {
            echo "Fehler bei Datenbankanbindung";

        }

    }
}

/*
    public function deleteDeutschland(){

        try{
            $stmt = $this->db->prepare("DELETE FROM `deutschland`");
            $stmt->execute();

        }catch(PDOException $ex) {
            echo "Fehler bei Datenbankanbindung";

        }


        try{
            $stmt = $this->db->prepare("ALTER TABLE `deutschland`  AUTO_INCREMENT =0");
            $stmt->execute();
        }catch(PDOException $ex) {
            echo "Fehler bei Datenbankanbindung";

        }



    }

    */
    public function delete($Land){

        try{
            $stmt = $this->db->prepare("DELETE FROM `$Land`");
            $stmt->execute();

        }catch(PDOException $ex) {
            echo "Fehler bei Datenbankanbindung";

        }


        try{
            $stmt = $this->db->prepare("ALTER TABLE `$Land`  AUTO_INCREMENT =0");
            $stmt->execute();
        }catch(PDOException $ex) {
            echo "Fehler bei Datenbankanbindung";

        }



    }
    public function bestätige($Land){


            //Davor Tabelle ressourcen aktualisieren
            $Öl=$this->getÖl($Land);
            $Stahl=$this->getStahl($Land);
            $OSR=$this->getOSR($Land);
            
            try{
                $stmt = $this->db->prepare("UPDATE `ressourcen` SET `Öl`='$Öl',`Stahl`='$Stahl',`OSR`='$OSR' WHERE Land='$Land'");
                $stmt->execute();
        
            }catch(PDOException $ex) {
                echo "Fehler bei Datenbankanbindung";
        
            }

    }
/*
    public function deleteJapan(){

        try{
            $stmt = $this->db->prepare("DELETE FROM `japan`");
            $stmt->execute();

        }catch(PDOException $ex) {
            echo "Fehler bei Datenbankanbindung";

        }
        try{
            $stmt = $this->db->prepare("ALTER TABLE `japan`  AUTO_INCREMENT =0");
            $stmt->execute();
        }catch(PDOException $ex) {
            echo "Fehler bei Datenbankanbindung";

        }
    }

    public function deleteItalien(){

        try{
            $stmt = $this->db->prepare("DELETE FROM `italien`");
            $stmt->execute();

        }catch(PDOException $ex) {
            echo "Fehler bei Datenbankanbindung";

        }
        try{
            $stmt = $this->db->prepare("ALTER TABLE `italien`  AUTO_INCREMENT =0");
            $stmt->execute();
        }catch(PDOException $ex) {
            echo "Fehler bei Datenbankanbindung";

        }


    }

    public function deleteFinnland(){

        try{
            $stmt = $this->db->prepare("DELETE FROM `finnland`");
            $stmt->execute();

        }catch(PDOException $ex) {
            echo "Fehler bei Datenbankanbindung";

        }
        try{
            $stmt = $this->db->prepare("ALTER TABLE `finnland`  AUTO_INCREMENT =0");
            $stmt->execute();
        }catch(PDOException $ex) {
            echo "Fehler bei Datenbankanbindung";

        }
    }
    public function deleteUSA(){

        try{
            $stmt = $this->db->prepare("DELETE FROM `usa`");
            $stmt->execute();

        }catch(PDOException $ex) {
            echo "Fehler bei Datenbankanbindung";

        }
        try{
            $stmt = $this->db->prepare("ALTER TABLE `usa`  AUTO_INCREMENT =0");
            $stmt->execute();
        }catch(PDOException $ex) {
            echo "Fehler bei Datenbankanbindung";

        }
    }
    public function deleteRussland(){

        try{
            $stmt = $this->db->prepare("DELETE FROM `russland`");
            $stmt->execute();

        }catch(PDOException $ex) {
            echo "Fehler bei Datenbankanbindung";

        }
        try{
            $stmt = $this->db->prepare("ALTER TABLE `russland`  AUTO_INCREMENT =0");
            $stmt->execute();
        }catch(PDOException $ex) {
            echo "Fehler bei Datenbankanbindung";

        }
    }

    public function deleteEngland(){

        try{
            $stmt = $this->db->prepare("DELETE FROM `england`");
            $stmt->execute();

        }catch(PDOException $ex) {
            echo "Fehler bei Datenbankanbindung";

        }
        try{
            $stmt = $this->db->prepare("ALTER TABLE `england`  AUTO_INCREMENT =0");
            $stmt->execute();
        }catch(PDOException $ex) {
            echo "Fehler bei Datenbankanbindung";

        }
    }


    public function deleteChina(){

        try{
            $stmt = $this->db->prepare("DELETE FROM `china`");
            $stmt->execute();

        }catch(PDOException $ex) {
            echo "Fehler bei Datenbankanbindung";

        }
        try{
            $stmt = $this->db->prepare("ALTER TABLE `china`  AUTO_INCREMENT =0");
            $stmt->execute();
        }catch(PDOException $ex) {
            echo "Fehler bei Datenbankanbindung";

        }
    }
*/
public function sumOil($Land){
    $sumOil=0;
    $TotalÖlPreis=[];
    for($i=1;$i<26;$i++) {
     if (isset($this->getWas($Land)[$i-1])) {
         $Was = $this->getWas($Land)[$i-1];

             if (isset($this->getAnzahl($Land)[$i-1])){
                $TotalÖlPreis[$i-1] = $this->getmoveÖlPreis($Land)[$i-1] + $this->getÖlPreis($Land)[$i-1];
                $sumOil=$sumOil+$TotalÖlPreis[$i-1];
             }


         }
         

     }
     if (isset ($TotalÖlPreis)){
         return $sumOil;
     }
     else {
         return false;
    }
    }
public function sumSteel($Land){
    $Steel=[];
    $sumSteel=0;
    $table=$Land;


        for($i=1;$i<26;$i++) {
            if (isset($this->getWas($Land)[$i-1])) {
                $Was = $this->getWas($Land)[$i-1];

                try {
                    $stmt = $this->db->query("SELECT `Stahl` FROM `$table` WHERE `id`='$i'");

                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                       if (isset($this->getAnzahl($Land)[$i-1])){
                            $Steel[$i-1] = $row['Stahl']*($this->getAnzahl($Land)[$i-1]);
                            $sumSteel=$sumSteel+$Steel[$i-1];
                       }


                    }
                } catch
                (PDOException $ex) {

                    echo "Fehler bei Datenbankanbindung";

                }

            }
        }
        if (isset ($Steel)){

            return $sumSteel;
        }
        else {
            return false;
        }

    
}
public function sumOSR($Land){
    $OSR=[];
    $sumOSR=0;
    $table=$Land;


        for($i=1;$i<26;$i++) {
            if (isset($this->getWas($Land)[$i-1])) {
                $Was = $this->getWas($Land)[$i-1];

                try {
                    $stmt = $this->db->query("SELECT `OSR` FROM `$table` WHERE `id`='$i'");

                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                       if (isset($this->getAnzahl($Land)[$i-1])){
                            $OSR[$i-1] = $row['OSR']*($this->getAnzahl($Land)[$i-1]);
                            $sumOSR=$sumOSR+$OSR[$i-1];
                       }


                    }
                } catch
                (PDOException $ex) {

                    echo "Fehler bei Datenbankanbindung";

                }

            }
        }
        if (isset ($OSR)){

            return $sumOSR;
        }
        else {
            return false;
        }

    
}

    public function getÖl($Land){
        try{
            $stmt = $this->db->query("SELECT `Öl` FROM `ressourcen` WHERE `Land` = '$Land'");

            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $Öl=$row['Öl']-$this->sumOil($Land);

            }

        }catch(PDOException $ex) {
            echo "Fehler bei Datenbankanbindung";

        }
        if (isset($Öl)){
            return $Öl;
        }
        else return false;

    }
    public function getStahl($Land){
        try{
            $stmt = $this->db->query("SELECT `Stahl` FROM `ressourcen` WHERE `Land` = '$Land'");

            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $Stahl=$row['Stahl']-$this->sumSteel($Land);

            }

        }catch(PDOException $ex) {
            echo "Fehler bei Datenbankanbindung";

        }
        if (isset($Stahl)){
            return $Stahl;
        }
        else return false;

    }
    public function getOSR($Land){
        try{
            $stmt = $this->db->query("SELECT `OSR` FROM `ressourcen` WHERE `Land` = '$Land'");

            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $OSR=$row['OSR']-$this->sumOSR($Land);

            }

        }catch(PDOException $ex) {
            echo "Fehler bei Datenbankanbindung";

        }
        if (isset($OSR)){
            return $OSR;
        }
        else return false;

    }


    public function getEinkommenÖl($Land){
        try{
            $stmt = $this->db->query("SELECT `Öl` FROM `einkommen` WHERE `Land` = '$Land'");

            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $Öl=$row['Öl'];

            }

        }catch(PDOException $ex) {
            echo "Fehler bei Datenbankanbindung";

        }
        if (isset($Öl)){
            return $Öl;
        }
        else return false;

    }
    public function getEinkommenStahl($Land){
        try{
            $stmt = $this->db->query("SELECT `Stahl` FROM `einkommen` WHERE `Land` = '$Land'");

            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $Stahl=$row['Stahl'];

            }

        }catch(PDOException $ex) {
            echo "Fehler bei Datenbankanbindung";

        }
        if (isset($Stahl)){
            return $Stahl;
        }
        else return false;

    }
    public function getEinkommenOSR($Land){
        try{
            $stmt = $this->db->query("SELECT `OSR` FROM `einkommen` WHERE `Land` = '$Land'");

            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $OSR=$row['OSR'];

            }

        }catch(PDOException $ex) {
            echo "Fehler bei Datenbankanbindung";

        }
        if (isset($OSR)){
            return $OSR;
        }
        else return false;

    }


/*
            public function getincome($Land){
                try{
                    $stmt = $this->db->query("SELECT `Punkte` FROM `einkommen` WHERE `Land` = '$Land'");

                    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        $Guthaben=$row['Punkte'];

                    }

                }catch(PDOException $ex) {
                    echo "Fehler bei Datenbankanbindung";

                }
                if (isset($Guthaben)){
                    return $Guthaben;
                }
                else return false;

            }


            public function setincome($Land){
                $points=$_POST["Einkommen"];
                try{
                    $stmt = $this->db->prepare("UPDATE `einkommen` SET `Punkte` = '$points' WHERE `Land` = '$Land'");
                    $stmt->execute();

                }catch(PDOException $ex) {
                    echo "Fehler bei Datenbankanbindung";

                }



            }



            public function getGuthaben($Land)
            {

                $Guthaben2 = $this->getincome($Land);


                for ($xi = 1; $xi < 20; $xi++) {
                    if (isset($this->getPreis($Land)[$xi-1])){





                        $Guthaben2 = $Guthaben2 - $this->getPreis($Land)[$xi-1];



                    }
                }

                return $Guthaben2;
            }

*/

            public function getAnzahl($Land)
            {
                $Anzahl=[];

                for ($i = 1; $i < 26; $i++) {

                    try {
                        $stmt = $this->db->query("SELECT `Anzahl` FROM `$Land` WHERE `id`='$i'");

                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            
                            $Anzahl[$i-1] = $row['Anzahl'];

                        }
                    } catch
                    (PDOException $ex) {

                        echo "Fehler bei Datenbankanbindung";


                    }
                }
                if (isset ($Anzahl)){
                    return $Anzahl;
                }
                else {
                    return false;
                }

            }


    public function getWas($Land)
    {
        $Was=[];

        for ($i = 1; $i < 26; $i++) {
            try {

                $stmt = $this->db->query("SELECT `Was` FROM `$Land` WHERE `id`='$i'");


                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $Was[$i-1] = $row['Was'];

                }

            } catch
            (PDOException $ex) {

                echo "Fehler bei Datenbankanbindung";


            }
        }
        if (isset ($Was)){
            return $Was;
        }
        else {
            return false;
        }

    }


    public function getVon($Land)
    {
        $Von=[];

        for ($i = 1; $i < 26; $i++) {

            try {
                $stmt = $this->db->query("SELECT `Von` FROM `$Land` WHERE `id`='$i'");

                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $Von[$i-1] = $row['Von'];
                    
                }
                if (isset($Von[$i-1])){
                    //ok
                }
                else {
                    $Von[$i-1]="";
                }
            } catch
            (PDOException $ex) {

                echo "Fehler bei Datenbankanbindung";


            }
        }
        if (isset ($Von)){
            return $Von;
        }
        else {
            return false;
        }

    }


    public function getWohin($Land)
    {
        $Wohin=[];

        for ($i = 1; $i < 26; $i++) {

            try {
                $stmt = $this->db->query("SELECT `Wohin` FROM `$Land` WHERE `id`='$i'");

                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $Wohin[$i-1] = $row['Wohin'];

                }
            } catch
            (PDOException $ex) {

                echo "Fehler bei Datenbankanbindung";


            }
        }
        if (isset ($Wohin)){
            return $Wohin;
        }
        else {
            return false;
        }

    }


//MoveOil
    public function getMoveOil($Land)
    {
        $MoveOil=[];

        for ($i = 1; $i < 26; $i++) {

            try {
                $stmt = $this->db->query("SELECT `moveÖl` FROM `$Land` WHERE `id`='$i'");

                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $MoveOil[$i-1] = $row['moveÖl'];

                }
            } catch
            (PDOException $ex) {

                echo "Fehler bei Datenbankanbindung";


            }
        }
        if (isset ($MoveOil)){
            return $MoveOil;
        }
        else {
            return false;
        }

    }
    
/*    ###########################getPreisÖl getPreisStahl   getPreisOSR   $table=preise
    public function getPreis($Land)
    {
        $Preis=[];
        $table="preise".$Land;


        for($i=1;$i<20;$i++) {
            if (isset($this->getWas($Land)[$i-1])) {
                $Was = $this->getWas($Land)[$i-1];

                try {
                    $stmt = $this->db->query("SELECT `Preis` FROM `$table` WHERE `Einheit`='$Was'");

                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                       if (isset($this->getAnzahl($Land)[$i-1])){
                           $Preis[$i-1] = $row['Preis']*($this->getAnzahl($Land)[$i-1]);
                       }


                    }
                } catch
                (PDOException $ex) {

                    echo "Fehler bei Datenbankanbindung";

                }

            }
        }
        if (isset ($Preis)){
            return $Preis;
        }
        else {
            return false;
        }

    }

*/

            public function getNewAnzahl($Land){


                $Anzahl=[];
                for ($ok=1;$ok<26;$ok++) {




                    if (isset($_POST["minus"]) && ($_POST["minus"] + 1) == $ok) {

                        $okok = $ok - 1;

                        $Anzahl[$okok] = $this->getAnzahl($Land)[$okok]-1;




                    }

                    if (isset($_POST["plus"]) && ($_POST["plus"] + 1) == $ok) {

                        $okok = $ok - 1;

                        $Anzahl[$okok] = $this->getAnzahl($Land)[$okok]+1;


                    }
                    if (isset($_POST["löschen"]) && ($_POST["löschen"] + 1) == $ok) {

                        $okok = $ok - 1;

                        //$Anzahl = $this->getAnzahl($Land)[$okok];
                        $Anzahl[$okok] = 0;

                    }

                }
                if (isset($Anzahl)){
                    return $Anzahl;

                }
                else return false;

            }




            public function SetUpdateAnzahl($Land)
            {

                    try {
                        for ($ok = 1; $ok < 26; $ok++) {

                            if (isset($this->getNewAnzahl($Land)[$ok-1])) {

                                $Anzahl = $this->getNewAnzahl($Land)[$ok-1];

                                $stmt = $this->db->prepare("UPDATE `$Land` SET `Anzahl` = '$Anzahl' WHERE `id` ='$ok'");

                                $stmt->execute();
                            }
                        }

                    } catch (PDOException $ex) {
                        echo "Fehler bei Datenbankanbindung";

                    }
            }





    /*
    public function fill($Land){

        if (strcmp ( $Land , "deutschland" )==0){

            if (isset($_GET['Was'])&&$_GET['Was']=="F"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*30;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="U"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*80;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="Z"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*20;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="K"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*50;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="SK"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*100;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="S"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*200;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="T"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*200;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="M"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*50;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="I"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*10;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="A"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*30;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="P"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*50;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="B"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*250;
            }
            else if (isset($_GET['Was'])&&$_GET['Von']!=""){$Preis=0;}

        }
        if (strcmp ( $Land , "japan" )==0){

            if (isset($_GET['Was'])&&$_GET['Was']=="F"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*30;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="U"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*80;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="Z"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*20;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="K"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*50;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="SK"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*100;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="S"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*200;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="T"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*200;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="M"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*0;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="I"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*10;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="A"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*30;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="P"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*50;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="B"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*250;
            }
            else if (isset($_GET['Was'])&&$_GET['Von']!=""){$Preis=0;}

        }

        if (strcmp ( $Land , "italien" )==0){

            if (isset($_GET['Was'])&&$_GET['Was']=="F"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*30;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="FF"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*0;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="U"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*80;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="Z"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*20;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="K"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*50;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="SK"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*100;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="S"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*200;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="T"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*200;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="M"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*50;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="I"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*10;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="A"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*30;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="P"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*50;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="B"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*250;
            }
            else if (isset($_GET['Was'])&&$_GET['Von']!=""){$Preis=0;}

        }


        if (strcmp ( $Land , "finnland" )==0){

            if (isset($_GET['Was'])&&$_GET['Was']=="F"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*30;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="U"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*80;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="Z"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*20;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="K"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*50;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="SK"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*100;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="S"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*200;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="T"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*200;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="M"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*50;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="I"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*10;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="A"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*30;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="P"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*50;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="PP"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*0;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="B"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*250;
            }
            else if (isset($_GET['Was'])&&$_GET['Von']!=""){$Preis=0;}

        }

        if (strcmp ( $Land , "usa" )==0){

            if (isset($_GET['Was'])&&$_GET['Was']=="F"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*30;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="U"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*80;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="Z"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*20;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="K"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*50;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="SK"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*100;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="S"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*200;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="T"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*200;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="M"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*50;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="I"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*10;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="A"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*30;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="P"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*40;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="B"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*200;
            }
            else if (isset($_GET['Was'])&&$_GET['Von']!=""){$Preis=0;}

        }

        if (strcmp ( $Land , "england" )==0){

            if (isset($_GET['Was'])&&$_GET['Was']=="F"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*30;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="U"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*80;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="Z"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*20;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="K"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*50;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="SK"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*100;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="S"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*150;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="T"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*200;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="M"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*50;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="I"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*10;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="A"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*30;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="P"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*50;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="B"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*250;
            }
            else if (isset($_GET['Was'])&&$_GET['Von']!=""){$Preis=0;}

        }

        if (strcmp ( $Land , "russland" )==0){

            if (isset($_GET['Was'])&&$_GET['Was']=="F"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*30;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="U"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*80;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="Z"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*20;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="K"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*50;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="SK"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*100;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="S"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*200;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="T"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*200;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="M"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*50;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="I"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*10;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="A"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*30;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="P"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*60;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="B"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*250;
            }
            else if (isset($_GET['Was'])&&$_GET['Von']!=""){$Preis=0;}

        }


        if (strcmp ( $Land , "china" )==0){

            if (isset($_GET['Was'])&&$_GET['Was']=="F"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*30;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="U"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*80;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="Z"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*20;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="K"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*50;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="SK"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*100;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="S"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*200;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="T"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*200;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="M"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*50;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="I"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*5;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="A"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*30;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="P"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*50;
            }
            else if (isset($_GET['Was'])&&$_GET['Was']=="B"&&$_GET['Von']==""){
                $Preis=$_GET['Anzahl']*250;
            }
            else if (isset($_GET['Was'])&&$_GET['Von']!=""){$Preis=0;}

        }


*/


public function fillÖl(){
    $Was=$_GET['Was'];
    try{
        $stmt = $this->db->query("SELECT `Öl` FROM `preise` WHERE `Kürzel` = '$Was'");

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $Öl=$row['Öl'];

        }
    }catch(PDOException $ex) {
        echo "Fehler bei Datenbankanbindung";

    }
    if (isset ($Öl)){
        return $Öl;
    }
    else {
        return false;
    }
}
public function fillStahl(){
    $Was=$_GET['Was'];
    try{
        $stmt = $this->db->query("SELECT `Stahl` FROM `preise` WHERE `Kürzel` = '$Was'");

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $Stahl=$row['Stahl'];

        }
    }catch(PDOException $ex) {
        echo "Fehler bei Datenbankanbindung";

    }
    if (isset ($Stahl)){
        return $Stahl;
    }
    else {
        return false;
    }
}
public function fillOSR(){
    $Was=$_GET['Was'];
    try{
        $stmt = $this->db->query("SELECT `OSR` FROM `preise` WHERE `Kürzel` = '$Was'");

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $OSR=$row['OSR'];

        }
    }catch(PDOException $ex) {
        echo "Fehler bei Datenbankanbindung";

    }
    if (isset ($OSR)){
        return $OSR;
    }
    else {
        return false;
    }
}

    public function fill($Land){

        $Anzahl=$_GET['Anzahl'];
        $Was=$_GET['Was'];
        $Von=$_GET['Von'];
        $Wohin=$_GET['Wohin'];
        $moveÖl=$_GET['moveÖl'];
        $Öl=$this->fillÖl();
        $Stahl=$this->fillStahl();
        $OSR=$this->fillOSR();
        if (isset($_GET['Was'])&&$_GET['Von']!=""){$Öl=0;$Stahl=0;$OSR=0;}
        
        try{
        
            $stmt = $this->db->prepare("INSERT INTO `$Land` (`id`, `Anzahl`, `Was`, `Von`, `Wohin`, `Öl`, `Stahl`, `OSR`, `moveÖl`) VALUES ( '', '$Anzahl', '$Was', '$Von', '$Wohin', '$Öl', '$Stahl', '$OSR', '$moveÖl')");
            $stmt->execute();

        }catch(PDOException $ex) {
            echo "Fehler bei Datenbankanbindung";

        }

  

    }

    public function getTotalÖlPreis($Land){
       $TotalÖlPreis=[];
       for($i=1;$i<26;$i++) {
      

           
        if ((isset($this->getmoveÖlPreis($Land)[$i-1]))&&(isset($this->getÖlPreis($Land)[$i-1]))){
            $TotalÖlPreis[$i-1] = $this->getmoveÖlPreis($Land)[$i-1] + $this->getÖlPreis($Land)[$i-1];
        }
                    
            
                    
                
                else {
                    $TotalÖlPreis[$i-1]=0;
                }
            
            

        }
        if (isset ($TotalÖlPreis)){
            return $TotalÖlPreis;
        }
        else {
            return false;
        }
    }
        
    
    public function getmoveÖlPreis($Land){
        $moveÖlPreis=[];

        $table=$Land;


        for($i=1;$i<26;$i++) {
            if (isset($this->getWas($Land)[$i-1])) {
                $Was = $this->getWas($Land)[$i-1];

                try {
                    $stmt = $this->db->query("SELECT `moveÖl` FROM `$table` WHERE `id`='$i'");

                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                      // if (isset($this->getAnzahl($Land)[$i-1])){
                            $moveÖlPreis[$i-1] = $row['moveÖl'];
                      // }
                      if (isset($moveÖlPreis[$i-1])){
                            //ok
                      }
                        else {
                            $moveÖlPreis[$i-1]=0;
                        }
                    }
                } catch
                (PDOException $ex) {

                    echo "Fehler bei Datenbankanbindung";

                }

            }
        }
        if (isset ($moveÖlPreis)){
            return $moveÖlPreis;
        }
        else {
            return false;
        }
    }

    public function getÖlPreis($Land){
        $ÖlPreis=[];

        $table=$Land;


        for($i=1;$i<26;$i++) {
            if (isset($this->getWas($Land)[$i-1])) {
                $Was = $this->getWas($Land)[$i-1];

                try {
                    $stmt = $this->db->query("SELECT `Öl` FROM `$table` WHERE `id`='$i'");

                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                       if (isset($this->getAnzahl($Land)[$i-1])){
                           $ÖlPreis[$i-1] = $row['Öl']*$this->getAnzahl($Land)[$i-1];
                       }
                       else {
                        $ÖlPreis[$i-1]=0;
                       }

                    }
                } catch
                (PDOException $ex) {

                    echo "Fehler bei Datenbankanbindung";

                }

            }
        }
        if (isset ($ÖlPreis)){
            return $ÖlPreis;
        }
        else {
            return false;
        }

    }
    public function getStahlPreis($Land){
        $StahlPreis=[];

        $table=$Land;


        for($i=1;$i<26;$i++) {
            if (isset($this->getWas($Land)[$i-1])) {
                $Was = $this->getWas($Land)[$i-1];

                try {
                    $stmt = $this->db->query("SELECT `Stahl` FROM `$table` WHERE `id`='$i'");

                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                       if (isset($this->getAnzahl($Land)[$i-1])){
                           $StahlPreis[$i-1] = $row['Stahl']*($this->getAnzahl($Land)[$i-1]);
                       }


                    }
                } catch
                (PDOException $ex) {

                    echo "Fehler bei Datenbankanbindung";

                }

            }
        }
        if (isset ($StahlPreis)){
            return $StahlPreis;
        }
        else {
            return false;
        }

    }
    public function getOSRPreis($Land){
        $OSRPreis=[];

        $table=$Land;


        for($i=1;$i<26;$i++) {
            if (isset($this->getWas($Land)[$i-1])) {
                $Was = $this->getWas($Land)[$i-1];

                try {
                    $stmt = $this->db->query("SELECT `OSR` FROM `$table` WHERE `id`='$i'");

                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                       if (isset($this->getAnzahl($Land)[$i-1])){
                           $OSRPreis[$i-1] = $row['OSR']*($this->getAnzahl($Land)[$i-1]);
                       }


                    }
                } catch
                (PDOException $ex) {

                    echo "Fehler bei Datenbankanbindung";

                }

            }
        }
        if (isset ($OSRPreis)){
            return $OSRPreis;
        }
        else {
            return false;
        }

    }

}

