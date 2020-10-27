<?php 

  define('HOST','localhost');
  define('USER', 'root');
  define('PASS', '');
  define('DATABASE', 'register');
  define('TABLE', 'data');

  $mysqli = mysqli_connect('localhost','root','','register');
  if (mysqli_connect_error()){
    echo "Failed to connect to Database, try again".mysqli_connect_error();
  }else{
    //echo "You are connected now";
  }

?>