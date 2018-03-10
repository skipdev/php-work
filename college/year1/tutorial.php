<!DOCTYPE HTML>
<html>
	<head>
	</head>
	<body>
	<?php
	echo "<h2>Hello, world!</h2>";
	echo "<br>";
	$t = "twinkle  ";
	$s = "star";
	echo $t . $t . "little  " . $s;
	echo "<br>";
	$result = 2 + 3;
	echo "<p>";
	echo $result;
	echo "</p>";
	echo "<br>";
	$x = 10;
    $y = 7;
	echo "x is" . $x;
	echo "<br>";
	echo "y is" . $y;
	echo "<br>";
	$a = $x + $y;
	echo "x + y =" . $a;
	echo "<br>";
	$b = $x - $y;
	echo "x - y =" . $b;
	echo "<br>";
	echo "x * y =" . $x * $y;
	echo "<br>";
	echo "x / y =" . $x / $y;
	echo "<br>";
	echo "x % y =" . $x % $y;
	echo "<br>";
	echo "<br>";
	$val = 8;
	echo "Value is:  " . $val;
	echo "<br>";
	$val2 = $val + 2;
	echo "Add 2.  " . "Value is now:  " . $val2;
	echo "<br>";
	$val3 = $val2 - 4;
	echo "Subtract 4.  " . "Value is now:  " . $val3;
	echo "<br>";
	$val4 = $val3 * 5;
	echo "Multiply by 5.  " . "Value is now:  " . $val4;
	echo "<br>";
	$val5 = $val4 / 3;
	echo "Divide by 3.  " . "Value is now:  " . $val5;
	echo "<br>";
	$val6 = $val5 + 1;
	echo "Increment value by one.  " . "Value is now:  " . $val6;
	echo "<br>";
	$val7 = $val6 - 1;
	echo "Decrement value by one.  " . "Value is now:  " . $val7;
	echo "<br>";
	echo "<br>";
	$whatisit = array("lol", 1., True, 56, NULL);
	foreach ($whatisit as $value) {
    echo "Value is " , gettype($value), "\n", "<br>";
	}
	?>
	</body>
</html>