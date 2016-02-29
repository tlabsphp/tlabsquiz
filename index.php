<?php
	session_start();
	include("login.php");
?>
<html>
<head>
  <title>
    Quiz Bank
  </title>
  
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/jquery.min.js"></script>
		
</head>
<body>
  <header>
	<div id="header">
    <h3>Welcome to online quiz system !!</h3>
	</div>
  </header>
  <section id="box">
    <div id="login">
		<h2>Login Form</h2>
		<form action="" method="post" name="loginfrm"> 
			<label>Username : </label>
			<input id="username" name="username" id="username" placeholder="username" type="text" size="30" />
			<label>Password : </label>
			<input id="password" name="password" id="password" placeholder="*****" type="password" size="30" />
			<br />
			<div> <input type="submit" name="login" value="Login" id="loginbutton" />
			<input type="reset" name="reset" value="Reset" id="" />
			<div> <a href="sign_up.php"> New Registration</a>
			</div>
			<div> <span> <?php echo $error; ?></span></div>
			
		</form>
	</div>
	
              
  </section>
  <div id="footer">
		 Copy rights Reserved.
  </div>

</body>
</html>