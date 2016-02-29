<?php 
$x=array("aaa","ttt","www","ttt","yyy","tttt"); 
$y=array_count_values($x); 
	echo $y["ttt"]; 
	ECHO $_SERVER['PHP_SELF'];
	$today = date("F j, Y, g:i a");
	echo "<br>";
	echo $today;
echo "<br>";
$x=array(2=>"mouse",7=>"keyboard"); 
$y=array_keys($x); 
echo $y[1];
echo "<br>";
$data="98.8degrees"; 
(double)$data; 
(int)$data; 
(string)$string; 
echo $data;
echo "<br>";
$qpt = 'Eat to live, but not live to eat'; 
echo preg_match("/^to/", $qpt); 


	
?>

