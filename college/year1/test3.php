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
										$dbhost = "212.48.66.176:3306";
										$dbuser = "itecdigi_451917";
										$dbpass = "451917";
										$dbdata = "itecdigi_451917_co1";
										$conn = mysql_connect($dbhost, $dbuser, $dbpass);
										if (!mysql_connect($dbhost, $dbuser, $dbpass)){
											  die('Could not connect: ' . mysql_error());
										}
										else {
											  $data = mysql_select_db ($dbdata);
											  if (!$data)
											 {
													die('Could not use: ' .$dbdata);
											 }
										}
										
													?>
			
			<?php
			$name = $_POST['t_name'];
			$desc = $_POST['t_desc'];
			$price = $_POST['t_price'];
			$img = $_POST['t_img'];
			$insert = ("INSERT INTO post (t_name, t_desc, t_price, t_img) VALUES ('".$name."', '".$desc."', '".$price."', '".$img."')");
			$handle = mysql_query($insert);
			echo $handle;
			?>
			
			<?php
			$id = $_POST['treatment_id'];
			$delete = "DELETE FROM post WHERE treatment_id = $id" ;
            mysql_select_db('post');
            $retval = mysql_query( $delete, $conn );
		?>
		<?php
										/* Table */	echo "<table>";
										echo "\n";								
											echo '<th>' . 'ID' . '</th>';	
											echo "\n";						
											echo '<th>' . 'Name' . '</th>';	
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
									?>																			
									<br>										
									<form method = "post">										
									<h3>Enter a new record</h3>										
									Name										
									<input type='text' name='t_name'>										
									Description										
									<input type='text' name='t_desc'>
									Price										
									<input type='text' name='t_price'>			
									Image										
									<input type='text' name='t_img'>			
									<br>									
									<input type='submit' value='Submit'>		
									</form>										
									<br>										
									<br>										
									<form method = "post">						
									
									<h3>Delete a record</h3>					
									<p>Enter the ID of the record you want to delete</p>		
									<input type='text' name='treatment_id'>						
									<br>										
									<input type='submit' value='Submit'>		
									</form>					
								</article>
						</div>
					</div>
				</section>
</html>