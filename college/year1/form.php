<!DOCTYPE HTML>
<html>
	<head>
	</head>
	<body>
		<form>
		<p>First name:</p>
		<input type="text" name="firstname">
		<p>Last name:</p>
		<input type="text" name="lastname">
		<br>
		<br>
		<input type="submit" value="Submit">
		</form>
		<br>
		<?php
		var_dump($_GET);
		echo "<br> <br> First name: ";
		echo $_GET["firstname"];
		echo "<br> Last name: ";
		echo $_GET["lastname"];
		echo "<br>";
		?>
	</body>
</html>