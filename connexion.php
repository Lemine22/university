<?php
require_once 'inc/config.php';



if (!isset($_SESSION['inscription_id'])) {

	header("Location: index.php");
	
	}

if (!empty($_SESSION['inscription_id'])) {

	// L'utilisateur est connecte
	$inscription_id = $_SESSION['inscription_id'];

	$query = $db->prepare('SELECT * FROM inscription WHERE id = :id');
	$query->bindValue(':id', $inscription_id, PDO::PARAM_INT);

	$query->execute();
	$inscription = $query->fetch();


}



?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Candidature</title>
	<link rel="icon" type="image/ipg" href="img/logo.jpg">
	<link rel="icon" type="image/ipg" href="img/logo.jpg">
</head>
<body>


<style>

	table{
		width: 1000px;
		margin:auto;
		text-align: center;
		border: solid 1px green;
		margin-bottom: 100px;
	}

	th{
		background-color: #E6E6E6;
		border-collapse: collapse;
		color: red;
		font-size: 18px;
		padding: 3px;
		margin-bottom: 10px;
	}

	td{
		background-color: #EFF0A2;
		padding: 5px;
	}

	caption{
		color: green;
		font-size: 28px;
		margin-bottom: 20px;
	}
</style>


<style>

p{


	color: green;
	font-size: 30px;
}

.menu1{
	float: right;
	margin-right: 60px;
}

.menu{
	margin-bottom: 150px;
	color: green;
}


span{
	color: red;
}

a{
	text-decoration: none;
	color: white;
	background-color: red;
	padding: 3px;
	
}
	

	h3{
		color: green;
	}


</style>
		<!-- <p>	Hello mon ami <span><?= $inscription['name'] ?></span>
		<p>	Hello mon ami <span><?= $inscription['code_aleatoire'] ?></span> 

			Très bientôt, ta page d'acceuil debarquera ici :) </p>


			<a href="logout.php">Déconnexion</a>


			<p>Bonjour     <strong>  <?= $inscription['name'] ?>	</strong><br></p> -->



<h3>Récapitulatif de votre dossier (<small>Campagne <?= date('Y')?>/<?= date('Y')+1 ?></small>)</h3>

	<div class="menu">
		<div class="menu1">
		<h3><?= strtoupper($inscription['name']). ' '.strtoupper($inscription['surname']) ?></h3>
		<a href="logout.php">Déconnexion</a>
	</div>
	</div>

 <table class="standard-table">
            <caption>Coordonnées</caption>
            <thead>
                <tr>

                    <th>Numéro de dossier</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Né(e) le </th>
                    <th>état</th>

                    
                    
                    
                </tr>

                <!--name, surname, othernames, city, gender, fieldyear, field, birthday , birthmonth, birthyear, birthcountry, birthcity, citizen, birthdepartment, email, confirmmail, phone, residencecountry, neighbour, house  !-->
            </thead>
            <tbody>
               
                    <tr>
                        <td><?= strtoupper($inscription['code_aleatoire']) ?></td>
                        <td><?= strtoupper($inscription['name']) ?></td>
                        <td><?= strtoupper($inscription['surname']) ?></td>
                         <td><?= $inscription['birthday'].'/'.$inscription['birthmonth'].'/'.$inscription['birthyear'] ?></td>
                        <td><?= $inscription['status_general'] ?></td>
                        
                    </tr>
               
            </tbody>
        </table>


<table class="standard-table">
            <caption>Candidature</caption>
            <thead>
                <tr>

                    <th>Filière</th>
                    <th>Niveau</th>
                    <th>Site</th>
                    

                    
                    
                    
                </tr>

                <!--name, surname, othernames, city, gender, fieldyear, field, birthday , birthmonth, birthyear, birthcountry, birthcity, citizen, birthdepartment, email, confirmmail, phone, residencecountry, neighbour, house  !-->
            </thead>
            <tbody>
               
                    <tr>
                        <td><?= strtoupper($inscription['field']) ?></td>
                        <td><?= strtoupper($inscription['fieldyear']) ?></td>
                        <td><?= strtoupper($inscription['site']) ?></td>
                       
                        
                    </tr>
               
            </tbody>
        </table>



        


<table class="standard-table">
            <caption>Dossier électronique</caption>
            <thead>
                <tr>

                    <th>Saisie</th>
                    <th>Etat</th>
                    
                    

                    
                    
                    
                </tr>

                <!--name, surname, othernames, city, gender, fieldyear, field, birthday , birthmonth, birthyear, birthcountry, birthcity, citizen, birthdepartment, email, confirmmail, phone, residencecountry, neighbour, house  !-->
            </thead>
            <tbody>
               
                    <tr>
                        <td>Baccaleauréat ou équivalence</td>
                        <td>complet</td>
                        
                       
                        
                    </tr>

                    <tr>
                        <td>Cursus post-baccaleauréat</td>
                        <td>complet</td>
                        
                       
                        
                    </tr>
               
            </tbody>
        </table>


</body>
</html>





