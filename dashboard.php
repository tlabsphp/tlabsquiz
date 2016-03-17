
<?php
	// session and header file inclueded here
  include ("session.php");
  include("header.php");	
 ?>
  <section id="box">
  <div style="width:60%;margin:auto">
	<?php  
		if(true){
	?> <div class="select_tech" id="sel_tech">
		<h3>
			Select the technology on which you want to give online test. <br />
			please read the below instruction carefully.
		</h3>
		
			<!-- filled the select option from technology table using mysql query-->
		<div>
		<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
		<?php
				include ("config.php");
				$qry = "Select tech_id, tech_name from technology";
				$res=mysqli_query($con,$qry) or die("Invalid Query");
		?>	
				<select name="sel_tech" id="tech_id">
				<option value="0">Select Technology </option>
		<?php
					while($result = mysqli_fetch_array($res)){
				 	echo "<option value=" . $result['tech_id'] . ">" . $result['tech_name'] . "</option>";
				}
				mysqli_close($con);
		?>
				</select><br><br><br>
				<!--  Generate the test and exit button code start here ---->
				<div class="">
				<div id="que_box_btn">
					<span style="visible"></span>
					<input type="button" id="gen_test" name="gen_test" value="GENERATE TEST" onclick="display('show_que')"/>
					<input type="button" id="exit_test" name="exit_test" value="Exit" onclick="document.location.href='index.php';" />
				</div>
	
				</div>
				<!--  Generate the test and exit button code start here ---->
				
			</form>
		</div>
	<div id="instruct">
		<ul>
			<li> Each test have  times of 30 minutes only.</li>
			<li> There is negative marking for each wrong answer.</li>
		</ul>
	</div>
	</div>    
	<?php
		}
	?>
	<div id="show_que">
					
	</div>
	
	</div>
  </section>
 <?php
	include("footer.php");
 ?>