<?php
  session_start();
?>
<html>
<head>
  <title>
    Quiz Bank
  </title>
        <link rel="stylesheet" type="text/css" href="css/style.css" /> 
		<script type="text/javascript" src="js/jquery.js"></script>		 
</head>
<body>
  <header>
	<div id="header">
    <h3>Welcome to online quiz system !!</h3>
	<div id="logout"><?php echo $_SESSION['login_user']; ?> <a href="index.php">Log out</a> </div>
	</div>
  </header>
  <section id="box">
	<div>
			
	</div>              
  </section>
  <div id="footer">
		 Copy rights Reserved.
		 <?php
			
		 
		 ?>
  </div>
</body>
</html>