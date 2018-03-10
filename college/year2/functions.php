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
									<header>
										<h2>Services</h2>
										<p>A complete list of beauty treatments offered by me</p>
									</header>
									<p>Here's a list of treatments:</p>
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
		
			
		<?php
										/* Table */	
										echo "<table>";
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
									
									<?php
										/* Inserting */
											function insert_db($name, $desc, $price, $img) {
											$insert = ("INSERT INTO post (t_name, t_desc, t_price, t_img) VALUES ('".$name."', '".$desc."', '".$price."', '".$img."')");
											$handle = mysql_query($insert);
											echo $handle;
											
											if(!insert_db) {
												die("error");
											}
											else {
												echo "post has been applied to the database";
											}
											}
											
											insert_db($_POST['t_name'],$_POST['t_desc'],$_POST['t_price'],$_POST['t_img'])
									?>
									
									<br>
									
									<?php
										/* Selecting */
											$myarray = array();
											while($row = mysql_fetch_array(/* check test4.php */)){
												$myarray[] = $row;
											}
											var_dump($myarray);          
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
								</article>
						</div>
					</div>
				</section>
	</body>
</html>