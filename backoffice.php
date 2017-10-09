





<?php

require_once 'inc/config.php';

if (!isset($_SESSION['inscription_id'])) {


	header("Location: upi-onm-kwabo.php");
}





require_once 'inc/config.php';










if (!empty($_SESSION['admin_sf_id'])) {

	// L'utilisateur est connecte
	$admin_id = $_SESSION['admin_sf_id'];

	$query = $db->prepare('SELECT * FROM inscription WHERE id = :id');
	$query->bindValue(':id', $admin_id, PDO::PARAM_INT);

	$query->execute();
	$admin = $query->fetch();


}





/*
 * Construction d'un objet PDO représentant la connexion à la base de données.
 *
 * Le premier argument est un Data Source Name (DSN) représentant où est-ce qu'il
 * faut se connecter. Une adresse IP ou un nom de domaine peut être spécifié.
 *
 * /!\ Tout le DSN doit être écrit en minuscules et sans espaces.
 *
 */


// Paramétrage de la liaison PHP <-> MySQL, les données sont encodées en UTF-8.
$db->exec('SET NAMES UTF8');



/*
 * Préparation de la requête SQL, PDO renvoie un objet de la classe PDOStatement
 * http://www.php.net/manual/fr/class.pdostatement.php
 *
 * On peut dire que cet objet représente la requête SQL, on appelle donc la
 * variable $query.
 */
$query = $db->prepare
(
    'SELECT
        id, name, surname, othernames, city, gender, fieldyear, field, birthday , birthmonth, birthyear, birthcountry, birthcity, citizen, birthdepartment, email, confirmmail, phone, residencecountry, neighbour, house, chemin, fix, indicatif, postbac_year, postbac_country, postbac_serie, postbac_city, postbac_mention, postbac_department, code_aleatoire, bac_chemin, postbac_chemin, bordreau, bank, bordreau_chemin, postbac_year2, postbac_country2, postbac_serie2, postbac_city2, postbac_mention2, postbac_chemin2, statute, chemin_photo, bac_chemin_att, chemin_releve1, chemin_releve2, chemin_releve3, chemin_releve4, chemin_releve5, chemin_releve6, chemin_releve7, chemin_releve8

     FROM inscription'
);

// Demande à PDO d'envoyer la requête à MySQL pour exécution.
$query->execute();

/*
 * Récupération de toutes les données renvoyées par MySQL.
 *
 * La méthode fetchAll() renvoie un tableau à deux dimensions :
 * - la première dimension représente les différentes lignes de données
 * - la deuxième dimension représente les colonnes SQL de chaque ligne de données
 */
$details = $query->fetchAll(PDO::FETCH_ASSOC);




$query = $db->prepare
(
    'SELECT statute FROM inscription WHERE statute = \'Validé SF\''
);

$query->execute();

$statute = $query->fetchAll(PDO::FETCH_ASSOC);




$query = $db->prepare
(
    'SELECT statute FROM inscription WHERE statute = \'Refusé SF\''
);

$query->execute();

$refused = $query->fetchAll(PDO::FETCH_ASSOC);



	






include 'details_student_sf.php';
