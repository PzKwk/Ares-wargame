<?php


Session_Start();


class Fraktion extends Controller {

    function __construct() {
        parent::__construct();

    }



    function index(){

        echo"kein Land ausgewählt?? oops!! informieren Sie den Admin!";
    }





    function Deutschland(){
        if (isset($_SESSION["Achse"])&&$_SESSION["Achse"]==1) {

            $this->view->Team = "Achse";
            $this->view->Bündnis = "Achsenmächte";
            $this->view->Land = "Deutschland";

            $this->view->EinkommenÖl=$this->model->getEinkommenÖl("deutschland");
            $this->view->EinkommenStahl=$this->model->getEinkommenStahl("deutschland");
            $this->view->EinkommenOSR=$this->model->getEinkommenOSR("deutschland");

            $this->view->Öl=$this->model->getÖl("deutschland");
            $this->view->Stahl=$this->model->getStahl("deutschland");
            $this->view->OSR=$this->model->getOSR("deutschland");

           
            $this->view->Anzahl=$this->model->getAnzahl("deutschland");
            $this->view->Was=$this->model->getWas("deutschland");
            $this->view->Von=$this->model->getVon("deutschland");
            $this->view->Wohin=$this->model->getWohin("deutschland");
            $this->view->MoveOil=$this->model->getMoveOil("deutschland");

            $this->view->ÖlPreis=$this->model->getÖlPreis("deutschland");
            $this->view->StahlPreis=$this->model->getStahlPreis("deutschland");
            $this->view->OSRPreis=$this->model->getOSRPreis("deutschland");

            if (isset($_GET['Anzahl'])) {
                
                $this->model->fill("deutschland");

                $this->view->Anzahl=$this->model->getAnzahl("deutschland");
                $this->view->Was=$this->model->getWas("deutschland");
                $this->view->Von=$this->model->getVon("deutschland");
                $this->view->Wohin=$this->model->getWohin("deutschland");
                $this->view->MoveOil=$this->model->getMoveOil("deutschland");

                $this->view->ÖlPreis=$this->model->getÖlPreis("deutschland");
                $this->view->StahlPreis=$this->model->getStahlPreis("deutschland");
                $this->view->OSRPreis=$this->model->getOSRPreis("deutschland");

                $this->view->Öl=$this->model->getÖl("deutschland");
                $this->view->Stahl=$this->model->getStahl("deutschland");
                $this->view->OSR=$this->model->getOSR("deutschland");
             }

            if(isset($_POST["minus"])|| isset($_POST["plus"])|| isset($_POST["löschen"])) {
               
                $this->model->SetUpdateAnzahl("deutschland");
                $this->view->Anzahl=$this->model->getAnzahl("deutschland");
               
                $this->view->ÖlPreis=$this->model->getÖlPreis("deutschland");
                $this->view->StahlPreis=$this->model->getStahlPreis("deutschland");
                $this->view->OSRPreis=$this->model->getOSRPreis("deutschland");

                $this->view->Öl=$this->model->getÖl("deutschland");
                $this->view->Stahl=$this->model->getStahl("deutschland");
                $this->view->OSR=$this->model->getOSR("deutschland");

            }

           
            if (isset($_POST["alleslöschen"])&&$_POST["alleslöschen"]== true){
                
                $this->model->delete("deutschland");

                $this->view->Anzahl=$this->model->getAnzahl("deutschland");
                $this->view->Was=$this->model->getWas("deutschland");
                $this->view->Von=$this->model->getVon("deutschland");
                $this->view->Wohin=$this->model->getWohin("deutschland");
                $this->view->MoveOil=$this->model->getMoveOil("deutschland");

                $this->view->ÖlPreis=$this->model->getÖlPreis("deutschland");
                $this->view->StahlPreis=$this->model->getStahlPreis("deutschland");
                $this->view->OSRPreis=$this->model->getOSRPreis("deutschland");

                $this->view->Öl=$this->model->getÖl("deutschland");
                $this->view->Stahl=$this->model->getStahl("deutschland");
                $this->view->OSR=$this->model->getOSR("deutschland");

            }

            if (isset($_POST["bestätigen"])&&$_POST["bestätigen"]== true){
               
                $this->model->bestätige("deutschland");
                $this->model->delete("deutschland");

                $this->view->Anzahl=$this->model->getAnzahl("deutschland");
                $this->view->Was=$this->model->getWas("deutschland");
                $this->view->Von=$this->model->getVon("deutschland");
                $this->view->Wohin=$this->model->getWohin("deutschland");
                $this->view->MoveOil=$this->model->getMoveOil("deutschland");

                $this->view->ÖlPreis=$this->model->getÖlPreis("deutschland");
                $this->view->StahlPreis=$this->model->getStahlPreis("deutschland");
                $this->view->OSRPreis=$this->model->getOSRPreis("deutschland");

                $this->view->Öl=$this->model->getÖl("deutschland");
                $this->view->Stahl=$this->model->getStahl("deutschland");
                $this->view->OSR=$this->model->getOSR("deutschland");
            }

            if (isset($_POST["neuesSpiel"])&&$_POST["neuesSpiel"]== true){
                $this->model->neuRes("deutschland");
                $this->model->neuEk("deutschland");

                $this->view->EinkommenÖl=$this->model->getEinkommenÖl("deutschland");
                $this->view->EinkommenStahl=$this->model->getEinkommenStahl("deutschland");
                $this->view->EinkommenOSR=$this->model->getEinkommenOSR("deutschland");

                $this->view->Anzahl=$this->model->getAnzahl("deutschland");
                $this->view->Was=$this->model->getWas("deutschland");
                $this->view->Von=$this->model->getVon("deutschland");
                $this->view->Wohin=$this->model->getWohin("deutschland");
                $this->view->MoveOil=$this->model->getMoveOil("deutschland");

                $this->view->ÖlPreis=$this->model->getÖlPreis("deutschland");
                $this->view->StahlPreis=$this->model->getStahlPreis("deutschland");
                $this->view->OSRPreis=$this->model->getOSRPreis("deutschland");

                $this->view->Öl=$this->model->getÖl("deutschland");
                $this->view->Stahl=$this->model->getStahl("deutschland");
                $this->view->OSR=$this->model->getOSR("deutschland");
            }
            
            


            $this->view->render('Fraktion/index');

        } else{
            echo "Access denied wtf are u doing here???";
        }
    }

    function Japan(){
        if (isset($_SESSION["Achse"])&&$_SESSION["Achse"]==1) {
            $this->view->Team = "Achse";
            $this->view->Bündnis = "Achsenmächte";
            $this->view->Land = "Japan";

            $this->view->EinkommenÖl=$this->model->getEinkommenÖl("japan");
            $this->view->EinkommenStahl=$this->model->getEinkommenStahl("japan");
            $this->view->EinkommenOSR=$this->model->getEinkommenOSR("japan");

            $this->view->Öl=$this->model->getÖl("japan");
            $this->view->Stahl=$this->model->getStahl("japan");
            $this->view->OSR=$this->model->getOSR("japan");

           
            $this->view->Anzahl=$this->model->getAnzahl("japan");
            $this->view->Was=$this->model->getWas("japan");
            $this->view->Von=$this->model->getVon("japan");
            $this->view->Wohin=$this->model->getWohin("japan");
            $this->view->MoveOil=$this->model->getMoveOil("japan");

            $this->view->ÖlPreis=$this->model->getÖlPreis("japan");
            $this->view->StahlPreis=$this->model->getStahlPreis("japan");
            $this->view->OSRPreis=$this->model->getOSRPreis("japan");

            if (isset($_GET['Anzahl'])) {
                
                $this->model->fill("japan");

                $this->view->Anzahl=$this->model->getAnzahl("japan");
                $this->view->Was=$this->model->getWas("japan");
                $this->view->Von=$this->model->getVon("japan");
                $this->view->Wohin=$this->model->getWohin("japan");
                $this->view->MoveOil=$this->model->getMoveOil("japan");

                $this->view->ÖlPreis=$this->model->getÖlPreis("japan");
                $this->view->StahlPreis=$this->model->getStahlPreis("japan");
                $this->view->OSRPreis=$this->model->getOSRPreis("japan");

                $this->view->Öl=$this->model->getÖl("japan");
                $this->view->Stahl=$this->model->getStahl("japan");
                $this->view->OSR=$this->model->getOSR("japan");
             }

            if(isset($_POST["minus"])|| isset($_POST["plus"])|| isset($_POST["löschen"])) {
               
                $this->model->SetUpdateAnzahl("japan");
                $this->view->Anzahl=$this->model->getAnzahl("japan");
               
                $this->view->ÖlPreis=$this->model->getÖlPreis("japan");
                $this->view->StahlPreis=$this->model->getStahlPreis("japan");
                $this->view->OSRPreis=$this->model->getOSRPreis("japan");

                $this->view->Öl=$this->model->getÖl("japan");
                $this->view->Stahl=$this->model->getStahl("japan");
                $this->view->OSR=$this->model->getOSR("japan");

            }

           
            if (isset($_POST["alleslöschen"])&&$_POST["alleslöschen"]== true){
                
                $this->model->delete("japan");

                $this->view->Anzahl=$this->model->getAnzahl("japan");
                $this->view->Was=$this->model->getWas("japan");
                $this->view->Von=$this->model->getVon("japan");
                $this->view->Wohin=$this->model->getWohin("japan");
                $this->view->MoveOil=$this->model->getMoveOil("japan");

                $this->view->ÖlPreis=$this->model->getÖlPreis("japan");
                $this->view->StahlPreis=$this->model->getStahlPreis("japan");
                $this->view->OSRPreis=$this->model->getOSRPreis("japan");

                $this->view->Öl=$this->model->getÖl("japan");
                $this->view->Stahl=$this->model->getStahl("japan");
                $this->view->OSR=$this->model->getOSR("japan");

            }

            if (isset($_POST["bestätigen"])&&$_POST["bestätigen"]== true){
               
                $this->model->bestätige("japan");
                $this->model->delete("japan");

                $this->view->Anzahl=$this->model->getAnzahl("japan");
                $this->view->Was=$this->model->getWas("japan");
                $this->view->Von=$this->model->getVon("japan");
                $this->view->Wohin=$this->model->getWohin("japan");
                $this->view->MoveOil=$this->model->getMoveOil("japan");

                $this->view->ÖlPreis=$this->model->getÖlPreis("japan");
                $this->view->StahlPreis=$this->model->getStahlPreis("japan");
                $this->view->OSRPreis=$this->model->getOSRPreis("japan");

                $this->view->Öl=$this->model->getÖl("japan");
                $this->view->Stahl=$this->model->getStahl("japan");
                $this->view->OSR=$this->model->getOSR("japan");
            }

            if (isset($_POST["neuesSpiel"])&&$_POST["neuesSpiel"]== true){
                $this->model->neuRes("japan");
                $this->model->neuEk("japan");

                $this->view->EinkommenÖl=$this->model->getEinkommenÖl("japan");
                $this->view->EinkommenStahl=$this->model->getEinkommenStahl("japan");
                $this->view->EinkommenOSR=$this->model->getEinkommenOSR("japan");

                $this->view->Anzahl=$this->model->getAnzahl("japan");
                $this->view->Was=$this->model->getWas("japan");
                $this->view->Von=$this->model->getVon("japan");
                $this->view->Wohin=$this->model->getWohin("japan");
                $this->view->MoveOil=$this->model->getMoveOil("japan");

                $this->view->ÖlPreis=$this->model->getÖlPreis("japan");
                $this->view->StahlPreis=$this->model->getStahlPreis("japan");
                $this->view->OSRPreis=$this->model->getOSRPreis("japan");

                $this->view->Öl=$this->model->getÖl("japan");
                $this->view->Stahl=$this->model->getStahl("japan");
                $this->view->OSR=$this->model->getOSR("japan");
            }
            $this->view->render('Fraktion/index');
        } else{
            echo "Access denied wtf are u doing here???";
        }
    }

    function Italien(){
        if (isset($_SESSION["Achse"])&&$_SESSION["Achse"]==1) {
            $this->view->Team = "Achse";
            $this->view->Bündnis = "Achsenmächte";
            $this->view->Land = "Italien";

            $this->view->EinkommenÖl=$this->model->getEinkommenÖl("italien");
            $this->view->EinkommenStahl=$this->model->getEinkommenStahl("italien");
            $this->view->EinkommenOSR=$this->model->getEinkommenOSR("italien");

            $this->view->Öl=$this->model->getÖl("italien");
            $this->view->Stahl=$this->model->getStahl("italien");
            $this->view->OSR=$this->model->getOSR("italien");

           
            $this->view->Anzahl=$this->model->getAnzahl("italien");
            $this->view->Was=$this->model->getWas("italien");
            $this->view->Von=$this->model->getVon("italien");
            $this->view->Wohin=$this->model->getWohin("italien");
            $this->view->MoveOil=$this->model->getMoveOil("italien");

            $this->view->ÖlPreis=$this->model->getÖlPreis("italien");
            $this->view->StahlPreis=$this->model->getStahlPreis("italien");
            $this->view->OSRPreis=$this->model->getOSRPreis("italien");

            if (isset($_GET['Anzahl'])) {
                
                $this->model->fill("italien");

                $this->view->Anzahl=$this->model->getAnzahl("italien");
                $this->view->Was=$this->model->getWas("italien");
                $this->view->Von=$this->model->getVon("italien");
                $this->view->Wohin=$this->model->getWohin("italien");
                $this->view->MoveOil=$this->model->getMoveOil("italien");

                $this->view->ÖlPreis=$this->model->getÖlPreis("italien");
                $this->view->StahlPreis=$this->model->getStahlPreis("italien");
                $this->view->OSRPreis=$this->model->getOSRPreis("italien");

                $this->view->Öl=$this->model->getÖl("italien");
                $this->view->Stahl=$this->model->getStahl("italien");
                $this->view->OSR=$this->model->getOSR("italien");
             }

            if(isset($_POST["minus"])|| isset($_POST["plus"])|| isset($_POST["löschen"])) {
               
                $this->model->SetUpdateAnzahl("italien");
                $this->view->Anzahl=$this->model->getAnzahl("italien");
               
                $this->view->ÖlPreis=$this->model->getÖlPreis("italien");
                $this->view->StahlPreis=$this->model->getStahlPreis("italien");
                $this->view->OSRPreis=$this->model->getOSRPreis("italien");

                $this->view->Öl=$this->model->getÖl("italien");
                $this->view->Stahl=$this->model->getStahl("italien");
                $this->view->OSR=$this->model->getOSR("italien");

            }

           
            if (isset($_POST["alleslöschen"])&&$_POST["alleslöschen"]== true){
                
                $this->model->delete("italien");

                $this->view->Anzahl=$this->model->getAnzahl("italien");
                $this->view->Was=$this->model->getWas("italien");
                $this->view->Von=$this->model->getVon("italien");
                $this->view->Wohin=$this->model->getWohin("italien");
                $this->view->MoveOil=$this->model->getMoveOil("italien");

                $this->view->ÖlPreis=$this->model->getÖlPreis("italien");
                $this->view->StahlPreis=$this->model->getStahlPreis("italien");
                $this->view->OSRPreis=$this->model->getOSRPreis("italien");

                $this->view->Öl=$this->model->getÖl("italien");
                $this->view->Stahl=$this->model->getStahl("italien");
                $this->view->OSR=$this->model->getOSR("italien");

            }

            if (isset($_POST["bestätigen"])&&$_POST["bestätigen"]== true){
               
                $this->model->bestätige("italien");
                $this->model->delete("italien");

                $this->view->Anzahl=$this->model->getAnzahl("italien");
                $this->view->Was=$this->model->getWas("italien");
                $this->view->Von=$this->model->getVon("italien");
                $this->view->Wohin=$this->model->getWohin("italien");
                $this->view->MoveOil=$this->model->getMoveOil("italien");

                $this->view->ÖlPreis=$this->model->getÖlPreis("italien");
                $this->view->StahlPreis=$this->model->getStahlPreis("italien");
                $this->view->OSRPreis=$this->model->getOSRPreis("italien");

                $this->view->Öl=$this->model->getÖl("italien");
                $this->view->Stahl=$this->model->getStahl("italien");
                $this->view->OSR=$this->model->getOSR("italien");
            }

            if (isset($_POST["neuesSpiel"])&&$_POST["neuesSpiel"]== true){
                $this->model->neuRes("italien");
                $this->model->neuEk("italien");

                $this->view->EinkommenÖl=$this->model->getEinkommenÖl("italien");
                $this->view->EinkommenStahl=$this->model->getEinkommenStahl("italien");
                $this->view->EinkommenOSR=$this->model->getEinkommenOSR("italien");

                $this->view->Anzahl=$this->model->getAnzahl("italien");
                $this->view->Was=$this->model->getWas("italien");
                $this->view->Von=$this->model->getVon("italien");
                $this->view->Wohin=$this->model->getWohin("italien");
                $this->view->MoveOil=$this->model->getMoveOil("italien");

                $this->view->ÖlPreis=$this->model->getÖlPreis("italien");
                $this->view->StahlPreis=$this->model->getStahlPreis("italien");
                $this->view->OSRPreis=$this->model->getOSRPreis("italien");

                $this->view->Öl=$this->model->getÖl("italien");
                $this->view->Stahl=$this->model->getStahl("italien");
                $this->view->OSR=$this->model->getOSR("italien");
            }
            
            $this->view->render('Fraktion/index');
        } else{
            echo "Access denied wtf are u doing here???";
        }
    }
    function Finnland(){
        if (isset($_SESSION["Achse"])&&$_SESSION["Achse"]==1) {
            $this->view->Team = "Achse";
            $this->view->Bündnis = "Achsenmächte";
            $this->view->Land = "Finnland";

            $this->view->EinkommenÖl=$this->model->getEinkommenÖl("finnland");
            $this->view->EinkommenStahl=$this->model->getEinkommenStahl("finnland");
            $this->view->EinkommenOSR=$this->model->getEinkommenOSR("finnland");

            $this->view->Öl=$this->model->getÖl("finnland");
            $this->view->Stahl=$this->model->getStahl("finnland");
            $this->view->OSR=$this->model->getOSR("finnland");

           
            $this->view->Anzahl=$this->model->getAnzahl("finnland");
            $this->view->Was=$this->model->getWas("finnland");
            $this->view->Von=$this->model->getVon("finnland");
            $this->view->Wohin=$this->model->getWohin("finnland");
            $this->view->MoveOil=$this->model->getMoveOil("finnland");

            $this->view->ÖlPreis=$this->model->getÖlPreis("finnland");
            $this->view->StahlPreis=$this->model->getStahlPreis("finnland");
            $this->view->OSRPreis=$this->model->getOSRPreis("finnland");

            if (isset($_GET['Anzahl'])) {
                
                $this->model->fill("finnland");

                $this->view->Anzahl=$this->model->getAnzahl("finnland");
                $this->view->Was=$this->model->getWas("finnland");
                $this->view->Von=$this->model->getVon("finnland");
                $this->view->Wohin=$this->model->getWohin("finnland");
                $this->view->MoveOil=$this->model->getMoveOil("finnland");

                $this->view->ÖlPreis=$this->model->getÖlPreis("finnland");
                $this->view->StahlPreis=$this->model->getStahlPreis("finnland");
                $this->view->OSRPreis=$this->model->getOSRPreis("finnland");

                $this->view->Öl=$this->model->getÖl("finnland");
                $this->view->Stahl=$this->model->getStahl("finnland");
                $this->view->OSR=$this->model->getOSR("finnland");
             }

            if(isset($_POST["minus"])|| isset($_POST["plus"])|| isset($_POST["löschen"])) {
               
                $this->model->SetUpdateAnzahl("finnland");
                $this->view->Anzahl=$this->model->getAnzahl("finnland");
               
                $this->view->ÖlPreis=$this->model->getÖlPreis("finnland");
                $this->view->StahlPreis=$this->model->getStahlPreis("finnland");
                $this->view->OSRPreis=$this->model->getOSRPreis("finnland");

                $this->view->Öl=$this->model->getÖl("finnland");
                $this->view->Stahl=$this->model->getStahl("finnland");
                $this->view->OSR=$this->model->getOSR("finnland");

            }

           
            if (isset($_POST["alleslöschen"])&&$_POST["alleslöschen"]== true){
                
                $this->model->delete("finnland");

                $this->view->Anzahl=$this->model->getAnzahl("finnland");
                $this->view->Was=$this->model->getWas("finnland");
                $this->view->Von=$this->model->getVon("finnland");
                $this->view->Wohin=$this->model->getWohin("finnland");
                $this->view->MoveOil=$this->model->getMoveOil("finnland");

                $this->view->ÖlPreis=$this->model->getÖlPreis("finnland");
                $this->view->StahlPreis=$this->model->getStahlPreis("finnland");
                $this->view->OSRPreis=$this->model->getOSRPreis("finnland");

                $this->view->Öl=$this->model->getÖl("finnland");
                $this->view->Stahl=$this->model->getStahl("finnland");
                $this->view->OSR=$this->model->getOSR("finnland");

            }

            if (isset($_POST["bestätigen"])&&$_POST["bestätigen"]== true){
               
                $this->model->bestätige("finnland");
                $this->model->delete("finnland");

                $this->view->Anzahl=$this->model->getAnzahl("finnland");
                $this->view->Was=$this->model->getWas("finnland");
                $this->view->Von=$this->model->getVon("finnland");
                $this->view->Wohin=$this->model->getWohin("finnland");
                $this->view->MoveOil=$this->model->getMoveOil("finnland");

                $this->view->ÖlPreis=$this->model->getÖlPreis("finnland");
                $this->view->StahlPreis=$this->model->getStahlPreis("finnland");
                $this->view->OSRPreis=$this->model->getOSRPreis("finnland");

                $this->view->Öl=$this->model->getÖl("finnland");
                $this->view->Stahl=$this->model->getStahl("finnland");
                $this->view->OSR=$this->model->getOSR("finnland");
            }

            if (isset($_POST["neuesSpiel"])&&$_POST["neuesSpiel"]== true){
                $this->model->neuRes("finnland");
                $this->model->neuEk("finnland");

                $this->view->EinkommenÖl=$this->model->getEinkommenÖl("finnland");
                $this->view->EinkommenStahl=$this->model->getEinkommenStahl("finnland");
                $this->view->EinkommenOSR=$this->model->getEinkommenOSR("finnland");

                $this->view->Anzahl=$this->model->getAnzahl("finnland");
                $this->view->Was=$this->model->getWas("finnland");
                $this->view->Von=$this->model->getVon("finnland");
                $this->view->Wohin=$this->model->getWohin("finnland");
                $this->view->MoveOil=$this->model->getMoveOil("finnland");

                $this->view->ÖlPreis=$this->model->getÖlPreis("finnland");
                $this->view->StahlPreis=$this->model->getStahlPreis("finnland");
                $this->view->OSRPreis=$this->model->getOSRPreis("finnland");

                $this->view->Öl=$this->model->getÖl("finnland");
                $this->view->Stahl=$this->model->getStahl("finnland");
                $this->view->OSR=$this->model->getOSR("finnland");
            }
            
            


            $this->view->render('Fraktion/index');



        } else{
            echo "Access denied wtf are u doing here???";
        }
    }

    function USA()
    {
        if (isset($_SESSION["Allies"]) && $_SESSION["Allies"] == 1) {

            $this->view->Team = "Allies";
            $this->view->Bündnis = "Alliierte";
            $this->view->Land = "USA";


            $this->view->EinkommenÖl=$this->model->getEinkommenÖl("usa");
            $this->view->EinkommenStahl=$this->model->getEinkommenStahl("usa");
            $this->view->EinkommenOSR=$this->model->getEinkommenOSR("usa");

            $this->view->Öl=$this->model->getÖl("usa");
            $this->view->Stahl=$this->model->getStahl("usa");
            $this->view->OSR=$this->model->getOSR("usa");

           
            $this->view->Anzahl=$this->model->getAnzahl("usa");
            $this->view->Was=$this->model->getWas("usa");
            $this->view->Von=$this->model->getVon("usa");
            $this->view->Wohin=$this->model->getWohin("usa");
            $this->view->MoveOil=$this->model->getMoveOil("usa");

            $this->view->ÖlPreis=$this->model->getÖlPreis("usa");
            $this->view->StahlPreis=$this->model->getStahlPreis("usa");
            $this->view->OSRPreis=$this->model->getOSRPreis("usa");

            if (isset($_GET['Anzahl'])) {
                
                $this->model->fill("usa");

                $this->view->Anzahl=$this->model->getAnzahl("usa");
                $this->view->Was=$this->model->getWas("usa");
                $this->view->Von=$this->model->getVon("usa");
                $this->view->Wohin=$this->model->getWohin("usa");
                $this->view->MoveOil=$this->model->getMoveOil("usa");

                $this->view->ÖlPreis=$this->model->getÖlPreis("usa");
                $this->view->StahlPreis=$this->model->getStahlPreis("usa");
                $this->view->OSRPreis=$this->model->getOSRPreis("usa");

                $this->view->Öl=$this->model->getÖl("usa");
                $this->view->Stahl=$this->model->getStahl("usa");
                $this->view->OSR=$this->model->getOSR("usa");
             }

            if(isset($_POST["minus"])|| isset($_POST["plus"])|| isset($_POST["löschen"])) {
               
                $this->model->SetUpdateAnzahl("usa");
                $this->view->Anzahl=$this->model->getAnzahl("usa");
               
                $this->view->ÖlPreis=$this->model->getÖlPreis("usa");
                $this->view->StahlPreis=$this->model->getStahlPreis("usa");
                $this->view->OSRPreis=$this->model->getOSRPreis("usa");

                $this->view->Öl=$this->model->getÖl("usa");
                $this->view->Stahl=$this->model->getStahl("usa");
                $this->view->OSR=$this->model->getOSR("usa");

            }

           
            if (isset($_POST["alleslöschen"])&&$_POST["alleslöschen"]== true){
                
                $this->model->delete("usa");

                $this->view->Anzahl=$this->model->getAnzahl("usa");
                $this->view->Was=$this->model->getWas("usa");
                $this->view->Von=$this->model->getVon("usa");
                $this->view->Wohin=$this->model->getWohin("usa");
                $this->view->MoveOil=$this->model->getMoveOil("usa");

                $this->view->ÖlPreis=$this->model->getÖlPreis("usa");
                $this->view->StahlPreis=$this->model->getStahlPreis("usa");
                $this->view->OSRPreis=$this->model->getOSRPreis("usa");

                $this->view->Öl=$this->model->getÖl("usa");
                $this->view->Stahl=$this->model->getStahl("usa");
                $this->view->OSR=$this->model->getOSR("usa");

            }

            if (isset($_POST["bestätigen"])&&$_POST["bestätigen"]== true){
               
                $this->model->bestätige("usa");
                $this->model->delete("usa");

                $this->view->Anzahl=$this->model->getAnzahl("usa");
                $this->view->Was=$this->model->getWas("usa");
                $this->view->Von=$this->model->getVon("usa");
                $this->view->Wohin=$this->model->getWohin("usa");
                $this->view->MoveOil=$this->model->getMoveOil("usa");

                $this->view->ÖlPreis=$this->model->getÖlPreis("usa");
                $this->view->StahlPreis=$this->model->getStahlPreis("usa");
                $this->view->OSRPreis=$this->model->getOSRPreis("usa");

                $this->view->Öl=$this->model->getÖl("usa");
                $this->view->Stahl=$this->model->getStahl("usa");
                $this->view->OSR=$this->model->getOSR("usa");
            }

            if (isset($_POST["neuesSpiel"])&&$_POST["neuesSpiel"]== true){
                $this->model->neuRes("usa");
                $this->model->neuEk("usa");

                $this->view->EinkommenÖl=$this->model->getEinkommenÖl("usa");
                $this->view->EinkommenStahl=$this->model->getEinkommenStahl("usa");
                $this->view->EinkommenOSR=$this->model->getEinkommenOSR("usa");

                $this->view->Anzahl=$this->model->getAnzahl("usa");
                $this->view->Was=$this->model->getWas("usa");
                $this->view->Von=$this->model->getVon("usa");
                $this->view->Wohin=$this->model->getWohin("usa");
                $this->view->MoveOil=$this->model->getMoveOil("usa");

                $this->view->ÖlPreis=$this->model->getÖlPreis("usa");
                $this->view->StahlPreis=$this->model->getStahlPreis("usa");
                $this->view->OSRPreis=$this->model->getOSRPreis("usa");

                $this->view->Öl=$this->model->getÖl("usa");
                $this->view->Stahl=$this->model->getStahl("usa");
                $this->view->OSR=$this->model->getOSR("usa");
            }
            
            


            $this->view->render('Fraktion/index');

        } else{
            echo "Access denied wtf are u doing here???";
        }
    }

    function England()
    {
        if (isset($_SESSION["Allies"]) && $_SESSION["Allies"] == 1) {

            $this->view->Team = "Allies";
            $this->view->Bündnis = "Alliierte";
            $this->view->Land = "England";


            $this->view->EinkommenÖl=$this->model->getEinkommenÖl("england");
            $this->view->EinkommenStahl=$this->model->getEinkommenStahl("england");
            $this->view->EinkommenOSR=$this->model->getEinkommenOSR("england");

            $this->view->Öl=$this->model->getÖl("england");
            $this->view->Stahl=$this->model->getStahl("england");
            $this->view->OSR=$this->model->getOSR("england");

           
            $this->view->Anzahl=$this->model->getAnzahl("england");
            $this->view->Was=$this->model->getWas("england");
            $this->view->Von=$this->model->getVon("england");
            $this->view->Wohin=$this->model->getWohin("england");
            $this->view->MoveOil=$this->model->getMoveOil("england");

            $this->view->ÖlPreis=$this->model->getÖlPreis("england");
            $this->view->StahlPreis=$this->model->getStahlPreis("england");
            $this->view->OSRPreis=$this->model->getOSRPreis("england");

            if (isset($_GET['Anzahl'])) {
                
                $this->model->fill("england");

                $this->view->Anzahl=$this->model->getAnzahl("england");
                $this->view->Was=$this->model->getWas("england");
                $this->view->Von=$this->model->getVon("england");
                $this->view->Wohin=$this->model->getWohin("england");
                $this->view->MoveOil=$this->model->getMoveOil("england");

                $this->view->ÖlPreis=$this->model->getÖlPreis("england");
                $this->view->StahlPreis=$this->model->getStahlPreis("england");
                $this->view->OSRPreis=$this->model->getOSRPreis("england");

                $this->view->Öl=$this->model->getÖl("england");
                $this->view->Stahl=$this->model->getStahl("england");
                $this->view->OSR=$this->model->getOSR("england");
             }

            if(isset($_POST["minus"])|| isset($_POST["plus"])|| isset($_POST["löschen"])) {
               
                $this->model->SetUpdateAnzahl("england");
                $this->view->Anzahl=$this->model->getAnzahl("england");
               
                $this->view->ÖlPreis=$this->model->getÖlPreis("england");
                $this->view->StahlPreis=$this->model->getStahlPreis("england");
                $this->view->OSRPreis=$this->model->getOSRPreis("england");

                $this->view->Öl=$this->model->getÖl("england");
                $this->view->Stahl=$this->model->getStahl("england");
                $this->view->OSR=$this->model->getOSR("england");

            }

           
            if (isset($_POST["alleslöschen"])&&$_POST["alleslöschen"]== true){
                
                $this->model->delete("england");

                $this->view->Anzahl=$this->model->getAnzahl("england");
                $this->view->Was=$this->model->getWas("england");
                $this->view->Von=$this->model->getVon("england");
                $this->view->Wohin=$this->model->getWohin("england");
                $this->view->MoveOil=$this->model->getMoveOil("england");

                $this->view->ÖlPreis=$this->model->getÖlPreis("england");
                $this->view->StahlPreis=$this->model->getStahlPreis("england");
                $this->view->OSRPreis=$this->model->getOSRPreis("england");

                $this->view->Öl=$this->model->getÖl("england");
                $this->view->Stahl=$this->model->getStahl("england");
                $this->view->OSR=$this->model->getOSR("england");

            }

            if (isset($_POST["bestätigen"])&&$_POST["bestätigen"]== true){
               
                $this->model->bestätige("england");
                $this->model->delete("england");

                $this->view->Anzahl=$this->model->getAnzahl("england");
                $this->view->Was=$this->model->getWas("england");
                $this->view->Von=$this->model->getVon("england");
                $this->view->Wohin=$this->model->getWohin("england");
                $this->view->MoveOil=$this->model->getMoveOil("england");

                $this->view->ÖlPreis=$this->model->getÖlPreis("england");
                $this->view->StahlPreis=$this->model->getStahlPreis("england");
                $this->view->OSRPreis=$this->model->getOSRPreis("england");

                $this->view->Öl=$this->model->getÖl("england");
                $this->view->Stahl=$this->model->getStahl("england");
                $this->view->OSR=$this->model->getOSR("england");
            }

            if (isset($_POST["neuesSpiel"])&&$_POST["neuesSpiel"]== true){
                $this->model->neuRes("england");
                $this->model->neuEk("england");

                $this->view->EinkommenÖl=$this->model->getEinkommenÖl("england");
                $this->view->EinkommenStahl=$this->model->getEinkommenStahl("england");
                $this->view->EinkommenOSR=$this->model->getEinkommenOSR("england");

                $this->view->Anzahl=$this->model->getAnzahl("england");
                $this->view->Was=$this->model->getWas("england");
                $this->view->Von=$this->model->getVon("england");
                $this->view->Wohin=$this->model->getWohin("england");
                $this->view->MoveOil=$this->model->getMoveOil("england");

                $this->view->ÖlPreis=$this->model->getÖlPreis("england");
                $this->view->StahlPreis=$this->model->getStahlPreis("england");
                $this->view->OSRPreis=$this->model->getOSRPreis("england");

                $this->view->Öl=$this->model->getÖl("england");
                $this->view->Stahl=$this->model->getStahl("england");
                $this->view->OSR=$this->model->getOSR("england");
            }
            
            


            $this->view->render('Fraktion/index');


        } else{
            echo "Access denied wtf are u doing here???";
        }
    }

    function Russland()
    {
        if (isset($_SESSION["Allies"]) && $_SESSION["Allies"] == 1) {


            $this->view->Team = "Allies";
            $this->view->Bündnis = "Alliierte";
            $this->view->Land = "Russland";



           $this->view->EinkommenÖl=$this->model->getEinkommenÖl("russland");
            $this->view->EinkommenStahl=$this->model->getEinkommenStahl("russland");
            $this->view->EinkommenOSR=$this->model->getEinkommenOSR("russland");

            $this->view->Öl=$this->model->getÖl("russland");
            $this->view->Stahl=$this->model->getStahl("russland");
            $this->view->OSR=$this->model->getOSR("russland");

           
            $this->view->Anzahl=$this->model->getAnzahl("russland");
            $this->view->Was=$this->model->getWas("russland");
            $this->view->Von=$this->model->getVon("russland");
            $this->view->Wohin=$this->model->getWohin("russland");
            $this->view->MoveOil=$this->model->getMoveOil("russland");

            $this->view->ÖlPreis=$this->model->getÖlPreis("russland");
            $this->view->StahlPreis=$this->model->getStahlPreis("russland");
            $this->view->OSRPreis=$this->model->getOSRPreis("russland");

            if (isset($_GET['Anzahl'])) {
                
                $this->model->fill("russland");

                $this->view->Anzahl=$this->model->getAnzahl("russland");
                $this->view->Was=$this->model->getWas("russland");
                $this->view->Von=$this->model->getVon("russland");
                $this->view->Wohin=$this->model->getWohin("russland");
                $this->view->MoveOil=$this->model->getMoveOil("russland");

                $this->view->ÖlPreis=$this->model->getÖlPreis("russland");
                $this->view->StahlPreis=$this->model->getStahlPreis("russland");
                $this->view->OSRPreis=$this->model->getOSRPreis("russland");

                $this->view->Öl=$this->model->getÖl("russland");
                $this->view->Stahl=$this->model->getStahl("russland");
                $this->view->OSR=$this->model->getOSR("russland");
             }

            if(isset($_POST["minus"])|| isset($_POST["plus"])|| isset($_POST["löschen"])) {
               
                $this->model->SetUpdateAnzahl("russland");
                $this->view->Anzahl=$this->model->getAnzahl("russland");
               
                $this->view->ÖlPreis=$this->model->getÖlPreis("russland");
                $this->view->StahlPreis=$this->model->getStahlPreis("russland");
                $this->view->OSRPreis=$this->model->getOSRPreis("russland");

                $this->view->Öl=$this->model->getÖl("russland");
                $this->view->Stahl=$this->model->getStahl("russland");
                $this->view->OSR=$this->model->getOSR("russland");

            }

           
            if (isset($_POST["alleslöschen"])&&$_POST["alleslöschen"]== true){
                
                $this->model->delete("russland");

                $this->view->Anzahl=$this->model->getAnzahl("russland");
                $this->view->Was=$this->model->getWas("russland");
                $this->view->Von=$this->model->getVon("russland");
                $this->view->Wohin=$this->model->getWohin("russland");
                $this->view->MoveOil=$this->model->getMoveOil("russland");

                $this->view->ÖlPreis=$this->model->getÖlPreis("russland");
                $this->view->StahlPreis=$this->model->getStahlPreis("russland");
                $this->view->OSRPreis=$this->model->getOSRPreis("russland");

                $this->view->Öl=$this->model->getÖl("russland");
                $this->view->Stahl=$this->model->getStahl("russland");
                $this->view->OSR=$this->model->getOSR("russland");

            }

            if (isset($_POST["bestätigen"])&&$_POST["bestätigen"]== true){
               
                $this->model->bestätige("russland");
                $this->model->delete("russland");

                $this->view->Anzahl=$this->model->getAnzahl("russland");
                $this->view->Was=$this->model->getWas("russland");
                $this->view->Von=$this->model->getVon("russland");
                $this->view->Wohin=$this->model->getWohin("russland");
                $this->view->MoveOil=$this->model->getMoveOil("russland");

                $this->view->ÖlPreis=$this->model->getÖlPreis("russland");
                $this->view->StahlPreis=$this->model->getStahlPreis("russland");
                $this->view->OSRPreis=$this->model->getOSRPreis("russland");

                $this->view->Öl=$this->model->getÖl("russland");
                $this->view->Stahl=$this->model->getStahl("russland");
                $this->view->OSR=$this->model->getOSR("russland");
            }

            if (isset($_POST["neuesSpiel"])&&$_POST["neuesSpiel"]== true){
                $this->model->neuRes("russland");
                $this->model->neuEk("russland");

                $this->view->EinkommenÖl=$this->model->getEinkommenÖl("russland");
                $this->view->EinkommenStahl=$this->model->getEinkommenStahl("russland");
                $this->view->EinkommenOSR=$this->model->getEinkommenOSR("russland");

                $this->view->Anzahl=$this->model->getAnzahl("russland");
                $this->view->Was=$this->model->getWas("russland");
                $this->view->Von=$this->model->getVon("russland");
                $this->view->Wohin=$this->model->getWohin("russland");
                $this->view->MoveOil=$this->model->getMoveOil("russland");

                $this->view->ÖlPreis=$this->model->getÖlPreis("russland");
                $this->view->StahlPreis=$this->model->getStahlPreis("russland");
                $this->view->OSRPreis=$this->model->getOSRPreis("russland");

                $this->view->Öl=$this->model->getÖl("russland");
                $this->view->Stahl=$this->model->getStahl("russland");
                $this->view->OSR=$this->model->getOSR("russland");
            }
            
            


            $this->view->render('Fraktion/index');

        } else{
            echo "Access denied wtf are u doing here???";
        }
    }

    function China()
    {
        if (isset($_SESSION["Allies"]) && $_SESSION["Allies"] == 1) {
            $this->view->Team = "Allies";
            $this->view->Bündnis = "Alliierte";
            $this->view->Land = "China";


            $this->view->EinkommenÖl=$this->model->getEinkommenÖl("china");
            $this->view->EinkommenStahl=$this->model->getEinkommenStahl("china");
            $this->view->EinkommenOSR=$this->model->getEinkommenOSR("china");

            $this->view->Öl=$this->model->getÖl("china");
            $this->view->Stahl=$this->model->getStahl("china");
            $this->view->OSR=$this->model->getOSR("china");

           
            $this->view->Anzahl=$this->model->getAnzahl("china");
            $this->view->Was=$this->model->getWas("china");
            $this->view->Von=$this->model->getVon("china");
            $this->view->Wohin=$this->model->getWohin("china");
            $this->view->MoveOil=$this->model->getMoveOil("china");

            $this->view->ÖlPreis=$this->model->getÖlPreis("china");
            $this->view->StahlPreis=$this->model->getStahlPreis("china");
            $this->view->OSRPreis=$this->model->getOSRPreis("china");

            if (isset($_GET['Anzahl'])) {
                
                $this->model->fill("china");

                $this->view->Anzahl=$this->model->getAnzahl("china");
                $this->view->Was=$this->model->getWas("china");
                $this->view->Von=$this->model->getVon("china");
                $this->view->Wohin=$this->model->getWohin("china");
                $this->view->MoveOil=$this->model->getMoveOil("china");

                $this->view->ÖlPreis=$this->model->getÖlPreis("china");
                $this->view->StahlPreis=$this->model->getStahlPreis("china");
                $this->view->OSRPreis=$this->model->getOSRPreis("china");

                $this->view->Öl=$this->model->getÖl("china");
                $this->view->Stahl=$this->model->getStahl("china");
                $this->view->OSR=$this->model->getOSR("china");
             }

            if(isset($_POST["minus"])|| isset($_POST["plus"])|| isset($_POST["löschen"])) {
               
                $this->model->SetUpdateAnzahl("china");
                $this->view->Anzahl=$this->model->getAnzahl("china");
               
                $this->view->ÖlPreis=$this->model->getÖlPreis("china");
                $this->view->StahlPreis=$this->model->getStahlPreis("china");
                $this->view->OSRPreis=$this->model->getOSRPreis("china");

                $this->view->Öl=$this->model->getÖl("china");
                $this->view->Stahl=$this->model->getStahl("china");
                $this->view->OSR=$this->model->getOSR("china");

            }

           
            if (isset($_POST["alleslöschen"])&&$_POST["alleslöschen"]== true){
                
                $this->model->delete("china");

                $this->view->Anzahl=$this->model->getAnzahl("china");
                $this->view->Was=$this->model->getWas("china");
                $this->view->Von=$this->model->getVon("china");
                $this->view->Wohin=$this->model->getWohin("china");
                $this->view->MoveOil=$this->model->getMoveOil("china");

                $this->view->ÖlPreis=$this->model->getÖlPreis("china");
                $this->view->StahlPreis=$this->model->getStahlPreis("china");
                $this->view->OSRPreis=$this->model->getOSRPreis("china");

                $this->view->Öl=$this->model->getÖl("china");
                $this->view->Stahl=$this->model->getStahl("china");
                $this->view->OSR=$this->model->getOSR("china");

            }

            if (isset($_POST["bestätigen"])&&$_POST["bestätigen"]== true){
               
                $this->model->bestätige("china");
                $this->model->delete("china");

                $this->view->Anzahl=$this->model->getAnzahl("china");
                $this->view->Was=$this->model->getWas("china");
                $this->view->Von=$this->model->getVon("china");
                $this->view->Wohin=$this->model->getWohin("china");
                $this->view->MoveOil=$this->model->getMoveOil("china");

                $this->view->ÖlPreis=$this->model->getÖlPreis("china");
                $this->view->StahlPreis=$this->model->getStahlPreis("china");
                $this->view->OSRPreis=$this->model->getOSRPreis("china");

                $this->view->Öl=$this->model->getÖl("china");
                $this->view->Stahl=$this->model->getStahl("china");
                $this->view->OSR=$this->model->getOSR("china");
            }

            if (isset($_POST["neuesSpiel"])&&$_POST["neuesSpiel"]== true){
                $this->model->neuRes("china");
                $this->model->neuEk("china");

                $this->view->EinkommenÖl=$this->model->getEinkommenÖl("china");
                $this->view->EinkommenStahl=$this->model->getEinkommenStahl("china");
                $this->view->EinkommenOSR=$this->model->getEinkommenOSR("china");

                $this->view->Anzahl=$this->model->getAnzahl("china");
                $this->view->Was=$this->model->getWas("china");
                $this->view->Von=$this->model->getVon("china");
                $this->view->Wohin=$this->model->getWohin("china");
                $this->view->MoveOil=$this->model->getMoveOil("china");

                $this->view->ÖlPreis=$this->model->getÖlPreis("china");
                $this->view->StahlPreis=$this->model->getStahlPreis("china");
                $this->view->OSRPreis=$this->model->getOSRPreis("china");

                $this->view->Öl=$this->model->getÖl("china");
                $this->view->Stahl=$this->model->getStahl("china");
                $this->view->OSR=$this->model->getOSR("china");
            }
            
            


            $this->view->render('Fraktion/index');

        } else{
            echo "Access denied wtf are u doing here???";
        }
    }


        //Sicherheitsproblem!!!!!!!!
    /*
    function delete($Land){

        if (strcmp ( $Land , "Deutschland" )||strcmp ( $Land , "Japan" )||strcmp ( $Land , "Italien" )||strcmp ( $Land , "Finnland" )) {
            if (isset($_SESSION["Achse"]) && $_SESSION["Achse"] == 1){//Löschvorgang hier
                $this->view->Team = "Achse";
                $this->view->Bündnis = "Achsenmächte";
                $this->view->Land=$Land;
                $this->view->render('Fraktion/index');
            }else {echo "Lösch dein eigenen scheiß";exit;}
        }
        else if (strcmp ( $Land , "USA" )||strcmp ( $Land , "England" )||strcmp ( $Land , "China" )||strcmp ( $Land , "Russland" )) {
            if (isset($_SESSION["Allies"]) && $_SESSION["Allies"] == 1) {//Löschvorgang hier
                $this->view->Team = "Allies";
                $this->view->Bündnis = "Alliierte";
                $this->view->Land = $Land;
                $this->view->render('Fraktion/index');
            } else {
                echo "Lösch dein eigenen scheiß";
                exit;
            }

        }
    }
    */




}