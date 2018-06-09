<?php
Session_Start();


class Main extends Controller {

    function __construct()
    {
        parent::__construct();
    }

    function index(){
        echo "kein Team ausgewählt oO";
        //$this->view->render('main/index');
    }





    function Achse()
    {

        $this->view->Team = "Achse";
        $this->view->render('Main/index');


    }
    function Allies()
    {
        $this->view->Team = "Allies";
        $this->view->render('Main/index');


    }



    public function checkPW(){

        if (isset($_POST["Achse"])){

            if (strcmp($_POST["Achse"], $this->model->getPW("Achse")) == 0) {
                $_SESSION["Achse"] = 1;
                $_SESSION["Allies"] = 0;
                //$this->view->render('Achse/index');
                $this->view->render('Main/LinkAchse');
            } else {
                $_SESSION["Achse"] = 0;
                $this->view->Team = "Achse";
                $this->view->render('Main/index');
            }

        }

        else if (isset($_POST["Allies"])){
            if (strcmp($_POST["Allies"], $this->model->getPW("Allies")) == 0) {
                $_SESSION["Allies"] = 1;
                $_SESSION["Achse"] = 0;
               // $this->view->render('Allies/index');

                $this->view->render('Main/LinkAllies');
            } else {
                $_SESSION["Allies"] = 0;
                $this->view->Team = "Allies";
                $this->view->render('Main/index');
            }

        }

    }





}


