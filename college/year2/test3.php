<!DOCTYPE HTML>
<html>
	<head>
		<style>
			tr:hover {background-color: #f5f5f5}
			th, td {
				border-bottom: 1px solid #ddd;
				padding: 15px;
				align: center
				vertical-align: middle;
			}
			th {
				background-color: #8f3763;
				color: white;
				align: center
			}
			td {
			  text-align: center;
			  vertical-align: middle;
			}
			
		</style>
	</head>
	<body>
		<?php	
			/*
			* Connect to the database
			*/
			echo "working";
			//set the connection variables
			$dbhost = "212.48.66.176:3306";
			$dbuser = "itecdigi_451917";
			$dbpass = "451917";
			$dbdata = "itecdigi_451917_co1";
			$conn = mysql_connect($dbhost, $dbuser, $dbpass);
            

			//login to the server
			if (!mysql_connect($dbhost, $dbuser, $dbpass)){
				  die('Could not connect: ' . mysql_error());
			}
			else {
				  //use your particular database
				  $data = mysql_select_db ($dbdata);
				  if (!$data)
				 {
						die('Could not use: ' .$dbdata);
				 }
			}
			
			/*
			* Select records
			*/
			$sql = "SELECT * from post";
			var_dump($sql);
			echo "<br>";
			$result = mysql_query($sql);
			while ($row = mysql_fetch_assoc($result)) {
				var_dump($row); 
				echo "<br>";
				echo $row["treatment_id"];
				echo $row["t_name"];
				echo $row["t_desc"];
				echo $row["t_price"];
				echo $row["t_img"];
				echo "<br>";
			}

			echo "<br>";
			
			/* Table */
			echo "<table>
			<table>
				<tr>
					<td>Name</td>
					<td>Age</td>
					<td>Gender</td>
				</tr>
				<tr>
					<td>Steph</td>
					<td>17</td>
					<td>Grill</td>
				</tr>
				<tr>
					<td>James</td>
					<td>17</td>
					<td>Boy</td>
				</tr>
				";
				function build_table($array){
				$html = '<table>';
				$html .= '<tr>';
				foreach($array[0] as $key=>$value){
						$html .= '<th>' . $key . '</th>';
					}
				$html .= '</tr>';

				// data rows
				foreach( $array as $key=>$value){
					$html .= '<tr>';
					foreach($value as $key2=>$value2){
						$html .= '<td>' . $value2 . '</td>';
					}
					$html .= '</tr>';
				}

				$html .= '</table>';
				return $html;
			}

			$array = array(
				array('first'=>'tom', 'last'=>'smith', 'email'=>'tom@example.org', 'company'=>'example ltd'),
				array('first'=>'hugh', 'last'=>'blogs', 'email'=>'hugh@example.org', 'company'=>'example ltd'),
				array('first'=>'steph', 'last'=>'brown', 'email'=>'steph@example.org', 'company'=>'example ltd')
			);

			echo build_table($array);
			
			?>
			
			<form method = "post">
			<p>Enter a new record</p>
			<br>
			<p>Name</p>
			<input type='text' name='t_name'>
			<br>
			<p>Description</p>
			<input type='text' name='t_desc'>
			<br>
			<p>Price</p>
			<input type='text' name='t_price'>
			<br>
			<p>Image</p>
			<input type='text' name='t_img'>
			<br>
			<br>
			<input type='submit' value='Submit'>
			</form>
			
			
			
			<?php
			
			$name = $_POST['t_name'];
			$desc = $_POST['t_desc'];
			$price = $_POST['t_price'];
			$img = $_POST['t_img'];
			
			var_dump($_POST);
			$insert = ("INSERT INTO post (t_name, t_desc, t_price, t_img) VALUES ('".$name."', '".$desc."', '".$price."', '".$img."')");
			$handle = mysql_query($insert);
			echo $handle;
			
			echo "<br>"
			
			?>
			<form method = "post">
			<p>Delete a record</p>
			<br>
			<p>Enter the ID of the record you want to delete</p>
			<input type='text' name='treatment_id'>
			<br>
			<input type='submit' value='Submit'>
			</form>
			
			<?php
			$id = $_POST['treatment_id'];
			$delete = "DELETE FROM post WHERE treatment_id = $id" ;
            mysql_select_db('post');
            $retval = mysql_query( $delete, $conn );
			
		?>
		<?php
		
			echo "<br>";
			echo "<br>";
			
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
					echo $row["treatment_id"];
					echo "</td>";
					echo "\n";
					echo "<td>";
					echo $row["t_name"];
					echo "</td>";
					echo "\n";
					echo "<td>";
					echo $row["t_desc"];
					echo "</td>";
					echo "\n";
					echo "<td>";
					echo $row["t_price"];
					echo "</td>";
					echo "\n";
					echo "<td>";
					echo $row["t_img"];
					echo "</td>";
					echo "\n";
				echo "</tr>";
			}
			
			echo "\n";
			echo "</table>";
			echo "\n";
			
			?>
			
			<br>
			<br>
			

	</body>
</html>