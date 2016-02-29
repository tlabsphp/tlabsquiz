<?php
require_once 'config.php';

session_start();
$uName = $_POST['name'];
$pWord = md5($_POST['pwd']);
$qry = "SELECT userid, username, password FROM login WHERE username='".$uName."' AND pass='".$pWord."' AND status='active'";
$res = mysql_query($qry);
$num_row = mysql_num_rows($res);
$row=mysql_fetch_assoc($res);
if( $num_row == 1 ) {
	echo 'true';
	$_SESSION['uName'] = $row['username'];
	$_SESSION['oId'] = $row['userid'];
	$_SESSION['auth'] = $row['password'];
	}
else {
	echo 'false';
}
?>