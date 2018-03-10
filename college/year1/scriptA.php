<?php 
require "sessioncheck.php";
$_SESSION["name"] = "Steph";
$_SESSION["age"] = "17";
?>

<!DOCTYPE html>
<html>
<body>
<p>Session variables are set</p>
<br>
<a href="http://www.itecdigital.org.uk/2015/451917/php/scriptB.php">Click to go to scriptB.php</a>
<br>
<a href="http://www.itecdigital.org.uk/2015/451917/php/destroy.php">Click to log out</a>
</body>
</html>