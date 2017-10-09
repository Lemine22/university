<?php
require_once 'inc/config.php';






// On réceptionne les données du formulaire
$identifiant = !empty($_POST['identifiant_admin']) ? strip_tags(trim($_POST['identifiant_admin'])) : '';
$password = !empty($_POST['password_admin']) ? strip_tags(trim($_POST['password_admin'])) : '';


$errors = array();

// Le formulaire a ete soumis, on a appuye sur le bouton Envoyer
if (!empty($_POST)) {

	// On check les erreurs possibles
	if (empty($identifiant) || empty($password)) {
		$errors['identifiant_admin'] = 'Veillez renseigner vos identifiants';
	}
	

	
	//debug($errors);

	// Aucune erreur dans le formulaire, tous les champs ont été saisis correctement
	if (empty($errors)) {

		// On vérifie que le login/email est pas deja pris
		$query = $db->prepare('SELECT * FROM admin_sc WHERE identifiant_admin = :identifiant_admin');
		$query->bindValue(':identifiant_admin', $identifiant, PDO::PARAM_STR);
		$query->execute();
		$inscription = $query->fetch();

		if (!empty($inscription)) {

			$motdepasse = $inscription['password_admin'];

			if ($password == $motdepasse) {

			

			

				// On connecte l'utilisateur
				$_SESSION['id'] = $inscription['id'];

				echo '<div class="alert alert-success" role="alert">';
				echo 'Connexion réussie !';
				echo '</div>';

				//header('Location: index.php');
				redirectJS('backoffice_sc.php', 1);


				exit();
			} else {
				$errors['identifiant_admin'] = 'Identifiants incorrects';
			}
		}
	}

	}




?>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="icon" type="image/ipg" href="img/logo.jpg">
	<title>Back-office</title>
</head>
<body>


<style>

body{
	background-color: #EFF0A2;
}



h3{
	color: green;
}
	.container{
		width: 500px;
		background-color: white;
		margin:auto;
		margin-top: 100px;
		border:solid 1px green;
		text-align: center;
		padding: 100px;

	}

	input{
		padding: 6px;
		border-radius: 5px;
		border: solid 1px green;
	}

	label{
		width: 150px;
		display: block;
		float: left;
	}

		.connexion{
			margin-left: 250px; 	
		}


		a{
			
			text-decoration: none;
			border-radius: solid 1px white;
			padding: 15px;
			background-color: green;
			color: white;
			font-size: 20px;
			
		}

		.link{
			margin-top: 50px;
		}
	
</style>
<div class="link"><a href="upi-onm-kwabo.php">Accéder au Service financier</a></div>

<div class="container">

<h3>Connexion Service Scolarité</h3>

	
	<form method="POST">

	<span style="color: red"><?= !empty($errors['identifiant_admin']) ? $errors['identifiant_admin'] : '' ?></span><br><br>
	

	<label for="">Identifiant :</label> <input type="password" size="20" maxlength="100" id="login" name="identifiant_admin">
	<br><br>

	<label for="">Mot de passe :</label> <input type="password" id="psw" size="20" name="password_admin">
	<br><br>

	<input   type="submit" value="Connexion" class="connexion">

</form>
</div>
	
</body>
</html>