<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Comfortaa" />
		<style>
		h1 {
			font-family: Comfortaa;
			font-size: 24px;
			font-style: normal;
			font-variant: normal;
			font-weight: 500;
			line-height: 26.4px;
		}
		h3 {
			font-family: Comfortaa;
			font-size: 14px;
			font-style: normal;
			font-variant: normal;
			font-weight: 500;
			line-height: 15.4px;
		}
		p {
			font-family: Comfortaa;
			font-size: 14px;
			font-style: normal;
			font-variant: normal;
			font-weight: 400;
			line-height: 20px;
		}
		blockquote {
			font-family: Comfortaa;
			font-size: 21px;
			font-style: normal;
			font-variant: normal;
			font-weight: 400;
			line-height: 30px;
		}
		pre {
			font-family: Comfortaa;
			font-size: 13px;
			font-style: normal;
			font-variant: normal;
			font-weight: 400;
			line-height: 18.5714px;
		}
		</style>
	</head>
	<body>
		<?php
			echo "<p>";
			# Create a function called 'hello' that outputs that phrase "'Hello, World!'" to the browser. Call the function.
			function hello(){
				echo "Hello, World!";
			}
			echo hello();
			
			echo "<br>";
			echo "<br>";
			
			function area($l,$w){
				$area = $l * $w;
				echo "A rectangle of length " . $l . " and width " . $w . " has an area of " . $area . ".";
			}
			echo area(5,2);
			
			echo "<br>";
			echo "<br>";
			
			?>
			
			<form method = "post">
			<p>Enter the length and the width</p>
			<input type='text' name='no1'>
			<br>
			<input type='text' name='no2'>
			<br>
			<input type='submit' value='Submit'>
			</form>
			
			<?php
			echo "<p>";
			
			$no1 = $_POST['no1'];
			$no2 = $_POST['no2'];
			
			echo area($no1,$no2);
			
			echo "<br>";
			echo "<br>";
			
			?>
			
			<form method = "post">
				<select name = "selected">
					<option>Select a Month</option>
					
					<?php
					$months = array("January"=>"31", "February"=>"28 days, if leap year then 29", "March"=>"31", "April"=>"30", "May"=>"31", "June"=>"30", "July"=>"31", "August"=>"31", "September"=>"30", "October"=>"31", "November"=>"30", "December"=>"31");
					foreach($months as $month => $day){
						echo "<option value='" . $month . "'>" . strtoupper($month) . "</option>\t\n";
					}
					
					?>
				</select>
				<input type="submit" value="Submit">
			</form>
			
			<?php
			$selected = $_POST['selected'];
			echo "The month of " . $selected . " has " . $months[$selected] . " days.";
			
			?>
			
	</body>
</html>