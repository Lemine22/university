
<?php
require_once 'inc/config.php';

// On réceptionne les données du formulaire
$identifiant = !empty($_POST['identifiant']) ? strip_tags(trim($_POST['identifiant'])) : '';
$password = !empty($_POST['password']) ? strip_tags(trim($_POST['password'])) : '';


$errors = array();

// Le formulaire a ete soumis, on a appuye sur le bouton Envoyer
if (!empty($_POST)) {

	// On check les erreurs possibles
	if (empty($identifiant) || empty($password)) {
		$errors['identifiant'] = 'Veillez renseigner vos identifiants';
	}
	

	
	//debug($errors);

	// Aucune erreur dans le formulaire, tous les champs ont été saisis correctement
	if (empty($errors)) {

		// On vérifie que le login/email est pas deja pris
		$query = $db->prepare('SELECT * FROM inscription WHERE code_aleatoire = :code_aleatoire');
		$query->bindValue(':code_aleatoire', $identifiant, PDO::PARAM_STR);
		$query->execute();
		$inscription = $query->fetch();

		if (!empty($inscription)) {

			$motdepasse = $inscription['password'];

			if ($password == $motdepasse) {

				// On connecte l'utilisateur
				$_SESSION['inscription_id'] = $inscription['id'];

				echo '<div class="alert alert-success" role="alert">';
				echo 'Connexion réussie !';
				echo '</div>';

				//header('Location: index.php');
				redirectJS('connexion.php', 1);


				exit();
			} else {
				$errors['identifiant'] = 'Identifiants incorrects';
			}
		}
	}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>

		<meta charset="UTF-8"/>
		<link rel="icon" type="image/ipg" href="img/logo.jpg">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<title>Candidatures</title>
	
<!-- 	<link rel="stylesheet" href="css/float.css"> -->
</head>
<body>




			<style>	

			.form-control{
				width: 60%;
				border: solid 1px black;
				height: 25px;
				margin-top: -5px;
				margin-bottom: 	;


			}




			.btn{
				margin-bottom: 0px;
			}


			.btn:hover{
				color: white;
			}

			body{
				background-color: #EFF0A2;
			}

			h1,h2{
	font-weight: lighter;
	text-align: center;
}
.box>img{
	display: block;
	width: 100%;
	opacity:0.5;
}
.container{
	width: 900px;
	margin:0 auto;
	overflow:hidden;
	padding: 10px 0 0 10px;
	box-sizing: border-box;
}
.box{
	height: 200px;
	width: 400px;
	
	text-align: center;
	background: #ccc;
	float: left;
	margin-right: 30px;
	margin-bottom: 30px;
	background-color: white;
	text-align: left;
	padding-left: 10px;

}


h3{
	color: green;
	font-size: 25px;
	text-align: center;
}
h5{
	text-align: center;
}

.depot{
	margin-top: 20px;
}

a{
	text-decoration: none;
	background-color: green;
	color: white;
	padding: 2px;
}

.box-green>h4{
	margin-top: 40px;
	text-align: center;
}

.box-green>p{
	text-align: center;
}
h4{
	color: green;
}

.box-warning>h4{
	margin-top: 40px;
}

.red{
	color: red;
	background-color: white;
	text-decoration: underline;
	margin-top: -30px;

}
.connexion{
	background-color: green;
	padding: 2px;
	color: white;
	border:none;
	margin-left: 170px;
}

label

{

    display: block;

    width: 150px;

    float: left;

}

form{
	margin-top: 10px;
}
input{

}

@media only screen and (max-width: 768px){

	body{
		
		/*text-align: center;*/
		width: 100%;
		text-align: center;


	}

	

	.box {
		width: 50%; 
		
		display: block;
		
		/*margin: auto;*/
		margin-top: 40px;
		text-align: center;
	}




}
/</style>
<h3>Candidature</h3>
	<h5>Opération de pré-inscription</h5>
	<div class="container form-group">
		<div class="box box-warning form-group">
		<h4 class="depot">Dépôt d'une première candidature</h4>
	<p>Créer votre dossier : <br><br>
1- Indiquer la formation pour laquelle vous candidatez <br>
2-  Indiquer vos coordonnées, votre cursus ...<br>
3- Obtenir votre numéro de dossier</p>

		</div>
		<!-- <div class="box box-green">
			#box
		</div> -->
		<div class="box box-green box-clear form-group">
			<h4>Création de votre dossier</h4>
	<p><a class="demand btn" href="processus.php">Demander</a></p>
		</div>
		<div class="box box-warning form-group">
			<h4>Suivi de votre candidature</h4>
	Se connecter pour :  <br>

 Suivre l'état de votre dossier
		</div>

		<div class="box box-warning form-group">
			<form method="POST">

	<span style="color: red"><?= !empty($errors['identifiant']) ? $errors['identifiant'] : '' ?></span><br><br>
	

	<label for="">Numéro de dossier :</label> <input  class="form-control"type="password" size="20" maxlength="100" id="login" name="identifiant" value="<?= $identifiant ?>">
	<br><br>

<label for="">	Mot de passe :</label> <input type="password" id="psw" size="20" name="password" class="form-control">
	<br><br>

	<a class="red" href="forget.php">Mot de passe oublié? </a>

	<input   type="submit" value="Connexion" class="connexion btn">

</form>
		</div>


	</div>

</body>
</html>



<!-- @media only screen and (max-width: 1000px){

	body{
		width: auto;
		text-align: center;
	}

	.container{
		width: 80%;
	}
	h5{
		font-size: 2.5vw;
		width: auto;
		text-align: center;
	}
	.one, .register{
		width: 700px;
		margin:auto;
		margin-bottom: 40px;
		display: block;
	}

	.two, .login{
		width: 700px;
		
		text-align: center;
		margin-bottom: 50px;
		display: block;
		
	}

	input{
		margin-right: 50px;
	}

	.one, .two, .register, .login{
		margin-left: 100px;
	}

	#psw{
		margin-left: 127px;
	}
	.demand{
		margin-left: -300px;
		
	}


} -->

