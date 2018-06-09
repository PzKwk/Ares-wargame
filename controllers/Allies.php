<?php

Session_Start();
if (isset($_GET["Land"])&&$_GET["Land"]=="USA"){header('Location: Fraktion/USA');exit;}
else if (isset($_GET["Land"])&&$_GET["Land"]=="Russland"){header('Location: Fraktion/Russland');exit;}
else if (isset($_GET["Land"])&&$_GET["Land"]=="England"){header('Location: Fraktion/England');exit;}
else if (isset($_GET["Land"])&&$_GET["Land"]=="China"){header('Location: Fraktion/China');exit;}


class Allies extends Controller
{

    function __construct()
    {
        parent::__construct();

    }


    function index()
    {
        if (isset($_SESSION["Allies"])&& $_SESSION["Allies"] == 1){
            $this->view->render('Allies/index');
        } else{
            $this->view->render('Allies/locked');
        }

    }


}