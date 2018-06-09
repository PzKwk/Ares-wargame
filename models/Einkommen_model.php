<?php

class Einkommen_model extends Model {

    function __construct()
    {
        parent::__construct();
    }


//Datenbankanbindung hier!!!!




public function updateEK($Land){

        $Öl=$this->sumÖL_total();
        $Stahl=$this->sumStahl_total();
        $OSR=$this->sumOSR_total();


    try{
        $stmt = $this->db->prepare("UPDATE `einkommen` SET `Öl`='$Öl',`Stahl`='$Stahl',`OSR`='$OSR' WHERE Land='$Land'");
        $stmt->execute();

    }catch(PDOException $ex) {
        echo "Fehler bei Datenbankanbindung";

    }


}


public function updateRES($Land){
    
        $oil=$this->getÖlRES($Land);
        $steel=$this->getStahlRES($Land);
        $osr=$this->getOSRRES($Land);

        $Öl=$this->sumÖL_total();
        $Stahl=$this->sumStahl_total();
        $OSR=$this->sumOSR_total();

        $sumOil=$oil+$Öl;
        $sumSteel=$steel+$Stahl;
        $sumOSR=$osr+$OSR;
    
    try{
        $stmt = $this->db->prepare("UPDATE `ressourcen` SET `Öl`='$sumOil',`Stahl`='$sumSteel',`OSR`='$sumOSR' WHERE Land='$Land'");
        $stmt->execute();

    }catch(PDOException $ex) {
        echo "Fehler bei Datenbankanbindung";

    }
}



public function getÖlRES($Land){
    try{
        $stmt = $this->db->query("SELECT `Öl` FROM `ressourcen` WHERE Land='$Land'");
    
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $Öl=$row['Öl'];
    
        }
    }catch(PDOException $ex) {
        echo "Fehler bei Datenbankanbindung";
    
    }
    if (isset($Öl)){
        return $Öl;
    }else{
       return false; 
    }

}

public function getStahlRES($Land){
    try{
        $stmt = $this->db->query("SELECT `Stahl` FROM `ressourcen` WHERE Land='$Land'");
    
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $Stahl=$row['Stahl'];
    
        }
    }catch(PDOException $ex) {
        echo "Fehler bei Datenbankanbindung";
    
    }
    if (isset($Stahl)){
        return $Stahl;
    }else{
       return false; 
    }

}


public function getOSRRES($Land){
    try{
        $stmt = $this->db->query("SELECT `OSR` FROM `ressourcen` WHERE Land='$Land'");
    
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $OSR=$row['OSR'];
    
        }
    }catch(PDOException $ex) {
        echo "Fehler bei Datenbankanbindung";
    
    }
    if (isset($OSR)){
        return $OSR;
    }else{
       return false; 
    }

}


public function getÖlValue($Kennung){

    $EKÖl=0;
    try{
        $stmt = $this->db->query("SELECT `Öl` FROM `gebiete` WHERE `Kennung` = '$Kennung'");
    
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $EKÖl=$row['Öl'];
    
        }
    }catch(PDOException $ex) {
        echo "Fehler bei Datenbankanbindung";
    
    }

    if (isset($EKÖl)){
        return $EKÖl;
    }else{
        return false;
    }
}

public function sumÖl_F(){
    $sum=0;
    $ÖlListe=[];
    for($i=1;$i<3;$i++){
        
       $ÖlListe[$i-1]=$this->getÖlValue("F".$i);
      //if häckchen gesetzt dann sonst +0
      if(isset($_POST["F".$i])){
        $sum=$sum+$ÖlListe[$i-1];
      }
       
    }
    
    return $sum;
}
public function sumÖl_J(){
    $sum=0;
    $ÖlListe=[];
    for($i=1;$i<17;$i++){
        
       $ÖlListe[$i-1]=$this->getÖlValue("J".$i);
      //if häckchen gesetzt dann sonst +0
      if(isset($_POST["J".$i])){
        $sum=$sum+$ÖlListe[$i-1];
      }
       
    }
    
    return $sum;
}
public function sumÖl_D(){
    $sum=0;
    $ÖlListe=[];
    for($i=1;$i<9;$i++){
        
       $ÖlListe[$i-1]=$this->getÖlValue("D".$i);
      //if häckchen gesetzt dann sonst +0
      if(isset($_POST["D".$i])){
        $sum=$sum+$ÖlListe[$i-1];
      }
       
    }
    
    return $sum;
}
public function sumÖl_A(){
    $sum=0;
    $ÖlListe=[];
    for($i=1;$i<15;$i++){
        
       $ÖlListe[$i-1]=$this->getÖlValue("A".$i);
      //if häckchen gesetzt dann sonst +0
      if(isset($_POST["A".$i])){
        $sum=$sum+$ÖlListe[$i-1];
      }
       
    }
    
    return $sum;
}
public function sumÖl_E(){
    $sum=0;
    $ÖlListe=[];
    for($i=1;$i<23;$i++){
       $ÖlListe[$i-1]=$this->getÖlValue("E".$i);
       if(isset($_POST["E".$i])){
        $sum=$sum+$ÖlListe[$i-1];
      }
       
    }
    
    return $sum;
}
public function sumÖl_I(){
    $sum=0;
    $ÖlListe=[];
    for($i=1;$i<5;$i++){
       $ÖlListe[$i-1]=$this->getÖlValue("I".$i);
       if(isset($_POST["I".$i])){
        $sum=$sum+$ÖlListe[$i-1];
      }
       
    }
    
    return $sum;
}
public function sumÖl_R(){
    $sum=0;
    $ÖlListe=[];
    for($i=1;$i<17;$i++){
       $ÖlListe[$i-1]=$this->getÖlValue("R".$i);
       if(isset($_POST["R".$i])){
        $sum=$sum+$ÖlListe[$i-1];
      }
    }
    
    return $sum;
}
public function sumÖl_C(){
    $sum=0;
    $ÖlListe=[];
    for($i=1;$i<4;$i++){
       $ÖlListe[$i-1]=$this->getÖlValue("C".$i);
       if(isset($_POST["C".$i])){
        $sum=$sum+$ÖlListe[$i-1];
      }
    }
    
    return $sum;
}
public function sumÖL_total(){
    $totalÖl=0;
    $totalÖl=$this->sumÖl_A()+$this->sumÖl_E()+$this->sumÖl_C()+$this->sumÖl_R()+$this->sumÖl_F()+$this->sumÖl_I()+$this->sumÖl_J()+$this->sumÖl_D();
    if (isset($totalÖl)){
        return $totalÖl;
    }
else {
    return false;
}
}
public function getÖlListeI(){
    $ÖlListe=[];
    for($i=1;$i<5;$i++){
       $ÖlListe[$i-1]=$this->getÖlValue("I".$i);
    }
    return $ÖlListe;
}
public function getÖlListeJ(){
    $ÖlListe=[];
    for($i=1;$i<17;$i++){
       $ÖlListe[$i-1]=$this->getÖlValue("J".$i);
    }
    return $ÖlListe;
}
public function getÖlListeD(){
    $ÖlListe=[];
    for($i=1;$i<9;$i++){
       $ÖlListe[$i-1]=$this->getÖlValue("D".$i);
    }
    return $ÖlListe;
}
public function getÖlListeA(){
    $ÖlListe=[];
    for($i=1;$i<15;$i++){
       $ÖlListe[$i-1]=$this->getÖlValue("A".$i);
    }
    return $ÖlListe;
}
public function getÖlListeF(){
    $ÖlListe=[];
    for($i=1;$i<3;$i++){
       $ÖlListe[$i-1]=$this->getÖlValue("F".$i);
    }
    return $ÖlListe;
}
public function getÖlListeR(){
    $ÖlListe=[];
    for($i=1;$i<17;$i++){
       $ÖlListe[$i-1]=$this->getÖlValue("R".$i);
    }
    return $ÖlListe;
}

public function getÖlListeE(){
    $ÖlListe=[];
    for($i=1;$i<23;$i++){
       $ÖlListe[$i-1]=$this->getÖlValue("E".$i);
    }
    return $ÖlListe;
}

public function getÖlListeC(){
    $ÖlListe=[];
    for($i=1;$i<4;$i++){
       $ÖlListe[$i-1]=$this->getÖlValue("C".$i);
    }
    return $ÖlListe;
}


public function getStahlValue($Kennung){

    $EKStahl=0;
    try{
        $stmt = $this->db->query("SELECT `Stahl` FROM `gebiete` WHERE `Kennung` = '$Kennung'");
    
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $EKStahl=$row['Stahl'];
    
        }
    }catch(PDOException $ex) {
        echo "Fehler bei Datenbankanbindung";
    
    }

    if (isset($EKStahl)){
        return $EKStahl;
    }else{
        return false;
    }
}
public function sumStahl_total(){
    $totalStahl=0;
    $totalStahl=$this->sumStahl_A()+$this->sumStahl_E()+$this->sumStahl_C()+$this->sumStahl_R()+$this->sumStahl_F()+$this->sumStahl_I()+$this->sumStahl_J()+$this->sumStahl_D();
    if (isset($totalStahl)){
        return $totalStahl;
    }
else {
    return false;
}
}

public function sumStahl_F(){
    $sum=0;
    $StahlListe=[];
    for($i=1;$i<3;$i++){
        
       $StahlListe[$i-1]=$this->getStahlValue("F".$i);
      //if häckchen gesetzt dann sonst +0
      if(isset($_POST["F".$i])){
        $sum=$sum+$StahlListe[$i-1];
      }
       
    }
    
    return $sum;
}
public function sumStahl_I(){
    $sum=0;
    $StahlListe=[];
    for($i=1;$i<5;$i++){
        
       $StahlListe[$i-1]=$this->getStahlValue("I".$i);
      //if häckchen gesetzt dann sonst +0
      if(isset($_POST["I".$i])){
        $sum=$sum+$StahlListe[$i-1];
      }
       
    }
    
    return $sum;
}
public function sumStahl_D(){
    $sum=0;
    $StahlListe=[];
    for($i=1;$i<9;$i++){
        
       $StahlListe[$i-1]=$this->getStahlValue("D".$i);
      //if häckchen gesetzt dann sonst +0
      if(isset($_POST["D".$i])){
        $sum=$sum+$StahlListe[$i-1];
      }
       
    }
    
    return $sum;
}

public function sumStahl_J(){
    $sum=0;
    $StahlListe=[];
    for($i=1;$i<17;$i++){
        
       $StahlListe[$i-1]=$this->getStahlValue("J".$i);
      //if häckchen gesetzt dann sonst +0
      if(isset($_POST["J".$i])){
        $sum=$sum+$StahlListe[$i-1];
      }
       
    }
    
    return $sum;
}

public function sumStahl_E(){
    $sum=0;
    $StahlListe=[];
    for($i=1;$i<23;$i++){
        
       $StahlListe[$i-1]=$this->getStahlValue("E".$i);
      //if häckchen gesetzt dann sonst +0
      if(isset($_POST["E".$i])){
        $sum=$sum+$StahlListe[$i-1];
      }
       
    }
    
    return $sum;
}
public function sumStahl_C(){
    $sum=0;
    $StahlListe=[];
    for($i=1;$i<4;$i++){
        
       $StahlListe[$i-1]=$this->getStahlValue("C".$i);
      //if häckchen gesetzt dann sonst +0
      if(isset($_POST["C".$i])){
        $sum=$sum+$StahlListe[$i-1];
      }
       
    }
    
    return $sum;
}
public function sumStahl_R(){
    $sum=0;
    $StahlListe=[];
    for($i=1;$i<17;$i++){
        
       $StahlListe[$i-1]=$this->getStahlValue("R".$i);
      //if häckchen gesetzt dann sonst +0
      if(isset($_POST["R".$i])){
        $sum=$sum+$StahlListe[$i-1];
      }
       
    }
    
    return $sum;
}
public function sumStahl_A(){
    $sum=0;
    $StahlListe=[];
    for($i=1;$i<15;$i++){
        
       $StahlListe[$i-1]=$this->getStahlValue("A".$i);
      //if häckchen gesetzt dann sonst +0
      if(isset($_POST["A".$i])){
        $sum=$sum+$StahlListe[$i-1];
      }
       
    }
    
    return $sum;
}

public function getStahlListeI(){
    $StahlListe=[];
    for($i=1;$i<5;$i++){
       $StahlListe[$i-1]=$this->getStahlValue("I".$i);
    }
    return $StahlListe;
}
public function getStahlListeJ(){
    $StahlListe=[];
    for($i=1;$i<17;$i++){
       $StahlListe[$i-1]=$this->getStahlValue("J".$i);
    }
    return $StahlListe;
}
public function getStahlListeD(){
    $StahlListe=[];
    for($i=1;$i<9;$i++){
       $StahlListe[$i-1]=$this->getStahlValue("D".$i);
    }
    return $StahlListe;
}
public function getStahlListeA(){
    $StahlListe=[];
    for($i=1;$i<15;$i++){
       $StahlListe[$i-1]=$this->getStahlValue("A".$i);
    }
    return $StahlListe;
}
public function getStahlListeF(){
    $StahlListe=[];
    for($i=1;$i<3;$i++){
       $StahlListe[$i-1]=$this->getStahlValue("F".$i);
    }
    return $StahlListe;
}
public function getStahlListeR(){
    $StahlListe=[];
    for($i=1;$i<17;$i++){
       $StahlListe[$i-1]=$this->getStahlValue("R".$i);
    }
    return $StahlListe;
}
public function getStahlListeC(){
    $StahlListe=[];
    for($i=1;$i<4;$i++){
       $StahlListe[$i-1]=$this->getStahlValue("C".$i);
    }
    return $StahlListe;
}
public function getStahlListeE(){
    $StahlListe=[];
    for($i=1;$i<23;$i++){
       $StahlListe[$i-1]=$this->getStahlValue("E".$i);
    }
    return $StahlListe;
}









public function getOSRValue($Kennung){

    $EKOSR=0;
    try{
        $stmt = $this->db->query("SELECT `OSR` FROM `gebiete` WHERE `Kennung` = '$Kennung'");
    
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $EKOSR=$row['OSR'];
    
        }
    }catch(PDOException $ex) {
        echo "Fehler bei Datenbankanbindung";
    
    }

    if (isset($EKOSR)){
        return $EKOSR;
    }else{
        return false;
    }
}


//##################################


public function sumOSR_total(){
    $totalOSR=0;
    $totalOSR=$this->sumOSR_A()+$this->sumOSR_E()+$this->sumOSR_C()+$this->sumOSR_R()+$this->sumOSR_F()+$this->sumOSR_I()+$this->sumOSR_J()+$this->sumOSR_D();
    if (isset($totalOSR)){
        return $totalOSR;
    }
else {
    return false;
}
}

public function sumOSR_F(){
    $sum=0;
    $OSRListe=[];
    for($i=1;$i<3;$i++){
        
       $OSRListe[$i-1]=$this->getOSRValue("F".$i);
      //if häckchen gesetzt dann sonst +0
      if(isset($_POST["F".$i])){
        $sum=$sum+$OSRListe[$i-1];
      }
       
    }
    
    return $sum;
}
public function sumOSR_I(){
    $sum=0;
    $OSRListe=[];
    for($i=1;$i<5;$i++){
        
       $OSRListe[$i-1]=$this->getOSRValue("I".$i);
      //if häckchen gesetzt dann sonst +0
      if(isset($_POST["I".$i])){
        $sum=$sum+$OSRListe[$i-1];
      }
       
    }
    
    return $sum;
}
public function sumOSR_D(){
    $sum=0;
    $OSRListe=[];
    for($i=1;$i<9;$i++){
        
       $OSRListe[$i-1]=$this->getOSRValue("D".$i);
      //if häckchen gesetzt dann sonst +0
      if(isset($_POST["D".$i])){
        $sum=$sum+$OSRListe[$i-1];
      }
       
    }
    
    return $sum;
}

public function sumOSR_J(){
    $sum=0;
    $OSRListe=[];
    for($i=1;$i<17;$i++){
        
       $OSRListe[$i-1]=$this->getOSRValue("J".$i);
      //if häckchen gesetzt dann sonst +0
      if(isset($_POST["J".$i])){
        $sum=$sum+$OSRListe[$i-1];
      }
       
    }
    
    return $sum;
}

public function sumOSR_E(){
    $sum=0;
    $OSRListe=[];
    for($i=1;$i<23;$i++){
        
       $OSRListe[$i-1]=$this->getOSRValue("E".$i);
      //if häckchen gesetzt dann sonst +0
      if(isset($_POST["E".$i])){
        $sum=$sum+$OSRListe[$i-1];
      }
       
    }
    
    return $sum;
}
public function sumOSR_C(){
    $sum=0;
    $OSRListe=[];
    for($i=1;$i<4;$i++){
        
       $OSRListe[$i-1]=$this->getOSRValue("C".$i);
      //if häckchen gesetzt dann sonst +0
      if(isset($_POST["C".$i])){
        $sum=$sum+$OSRListe[$i-1];
      }
       
    }
    
    return $sum;
}
public function sumOSR_R(){
    $sum=0;
    $OSRListe=[];
    for($i=1;$i<17;$i++){
        
       $OSRListe[$i-1]=$this->getOSRValue("R".$i);
      //if häckchen gesetzt dann sonst +0
      if(isset($_POST["R".$i])){
        $sum=$sum+$OSRListe[$i-1];
      }
       
    }
    
    return $sum;
}
public function sumOSR_A(){
    $sum=0;
    $OSRListe=[];
    for($i=1;$i<15;$i++){
        
       $OSRListe[$i-1]=$this->getOSRValue("A".$i);
      //if häckchen gesetzt dann sonst +0
      if(isset($_POST["A".$i])){
        $sum=$sum+$OSRListe[$i-1];
      }
       
    }
    
    return $sum;
}

//################################
public function getOSRListeA(){
    $OSRListe=[];
    for($i=1;$i<15;$i++){
       $OSRListe[$i-1]=$this->getOSRValue("A".$i);
    }
    return $OSRListe;
}
public function getOSRListeF(){
    $OSRListe=[];
    for($i=1;$i<3;$i++){
       $OSRListe[$i-1]=$this->getOSRValue("F".$i);
    }
    return $OSRListe;
}
public function getOSRListeE(){
    $OSRListe=[];
    for($i=1;$i<23;$i++){
       $OSRListe[$i-1]=$this->getOSRValue("E".$i);
    }
    return $OSRListe;
}
public function getOSRListeD(){
    $OSRListe=[];
    for($i=1;$i<9;$i++){
       $OSRListe[$i-1]=$this->getOSRValue("D".$i);
    }
    return $OSRListe;
}
public function getOSRListeJ(){
    $OSRListe=[];
    for($i=1;$i<17;$i++){
       $OSRListe[$i-1]=$this->getOSRValue("J".$i);
    }
    return $OSRListe;
}
public function getOSRListeC(){
    $OSRListe=[];
    for($i=1;$i<4;$i++){
       $OSRListe[$i-1]=$this->getOSRValue("C".$i);
    }
    return $OSRListe;
}
public function getOSRListeR(){
    $OSRListe=[];
    for($i=1;$i<17;$i++){
       $OSRListe[$i-1]=$this->getOSRValue("R".$i);
    }
    return $OSRListe;
}
public function getOSRListeI(){
    $OSRListe=[];
    for($i=1;$i<5;$i++){
       $OSRListe[$i-1]=$this->getOSRValue("I".$i);
    }
    return $OSRListe;
}

}