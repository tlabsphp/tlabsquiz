<?php
  session_start();

?>	  
	  

<html>
<head>
  <title>
    Quiz Bank
  </title>
         <link rel="stylesheet" type="text/css" href="../css/style.css" />
		 <script type="text/javascript" src="../js/jquery.js"></script>
		 <script type="text/javascript" src="../js/jquery.min.js"></script>
		 <script>

</script>
		 </script>
		 
</head>

<body>
  <header>
	<div id="header">
    <h3>Welcome to online quiz system !!</h3>
	<div id="logout">
			<div id="u">Username:<?php echo $_SESSION['login_user'] . " " ; ?> </div>
			<div id="l">
				<span><?php echo date('d-m-y H:i:s'); ?></span><a href="../index.php">[Log out]</a> 
			</div>
	</div>
  </header>
  <section>
	<div id="container">
		<div id="sidebar">	
			<div id="links">
			<input type="button" id="btn_tech" onclick="show1();" value="Add Technology" /><br/>
			<input type="button" id="btn_que" onclick="show();" value="Add Question" /><br/>
			
			
			
			</div>
		</div>
		<div id="content">
			<div class="add_form" id="display_tech">
				<form>
				<label >Technology ID</label>
				<input type="text" value="<?php ?>" style="" />
				<br>
				<label>Technology Name : </label>
				<input id="tech_name"  type="text" name="tech_name" size="30" />
			<br />
			<div><input type="button" name="add" value="Add" id="add" />
				 <input type="reset" name="reset" value="Reset" id="" />
				 <input type="button" name="close" value="Close" onclick="btn_close()" />
			</div>
			<div> <span> <?php ?></span></div>
			
			</form>
			</div>
			<div class="add_form" id="display_que">
				<form action="" method="post">
				<label >Question ID</label>
				<input type="text" value="<?php ?>" style="" />
				<br>
				<label>Question Name : </label>
				<input id="tech_name"  type="text" name="tech_name" size="30" />
			<br />
			<div><input type="button" name="add" value="Add" id="add" />
				 <input type="reset" name="reset" value="Reset" id="" />
				 <input type="button" name="close" value="Close" onclick="btn_close()" />
			</div>
			<div> <span> <?php ?></span></div>
			
			</form>
			</div>
			
			
		</div>
	</div>
	
   
              
  </section>
 <div id="footer">
		 
  </div>

</body>
</html>
