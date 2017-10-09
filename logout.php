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

echo '<h1>Déconnexion</h1>';
echo 'Vous avez bien été déconnecté';

redirectJS('index.php', 1);