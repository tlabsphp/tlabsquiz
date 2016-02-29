<?php
  
  require_once('config.php');
  $error="";
  if(isset($_POST['login'])){
      if(empty($_POST['username']) && empty($_POST['password'])){
        $error = "Enter the username and password";
      }
      else if(empty($_POST['username']) || empty($_POST['password']) )  {
          $error = "Enter the username and password";
      }
      else{
          $username=trim($_POST['username']);
          $password=trim($_POST['password']);
           #here status is the boolean data type if status is 1 it means its active or 0 means deactive
          $query="select username,password,check_user from login where username='" . $username . "' and password='" . $password . "' and status=1";
          $res=mysqli_query($con,$query);
          $num_row = mysqli_num_rows($res);
          $row=mysqli_fetch_assoc($res);
          if($num_row==1){
          echo $row['username'];
          echo "<br>";
          echo $row['check_user'];
              if($row['check_user']=='true'){
                $_SESSION['login_user']=$row['username'];
                header("Location:admin/dashboard.php");
              }
              else{
                $_SESSION['login_user']=$row['username'];
                header("Location:dashboard.php");
              }
              

          }
          else{
                $error="Invalid username and password";
          }
      
        }
   
  }
  mysqli_close($con);
  
?>