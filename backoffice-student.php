<?php

require_once 'inc/config.php';

// Paramétrage de la liaison PHP <-> MySQL, les données sont encodées en UTF-8.
$db->exec('SET NAMES UTF8');



$query = $db->prepare
(
    'SELECT
        id, name, surname, othernames, city, gender, fieldyear, field, birthday , birthmonth, birthyear, birthcountry, birthcity, citizen, birthdepartment, email, confirmmail, phone, residencecountry, neighbour, house, chemin, fix, indicatif, bac_year, bac_country, bac_serie, bac_city, bac_mention, bac_department, postbac_year, postbac_country, postbac_serie, postbac_city, postbac_mention, postbac_department, code_aleatoire, bac_chemin, postbac_chemin, bordreau, bank, bordreau_chemin, postbac_year2, postbac_country2, postbac_serie2, postbac_city2, postbac_mention2, postbac_chemin2, postbac_department2,  postbac_year3, postbac_country3, postbac_serie3, postbac_city3, postbac_mention3, postbac_chemin3, postbac_department3,  postbac_year4, postbac_country4, postbac_serie4, postbac_city4, postbac_mention4, postbac_chemin4, postbac_department4, chemin_photo, bac_chemin_att, chemin_releve1, chemin_releve2, chemin_releve3, chemin_releve4, chemin_releve5, chemin_releve6, chemin_releve7, chemin_releve8


     FROM inscription
     WHERE id = ?'
);

$query->execute(array($_GET['id']));

$info = $query->fetch(PDO::FETCH_ASSOC);


include 'detail-student.php';