<?php 


require_once 'inc/config.php';

$pdo = new PDO('mysql:host=localhost;dbname=inscription', 'root', '');

// Paramétrage de la liaison PHP <-> MySQL, les données sont encodées en UTF-8.
$pdo->exec('SET NAMES UTF8');


$query = $pdo->prepare
(
    'DELETE FROM inscription

  
WHERE id = ?
     '
);
$query->execute(array($_GET['id']));



echo '<div class="alert alert-success" role="alert">';
				echo "Cette candidature a été supprimée";
				echo '</div>';

	redirectJS('backoffice_sc.php', 3);


				exit();



?>