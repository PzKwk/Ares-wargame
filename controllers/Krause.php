<?php

Session_Start();
if (isset($_SESSION["security"])&&($_SESSION["security"]==1)) {


    class Krause extends Controller
    {

        function __construct()
        {
            parent::__construct();

        }


        function index()
        {

            $this->view->render('Krause/index');

        }


        public function getFormRootPW()
        {
            if (isset($_POST["PasswortRoot"])) {

                return $_POST["PasswortRoot"];

            } else {
                return false;
            }
        }

        function newRootPW()
        {

            if (isset($_SESSION["security"])) {
                if ($this->getFormRootPW() != false && $_SESSION["security"] == 1) {
                    $PW = $this->getFormRootPW();
                } else {
                    echo "error";
                }
                if (isset($PW)) {
                    $this->model->NewRoot($PW);
                } else {
                    echo "error";
                }
                $this->view->render('Krause/index');
            }
            if ($_SESSION["security"] == 0){
                $this->view->render('Krause/ZumLogin'); 
            }
            
        }

    }
} else {echo"Zugriff verweigert";exit;}