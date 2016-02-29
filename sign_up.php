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
		<table>
			<form action="admin/function.php" method="post">
					<!---this is the sign up page.
just practice					--->
					
					<tr><td class="reg_frm">Name </td><td><input id="sname" type="text" name="sname" /></td><td><span id="sname" value=></span></td></tr>
					<tr><td class="reg_frm">Email id</td><td><input type="text" name="semail" /></td></tr>
					<tr><td class="reg_frm">Contact No.</td><td><input type="text" name="scontact" /></td></tr>
					<tr><td class="reg_frm">Degree</td><td>
						<select id="degree" class="reg_frm" name="sdegree">
							<option>12th</option><option>BCA</option>
							<option>BCOM</option><option>MCOM</option>
							<option>MBA</option><option>MCA</option><option>MSCIT</option>
						</select>
					</td></tr>
					<tr><td class="reg_frm">Username</td><td><input type="text" name="suname" /></td></tr>
					<tr><td class="reg_frm">Password</td><td><input type="text" name="spwd" /></td></tr>
					
					<tr><td colspan=3 class="reg_frm" ><input type="submit" name="sbtn" value="Submit" id="regbtn" onclick="validation()" />
									  <input type="reset" name="breset" id="regbtn" />
									  <a href="index.php" ><input type="button" name="back" value="Back" id="regbtn" />
									  </a>
</td></tr>
					
			</form>
		</table>              
  </section>
  <div id="footer">
		 Copy rights Reserved.
  </div>
<script>
	function validation(){
		 var x = document.getElementById("sname").value;
		if (x == null || x == "") 
		{
			document.getElementById("error").value="Name must be filled out";
			return false;
		}

	}
</script>
</body>
</html>
