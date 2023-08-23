<html>
	<head>
		<title>Display Records</title>
		<style>
			.result,.result td,.result th{
				border:1px solid black;
				color: orangered;
				padding:7px;
				margin:auto;
				background-color: lightgray;
			}
			.result th{
				background-color: lightblue;


			}
			
		</style>
	</head>
	<body>
		<a href="<?= base_url('register/student') ?>">GO TO FORM</a>
		<?php
		if(isset($data))
		{
			print_r($data);
		}
		?>
		<?php
		else
		{
		?>
				<table class="result">
			<tr>
				<th>ACTION</th>
				<th>ID</th>
				<th>NAME</th>
				<th>EMAIL</th>
				<th>MOBILE NUMBER</th>
			</tr>
			<?php
		if(isset($table))
		{
			foreach($table as $row)
			{
			?>
			<tr>
				<td><a href="<?= base_url('register/edit/'.$row -> id) ?>">Edit</a></td>
				<td><?=$row -> id ?></td>
				<td><?=$row -> student_name ?></td>
				<td><?=$row -> student_mail ?></td>
				<td><?=$row -> student_mobile ?></td>
			</tr>
			<?php

			}
		}
		?>
			
		</table>

		}
		?>

		
	</body>
</html>