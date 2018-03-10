<?php
    session_start();
    unset($_SESSION["logged in"]);
    session_destroy();
    header('Location: http://www.itecdigital.org.uk/2015/451917/php/login.php');
	exit();
?>
