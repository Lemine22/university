
<?php

$pdo = new PDO('mysql:host=localhost;dbname=inscription', 'root', '');

// Paramétrage de la liaison PHP <-> MySQL, les données sont encodées en UTF-8.
$pdo->exec('SET NAMES UTF8');



$query = $pdo->prepare
(
    'SELECT
        id, name, surname, othernames, city, gender, fieldyear, field, birthday , birthmonth, birthyear, birthcountry, birthcity, citizen, birthdepartment, email, confirmmail, phone, residencecountry, neighbour, house, chemin

     FROM inscription
     WHERE id = ?'
);

$query->execute(array($_GET['id']));

$info = $query->fetch(PDO::FETCH_ASSOC);








?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>PHP</title>
    <link rel="stylesheet" href="css/enroll-form.css">
</head>
<body>

    <section>
        <h1>Bonjour</h1>
        

        <table class="standard-table">
            <caption>Filière et Formation</caption>
            <thead>
                <tr>

                    <th>Nom</th>
                    <th>Prénom</th>
                    
                    
                </tr>

                <!--name, surname, othernames, city, gender, fieldyear, field, birthday , birthmonth, birthyear, birthcountry, birthcity, citizen, birthdepartment, email, confirmmail, phone, residencecountry, neighbour, house  !-->
            </thead>
            <tbody>
               
                    <tr>
                        <td><?= $info['name'] ?></td>
                        <td><?= $info['surname'] ?></td>
                    
                        
                    </tr>
               
            </tbody>
        </table>
    </section>
    
</body>
</html>





