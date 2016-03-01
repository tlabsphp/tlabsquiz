<?php
	session_start();
	include("config.php");
	
	//storing session
	$userchk = $_SESSION['login_user'];
	
	$ses_sql=mysqli_query($con, "select username,check_user from login where username='$userchk'");
	$row=mysqli_fetch_assoc($ses_sql);
	$login_session=$row['username'];
  //$check_user=$row['check_user'];
	if(!isset($login_session)){
		mysql_close($con); //closing connection
     if($row['check_user']=='true'){
                $_SESSION['login_user']=$row['username'];
                header("Location:admin/dashboard.php");
     }
     else{
               $_SESSION['login_user']=$row['username'];
               header("Location:dashboard.php");
     } // redirecting to new page
	}
	
	
	

?>