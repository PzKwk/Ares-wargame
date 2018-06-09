<?php

class Database extends PDO{

    public function __construct() {
        
        //parent::__construct('mysql:host=localhost;dbname=ares;charset=utf8mb4', 'Robin', 'q');
        //Definiert in config/database.php
        parent::__construct(dbname, dbuser, dbpwd);


    }


}