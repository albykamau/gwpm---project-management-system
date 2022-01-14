<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
   define('DB_DATABASE', 'gwpm');
   $mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD,DB_DATABASE);

   if($mysqli->connect_error){
    die('Connect Error:'. $mysqli->connect_errno .':'. $mysqli->connent_error);
    }
    //echo "Connected successfully";
?>