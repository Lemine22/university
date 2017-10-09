



<?php 

if (!isset($_SESSION['inscription_id'])) {


    header("Location: upi-onm-kwabo.php");
}


?>

    




     
     <div class="one"><h4>Nombre de dossiers :    <?=   count($details)  ?></h4></div>
 <div class="two"><h4>   Dossiers acceptés :  <?= count($statute)  ?></h4></div>
 <div class="three"><h4>   Dossiers Refusés :  <?= count($refused)  ?></h4></div>


 
 <style>



.one, .two, .three{
    width: 30%; 
    display: inline;
    float: left;
    text-align: center;
    margin-bottom: 50px;
    margin-right: 10px;
    
}

.one{
    background-color: blue; 
    color: white;
}

.two{
    background-color: green;
    color: white; 
}

.three{
    background-color: red; 
    color: white;
}


 </style>

 

 

 



<?php



$page = !empty($_GET['page']) ? intval($_GET['page']) : 1;
// On force $page à 1 si $page = 0
$page = $page > 0 ? $page : 1;

// 2. On définit le nombre d'éléments à afficher sur chaque page
$nb_items_per_page = 30;

// 3. On définit le nombre total d'éléments à paginer avec une requête SELECT COUNT() c.f. memos/pdo.php; memos/mysql.sql

// On renvoit un nom de colonne personnalisé avec as count_total
$query = $db->prepare('SELECT COUNT(*) as count_total FROM inscription');
$query->execute();
$result = $query->fetch();
// On va chercher en clé, le nom de colonne personnalisé renvoyé par le as, sinon on devrait aller chercher $result['COUNT(*)']
$count_total_items = $result['count_total'];

// 4. On construit une requête qui va chercher les éléments paginés avec LIMIT

// On définit le point de départ
$start = ($page - 1) * $nb_items_per_page;

$query = $db->prepare('SELECT * FROM inscription LIMIT :start, :nb_items');
// On calcul le point de départ
/*
Ex: Sur la page 1 : 0 * 10 = 0, on part de la ligne 0
    Sur la page 2 : 1 * 10 = 10, on part de la ligne 10
    Sur la page 3 : 2 * 10 = 20, on part de la ligne 20
    ...etc
*/
$query->bindValue('start', $start, PDO::PARAM_INT);
// On va chercher 10 lignes
$query->bindValue('nb_items', $nb_items_per_page, PDO::PARAM_INT);
$query->execute();
$details = $query->fetchAll();

// 5. On calcul le nombre de pages pour construire les liens de pagination

// On arrondit à l'entier supérieur avec ceil() pour gérer les pages restantes au delà de $count_total / $nb_items
// Ex: 142 / 10 = 14.2; ceil(14.2) = 15; On affiche 14 pages avec 10 éléments + 1 page avec 2 éléments
$nb_pages = ceil($count_total_items / $nb_items_per_page);

?>












<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Backoffice</title>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
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

<a class="logout" href="logoutadmin.php">Déconnexion</a>


<form action="search.php" method="GET">
                        <div class="input">
                            <input type="text" name="search" class="chercher" placeholder="Chercher un dossier">
                            <span class="input-group-btn">
                                <button class="btn-search" type="submit">Recherche</button>
                            </span>
                        </div>
                    </form>
    <section>
        <h1>Liste dés étudiants</h1>


        <!-- <h2>Nombre de dossiers :    <?=   count($details)  ?></h2> -->

        <table class="standard-table">
            <caption>Liste des étudiants</caption>

            <thead>
                <tr>

                    <th>Numéro dossier</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th></th>
                    <th>Statut SF</th>
                </tr>

                <!--name, surname, othernames, city, gender, fieldyear, field, birthday , birthmonth, birthyear, birthcountry, birthcity, citizen, birthdepartment, email, confirmmail, phone, residencecountry, neighbour, house  !-->
            </thead>
            <tbody>
                <?php foreach($details as $detail): ?>
                    <tr>
                        <td><?= $detail['code_aleatoire'] ?></td>
                        
                        <td><?= strtoupper($detail['name']) ?></td>
                        <td><?= strtoupper($detail['surname']) ?></td>
                        <td><a class="acess" href="backoffice-student.php?id=<?= $detail['id'] ?>">Consulter</a>
                        <a  id="accept" class="accepted" href="accepted_sf.php?id=<?= $detail['id'] ?>">Valider SF</a>





                        
                       


                        <a  class="refused" href="refused_sf.php?id=<?= $detail['id'] ?>">Refuser SF</a>
                        <a  id="delete" class="deleted" href="delete.php?id=<?= $detail['id'] ?>">Supprimer <i class="fa fa-trash-o" aria-hidden="true"></i>
</a>
</td>

<td  id="statute"><?= ($detail['statute']) ?></td>
                        </tr>
                    
                <?php endforeach ?>



                                
            </tbody>
        </table>
    </section>




</body>
</html>







<?php 

for ($i = 1; $i <= $nb_pages; $i++) {
    // Pour chaque lien, on transmet la page à un paramètre d'url ?page= (paramètre qu'on récupère à l'étape 1)
    // Et on affiche le numéro de la page
    echo '<a href="?page='.$i.'">'.$i.'</a> ';

    
}











?>