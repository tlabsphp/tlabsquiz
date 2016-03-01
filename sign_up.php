<?php
	include("header.php");
?>
  <section id="box">
	<div>
	<table>
			<form action="admin/function.php" method="post" onSubmit="validate_all()">
					<!--- this is the sign up page. just practice --->
					
					<tr><td class="reg_frm">Name </td><td><input id="sname" type="text" name="sname" onKeyUp="updatelength('sname', 'error_name')"/></td>
						<td><span id="error_name"></span></td></tr>
					<tr><td class="reg_frm">Email id</td><td><input type="text" name="semail" id="emailid" /></td>
						<td><span id="error_email"></span></td></tr></tr>
					<tr><td class="reg_frm">Contact No.</td><td><input type="text" name="scontact" id="cont_num" /></td>
						<td><span id="error_num"></span></td></tr></tr>
					</tr>
					<tr><td class="reg_frm">Degree</td><td>
						<select id="degree" class="reg_frm" name="sdegree">
							<option>12th</option><option>BCA</option>
							<option>BCOM</option><option>MCOM</option>
							<option>MBA</option><option>MCA</option><option>MSCIT</option>
						</select>
					</td>
						<td><span id="error_num"></span></td>
					</tr>
					<tr><td class="reg_frm">Username</td><td><input type="text" name="suname" id="username" /></td>
						<td><span id="error_username"></span></td>
					</tr>
					<tr><td class="reg_frm">Password</td><td><input type="text" name="spwd" id="pass" /></td>
						<td><span id="error_pwd"></span></td>
					</tr>
					<tr><td colspan=4 class="reg_frm" ><input type="submit" name="sbtn" value="Submit" id="regbtn" />
									  <input type="reset" name="breset" id="regbtn" />
									  <a href="index.php" ><input type="button" name="back" value="Back" id="regbtn" />
									  </a>
					</td></tr>
					
			</form>
		</table>              
	</section>
 <?php
	include("footer.php");
 ?>
	