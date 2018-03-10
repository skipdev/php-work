<!DOCTYPE HTML>
<html>
	<head>
		<title>Services</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->		
		<style>
			tr:hover {background-color: #f5f5f5}
			th, td {
				border-bottom: 1px solid #ddd;
				padding: 15px;
				align: center
				vertical-align:middle;
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
			<!-- Main -->
				<section class="wrapper style1">
					<div class="container">
						<div id="content">

							<!-- Content -->
								<article>
									<?php 								
										/* Connecting */										
										$dbdata = "itecdigi_451917_co1";
										function connect_db($dbhost, $dbuser, $dbpass, $dbdata){
										$conn = mysql_connect($dbhost, $dbuser, $dbpass);
										if (!$conn){
											  die('Could not connect: ' . mysql_error());
										}
										else {
											  $data = mysql_select_db ($dbdata);
											  if (!$data)
											 {
													die('Could not use: ' .$dbdata);
											 }
										}
										}
										
										connect_db("212.48.66.176:3306","itecdigi_451917","451917","itecdigi_451917_co1");
										
			
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
					
				
			selecting("treatment_id","t_name","t_desc","t_price","t_img");

			echo "<br>";
			
		
			echo "<br>";
			echo "<br>";
			
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
			
			create_table("treatment_id","t_name","t_desc","t_price","t_img");
			
			
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