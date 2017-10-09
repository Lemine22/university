<?php
require_once 'inc/config.php';

// $pdo = new PDO('mysql:host=localhost;dbname=inscription', 'root', '');

// Paramétrage de la liaison PHP <-> MySQL, les données sont encodées en UTF-8.
$db->exec('SET NAMES UTF8');



$query = $db->prepare
(
    'UPDATE inscription
SET statute = \'Refusé SF\'
  
WHERE id = ?
     '
);
$query->execute(array($_GET['id']));


$query = $db->prepare
(
    'UPDATE inscription
SET status_sf = \'Refusé SC\'
  
WHERE id = ?
     '
);
$query->execute(array($_GET['id']));




$query = $db->prepare
(
    'SELECT
        id, email, name, surname


     FROM inscription
     WHERE id = ?'
);

$query->execute(array($_GET['id']));

$info = $query->fetch(PDO::FETCH_ASSOC);


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>


    
</body>
</html>

<?php   


echo "Le dossier a été refusé au niveau de la scolarité";

// mail($info['email'], 'Votre candidature', 'L’Université Polytechnique Internationale OBIANG NGUEMA MBASOGO (UPI-ONM) a le regret de vous informer que votre candidature a été refusée. Nous venons vers vous très bientôt par mail pour plus de détails') ;


// echo '<div class="alert alert-success" role="alert">';
// 				echo 'Un mail de refus a bien été envoyé à '.$info['name'].' '.$info['surname'].'';
// 				echo '</div>';

	redirectJS('backoffice_sc.php', 3);


				exit();

?>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>


	
</body>
</html>