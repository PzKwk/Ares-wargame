<?php

class View {

    function __construct(){
        //echo "This is the view</br>";

    }

    public function render($name){


       /* if ( strcmp ( $name , "Main" ) !== 0) {

            require(__DIR__ . '/views/StartMain.php');
        }
       */
        require(__DIR__.'/views/header.php');
        require (__DIR__.'/views/' . $name . '.php');
        require(__DIR__.'/views/footer.php');
    }

}
