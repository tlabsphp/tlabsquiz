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
		<div id="logout">
		<?php
			if(isset($_SESSION['login_user'])){
				?>
			<div id="u">Welcome, <?php echo $_SESSION['login_user']; ?> </div>
			<div id="l"><a href="index.php"> Log out</a> </div>	
				<?php
				
			}
		?>
			
		</div>
	
	</div>
  </header>