<h1 class="display-3" style="text-decoration: underline;">Ressourcen Manager</h1>

<h2 class="display-3"><?php echo $this->Land;?></h2>


<?php // JAVASCRIPT einsetzen um das ergebnis vor dem klicken des buttons schon anzuzeigen um dann mit dem drücken des buttons direkt in die DB schreiben und zurückverlinken auf ide main page (Fraktion)<?php echo $this->sumÖL_total;?>
<script type="text/javascript"> 

function auswahl() {
var i;
var Öl=0;
var Stahl=0;
var OSR=0;
for (i=0;i<99;i++){
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="A1"){
    Öl+=12;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=12;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=8;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="A2"){
    Öl+=5;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=15;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=20;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="A3"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=0;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=6;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="A4"){
    Öl+=8;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=0;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=3;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="A5"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=0;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=5;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="A6"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=0;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=6;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="A7"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=6;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=6;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="A8"){
    Öl+=2;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=0;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=2;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="A9"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=0;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=1;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="A10"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=0;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=5;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="A11"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=0;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=1;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="A12"){
    Öl+=10;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=10;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=15;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="A13"){
    Öl+=5;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=5;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=12;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="A14"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=0;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=6;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="R1"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=0;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=4;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="R2"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=3;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=3;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="R3"){
    Öl+=1;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=0;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=3;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="R4"){
    Öl+=1;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=0;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=5;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="R5"){
    Öl+=12;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=0;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=3;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="R6"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=3;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=6;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="R7"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=1;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=1;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="R8"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=1;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=5;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="R9"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=4;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=4;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="R10"){
    Öl+=4;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=0;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=0;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="R11"){
    Öl+=4;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=0;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=1;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="R12"){
    Öl+=1;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=5;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=6;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="R13"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=0;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=2;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="R14"){
    Öl+=1;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=0;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=1;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="R15"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=0;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=1;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="R16"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=1;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=9;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="C1"){
    Öl+=3;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=0;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=6;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="C2"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=3;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=6;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="C3"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=2;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=6;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="E1"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=0;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=2;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="E2"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=2;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=5;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="E3"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=0;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=3;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="E4"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=10;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=12;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="E5"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=0;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=1;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="E6"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=0;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=2;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="E7"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=0;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=2;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="E8"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=0;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=2;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="E9"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=4;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=3;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="E10"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=0;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=1;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="E11"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=0;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=1;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="E12"){
    Öl+=1;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=0;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=3;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="E13"){
    Öl+=2;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=0;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=0;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="E14"){
    Öl+=15;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=0;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=0;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="E15"){
    Öl+=1;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=0;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=3;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="E16"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=2;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=3;
    document.getElementById("OSR").innerHTML = OSR;
  } 
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="E17"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=1;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=0;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="E18"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=8;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=0;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="E19"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=3;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=3;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="E20"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=0;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=1;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="E21"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=0;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=1;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="E22"){
    Öl+=5;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=0;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=0;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="D1"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=0;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=12;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="D2"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=6;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=12;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="D3"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=2;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=9;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="D4"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=11;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=20;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="D5"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=5;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=10;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="D6"){
    Öl+=1;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=0;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=9;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="D7"){
    Öl+=1;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=0;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=12;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="D8"){
    Öl+=8;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=0;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=6;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="F1"){
    Öl+=2;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=0;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=5;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="F2"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=2;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=7;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="I1"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=8;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=15;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="I2"){
    Öl+=6;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=0;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=3;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="I3"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=2;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=3;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="I4"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=2;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=6;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="J1"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=15;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=21;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="J2"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=3;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=5;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="J3"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=1;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=3;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="J4"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=1;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=5;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="J5"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=0;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=4;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="J6"){
    Öl+=1;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=0;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=2;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="J7"){
    Öl+=3;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=0;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=4;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="J8"){
    Öl+=1;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=0;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=1;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="J9"){
    Öl+=1;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=0;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=1;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="J10"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=0;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=2;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="J11"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=0;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=5;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="J12"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=0;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=1;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="J13"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=0;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=3;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="J14"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=0;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=1;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="J15"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=0;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=1;
    document.getElementById("OSR").innerHTML = OSR;
  }
  if (document.formcheck.elements[i].checked&&document.formcheck.elements[i].value=="J16"){
    Öl+=0;
    document.getElementById("Öl").innerHTML = Öl;
    Stahl+=0;
    document.getElementById("Stahl").innerHTML = Stahl;
    OSR+=1;
    document.getElementById("OSR").innerHTML = OSR;
  }


}

}
</script>                     

<table class="table ml-5">
  <thead>
    <tr>
      <th scope="col">Kennung</th>
      <th scope="col"><h2 id="Öl"></h2><?php echo "<img src='".URL."/public/Bilder/ÖL.JPG' alt='Öl'  width='60'>"; ?></th>
      <th scope="col"><h2 id="Stahl"></h2><?php echo "<img src='".URL."/public/Bilder/Stahl.JPG' alt='Stahl'  width='60'>"; ?></th>
      <th scope="col"><h2 id="OSR"></h2><?php echo "<img src='".URL."/public/Bilder/OSR.JPG' alt='OSR'  width='72'>"; ?></th>
    </tr>
  </thead>
  <tbody>
  <form id="form1" name="formcheck" method="POST">
  <?php for($i=1;$i<15;$i++){
?>

 <tr>
    <th scope="row"><input type="checkbox" id="<?php echo 'A'.$i;?>" value="<?php echo 'A'.$i;?>" name="<?php echo 'A'.$i;?>" value="<?php echo 'A'.$i;?>" onClick="auswahl()"> <?php echo 'A'.$i;?></th>
    <td><?php echo $this->Öl_A[$i-1]; ?></td>
    <td><?php echo $this->Stahl_A[$i-1]; ?></td>
    <td><?php echo $this->OSR_A[$i-1]; ?></td>
  </tr>

  <?php }  ?>

  <?php for($i=1;$i<4;$i++){
?>

 <tr>
    <th scope="row"><input type="checkbox" id="<?php echo 'C'.$i;?>" value="<?php echo 'C'.$i;?>" name="<?php echo 'C'.$i;?>" value="<?php echo 'C'.$i;?>" onClick="auswahl()"> <?php echo 'C'.$i;?></th>
    <td><?php echo $this->Öl_C[$i-1]; ?></td>
    <td><?php echo $this->Stahl_C[$i-1]; ?></td>
    <td><?php echo $this->OSR_C[$i-1]; ?></td>
  </tr>

  <?php }  ?>

   <?php for($i=1;$i<23;$i++){
?>

 <tr>
    <th scope="row"><input type="checkbox" id="<?php echo 'E'.$i;?>" value="<?php echo 'E'.$i;?>" name="<?php echo 'E'.$i;?>" value="<?php echo 'E'.$i;?>" onClick="auswahl()"> <?php echo 'E'.$i;?></th>
    <td><?php echo $this->Öl_E[$i-1]; ?></td>
    <td><?php echo $this->Stahl_E[$i-1]; ?></td>
    <td><?php echo $this->OSR_E[$i-1]; ?></td>
  </tr>

  <?php }  ?>
  <?php for($i=1;$i<17;$i++){
?>

 <tr>
    <th scope="row"><input type="checkbox" id="<?php echo 'R'.$i;?>" value="<?php echo 'R'.$i;?>" name="<?php echo 'R'.$i;?>" value="<?php echo 'R'.$i;?>" onClick="auswahl()"> <?php echo 'R'.$i;?></th>
    <td><?php echo $this->Öl_R[$i-1]; ?></td>
    <td><?php echo $this->Stahl_R[$i-1]; ?></td>
    <td><?php echo $this->OSR_R[$i-1]; ?></td>
  </tr>

  <?php }  ?>

<?php for($i=1;$i<3;$i++){
?>

 <tr>
    <th scope="row"><input type="checkbox" id="<?php echo 'F'.$i;?>" value="<?php echo 'F'.$i;?>" name="<?php echo 'F'.$i;?>" value="<?php echo 'F'.$i;?>" onClick="auswahl()"> <?php echo 'F'.$i;?></th>
    <td><?php echo $this->Öl_F[$i-1]; ?></td>
    <td><?php echo $this->Stahl_F[$i-1]; ?></td>
    <td><?php echo $this->OSR_F[$i-1]; ?></td>
  </tr>

  <?php }  ?>

<?php for($i=1;$i<5;$i++){
?>

 <tr>
    <th scope="row"><input type="checkbox" id="<?php echo 'I'.$i;?>" value="<?php echo 'I'.$i;?>" name="<?php echo 'I'.$i;?>" value="<?php echo 'I'.$i;?>" onClick="auswahl()"> <?php echo 'I'.$i;?></th>
    <td><?php echo $this->Öl_I[$i-1]; ?></td>
    <td><?php echo $this->Stahl_I[$i-1]; ?></td>
    <td><?php echo $this->OSR_I[$i-1]; ?></td>
  </tr>

  <?php }  ?>
  <?php for($i=1;$i<17;$i++){
?>

 <tr>
    <th scope="row"><input type="checkbox" id="<?php echo 'J'.$i;?>" value="<?php echo 'J'.$i;?>" name="<?php echo 'J'.$i;?>" value="<?php echo 'J'.$i;?>" onClick="auswahl()"> <?php echo 'J'.$i;?></th>
    <td><?php echo $this->Öl_J[$i-1]; ?></td>
    <td><?php echo $this->Stahl_J[$i-1]; ?></td>
    <td><?php echo $this->OSR_J[$i-1]; ?></td>
  </tr>

  <?php }  ?>

  <?php for($i=1;$i<9;$i++){
?>

 <tr>
    <th scope="row"><input type="checkbox" id="<?php echo 'D'.$i;?>" value="<?php echo 'D'.$i;?>" name="<?php echo 'D'.$i;?>" value="<?php echo 'D'.$i;?>" onClick="auswahl()"> <?php echo 'D'.$i;?></th>
    <td><?php echo $this->Öl_D[$i-1]; ?></td>
    <td><?php echo $this->Stahl_D[$i-1]; ?></td>
    <td><?php echo $this->OSR_D[$i-1]; ?></td>
  </tr>

  <?php }  ?>
  <input type="hidden" name="pressButton" value="true">
  <button type="submit" form="form1" value="Submit"  class="btn btn-outline-danger">Ressourcen Gutschreiben</button>
</form>

  </tbody>
</table>


