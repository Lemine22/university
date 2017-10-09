
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

require_once 'inc/config.php';

// $pdo = new PDO('mysql:host=localhost;dbname=inscription', 'root', '');

// Paramétrage de la liaison PHP <-> MySQL, les données sont encodées en UTF-8.
$db->exec('SET NAMES UTF8');


// $query = $pdo->prepare
// (
//     'UPDATE inscription
// SET status_general = \'Validé SF\'
  
// WHERE id = ?
//      '
// );


// $query->execute(array($_GET['id']));


$query = $db->prepare
(
    'UPDATE inscription
SET status_general = \'Accepté\'
  
WHERE id = ?
     '
);
$query->execute(array($_GET['id']));
	


	$query = $db->prepare
(
    'UPDATE inscription
SET statute_student = \'Accepté\'
  
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



mail($info['email'], 'Avis favorable', 'L’Université Polytechnique Internationale OBIANG NGUEMA MBASOGO (UPI-ONM) a le plaisir de vous informer que votre candidature a été acceptée. Rendez-vous au Service de la Scolarité Universitaire muni des originaux de l’acte de naissance, de l’attestation ou du diplôme du baccalauréat, de tous les relevés de notes et diplômes justifiant votre parcours universitaire, de la quittance de versement des frais de scolarité et d’un paquet de papier rame A4 80g/m pour finaliser votre inscription. NB : Joignez à votre profil d’inscription le bordereau de paiement des frais de scolarité au moins 48 heures avant la date de rendez-vous.') ;


echo '<div class="alert alert-success" role="alert">';
				echo 'Un mail d\'acceptation a bien été envoyé à '.$info['name'].' '.$info['surname'].'';
				echo '</div>';

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