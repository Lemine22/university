<?php
require_once 'inc/config.php';

// On réceptionne les données du formulaire
$email = !empty($_POST['email']) ? strip_tags(trim($_POST['email'])) : '';
$password = !empty($_POST['password']) ? strip_tags(trim($_POST['password'])) : '';


$errors = array();

// Le formulaire a ete soumis, on a appuye sur le bouton Envoyer
if (!empty($_POST)) {

	// On check les erreurs possibles
	if (empty($email) || empty($password)) {
		$errors['email'] = 'Identifiants incorrects';
	}

	//debug($errors);

	// Aucune erreur dans le formulaire, tous les champs ont été saisis correctement
	if (empty($errors)) {

		// On vérifie que le login/email est pas deja pris
		$query = $db->prepare('SELECT * FROM inscription WHERE email = :email');
		$query->bindValue(':email', $email, PDO::PARAM_STR);
		$query->execute();
		$inscription = $query->fetch();

		if (!empty($inscription)) {

			$crypted_password = $inscription['password'];

			if (password_verify($password, $crypted_password)) {

				// On connecte l'utilisateur
				$_SESSION['inscription_id'] = $inscription['id'];

				echo '<div class="alert alert-success" role="alert">';
				echo 'Connexion réussie !';
				echo '</div>';

				//header('Location: index.php');
				redirectJS('connexion.php', 1);


				exit();
			} else {
				$errors['email'] = 'Identifiants incorrects';
			}
		}
	}
}

?>




<h1>Connexion</h1>
<link rel="stylesheet" href="css/style.css">

<form method="POST">
<div class="form1">
	<span style="color: red"><?= !empty($errors['email']) ? $errors['email'] : '' ?></span><br><br>

	Numéro dossier : <input type="text" size="20" maxlength="100" id="login" name="email" value="<?= $email ?>">
	<br><br>

	Mot de passe : <input type="password" size="20" name="password">
	<br><br>

	<input type="submit" value="Connexion">
</div>
</form>