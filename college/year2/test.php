<!DOCTYPE HTML>
<html>
	<head>
	</head>
	<body>
		<h3>Task 1</h3>
		<form>
		<p>Enter a number</p>
		<input type="number" min="0" name="one">
		<br>
		<input type="number" min="0" name="two">
		<br>
		<input type="number" min="0" name="three">
		<br>
		<input type="submit" value="Submit">
		</form>
		<br>
		
		<?php	
		
		echo "<br>";
		
		if ($_GET["one"]!="") {
			echo $_GET["one"];
		} elseif ($_GET["two"]!="") {
			echo $_GET["two"];
		} elseif ($_GET["three"]!="") {
			echo $_GET["three"];
		} else {
			echo "<p>Please enter a number</p>";
		}
		
		echo "<br>";
		echo "<br>";
		
		if (  isset($_GET["one"]) && isset($_GET["two"]) && ($_GET["three"]="") ) {
			echo "box one * box two = ";
			echo $_GET["one"] * $_GET["two"];
		}
		
		echo "<br>";
		
		if ( isset($_GET["one"]) && isset($_GET["three"]) && ($_GET["two"]="") ){
			echo "box one * box three = ";
			echo $_GET["one"] * $_GET["three"];
		}
		
		echo "<br>";
		
		if ( isset($_GET["two"]) && isset($_GET["three"]) && ($_GET["one"]="") ){
			echo "box two * box three = ";
			echo $_GET["two"] * $_GET["three"];
		}
			
		echo "<br>";
		echo "<br>";
		
		if ( isset($_GET["two"]) && isset($_GET["three"]) && isset($_GET["one"]) ){
			echo "box one + two + three = ";
			echo $_GET["two"] + $_GET["one"] + $_GET["three"];
		}

		?>
	</body>
</html>