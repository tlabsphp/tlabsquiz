
		<?php
			
			$q=intval($_GET['q']);
			echo "this is the id " . $q;
			
			/*include("config.php");
			$qry = "select * from questions where tech_id '" . $q . "'";
			$res = mysqli_query($con,$qry) or die(mysqli_error($con));
			while($result=mysqli_fetch_array($res)){
				echo $result['que_name'];				
			}
			echo "hi";
			*/
		?>
