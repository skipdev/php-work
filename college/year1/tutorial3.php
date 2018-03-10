<!DOCTYPE HTML>
<html>
	<head>
	</head>
	<body>
		<?php
			echo "<h3>Strings Concatenation</h3>";
			$around="around";
			echo "What goes " . $around . " comes " . $around;
			
			echo "<br>";
			/*
			Predefined functions.
			var_dump() is one of the many predefined funtions for use in PHP.
			*/
			echo "<h3>Using var_dump()</h3>";
			$dump = array("Harry", 28, NULL);
			
			foreach ($dump as $value) {
				echo "Value is " , var_dump($value), "\n", "<br>";
			}
			echo "<br>";
			
			/*
			A boolean expresses a truth value. It can be either TRUE or FALSE. It is the simplest data type.
			Here I have assigned the word "foo" to be True.
			*/
			$foo = True;
			echo var_dump($foo);
			
			echo "<br>";
			
			echo "<h3>Simple Array</h3>";
			$weather = array("sun","snow","sunshine","wind","hail","sleet","clouds","rain");
			echo "<p>We've seen all kinds of weather this month. At the beginning of the month, we had " . $weather[1] . " and " . $weather[3] . ". Then came " . $weather[2] . " with a few ". $weather[6] . " and some " . $weather[7] . ". At least we didn't get any ". $weather[4] ." or ". $weather[5] .".</p>";
		
			echo "<h3>Simple Array</h3>";
			$first = array("William", "Henry", "Filbert", "John", "Pat");
			$last = array("Smith", "Jones", "Winkler", "Cooper", "Cline");
			echo "Random name selected: " .  $first[array_rand($first)] . " " . $last[array_rand($last)];
		
			echo "<h3>Array Functions</h3>";
			echo "<h4>Task 1</h4>";
			$city = array("Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");
			$n = ",";
			foreach ($city as $value) {
				echo "$value$n ";
			}
			
			echo "<h4>Task 2</h4>";
			sort($city);
			echo "<ul>";
			foreach ($city as $value) {
				echo "<li>$value</li>";
			}
			echo "</ul>";
			
			echo "<h4>Task 3</h4>";
			array_push($city, "Los Angeles", "Calcutta", "Osaka", "Beijing");
			sort($city);
			echo "<ul>";
			foreach ($city as $value) {
				echo "<li>$value</li>";
			}
			echo "</ul>";
			
			echo "<h3>Array Functions</h3>";
			$temp = array("20&deg;","25&deg;","25&deg;","26&deg;","27&deg;","25&deg;","19&deg;","21&deg;","26&deg;","23&deg;","20&deg;","25&deg;","28&deg;","29&deg;","31&deg;","30&deg;","27&deg;","27&deg;","26&deg;","23&deg;","20&deg;","18&deg;","19&deg;","24&deg;","24&deg;","21&deg;","26&deg;","28&deg;","31&deg;","33&deg;");
			sort($temp);
			$average = array_sum($temp) / count($temp);
			echo "The average temperate in July was " . $average . "&deg; C";
			echo "<br>";
			echo "The maximum temperatures reached were " . max($temp) . "C, ";
			unset($temp[29]);
			echo max($temp) . "C, ";
			unset($temp[28]);
			echo max($temp) . "C, ";
			unset($temp[27]);
			echo max($temp) . "C, and ";
			unset($temp[26]);
			echo max($temp) . "C";
			echo "<br>";
			echo "The minimum temperatures reached were " . min($temp) . "C, ";
			unset($temp[0]);
			echo min($temp) . "C, ";
			unset($temp[1]);
			echo min($temp) . "C, ";
			unset($temp[2]);
			echo min($temp) . "C, and ";
			unset($temp[3]);
			echo min($temp) . "C.";
			
			
			echo "<h3>Messing around with arrays</h3>";
			
			$class = array("George", "Mat", "Steph", "Pav", "Brendan", "Jamie", "Ellis", "James");
			$n = ",";
			foreach ($class as $value) {
			echo "$value$n ";
			}
			$class[0] = "Lola";
			echo "<br>";
			foreach ($class as $value) {
			echo "$value$n ";
			}
			echo "<br>";
			$class[5] = "Pat";
			$class[2] = "Tang";
			$class[60] = 10;
			sort($class);
			foreach ($class as $value) {
			echo "$value$n ";
			}
			
			$first = array("Jess", "Mat", "Steph", "Pav", "Brendan", "Jamie", "Ellis", "James", "George", "Valeria", "The Queen of Hong Kong", "Annabelle", "Dan");
			$last = array(" the idiot", " the programmer", " the jolly old man", " the wrinkly old woman", " is a smelly baby", " is on steroids", " the special snowflake", " the crazy person", " the weirdo", " the clown", " the killer", " the sexy woman", " the naked man");
			echo "<br>";
			echo "Random name selected: " .  $first[array_rand($first)] . " " . $last[array_rand($last)];
			echo "<br>";
			echo "<br>";
			echo "<br>";
			echo "<br>";
			echo "<br>";
			echo "<br>";
		?> 
	</body>
</html>