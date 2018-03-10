<!DOCTYPE HTML>
<html>
	<head>
	</head>
	<body>
		<h3>Task 1</h3>
		<form>
		<p>Enter a number</p>
		<input type="number" name="one">
		<br>
		<input type="number" name="two">
		<br>
		<input type="number" name="three">
		<br>
		<input type="submit" value="Submit">
		</form>
		<br>
		
		<?php
		echo $_GET["one"];
		$_GET["one"] = $one;
		echo "<br>";
		echo $_GET["two"];
		$_GET["two"] = $two;
		echo "<br>";
		echo $_GET["three"];
		$_GET["three"] = $three;
		echo "<br>";
		echo "<p>The total is: </p>";
		echo int($one) + int($two) + int($three);
		?>
	</body>
</html>