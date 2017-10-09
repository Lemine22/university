<?php
require_once 'inc/config.php';

session_unset();
session_destroy();
	 
//TODO : delete client cookie


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<p></p>


	
</body>
</html>


<?php

// 	
echo 'Vous avez bien été déconnecté';

redirectJS('upi-onm-kwabo.php', 1);

// header("Location: upi-onm-kwabo.php");