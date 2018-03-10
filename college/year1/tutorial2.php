<!DOCTYPE HTML>
<html>
	<head>
	</head>
	<body>
		<?php
			echo "<h3>Else-if statements</h3>";
			echo "Is the month August?";
			
			echo "<br>";
			/*
			If/else conditionals.
			*/
			$current_month = date('F', time());
				if ($current_month == "August") {
					echo "It's August, so it's really hot! :)";
				}
				else {
					echo "It's not August, so at least we're not in the peak of the heat.";
				}
			echo "<h3>Simple loops</h3>";
			/*
			While loop.
			The while loop executes a block of code as long as the specified condition is true.
			*/
			echo "<h4>While loop</h4>";
			$x = 1;
			while($x <= 5) {
			echo "The number is: $x <br>";
			$x++;
			} 

			echo "<br>";
			/*
			Do-while loop.
			The do-while loop will execute the block of code once, then check the condition and repeat the loop while the specified condition is true.
			*/
			echo "<h4>Do-while loop</h4>";
				$x = 1;
				do {
				echo "abc   ";
				$x++;
				} while ($x <= 9);
				
			echo "<br>";
			echo "<br>";
			/*
			For loop.
			The for loop is used when you know in advance how many times the script should run.
			*/
			echo "<h4>For loop</h4>";
			for ($x = 1; $x <= 9; $x++) {
				echo "The number is: $x <br>";
				}
				
			echo "<br>";
			
			echo "<h4>Foreach loop</h4>";
			/*
			Foreach loop.
			The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.
			*/
			$items = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12");
				foreach ($items as $value) {
				echo "$value x $value =  " .  $value * $value . "<br>";
				}
			echo "<br>";
			$items = array("A", "B", "C", "D", "E", "F");
			foreach ($items as $value) {
			echo "Item $value <br>";
			}
				
			echo "<br>";

			echo "<br>";
			echo "<h4>Nested for loops</h4>";
			echo "<table border =\"0\" style='border-collapse: collapse'>";  
			for ($i=1; $i <= 7; $i++) {   
				echo "<tr> \n";  
				for ($j=1; $j <= 7; $j++) {   
			$p = $j * $i ;  
				echo "<td>$p</td> \n";  
            }  
            echo "</tr>";  
			}  
			echo "</table>";  
			
			echo "<h4>Break</h4>";
			/*
			Break the loop.
			Break ends execution of the current loop.
			*/
			$arr = array('one', 'two', 'three', 'four', 'stop', 'five');
			while (list(, $val) = each($arr)) {
			if ($val == 'stop') {
			break;
			}
			echo "$val<br />\n";
			}
?> 
	</body>
</html>