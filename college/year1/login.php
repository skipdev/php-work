<?php
$error = "";
//var_dump($_POST);
session_start();
if ( $_SESSION['logged in'] = 'y' ) {
	header("location:http://www.itecdigital.org.uk/2015/451917/php/correct.html");
	exit();
}
$_SESSION['logged in'] != 'y';
if(isset ($_POST['user'])) {
	if( $_POST['user']=='stephy123' AND $_POST['pass']=='key123') {	
		header('Location: http://www.itecdigital.org.uk/2015/451917/php/correct.html');
		$_SESSION['logged in'] = 'y';
	}
	else $error = "Incorrect Login";
	$_SESSION['logged in'] != 'y';
}
?>



<!DOCTYPE HTML>
<html>
	<head>
	</head>
	<body>
	<h3>Task 1</h3>
	<p>We need logins so that we can uniquely identify each person. Websites such as social networks or bank accounts
	will need people to be uniquely identified because the accounts are personal to them, you can't just share it
	with another person because these accounts are all about you.</p>
	<br>
	
	<h3>Task 2</h3>
	
		<form method = "post">
		<p>Username:</p>
		<input type="text" name="user">
		<p>Password:</p>
		<input type="password" name="pass">
		<input type="submit" value="Submit">
		</form>
		<?php echo $error; ?>
		<br>
		<br>
		<br>
		<a href="http://www.itecdigital.org.uk/2015/451917/php/scriptA.php">Click to go to scriptA.php</a>
	</body>
</html>