<?php

Session_Start();

if (isset($_GET["Land"])&&$_GET["Land"]=="Deutschland"){header('Location: Fraktion/Deutschland');exit;}
else if (isset($_GET["Land"])&&$_GET["Land"]=="Japan"){header('Location: Fraktion/Japan');exit;}
else if (isset($_GET["Land"])&&$_GET["Land"]=="Italien"){header('Location: Fraktion/Italien');exit;}
else if (isset($_GET["Land"])&&$_GET["Land"]=="Finnland"){header('Location: Fraktion/Finnland');exit;}

    class Achse extends Controller
    {

        function __construct()
        {
            parent::__construct();

        }


        function index()
        {
            if (isset($_SESSION["Achse"])&& $_SESSION["Achse"] == 1){
                $this->view->render('Achse/index');
            } else{
                $this->view->render('Achse/locked');
            }

        }


    }