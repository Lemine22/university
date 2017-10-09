<?php 

require_once 'inc/config.php';






if (!empty($_SESSION['inscription_id'])) {

	// L'utilisateur est connecte
	$inscription_id = $_SESSION['inscription_id'];

	$query = $db->prepare('SELECT * FROM inscription WHERE id = :id');
	$query->bindValue(':id', $inscription_id, PDO::PARAM_INT);

	$query->execute();
	$inscription = $query->fetch();

	
}



$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


$message = '<html><body>';
$message .= '<style>
	
body{
	text-align: center;
}


.container{

	width: 400px;
	margin:auto;
	margin-top: 50px;
}
</style>

<div class="container">
	

	<span><small>* Veuillez ne pas répondre à cet email. Les messages <br> reçus à cette adresse ne sont pas lus et ne reçoivent <br> donc aucune reponse</small></span>


	<p> Bonjour '.$inscription['name'].'</p>

<p> Votre <strong>numéro de dossier</strong> est</p><br>
le : <strong>'.$inscription['code_aleatoire'].'</strong><br>
<strong>Conservez précieusement ce numéro, il <br> vous sera nécessaire pour consulter et <br> votre dossier électronique.</strong><br>

Pour toute information complémentaire,<br> vous pouvez contacter <strong>le Service de la Scolarité</strong> du site concerné.</p>
</div>
	';
$message .= '</body></html>';

mail($inscription['email'], 'Numéro de dossier pour accéder à vos candidatures à l\'UPI-ONM', $message, $headers);


?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="icon" type="image/ipg" href="img/logo.jpg">
	<title>Candidature envoyée</title>
</head>
<body>



<style>	

body{
	background-color: #FFFFFF;
}


.dossier{
	width: 100%;
	color: green;
	border: solid 1px green;
	text-align: center;
	
}

.first{
	margin-bottom: -16px;
}

.welcome{
	margin: 100px  auto;
	width: 500px;
	background-color: #F9F9F9;
	text-align: center;
	border: solid 1px #B7B6B6;
	padding: 40px;
}

h4{
	color: #F28D00;
	font-size: 20px;
}

a{
	text-decoration: none;
	background-color: red;
	color: white;
	padding: 10px;
	font-size: 20px;

}

span{
	font-size: 30px;
	color: green;
}

.foot{
	border: solid 1px #B7B6B6;
	color: red;
	padding: 5px;
	text-align: center;

}


</style>

<h4>Votre dossier est créé</h4>

<p class="dossier first">	Votre dossier a été sauvegardé avec succès.</p>
<p class="dossier">	Un mail contenant votre numéro de dossier vient de vous être envoyé.</p>

<div class="welcome">

<a href="index.php">Allez sur la page d'acceuil</a>
<p>	Votre numéro de dossier est le :</p>
<p><span><?= $inscription['code_aleatoire'] ?></span></p>
<p>	Vous allez recevoir un mail récapitulatif</p>

</div>

	<div class="foot">
		<p>	Conservez précieusement ce numéro. Il vous sera nécessaire pour accéder à votre dossier, suivre le traitement de vos candidatures.</p>
	
	</div>
</body>
</html>