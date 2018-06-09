<?php


class Err extends Controller {

    function __construct() {
        parent::__construct();


    }

function index(){
    $this->view->msg = '<h3 class="display-5">This page does not exist!</h3>';
    $this->view->render('error/index');
}






}