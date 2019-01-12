<?php 
    // Output Buffring
    ob_start();

    //Funcitons Initializer
    require_once("func.php");

    //Database credentials
    require_once("database.php");

    // Databse Connection Initializer
    db_connect();

    // Db connection Check
    if(db_connect()) {
        echo "Connected";
    } else {
        echo "Not connected";
    }

?>