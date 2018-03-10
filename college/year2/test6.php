<?php
function add($a,$b,$c) {
	$d = $a + $b + $c;
	echo $d;
}
add(1,2,3);
echo "<br>";
function printTimesTwo($x) {	
	$y = $x * 2;	
	echo $y;
	}
	
printTimesTwo(4);

echo "<br>";

function timesBy($x,$y) {	
	$z = $x * $y;	
	echo $z;
}
	
timesBy(3,3);
	
echo "<br>";
	
function para($x,$y) 
{	
return "<h3>" . $x . "</h3>" . "<p>" . $y . "</p>";
}
	
echo "<br>";
	
function boo($x){	
	if ($x % 2 == 0) {
		if ($x > 0) {	
			if ($x < 1001) {
				echo true;
			}
			else {
				echo 0;
			}
		}	
		else {
			echo 0;
		}
	} 
	else {
		echo 0;
	}
}
	
boo(1003);

echo "<br>";

function ramp($height){	
	for ($i = 1; $i <= $height; $i++) {
	echo "*" * $i;
	echo "<br>";
	}			
} 

ramp(4);
?>