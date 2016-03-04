<?php
include("../config.php");
	function load_dropdown(){
		include('../config.php');
		$re="Select tech_name from technology";
			
	}
if(isset($_POST['sbtn'])){
		
			$sql = "Select max(regid) as maxid from registration";
			$result= mysqli_query($con,$sql) or die(mysqli_error($con));
			$row = mysqli_fetch_array($result);
			$sid=$row['maxid'] + 1;
			//echo $sid;
			$sname=$_POST['sname'];
			$semail=$_POST['semail'];
			$scontact=$_POST['scontact'];
			$sdegree=$_POST['sdegree'];
			$username=$_POST['suname'];
			$spwd=$_POST['spwd'];
			$qry="insert into registration(regid,name,emailid,contactno,degree,username)values('".$sid."','".$sname."','".$semail."','".$scontact."','".$sdegree."','".$username. ")";
			mysqli_query($con,$qry) or die(mysqli_error());
			echo "successfully";
			header("Location:../index.php");
}


?>

