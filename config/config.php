<?php 

  session_start();

  define('SITEURL', 'http://localhost/hershey/');

  define('LOCALHOST', 'localhost');
  define('ROOT', 'root');
  define('PASSWORD', '');
  define('DATABASE', 'hersheydb');

  $conn =  mysqli_connect(LOCALHOST, ROOT, PASSWORD, DATABASE) or die();
  $db_select = mysqli_select_db($conn, DATABASE) or die();

?>