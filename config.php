<?php
  # This is the config.php file for database connection
  $servername="localhost";
  $username="root";
  $password="";
  $database="quiz";  
  
  $con=mysqli_connect($servername,$username,$password,$database) or die("Unable to connect with the database");
  if(!$con){
    echo "Sorry, Unable to connect with database" . mysqli_error;
    exit;
  }
  if(!mysqli_select_db($con,$database)){
    echo "Unable to connect with mysql database" . mysqli_error;
    exit;
    
  }
  
  
  
?>