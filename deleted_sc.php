<?php 


require_once 'inc/config.php';

// $pdo = new PDO('mysql:host=localhost;dbname=inscription', 'root', '');

// Paramétrage de la liaison PHP <-> MySQL, les données sont encodées en UTF-8.
$db->exec('SET NAMES UTF8');


$query = $db->prepare
(
    'DELETE FROM inscription

  
WHERE id = ?
     '
);
$query->execute(array($_GET['id']));


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



echo '<div class="alert alert-success" role="alert">';
				echo "Le dossier a été supprimé";
				echo '</div>';

	redirectJS('backoffice_sc.php', 2);


				exit();



?>



