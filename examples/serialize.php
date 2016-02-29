<?php
    $color = array("red","blue","oreange","white","black");
    /*
	$s_color = serialize($color);
	
	echo $s_color;
	echo "<br>";
	
	$o_color=unserialize($s_color);
	echo "<br>";
	var_export($o_color);
	
	*/
	
    $con=mysqli_connect("localhost","root","") or die(mysqli_error);
    mysqli_select_db($con,"mydb") or die(mysqli_error);
    $scolor=(serialize($color));
    
    $query = "insert into list_data(color)values('". $scolor . "')";
    
    mysqli_query($con,$query) or die (mysqli_error);
    echo "Success";
    
    $q="select color from list_data";
    $res=mysqli_query($con,$q);
     //$r=mysqli_fetch_array($res);
    while($r=mysqli_fetch_array($res)){
        foreach ((unserialize($r['color'])) as $x){
				echo $x ;
				echo "<br>";
		}
		  
    }
    mysqli_close($con);
    
    
    
?>