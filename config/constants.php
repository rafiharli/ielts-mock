<?php   
ob_start();
        //Start session
        session_start();

        //Create constan
        define('SITEURL','http://127.0.0.1/ielts-test/');
        
        define('LOCALHOST','localhost');
        define('DB_USERNAME','root');
        define('DB_PASSWORD','');
        define('DB_NAME','db_ielts');

        //Database Connection
        $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die();
        //Selecting database
        $db_select = mysqli_select_db($conn, DB_NAME) or die();
error_reporting(0);
?>