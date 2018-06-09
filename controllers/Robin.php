<?php
Session_Start();


class Robin extends Controller {

    function __construct() {
        parent::__construct();

    }



    function index(){

        $this->view->render('Robin/index');
    }


    public function getFormPW(){
       if (isset($_POST["Passwort"])){

           return $_POST["Passwort"];

       }
        else {return false;}
    }


   /* function Robin(){
        $this->model->getRobinPW();
    }
*/


    function checkPWRobin(){
        if (($this->getFormPW()!=false)&&($this->model->getRobinPW()!=false)){
            if (strcmp ( $this->getFormPW()  , $this->model->getRobinPW()  )== 0){

                $_SESSION["security"]=1;
                //echo $_SESSION["security"];
                $this->view->render('Robin/HalloRobin');
            }
            else {
                $this->view->render('Robin/wrongPW');
            }

        }
        else {

            $this->view->render('Robin/wrongPW');
        }

    }



}
