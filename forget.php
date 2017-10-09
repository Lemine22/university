<?php

require_once 'inc/config.php';


$email = !empty($_POST['email']) ? strip_tags(trim($_POST['email'])) : '';


if (!empty($_POST)) {

	// On check les erreurs possibles
 

	$query = $db->prepare('SELECT * FROM inscription WHERE email = :email');
		$query->bindValue(':email', $email, PDO::PARAM_STR);
		$query->execute();
		$inscription = $query->fetch();



				


$message = '<html lang="fr"><meta charset=utf8"><body>';
$message .= 'Bonjour <br> Vici vos identifiants : <br> <strong>Votre Numéro d\'inscription</strong> : '.$inscription['code_aleatoire'].'<br><strong> Votre mot de passe : </strong>'.$inscription['password'].'';
$message .= '</body></html>';

$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$headers .='Content-Transfer-Encoding: 8bit';


	
if (!empty($email) && ($email == $inscription['email'])){


	mail($inscription['email'], 'Vos données de connexion', $message, $headers);

	echo '<div class="alert alert-success" role="alert">';
				echo 'Vos identifiants sont envoyés à votre adresse mail !';
				echo '</div>';

	redirectJS('index.php', 3);

	exit;


				
}
else {
				$errors['email'] = '<br>Aucun dossier de candidature ne correspond à cette adresse mail.';
			}
}
	




?>





<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<link rel="icon" type="image/ipg" href="img/logo.jpg">

	<title>Mot de passe oublié</title>
</head>
<body>

<style>
	body{
		background-color: #EFF0A2;
			

	}

	.login{
		width: 500px;
		margin: auto;
		border:solid 1px green;
		margin-top: 200px;
		padding: 50px;
	}


	.connexion{
		padding: 5px; 
		background-color: green; 
		color: white;
		border: none;
		float: right;
	}
	#login{
		padding: 5px;
		width: 150px;
	}

</style>


<div class="login">


<form method="POST">




	
	

	Veuillez renseigner votre e-mail : <input type="mail" size="20" maxlength="100" id="login" name="email">


	

	<input   type="submit" value="Envoyer" class="connexion">

	<span style="color: red"><?= !empty($errors['email']) ? $errors['email'] : '' ?></span><br><br>

</form>
	

</div>


	
</body>
</html>