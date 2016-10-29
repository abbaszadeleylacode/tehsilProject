<?php 
  $sql="SELECT * FROM sagird";
  $host = "localhost";
  $user_name = "root";
  $password = "";
  $db_name = "tehsil";
  $db_connection = mysqli_connect($host,$user_name,$password,$db_name);
    $query= mysqli_query($db_connection,$sql);


 ?>