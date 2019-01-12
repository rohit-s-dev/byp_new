<?php
    // Database Connection Credentials
    require_once('db.credentials.php');

    // Database Connection
    function db_connect() {
        $con = mysqli_connect(DB_SERVER_NAME, DB_USER_NAME, DB_PASS, DB_NAME);
        return $con;
    }

    // Database Connection Closed
    function db_disconnect($con) {
        if(isset($con)) {
            mysqli_close($con);
        }
    }

    // Confirm Database connection
    function confirm_db_connect() {
        if(mysqli_connect_errno()) {
            $msg = 'Database Connectionn Failed';
            $msg.= mysqli_connect_error();
            $msg.= "(".  mysqli_connect_errno() .")";
            exit($msg);
        }
    }
    
?>