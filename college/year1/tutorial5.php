
<!DOCTYPE HTML>
<html>
	<head>
	</head>
	<body>
	<h3>Task 1</h3>
	
		<form method = "post">
		<p>Enter a city:</p>
		<input type="text" name="city">
		<p>Enter a month:</p>
		<input type="text" name="month">
		<p>Enter a year:</p>
		<input type="text" name="year">
		<p>What was the weather like?</p>
		<input type="checkbox" name="weather[]" value="Sunshine">Sunshine<br>
		<input type="checkbox" name="weather[]" value="Rain">Rain<br>
		<input type="checkbox" name="weather[]" value="Clouds">Clouds<br>
		<input type="checkbox" name="weather[]" value="Hail">Hail<br>
		<input type="checkbox" name="weather[]" value="Sleet">Sleet<br>
		<input type="checkbox" name="weather[]" value="Snow">Snow<br>
		<input type="checkbox" name="weather[]" value="Wind">Wind<br>
		<input type="hidden" name="which_form" value="first">
		<input type="submit" value="Submit">
		</form>
		<br>
		<?php
		var_dump($_POST);
		if($_POST['which_form']=='first') {		
			echo "<br>";
			echo "<br>";
			echo "In " . $_POST["city"] . " in the month of ". $_POST["month"] . ", ". $_POST["year"] .", you observed the following weather: ";
			echo "<ul>";
			if(!empty($_POST['weather'])) {
				foreach($_POST['weather'] as $check) {
					echo "<li>" . $check . "</li>";
				}
			}
			echo "</ul>";
		}	
		?>
		
		<br>
		
	<h3>Task 2</h3>

		<?php
		$cities = array("Tokyo"=>"Japan", "Mexico City"=>"Mexico", "New York City"=>"USA", "Mumbai"=>"India", "Seoul"=>"Korea", "Shanghai"=>"China",);
		
		echo "<form method = 'post'>";
		foreach($cities as $x => $x_value) {
			echo "<input type='checkbox' name='cities' value=" . $x . ">" . $x;
			echo "<br>";
		}
		
		echo "<input type='hidden' name='which_form' value='second'>";
		echo "<input type='submit' value= 'Submit'>";
		echo "</form>";
		echo "<br>";
		
		var_dump($_POST);
		if($_POST['which_form']=='second') {
			echo "<br>";
			echo "<br>";
			echo $_POST["cities"] . " is in " . $cities[ $_POST["cities"] ] . "<br>";
		}	
		?>
		
	<h3>Task 3</h3>
	
		<?php
		$city1 = array
		  (
		  array("Tokyo","Japan","Asia"),
		  array("Mexico City","Mexico","North America"),
		  array("New York City","USA","North America"),
		  array("Mumbai","India","Asia"),
		  array("Seoul","Korea","Asia"),
		  array("Shanghai","China","Asia")
		  );
		  
		  echo "
			<table border="."1".">
			<th>City</th>
			<th>Country</th>
			<th>Continent</th>";
			
			for($i=0;$i<count($city1);$i++) {
			  echo'<tr>';
			  echo'<td>' . $city1[$i][0] . '</td>';
			  echo'<td>' . $city1[$i][1] . '</td>';
			  echo'<td>' . $city1[$i][2] . '</td>';
			  echo'</tr>';
			}
		 ?>
	</body>
</html>