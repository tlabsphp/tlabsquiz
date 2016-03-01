<?php
  session_start();
  include("header.php");
?>

  <section id="box">
	<div class="select_tech">
		<h3>
			Select the technology on which you want to give online test. <br />
			please read the below instruction carefully.
		</h3>
		
			<!-- filled the select option from technology table using mysql query-->
		<div>
		<form>
		<?php
				include ("config.php");
				$qry = "Select tech_name from technology";
				$res=mysqli_query($con,$qry) or die("Invalid Query");
				?>	
				<select id="lang" name="tech" onchange="showUser(this.value)">
				<option value="">Select Technology </option>
				<?php
					while($result = mysqli_fetch_array($res)){
						echo "<option value=" . $result['tech_id'] . ">" . $result['tech_name'] . "</option>";
					}
					echo "</select>";
				?>
				<br>
				
			</form>
		</div>
	</div>    
		<div id="txtHint">
		</div>
	<div class="instruction">
		<ul>
			<li> Each test have  times of 30 minutes only.</li>
			<li> There is negative marking for each wrong answer.</li>
			
			
		</ul>
	</div>
  </section>
 <?php
	include("footer.php");
 ?>