<?php

class Bootstrap {


    function __construct()
    {

//$url = $_GET['url'];

//echo $url;
        $url = 'index';
        if (isset($_GET['url'])) {
            $url = $_GET['url'];
        }
        $url = rtrim($url, '/');
        $url = explode('/', $url);
//print_r($url);


//localhost/MVC/$url[0]/$url[1]/$url[2]

        //require benötigtes file:
        $file = 'controllers/' . $url[0] . '.php';
        if (file_exists($file)) {
            require $file;
        } else {
            require(__DIR__ . '/controllers/Err.php');
            $error = new Err();
            $error->index();
            return false;
        }

        $controller = new $url[0]();
        $controller->loadModel($url[0]);




        if (isset($url[2])) {
            if (method_exists($controller, $url[1])) {
                //$controller->function($url[2]);
                $controller->{$url[1]}($url[2]);
                //echo "1111";
            } else {
                echo 'errrrr';
            }
        } else {
            if (isset($url[1])) {
                //$controller->function();
                //NEU ACHTUNG TESTEN
                if (method_exists($controller, $url[1])){
                $controller->{$url[1]}();}else {echo "errrrr";}
                //echo"2222";
            } else {
                $controller->index();
            }


        }


    }




}