<?php

require_once 'inc/config.php';   // La configuration de la base de données


//	debug($_POST);
$email = !empty($_POST['email']) ? strip_tags($_POST['email']) : '';
$password = !empty($_POST['password']) ? strip_tags($_POST['password']) : '';

$errors = array();
// Le formulaire a ete soumis, on a appuye sur le bouton Envoyer
if (!empty($_POST)) {
	if(!empty($_POST['login-submit'])){                                          // PARTIE REGISTER
    // On check les erreurs possibles
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Veuillez renseigner un email valide';
    }
    if (empty($password) && strlen($password) < 7 ){
        $errors['password'] = 'Veuillez renseigner votre mot de passe Valide (8 caracteres)';
    }
   

    //debug($errors);
    // Aucune erreur dans le formulaire, tous les champs ont été saisis correctement
   
		if (empty($errors)) {

		// On vérifie que le login/email est pas deja pris
			 //$hash_password = password_hash($password, PASSWORD_BCRYPT);

        $query = $db->prepare('SELECT * FROM inscription WHERE email = :email, password = :password');
        // Pour chacune des variables précédées d'un : on doit faire un bindValue pour passer la valeur à la requête
        $query->bindValue(':email', $email, PDO::PARAM_STR);
        $query->bindValue(':password', $password, PDO::PARAM_STR);

        // On execute la requête
       $query->execute();
		$user = $query->fetch();

		if (!empty($user)) {

			$crypted_password = $user['password'];

			if (password_verify($password, $crypted_password)) {

				// On connecte l'utilisateur
				$_SESSION['inscription_id'] = $user['id'];

				echo '<div class="alert alert-success" role="alert">';
				echo 'Connexion réussie : HEllo' .$email;
				echo '</div>';

				echo "envoyé";

				//header('Location: index.php');
				/*header('location: index.php');*/
				exit();
			} else {
				$errors['emil'] = 'Identifiants corrects';
			}
		}
	}




	}
}

 ?>

</style>
<div class="container">
    	<div class="row">
    	<?php if (!empty($errors)) { ?>
		<div class="alert alert-danger" role="alert">
			<ul>
			<?php
			foreach($errors as $error) {
				echo '<li>'.$error.'</li>';
			}
			?>
			</ul>
		</div>
		<?php } ?>
			
 ?>


 <form action="" method="POST">

<input type="email" name="email">
<input type="password"  name="password">
 <input type="submit" value="submit" name="login-submit">
 	


 </form>