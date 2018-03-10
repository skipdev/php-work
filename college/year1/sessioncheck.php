<?php
session_start();
if ( $_SESSION['logged in'] != 'y' ) {
	header("location:http://www.itecdigital.org.uk/2015/451917/php/login.php");
	exit();
}
?>