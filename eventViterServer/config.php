<?php

/***************************************************************************************
constants.php contains all the db specific values in the form 
<?php
    $host = "localhost";
    $uname = "root";
    $pass = "somepassword";
    $db = "dbname";
?>
***************************************************************************************/

require_once 'constant.php';
/***************************************************************************************
To enable CORS for the application - if posted in some other domain name
***************************************************************************************/

    // Allow from any origin
    if (isset($_SERVER['HTTP_ORIGIN'])) {
        header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Max-Age: 86400');    // cache for 1 day
    }
    // Access-Control headers are received during OPTIONS requests
    if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
            header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");         

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
            header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

    }
/***************************************************************************************
Connecting to the DB using constants specified in the constant.php file
***************************************************************************************/
    
    $con=mysqli_connect($host,$uname,$pass,$db,3306);
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

?>