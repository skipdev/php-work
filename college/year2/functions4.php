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
			* {
				font-family: "Courier New";
			}
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
									<?php require 'database.php';			
										/* Connecting */										
										$dbdata = "itecdigi_451917_co1";
										connect_db("212.48.66.176:3306","itecdigi_451917","451917","itecdigi_451917_co1");								
									?>
			
			<form method="post" enctype="multipart/form-data">
			<h1>Enter a new record</h1>
			<br>
			Name
			<br>
			<input type='text' name='t_name'>
			<br>
			Description
			<br>
			<input type='text' name='t_desc'>
			<br>
			Price
			<br>
			<input type='integer' name='t_price'>
			<br>
			Image
			<br>
			<input type='file' name='t_img' id='t_img'>
			<br>
			<br>
			<input type='submit' value='Submit' name='submit1'>
			</form>
			
			
			
			<?php
			
			$name = $_POST['t_name'];
			$desc = $_POST['t_desc'];
			$price = $_POST['t_price'];
			$img = $_POST['t_img'];
			
			
			/* Inserting */
			insert_db($name,$desc,$price,$img);
			
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
				
			selecting("treatment_id","t_name","t_desc","t_price","t_img");

			echo "<br>";
			echo "<br>";
			echo "<br>";
			
			
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