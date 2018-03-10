<?php										
function connect_db($dbhost, $dbuser, $dbpass, $dbdata){
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if (!$conn){
	die('Could not connect: ' . mysql_error());
}
else {
	$data = mysql_select_db ($dbdata);
	if (!$data) {
		die('Could not use: ' .$dbdata);
	}
}
}

/* Inserting */
function insert_db($name, $desc, $price, $img) {
$insert = ("INSERT INTO post (t_name, t_desc, t_price, t_img) VALUES ('".$name."', '".$desc."', '".$price."', '".$img."')");
$handle = mysql_query($insert);
echo $handle;
}

/* Selecting */
function selecting($a,$b,$c,$d,$e) {
	$sql = "SELECT * from post";
	var_dump($sql);
	echo "<br>";
	$result = mysql_query($sql);
	while ($row = mysql_fetch_assoc($result)) {
		var_dump($row); 
		echo "<br>";
		echo $row[$a];
		echo $row[$b];
		echo $row[$c];
		echo $row[$d];
		echo $row[$e];
		echo "<br>";
	}
}

			function create_table($a,$b,$c,$d,$e) {
			echo "\n";
			echo "<table>";
			echo "\n";
			
			echo '<th>' . 'ID' . '</th>';
			echo "\n";
			echo '<th>' . 'Treatment' . '</th>';
			echo "\n";
			echo '<th>' . 'Description' . '</th>';
			echo "\n";
			echo '<th>' . 'Price' . '</th>';
			echo "\n";
			echo '<th>' . 'Image' . '</th>';
			
			echo "\n";
			
			$sql = "SELECT * from post";
			echo "<br>";
			$result = mysql_query($sql);
			while ($row = mysql_fetch_assoc($result)) {
				echo "\n";
				echo "<tr>";
					echo "\n";
					echo "<td>";
					echo $row[$a];
					echo "</td>";
					echo "\n";
					echo "<td>";
					echo $row[$b];
					echo "</td>";
					echo "\n";
					echo "<td>";
					echo $row[$c];
					echo "</td>";
					echo "\n";
					echo "<td>";
					echo $row[$d];
					echo "</td>";
					echo "\n";
					echo "<td>";
					echo $row[$e];
					echo "</td>";
					echo "\n";
				echo "</tr>";
			}
			
			echo "\n";
			echo "</table>";
			echo "\n";
			}
			
			?>
			
	</body>
</html>