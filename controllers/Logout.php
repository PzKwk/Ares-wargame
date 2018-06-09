<?php

Session_Start();


class Logout extends Controller {

    function __construct() {
        parent::__construct();

    }

    function index(){

        $this->view->render('Logout/index');
    }


    function securityUnset(){

        $_SESSION["security"]=0;
        $this->view->render('Logout/index');
    }





}
