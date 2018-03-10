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
			#Connect to the database
			
			#set the connection variables
			$dbhost = "212.48.66.176:3306";
			$dbuser = "itecdigi_451917";
			$dbpass = "451917";
			$dbdata = "itecdigi_451917_co1";
			$conn = mysql_connect($dbhost, $dbuser, $dbpass);
            

			#login to the server
			if (!mysql_connect($dbhost, $dbuser, $dbpass)){
				  die('Could not connect: ' . mysql_error());
			}
			else {
				  #use your particular database
				  $data = mysql_select_db ($dbdata);
				  if (!$data)
				 {
						die('Could not use: ' .$dbdata);
				 }
			}
			
			?>
			
			<form method = "post">
			<h1>Enter a new record</h1>
			<br>
			Name
			<input type='text' name='t_name'>
			Description
			<input type='text' name='t_desc'>
			Price
			<input type='text' name='t_price'>
			Image
			<input type='text' name='t_img'>
			<br>
			<input type='submit' value='Submit' name='submit1'>
			</form>
			
			
			
			<?php
			
			$name = $_POST['t_name'];
			$desc = $_POST['t_desc'];
			$price = $_POST['t_price'];
			$img = $_POST['t_img'];
			
			
			/* Inserting */
			function insert_db($name, $desc, $price, $img) {
			$insert = ("INSERT INTO post (t_name, t_desc, t_price, t_img) VALUES ('".$name."', '".$desc."', '".$price."', '".$img."')");
			$handle = mysql_query($insert);
			echo $handle;
			}
			
			insert_db($_POST['t_name'],$_POST['t_desc'],$_POST['t_price'],$_POST['t_img']);
			
			if(isset($_POST['submit1'])){
			if(!insert_db) {
				die("error");
			}
			else {
				echo " post has been applied to the database";
											
			}
			}
			
			echo "<br>";
			echo "<br>";
			echo "<br>";
			
			
			/* Selecting */
			echo "<h1>Selecting</h1>";
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
			
			?>
			<form method = "post">
			<h1>Delete a record</h1>
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
			<h2>Discuss why we have made each of those functions. <b>(60 words)</b> </h2>
			<p>Functions allow quicker, easier, and more reliable coding.</p>
			<p>They are 'encapsulated' code meaning they have a lot of instructions in a single line of code</p>
			<p>Functions are self-containing and designed to carry out a useful task</p>
			<p>Once a funciton has been defined, you can use this over and over again.</p>
			<p>This means that you can call it to any part of the code, so performing the function becomes much easier and quicker</p>
			

	</body>
</html>