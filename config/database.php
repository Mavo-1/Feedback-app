<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'alex');
    define('DB_PASS', 'Mavericks#1');
    define('DB_NAME', 'php_dev');


    //Connection 

    $conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);


    //CHECKING CONNECTION

    if($conn->connect_error){
        die('Conection Failed' . $conn->connect_error);
    }

    