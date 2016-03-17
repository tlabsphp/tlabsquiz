<?php
session_start();
			// This page received the id of the selected technology
			// When student click on the generate the test paper then 
			// then task 1 - all the questions related to the selected id should be selected by randomly
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
			$_SESSION['queset']=$queset;
			return $queset;
			 
	}				
}			
$_SESSION['count']=1;
if(isset($_POST['tid'])){
		$tid=$_POST['tid'];
		
		$data = select_questions($tid);
		//$size=sizeof($data);
		$i=show_que($data[$_SESSION['count']]);
		//echo "index" . $i;
}
if(isset($_POST['opt'])){
	$_SESSION['count']++;
	//echo "opt";
	$data=$_SESSION['queset'];
	show_que($data[$_SESSION['count']]);
}
/* else if(isset($_POST['opt'])){
	$str=$_SESSION['data'];
	for($i=1;$i<sizeof($str);$i++){
		show_que($str[$i]);
		break;
	}
 	
}*/
function store_ans($qid){
	$a[]=array($qid);
	
}

				
function show_next_btn(){
	?>
		<div>
			<input type="button" name="next" id="nextbtn" value="Next" onclick="send_option('mcq','show_que')"/>
			
		</div>
	<?php
}

function show_que($x){
static $i=0;		
		$qry="select que_name,option1,option2,option3,option4,rightans from questions where que_id='" . $x . "'";
		//echo "<br>limit = " .$limit ;
		include("config.php");	
		$result=mysqli_query($con,$qry) or die (mysqli_error($con));
		echo "<div>";
		static $queno=1;
		echo "" . $queno . "). ";
		$queno++;
		while($row=mysqli_fetch_assoc($result)){		
			echo "<Span>";
			echo "".htmlspecialchars(strval($row['que_name']))."";
			echo "</span>";
			echo "<div><form id='options'>";
			?>  <br/><label><input type="radio" name="mcq" id="mcq" onclick="send(this.value)" value="<?php echo strval($row['option1']); ?>"/><?php echo strval($row['option1']); ?></label>
				<br/><label><input type="radio" name="mcq" id="mcq" onclick="send(this.value)" value="<?php echo strval($row['option2']); ?>"/><?php echo strval($row['option2']); ?></label>
			    <br/><label><input type="radio" name="mcq" id="mcq" onclick="send(this.value)" value="<?php echo strval($row['option3']); ?>"/><?php echo strval($row['option3']); ?></label>
			    <br/><label><input type="radio" name="mcq" id="mcq" onclick="send(this.value)" value="<?php echo strval($row['option4']); ?>"/><?php echo strval($row['option4']); ?></label>
			    <br/>
		<?php }
		show_next_btn();
		?> </div></form>
<?php

return $i++;
}
?>
