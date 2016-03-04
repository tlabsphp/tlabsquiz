<?php
			// This page received the id of the selected technology
			// When student click on the generate the test paper then 
			//then task 1 - all the questions related to the selected id should be selected by randomly
			// and store in one array or list. 
			// task 2 - 30 minutes timer will be display on the screen
			// task 3 - load one by one question on screen by next button
			// task 4 - only to button visible next and finish.
			// if click on finish then student will redirect the result page and display the result
			// if student want to chk answer then display the attempted answer and right answer
			// with green color and and worong answer in red color

/*  This is function to check the limit of question or how many quesuins to be added */			
function chklimit($tid){  
	include("config.php");
	//check the technology name and select approprite questions
				
	$q="select tech_name from technology where tech_id='" . $_POST['tid']. "'";
	$res = mysqli_query($con,$q) or die (mysqli_error($con));
	$result=mysqli_fetch_assoc($res);

	$s1=strval($result['tech_name']); //converted into string 
	if(((strcmp($s1,strval('C')))==0) || ((strcmp($s1,strval('OOPS')))==0)) {
		$limit = 10;
	}
	else{
		$limit=5;
	}
	mysqli_close($con);
	return $limit;
	
}
function select_questions($tid){
	if (isset($_POST['tid'])){
				$tid=$_POST['tid'];
				//echo "the id is " . $_POST['tid'];
				//echo "<br>";
				include("config.php");
					
					$limit=chklimit($tid);
					//echo "checked limit " . $limit;
					$qry="select que_id from questions where tech_id='" . $tid . "'order by RAND() limit ". $limit ."";
					//echo "<br>limit = " .$limit ;
					$result=mysqli_query($con,$qry) or die (mysqli_error($con));
					$queset=array();
					while($row=mysqli_fetch_assoc($result)){
						$queset[]=$row['que_id'];
						
					}
			
			return $queset;
	}				
}			
if (isset($_POST['tid'])){
		$tid=$_POST['tid'];
		$data = select_questions($tid);
		$size=sizeof($data);
		
		for($i=0;$i<$size;$i++){
			if($i==0){
					show_que($data[$i]);
			}
		}
		
		
}				
function show_next_btn(){
	?>
		<div>
			<input type="button" name="next" value="Next" id="nextbtn" onclick=""/>
		</div>
	<?php
}
function show_que($x){
		$qry="select que_name,option1,option2,option3,option4,rightans from questions where que_id='" . $x . "'";
		//echo "<br>limit = " .$limit ;
	include("config.php");	
		$result=mysqli_query($con,$qry) or die (mysqli_error($con));
		echo "<div><table>";
		while($row=mysqli_fetch_assoc($result)){
			echo "<tr><td>";
			echo strval($row['que_name']);
			echo "</td></tr>";
			echo "<tr><td><input type='radio' name='mcv'/>" . strval($row['option1']) . "</td></tr>";
			echo "<tr><td><input type='radio' name='mcv'/>" . strval($row['option2']) . "</td></tr>";
			echo "<tr><td><input type='radio' name='mcv'/>" . strval($row['option3']) . "</td></tr>";
			echo "<tr><td><input type='radio' name='mcv'/>" . strval($row['option4']) . "</td></tr>";
			echo "<br>";
		}
		echo "</table></div>";
		show_next_btn();
}

?>
