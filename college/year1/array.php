<!DOCTYPE HTML>
<html>
	<head>
	<style>
		table { table-layout: fixed; }
		td { width: 5%; text-align: center;}
		table#t01 tr:nth-child(even) {
				background-color: #eee;
			}
			table#t01 tr:nth-child(odd) {
				background-color: #fff;
			}
			table#t01 th {
				color: white;
				background-color: black;
			}
	</style>
	</head>
	<body>
	<?php
		$student = array("Steph" => "Blonde", "Jess" => "Ginger", "Scott" => "Purple", "Ewan" => "Brown", "Dan" => "Ginger");
		$pc = array("Hard Drive" => 40, "Processor" => 83, "Graphics Card" => 100, "Monitor" => 50, "Motherboard" => 110);
		var_dump($student);
		echo "<br>";
		var_dump($pc);
		echo "<br>";
		$name = "Jess";
		echo "Jess' hair colour is " . $student[$name];
		echo "<br>";
		echo "<br>";
		foreach ($student as $x=>$y){
			echo "Name: " . $x;
			echo "<br>";
			echo "Hair colour: " . $y;
			echo "<br>";
		}
		
		$monday = array("p1" => " --- ","p2" => " --- ","p3" => " Biology ","p4" => " Software Dev ","p5" => " Computing ");
		var_dump($monday);
		echo "<br>";
		$tuesday = array("p1" => " --- ","p2" => " Maths ","p3" => " Maths ","p4" => " --- ","p5" => " Biology ");
		var_dump($tuesday);
		echo "<br>";
		$wednesday = array("p1" => " Software Dev ","p2" => " Maths ","p3" => " Software Dev ","p4" => " --- ","p5" => " --- ");
		var_dump($wednesday);
		echo "<br>";
		$thursday = array("p1" => " --- ","p2" => " --- ","p3" => " Maths ","p4" => " Biology ","p5" => " --- ");
		var_dump($thursday);
		echo "<br>";
		$friday = array("p1" => " Computing ","p2" => " --- ","p3" => " --- ","p4" => " --- ","p5" => " --- ");
		var_dump($friday);
		echo "<br>";
		echo "<br>";
		$schedule =array("monday" => $monday,"tuesday" => $tuesday,"wednesday" => $wednesday,"thursday" => $thursday,"friday" => $friday);
		var_dump($schedule);
		echo "<br>";
		echo "<br>";
		foreach ($schedule as $x=>$y){
			echo $x . $y;
			echo "<br>";
		}
    ?>
		<table border = 2; id="t01"; align=center >
		<tr>
			<th>
				<b>DAY</b>
			</th>
			<th><b>P1</b></th>
			<th><b>P2</b></th>
			<th><b>P3</b></th>
			<th><b>P4</b></th>
			<th><b>P5</b></th>
		</tr>
		<tr>
			<td>
				<p>Monday</p>
			</td>
			<td><?php
			echo $monday["p1"];
			?></td>
			<td><?php
			echo $monday["p2"];
			?></td>
			<td><?php
			echo $monday["p3"];
			?></td>
			<td><?php
			echo $monday["p4"];
			?></td>
			<td><?php
			echo $monday["p5"];
			?></td>
		</tr>
		<tr>
			<td>
				<p>Tuesday</p>
			</td>
			<td><?php
			echo $tuesday["p1"];
			?></td>
			<td><?php
			echo $tuesday["p2"];
			?></td>
			<td><?php
			echo $tuesday["p3"];
			?></td>
			<td><?php
			echo $tuesday["p4"];
			?></td>
			<td><?php
			echo $tuesday["p5"];
			?></td>
		</tr>
		<tr>
			<td>
				<p>Wednesday</p>
			</td>
			<td><?php
			echo $wednesday["p1"];
			?></td>
			<td><?php
			echo $wednesday["p2"];
			?></td>
			<td><?php
			echo $wednesday["p3"];
			?></td>
			<td><?php
			echo $wednesday["p4"];
			?></td>
			<td><?php
			echo $wednesday["p5"];
			?></td>
		</tr>
		<tr>
			<td>
				<p>Thursday</p>
			</td>
			<td><?php
			echo $thursday["p1"];
			?></td>
			<td><?php
			echo $thursday["p2"];
			?></td>
			<td><?php
			echo $thursday["p3"];
			?></td>
			<td><?php
			echo $thursday["p4"];
			?></td>
			<td><?php
			echo $thursday["p5"];
			?></td>
		</tr>
		<tr>
			<td>
				<p>Friday</p>
			</td>
			<td><?php
			echo $friday["p1"];
			?></td>
			<td><?php
			echo $friday["p2"];
			?></td>
			<td><?php
			echo $friday["p3"];
			?></td>
			<td><?php
			echo $friday["p4"];
			?></td>
			<td><?php
			echo $friday["p5"];
			?></td>
		</tr>
		</table>
		<br>
		<?php
		echo"<table>";
		echo"<tr>
			<th>
				<b>DAY</b>
			</th>
			<th><b>P1</b></th>
			<th><b>P2</b></th>
			<th><b>P3</b></th>
			<th><b>P4</b></th>
			<th><b>P5</b></th>
		</tr>";
		foreach ($schedule as $day_name=>$day_array) {
			echo"<tr>";
			foreach ($day_array as $period_name=>$period_value) {
				echo "<td>";
				echo $period_value;
				echo "</td>";
			}
			echo"</tr>";
		}
		echo"</table>";
		?>
				
	</body>
</html>		