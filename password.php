<?php
	
	if(isset($_POST['Submit']))
	{
		$currentPassword = $_POST['cPassword'];
		$newPassword = $_POST['dPassword'];
		$retypeNewPassword = $_POST['ePassword'];

		if($currentPassword !== $newPassword || $newPassword !== $retypeNewPassword)
		{
			echo "Please type again";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>ChangePassword</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset style="width: 380px;">
			<legend> <b>Change Password</b></legend>
				<table>
				<tr>
					<td>Current Password: </td>
					<td> <input type="password" name="cPassword"/> 
					<br/> </td>
				</tr>

				<tr>
					<td> New Password: </td>
					<td> <input type="password" name="dPassword"/> <br/></td>
				</tr>

				<tr>
					<td>Retype New Password: </td>
					<td> <input type="password" name="ePassword"/> <br/></td>
				</tr>
			</table>
			<hr>
			<input type="submit" name="Submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>