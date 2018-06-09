<?php
Session_Start();


class Password extends Controller
{

    function __construct()
    {
        parent::__construct();

    }


    function index()
    {

        $this->view->render('Password/index');
    }




    public function Achse(){

        $this->view->Team = "Achse";
        $this->view->render('Password/index');
        if (isset($_POST["PasswortAchseNew"])&&$_POST["PasswortAchseNew"]!=""&&strcmp ( $this->model->getRootPW()  , $_POST["PasswortRoot"] )==0) {
            $this->model->NewPWAchse($_POST["PasswortAchseNew"]);

        }
    }

    public function Allies(){

        $this->view->Team = "Allies";
        $this->view->render('Password/index');
        if (isset($_POST["PasswortAlliesNew"])&&$_POST["PasswortAlliesNew"]!=""&&strcmp ( $this->model->getRootPW()  , $_POST["PasswortRoot"] )==0) {
            $this->model->NewPWAllies($_POST["PasswortAlliesNew"]);

        }
    }


}