<!DOCTYPE HTML>
<html>
	<head>
	</head>
	<body>
		<h3>Task 1</h3>
		<form>
		<p>Favourite city:</p>
		<input type="text" name="favcity">
		<input type="submit" value="Submit">
		</form>
		<br>
		<?php
		echo "Your favourite city is: ";
		echo $_GET["favcity"];
		?>
		
		<h3>Task 2</h3>
		<?php
		var_dump($_GET);
		if(isset($_GET["favcity"])){
			echo "<p>Favourite city is set</p>";
		}
		else {
			echo "<p>Favourite city is not set</p>";
		}
		
		?>
		
		<h3>Task 3</h3>
		<form>
		<p><b>Choose a day:</b></p>
		<input type="radio" name="weekday" value="Monday"> Monday <br>
		<input type="radio" name="weekday" value="Tuesday"> Tuesday <br>
		<input type="radio" name="weekday" value="Wednesday"> Wednesday <br>
		<input type="radio" name="weekday" value="Thursday"> Thursday <br>
		<input type="radio" name="weekday" value="Friday"> Friday <br><br>
		<input type="submit" value="Submit">
		</form>
		<br>
		<?php
		if ($_GET["weekday"] == "Monday") {
			echo "<p>I don't care if Monday's blue</p>";
		}
		elseif ($_GET["weekday"] == "Tuesday" or $_GET["weekday"] == "Wednesday"){
			echo "<p>Tuesday's grey and Wednesday too</p>";
		}
		elseif ($_GET["weekday"] == "Thursday") {
			echo "<p>Thursday I don't care about you</p>";
		}
		elseif ($_GET["weekday"] == "Friday") {
			echo "<p>It's Friday I'm in love</p>";
		}
		else {
			echo "<p>Enter a day of the week</p>";
		}
		?>
	
	</body>
</html>