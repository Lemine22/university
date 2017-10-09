
<?php

require_once 'inc/db.php';


// $pdo = new PDO('mysql:host=localhost;dbname=inscription', 'root', '');

// Paramétrage de la liaison PHP <-> MySQL, les données sont encodées en UTF-8.
$db->exec('SET NAMES UTF8');


 $search = !empty($_GET['search']) ? strip_tags(trim($_GET['search'])) : '';
$search_results = array();
$count_search_results = 0;
if (!empty($search)) {


	$query = $db->prepare('SELECT * FROM inscription WHERE code_aleatoire LIKE :search OR name LIKE :search OR status_general LIKE :search');
	$query->bindValue(':search', $search.'%', PDO::PARAM_STR);
	$query->execute();
	$search_results = $query->fetchAll();
	$count_search_results = $query->rowCount();
}
	//$count_search_results = count($search_results);

?>



			<div>
				<div>

					<h1><big><?= $count_search_results ?></big> dossier(s) trouvé pour la recherche &laquo;<?= $search ?>&raquo;</h1>	

			</div>

			</div>
<!-- 
			<div class="show-results">
				
				<h3>Les résultats de recherche</h3>

				<table>
					<tr><th>Nom</th>
					<th>Prénom</th>
					<th>Numéro dossier</th>
					
					<th>Accéder au dossier</th></tr>

					<?php 
							foreach ($search_results as $key => $search_result) {

								?>
								<td><?= $search_result['name'] ?></td>
								<td><?= $search_result['surname'] ?></td>
								<td><?= $search_result['code_aleatoire'] ?></td>  
								
								
								
								<td><a href="backoffice-student.php?id=<?= $search_result['id'] ?>">Accéder au dossier</a>
</td></tr>
							<?php }  ?>
					
			</div> -->







			<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Backoffice</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="css/enroll-form.css">
</head>
<body>

<style> 
            

        

        .chercher{
            padding: 10px;
            width: 400px;
            border:solid 1px green;
            border-radius: 10px;

        }

        .btn-search{
            padding: 10px;
            background-color: green;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 13px;


        }

        .accepted{
            border: solid 1px green;
            background-color: green;
         
            color: white;
        }
         .deleted{
            border: solid 1px green;
            background-color: #4E394C;
         
            color: white;
        }

        .refused{

            border: solid 1px green;
            background-color: red;
            
            color: white;
            margin-top: 2px;

        }

        .acess{

            border: solid 1px green;
            background-color: blue; 
            color: white;

        }

        .accepted_gn{

            border: solid 1px green;
            background-color: #008542;
            
            color: white;
            margin-top: 2px;

        }

         .refused_gn{

            border: solid 1px green;
            background-color: #EB5800;
            
            color: white;
            margin-top: 2px;

        }


        td{
            padding: 6px;
        }


        a:hover{

            color: white;

        }
        .logout{
            float: right;
            font-size: 30px;

        }
        .logout:hover{
            color: green;
        }

</style>

<a class="logout" href="backoffice_sc.php">Revenir à la page principale</a>


<!-- <form action="search.php" method="GET">
                        <div class="input">
                            <input type="text" name="search" class="chercher" placeholder="Chercher un dossier">
                            <span class="input-group-btn">
                                <button class="btn-search" type="submit">Recherche</button>
                            </span>
                        </div>
                    </form> -->
    <section>
     

<table class="standard-table">
            <caption>Liste des étudiants</caption>

            <thead>
                <tr>

                    <th>Numéro dossier</th>
                    <th>Nom</th>
                    <!-- <th>Prénom</th> -->
                    <th></th>

                    <th>Etat SC</th>
                    <th>Etat SF</th>
                    
                    <th>Décision</th>
                </tr>

                <!--name, surname, othernames, city, gender, fieldyear, field, birthday , birthmonth, birthyear, birthcountry, birthcity, citizen, birthdepartment, email, confirmmail, phone, residencecountry, neighbour, house  !-->
            </thead>
            <tbody>
                <?php foreach($search_results as $search_result): ?>
                    <tr>
                        <td><?= $search_result['code_aleatoire'] ?></td>
                        
                        <td><?= strtoupper($search_result['name']) ?></td>
                      <!--   <td><?= strtoupper($detail['surname']) ?></td> -->
                        <td><a class="acess" href="backoffice-student_sc.php?id=<?= $detail['id'] ?>">Consulter</a>
                        <a  id="accept" class="accepted" href="accepted_sc.php?id=<?= $detail['id'] ?>">Valider SC</a>

                        <a  class="refused" href="refused_sc.php?id=<?= $detail['id'] ?>">Refuser SC</a>

                        <a class="accepted_gn" href="accepted_gn.php?id=<?= $detail['id'] ?>">Accepter</a>
                        <a class="refused_gn" href="refused_gn.php?id=<?= $detail['id'] ?>">Refuser</a>
                        
</td>


<td  id="statute"><?= ($search_result['status_sf']) ?></td>
<td  id="statute"><?= ($search_result['statute']) ?></td>
<td  id="statute"><?= ($search_result['status_general']) ?></td>
                        </tr>
                    
                <?php endforeach ?>



                                
            </tbody>
        </table>
    </section>








 