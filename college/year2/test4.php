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
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">
					<!-- Logo -->
						<id="logo"><img src = "images/logo1.png" width="800" height="300"></a>
					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="home.php">Home</a></li>
								<li><a href="about.html">About</a></li>
								<li class="current">
									<a href="services.php">Services</a>
									<ul>
										<li><a href="#">Nails</a></li>
										<li><a href="#">Eyelashes / Brows</a></li>
									</ul>
								</li>
								<li><a href="book.php">Book</a></li>
								<li><a href="gallery.html">Gallery</a></li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</nav>
				</div>				
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
										if (!$handle) {
											echo "<br>";
											echo "handle doesn't work";
										}
											else {
												echo
											"<table>";
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
										;
											}
										
										echo "<br>";
										
										var_dump($handle);
								
										
									?>
								</article>
						</div>
					</div>
				</section>

			<!-- Footer -->
				<div id="footer">
					<div class="container">
						<div class="row">
							<section class="3u 6u(narrower) 12u$(mobilep)">
								<h3>Links to Stuff</h3>
								<ul class="links">
									<li><a href="#">Mattis et quis rutrum</a></li>
									<li><a href="#">Suspendisse amet varius</a></li>
									<li><a href="#">Sed et dapibus quis</a></li>
									<li><a href="#">Rutrum accumsan dolor</a></li>
									<li><a href="#">Mattis rutrum accumsan</a></li>
									<li><a href="#">Suspendisse varius nibh</a></li>
									<li><a href="#">Sed et dapibus mattis</a></li>
								</ul>
							</section>
							<section class="3u 6u$(narrower) 12u$(mobilep)">
								<h3>More Links to Stuff</h3>
								<ul class="links">
									<li><a href="#">Duis neque nisi dapibus</a></li>
									<li><a href="#">Sed et dapibus quis</a></li>
									<li><a href="#">Rutrum accumsan sed</a></li>
									<li><a href="#">Mattis et sed accumsan</a></li>
									<li><a href="#">Duis neque nisi sed</a></li>
									<li><a href="#">Sed et dapibus quis</a></li>
									<li><a href="#">Rutrum amet varius</a></li>
								</ul>
							</section>
							<section class="6u 12u(narrower)">
								<h3>Get In Touch</h3>
								<form>
									<div class="row 50%">
										<div class="6u 12u(mobilep)">
											<input type="text" name="name" id="name" placeholder="Name" />
										</div>
										<div class="6u 12u(mobilep)">
											<input type="email" name="email" id="email" placeholder="Email" />
										</div>
									</div>
									<div class="row 50%">
										<div class="12u">
											<textarea name="message" id="message" placeholder="Message" rows="5"></textarea>
										</div>
									</div>
									<div class="row 50%">
										<div class="12u">
											<ul class="actions">
												<li><input type="submit" class="button alt" value="Send Message" /></li>
											</ul>
										</div>
									</div>
								</form>
							</section>
						</div>
					</div>

					<!-- Icons -->
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
							<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
							<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
						</ul>
				</div>
		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>