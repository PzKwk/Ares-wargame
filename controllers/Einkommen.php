<?php
Session_Start();
class Einkommen extends Controller
{

    function __construct()
    {
        parent::__construct();

    }


    function index()
    {
        echo "hier dürfte eigentlich nichts ankommen";
        
        
    }

    function Deutschland()
    {
        if (isset($_SESSION["Achse"])&&$_SESSION["Achse"]==1) {

        $this->view->Land = "Deutschland";
        $this->view->Öl_F=$this->model->getÖlListeF();
        $this->view->Stahl_F=$this->model->getStahlListeF();
        $this->view->OSR_F=$this->model->getOSRListeF();

        $this->view->Öl_A=$this->model->getÖlListeA();
        $this->view->Stahl_A=$this->model->getStahlListeA();
        $this->view->OSR_A=$this->model->getOSRListeA();

        $this->view->Öl_C=$this->model->getÖlListeC();
        $this->view->Stahl_C=$this->model->getStahlListeC();
        $this->view->OSR_C=$this->model->getOSRListeC();

        $this->view->Öl_E=$this->model->getÖlListeE();
        $this->view->Stahl_E=$this->model->getStahlListeE();
        $this->view->OSR_E=$this->model->getOSRListeE();

        $this->view->Öl_R=$this->model->getÖlListeR();
        $this->view->Stahl_R=$this->model->getStahlListeR();
        $this->view->OSR_R=$this->model->getOSRListeR();

        $this->view->Öl_I=$this->model->getÖlListeI();
        $this->view->Stahl_I=$this->model->getStahlListeI();
        $this->view->OSR_I=$this->model->getOSRListeI();

        $this->view->Öl_J=$this->model->getÖlListeJ();
        $this->view->Stahl_J=$this->model->getStahlListeJ();
        $this->view->OSR_J=$this->model->getOSRListeJ();

        $this->view->Öl_D=$this->model->getÖlListeD();
        $this->view->Stahl_D=$this->model->getStahlListeD();
        $this->view->OSR_D=$this->model->getOSRListeD();

        //$this->view->sumÖL_total=$this->model->sumÖL_total();
        //$this->view->sumStahl_total=$this->model->sumStahl_total();
        //$this->view->sumOSR_total=$this->model->sumOSR_total();
        if (isset($_POST["pressButton"])) {
            $this->model->updateEK("deutschland");
            $this->model->updateRES("deutschland");
            $this->view->render('Einkommen/success');

        }
        else{
            $this->view->render('Einkommen/index');
        }

        

        } else{
            echo "Access denied wtf are u doing here???";
        }
    }
    function Finnland()
    {
        if (isset($_SESSION["Achse"])&&$_SESSION["Achse"]==1) {

        $this->view->Land = "Finnland";
        $this->view->Öl_F=$this->model->getÖlListeF();
        $this->view->Stahl_F=$this->model->getStahlListeF();
        $this->view->OSR_F=$this->model->getOSRListeF();

        $this->view->Öl_A=$this->model->getÖlListeA();
        $this->view->Stahl_A=$this->model->getStahlListeA();
        $this->view->OSR_A=$this->model->getOSRListeA();

        $this->view->Öl_C=$this->model->getÖlListeC();
        $this->view->Stahl_C=$this->model->getStahlListeC();
        $this->view->OSR_C=$this->model->getOSRListeC();

        $this->view->Öl_E=$this->model->getÖlListeE();
        $this->view->Stahl_E=$this->model->getStahlListeE();
        $this->view->OSR_E=$this->model->getOSRListeE();

        $this->view->Öl_R=$this->model->getÖlListeR();
        $this->view->Stahl_R=$this->model->getStahlListeR();
        $this->view->OSR_R=$this->model->getOSRListeR();

        $this->view->Öl_I=$this->model->getÖlListeI();
        $this->view->Stahl_I=$this->model->getStahlListeI();
        $this->view->OSR_I=$this->model->getOSRListeI();

        $this->view->Öl_J=$this->model->getÖlListeJ();
        $this->view->Stahl_J=$this->model->getStahlListeJ();
        $this->view->OSR_J=$this->model->getOSRListeJ();

        $this->view->Öl_D=$this->model->getÖlListeD();
        $this->view->Stahl_D=$this->model->getStahlListeD();
        $this->view->OSR_D=$this->model->getOSRListeD();

        //$this->view->sumÖL_total=$this->model->sumÖL_total();
        //$this->view->sumStahl_total=$this->model->sumStahl_total();
        //$this->view->sumOSR_total=$this->model->sumOSR_total();
        if (isset($_POST["pressButton"])) {
            $this->model->updateEK("finnland");
            $this->model->updateRES("finnland");
            $this->view->render('Einkommen/success');

        }

		else{
            $this->view->render('Einkommen/index');
        }

        } else{
            echo "Access denied wtf are u doing here???";
        }
    }
    function Japan()
    {
        if (isset($_SESSION["Achse"])&&$_SESSION["Achse"]==1) {

        $this->view->Land = "Japan";
        $this->view->Öl_F=$this->model->getÖlListeF();
        $this->view->Stahl_F=$this->model->getStahlListeF();
        $this->view->OSR_F=$this->model->getOSRListeF();

        $this->view->Öl_A=$this->model->getÖlListeA();
        $this->view->Stahl_A=$this->model->getStahlListeA();
        $this->view->OSR_A=$this->model->getOSRListeA();

        $this->view->Öl_C=$this->model->getÖlListeC();
        $this->view->Stahl_C=$this->model->getStahlListeC();
        $this->view->OSR_C=$this->model->getOSRListeC();

        $this->view->Öl_E=$this->model->getÖlListeE();
        $this->view->Stahl_E=$this->model->getStahlListeE();
        $this->view->OSR_E=$this->model->getOSRListeE();

        $this->view->Öl_R=$this->model->getÖlListeR();
        $this->view->Stahl_R=$this->model->getStahlListeR();
        $this->view->OSR_R=$this->model->getOSRListeR();

        $this->view->Öl_I=$this->model->getÖlListeI();
        $this->view->Stahl_I=$this->model->getStahlListeI();
        $this->view->OSR_I=$this->model->getOSRListeI();

        $this->view->Öl_J=$this->model->getÖlListeJ();
        $this->view->Stahl_J=$this->model->getStahlListeJ();
        $this->view->OSR_J=$this->model->getOSRListeJ();

        $this->view->Öl_D=$this->model->getÖlListeD();
        $this->view->Stahl_D=$this->model->getStahlListeD();
        $this->view->OSR_D=$this->model->getOSRListeD();

        //$this->view->sumÖL_total=$this->model->sumÖL_total();
        //$this->view->sumStahl_total=$this->model->sumStahl_total();
        //$this->view->sumOSR_total=$this->model->sumOSR_total();
        if (isset($_POST["pressButton"])) {
            $this->model->updateEK("japan");
            $this->model->updateRES("japan");
            $this->view->render('Einkommen/success');

        }


        else{
            $this->view->render('Einkommen/index');
        }

        } else{
            echo "Access denied wtf are u doing here???";
        }
    }
    function Italien()
    {
        if (isset($_SESSION["Achse"])&&$_SESSION["Achse"]==1) {

        $this->view->Land = "Italien";
        $this->view->Öl_F=$this->model->getÖlListeF();
        $this->view->Stahl_F=$this->model->getStahlListeF();
        $this->view->OSR_F=$this->model->getOSRListeF();

        $this->view->Öl_A=$this->model->getÖlListeA();
        $this->view->Stahl_A=$this->model->getStahlListeA();
        $this->view->OSR_A=$this->model->getOSRListeA();

        $this->view->Öl_C=$this->model->getÖlListeC();
        $this->view->Stahl_C=$this->model->getStahlListeC();
        $this->view->OSR_C=$this->model->getOSRListeC();

        $this->view->Öl_E=$this->model->getÖlListeE();
        $this->view->Stahl_E=$this->model->getStahlListeE();
        $this->view->OSR_E=$this->model->getOSRListeE();

        $this->view->Öl_R=$this->model->getÖlListeR();
        $this->view->Stahl_R=$this->model->getStahlListeR();
        $this->view->OSR_R=$this->model->getOSRListeR();

        $this->view->Öl_I=$this->model->getÖlListeI();
        $this->view->Stahl_I=$this->model->getStahlListeI();
        $this->view->OSR_I=$this->model->getOSRListeI();

        $this->view->Öl_J=$this->model->getÖlListeJ();
        $this->view->Stahl_J=$this->model->getStahlListeJ();
        $this->view->OSR_J=$this->model->getOSRListeJ();

        $this->view->Öl_D=$this->model->getÖlListeD();
        $this->view->Stahl_D=$this->model->getStahlListeD();
        $this->view->OSR_D=$this->model->getOSRListeD();

        //$this->view->sumÖL_total=$this->model->sumÖL_total();
        //$this->view->sumStahl_total=$this->model->sumStahl_total();
        //$this->view->sumOSR_total=$this->model->sumOSR_total();
        if (isset($_POST["pressButton"])) {
            $this->model->updateEK("italien");
            $this->model->updateRES("italien");
            $this->view->render('Einkommen/success');

        }


        else{
            $this->view->render('Einkommen/index');
        }

        } else{
            echo "Access denied wtf are u doing here???";
        }
    }
    function Russland()
    {
        if (isset($_SESSION["Allies"])&&$_SESSION["Allies"]==1) {

        $this->view->Land = "Russland";
        $this->view->Öl_F=$this->model->getÖlListeF();
        $this->view->Stahl_F=$this->model->getStahlListeF();
        $this->view->OSR_F=$this->model->getOSRListeF();

        $this->view->Öl_A=$this->model->getÖlListeA();
        $this->view->Stahl_A=$this->model->getStahlListeA();
        $this->view->OSR_A=$this->model->getOSRListeA();

        $this->view->Öl_C=$this->model->getÖlListeC();
        $this->view->Stahl_C=$this->model->getStahlListeC();
        $this->view->OSR_C=$this->model->getOSRListeC();

        $this->view->Öl_E=$this->model->getÖlListeE();
        $this->view->Stahl_E=$this->model->getStahlListeE();
        $this->view->OSR_E=$this->model->getOSRListeE();

        $this->view->Öl_R=$this->model->getÖlListeR();
        $this->view->Stahl_R=$this->model->getStahlListeR();
        $this->view->OSR_R=$this->model->getOSRListeR();

        $this->view->Öl_I=$this->model->getÖlListeI();
        $this->view->Stahl_I=$this->model->getStahlListeI();
        $this->view->OSR_I=$this->model->getOSRListeI();

        $this->view->Öl_J=$this->model->getÖlListeJ();
        $this->view->Stahl_J=$this->model->getStahlListeJ();
        $this->view->OSR_J=$this->model->getOSRListeJ();

        $this->view->Öl_D=$this->model->getÖlListeD();
        $this->view->Stahl_D=$this->model->getStahlListeD();
        $this->view->OSR_D=$this->model->getOSRListeD();

        //$this->view->sumÖL_total=$this->model->sumÖL_total();
        //$this->view->sumStahl_total=$this->model->sumStahl_total();
        //$this->view->sumOSR_total=$this->model->sumOSR_total();
        if (isset($_POST["pressButton"])) {
            $this->model->updateEK("russland");
            $this->model->updateRES("russland");
            $this->view->render('Einkommen/success');

        }


        else{
            $this->view->render('Einkommen/index');
        }

        } else{
            echo "Access denied wtf are u doing here???";
        }
    }
    function China()
    {
        if (isset($_SESSION["Allies"])&&$_SESSION["Allies"]==1) {

        $this->view->Land = "China";
        $this->view->Öl_F=$this->model->getÖlListeF();
        $this->view->Stahl_F=$this->model->getStahlListeF();
        $this->view->OSR_F=$this->model->getOSRListeF();

        $this->view->Öl_A=$this->model->getÖlListeA();
        $this->view->Stahl_A=$this->model->getStahlListeA();
        $this->view->OSR_A=$this->model->getOSRListeA();

        $this->view->Öl_C=$this->model->getÖlListeC();
        $this->view->Stahl_C=$this->model->getStahlListeC();
        $this->view->OSR_C=$this->model->getOSRListeC();

        $this->view->Öl_E=$this->model->getÖlListeE();
        $this->view->Stahl_E=$this->model->getStahlListeE();
        $this->view->OSR_E=$this->model->getOSRListeE();

        $this->view->Öl_R=$this->model->getÖlListeR();
        $this->view->Stahl_R=$this->model->getStahlListeR();
        $this->view->OSR_R=$this->model->getOSRListeR();

        $this->view->Öl_I=$this->model->getÖlListeI();
        $this->view->Stahl_I=$this->model->getStahlListeI();
        $this->view->OSR_I=$this->model->getOSRListeI();

        $this->view->Öl_J=$this->model->getÖlListeJ();
        $this->view->Stahl_J=$this->model->getStahlListeJ();
        $this->view->OSR_J=$this->model->getOSRListeJ();

        $this->view->Öl_D=$this->model->getÖlListeD();
        $this->view->Stahl_D=$this->model->getStahlListeD();
        $this->view->OSR_D=$this->model->getOSRListeD();

        //$this->view->sumÖL_total=$this->model->sumÖL_total();
        //$this->view->sumStahl_total=$this->model->sumStahl_total();
        //$this->view->sumOSR_total=$this->model->sumOSR_total();
        if (isset($_POST["pressButton"])) {
            $this->model->updateEK("china");
            $this->model->updateRES("china");
            $this->view->render('Einkommen/success');

        }


        else{
            $this->view->render('Einkommen/index');
        }

        } else{
            echo "Access denied wtf are u doing here???";
        }
    }
    function England()
    {
        if (isset($_SESSION["Allies"])&&$_SESSION["Allies"]==1) {

        $this->view->Land = "England";
        $this->view->Öl_F=$this->model->getÖlListeF();
        $this->view->Stahl_F=$this->model->getStahlListeF();
        $this->view->OSR_F=$this->model->getOSRListeF();

        $this->view->Öl_A=$this->model->getÖlListeA();
        $this->view->Stahl_A=$this->model->getStahlListeA();
        $this->view->OSR_A=$this->model->getOSRListeA();

        $this->view->Öl_C=$this->model->getÖlListeC();
        $this->view->Stahl_C=$this->model->getStahlListeC();
        $this->view->OSR_C=$this->model->getOSRListeC();

        $this->view->Öl_E=$this->model->getÖlListeE();
        $this->view->Stahl_E=$this->model->getStahlListeE();
        $this->view->OSR_E=$this->model->getOSRListeE();

        $this->view->Öl_R=$this->model->getÖlListeR();
        $this->view->Stahl_R=$this->model->getStahlListeR();
        $this->view->OSR_R=$this->model->getOSRListeR();

        $this->view->Öl_I=$this->model->getÖlListeI();
        $this->view->Stahl_I=$this->model->getStahlListeI();
        $this->view->OSR_I=$this->model->getOSRListeI();

        $this->view->Öl_J=$this->model->getÖlListeJ();
        $this->view->Stahl_J=$this->model->getStahlListeJ();
        $this->view->OSR_J=$this->model->getOSRListeJ();

        $this->view->Öl_D=$this->model->getÖlListeD();
        $this->view->Stahl_D=$this->model->getStahlListeD();
        $this->view->OSR_D=$this->model->getOSRListeD();

        //$this->view->sumÖL_total=$this->model->sumÖL_total();
        //$this->view->sumStahl_total=$this->model->sumStahl_total();
        //$this->view->sumOSR_total=$this->model->sumOSR_total();
        if (isset($_POST["pressButton"])) {
            $this->model->updateEK("england");
            $this->model->updateRES("england");
            $this->view->render('Einkommen/success');

        }


        else{
            $this->view->render('Einkommen/index');
        }

        } else{
            echo "Access denied wtf are u doing here???";
        }
    }
    function USA()
    {
        if (isset($_SESSION["Allies"])&&$_SESSION["Allies"]==1) {

        $this->view->Land = "USA";
        $this->view->Öl_F=$this->model->getÖlListeF();
        $this->view->Stahl_F=$this->model->getStahlListeF();
        $this->view->OSR_F=$this->model->getOSRListeF();

        $this->view->Öl_A=$this->model->getÖlListeA();
        $this->view->Stahl_A=$this->model->getStahlListeA();
        $this->view->OSR_A=$this->model->getOSRListeA();

        $this->view->Öl_C=$this->model->getÖlListeC();
        $this->view->Stahl_C=$this->model->getStahlListeC();
        $this->view->OSR_C=$this->model->getOSRListeC();

        $this->view->Öl_E=$this->model->getÖlListeE();
        $this->view->Stahl_E=$this->model->getStahlListeE();
        $this->view->OSR_E=$this->model->getOSRListeE();

        $this->view->Öl_R=$this->model->getÖlListeR();
        $this->view->Stahl_R=$this->model->getStahlListeR();
        $this->view->OSR_R=$this->model->getOSRListeR();

        $this->view->Öl_I=$this->model->getÖlListeI();
        $this->view->Stahl_I=$this->model->getStahlListeI();
        $this->view->OSR_I=$this->model->getOSRListeI();

        $this->view->Öl_J=$this->model->getÖlListeJ();
        $this->view->Stahl_J=$this->model->getStahlListeJ();
        $this->view->OSR_J=$this->model->getOSRListeJ();

        $this->view->Öl_D=$this->model->getÖlListeD();
        $this->view->Stahl_D=$this->model->getStahlListeD();
        $this->view->OSR_D=$this->model->getOSRListeD();

        //$this->view->sumÖL_total=$this->model->sumÖL_total();
        //$this->view->sumStahl_total=$this->model->sumStahl_total();
        //$this->view->sumOSR_total=$this->model->sumOSR_total();
        if (isset($_POST["pressButton"])) {
            $this->model->updateEK("usa");
            $this->model->updateRES("usa");
            $this->view->render('Einkommen/success');

        }


        else{
            $this->view->render('Einkommen/index');
        }

        } else{
            echo "Access denied wtf are u doing here???";
        }
    }


}