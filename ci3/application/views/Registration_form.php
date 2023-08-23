<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<?php
	if(isset($status))
	{
		echo $status;
		echo ' <br> '.$test;
	}
	if(isset($msg))
	{
		echo '<h2>'.$msg.'<h2>';

	}
	?>
	
	<form action="<?=base_url().'register/saveData/'?>" method="post">
		<table cellspacing="20">
			<tr>
				<td>Name</td>
				<td><input type="text" name="stname"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="stmail"></td>
			</tr>
			<tr>
				<td>Mobile</td>
				<td><input type="number" name="stnumber"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Register"></td>
				<a href="<?= base_url('register/fetchData')?>">VIEW RECORD</a>
			</tr>

		
	</table>
		
	</form>
	

</body>
</html>