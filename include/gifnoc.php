<?php
error_reporting(E_ERROR | E_PARSE);
  date_default_timezone_set("Asia/Bangkok");
  ini_set('display_errors', 1);
  error_reporting(~0);

   $serverName = "localhost";
   $userName = "root";
   $userPassword = "123456";
   $dbName = "cockpitket65";
  
  $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

  if (mysqli_connect_errno())
  {
    echo "Database Connect Failed : " . mysqli_connect_error();
  }

?>