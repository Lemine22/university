<?php

require_once 'inc/config.php';   // La configuration de la base de données



// Les variables du formulaire




    $characts   = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';  
  $characts   .= '1234567890'; 
  $code_aleatoire      = ''; 

  for($i=0;$i < 8;$i++)    //8 est le nombre de caractères
  { 
        $code_aleatoire .= substr($characts,rand()%(strlen($characts)),1); 
  }


  $statute = 'Nouveau dossier';

  $statute_student = 'Complet';

  // $stat_sc = 'Nouveau dossier';
  $stat_sf = 'Nouveau';

  $status_general = 'Nouveau dossier';



$field_year = isset($_POST['fieldyear']) ? $_POST['fieldyear'] : false;
   if ($field_year) {
       $field_year = htmlentities($_POST['fieldyear'], ENT_QUOTES, "UTF-8"); 

   } 


$field = isset($_POST['field']) ? $_POST['field'] : false;
   if ($field) {
       $field = htmlentities($_POST['field'], ENT_QUOTES, "UTF-8"); 

   }


   $site = isset($_POST['site']) ? $_POST['site'] : false;
   if ($site) {
       $site = htmlentities($_POST['site'], ENT_QUOTES, "UTF-8"); 

   }

$name = !empty($_POST['name']) ? strip_tags($_POST['name']) : '';

$sur_name = '';

if (!empty($_POST['surname'])) {
  $sur_name = $_POST['surname'];
}


$other_names = '';
if (!empty($_POST['other-names'])) {
  $other_names = $_POST['other-names'];
}


$birth_day = isset($_POST['birth-day']) ? $_POST['birth-day'] : false;
   if ($birth_day) {
       $birth_day = htmlentities($_POST['birth-day'], ENT_QUOTES, "UTF-8"); 


   } 

   $birth_month = isset($_POST['birth-month']) ? $_POST['birth-month'] : false;
   if ($birth_month) {
       $birth_month = htmlentities($_POST['birth-month'], ENT_QUOTES, "UTF-8"); 


   } 

   $birth_year = isset($_POST['birth-year']) ? $_POST['birth-year'] : false;
   if ($birth_year) {
       $birth_year = htmlentities($_POST['birth-year'], ENT_QUOTES, "UTF-8"); 


   } 


$birth_country = isset($_POST['birth-country']) ? $_POST['birth-country'] : false;
   if ($birth_country) {
       $birth_country = htmlentities($_POST['birth-country'], ENT_QUOTES, "UTF-8"); 

   } 


$birth_department = '';
if (!empty($_POST['birth-department'])) {
  $birth_department = $_POST['birth-department'];
}

$birth_city = '';
if (!empty($_POST['birth-city'])) {
  $birth_city = $_POST['birth-city'];
}

$citizen = isset($_POST['citizen']) ? $_POST['citizen'] : false;
   if ($citizen) {
       $citizen = htmlentities($_POST['citizen'], ENT_QUOTES, "UTF-8"); 

   }

$password = '';
if (!empty($_POST['password'])) {
  $password = $_POST['password'];
}
$confirm_passwrd = '';
if (!empty($_POST['confirm_password'])) {
  $confirm_password = $_POST['confirm_password'];
}

$email = '';
if (!empty($_POST['email'])) {
  $email = $_POST['email'];
}


$confirm_email = '';
if (!empty($_POST['confirm-email'])) {
  $confirm_email = $_POST['confirm-email'];
}
$phone = '';
if (!empty($_POST['phone'])) {
  $phone = $_POST['phone'];
}

$fix = '';
if (!empty($_POST['fix'])) {
  $fix = $_POST['fix'];
}

$indicatif = '';
if (!empty($_POST['indicatif'])) {
  $indicatif = $_POST['indicatif'];
}

$residence_country = isset($_POST['residence-country']) ? $_POST['residence-country'] : false;
   if ($residence_country) {
       $residence_country = htmlentities($_POST['residence-country'], ENT_QUOTES, "UTF-8"); 

   }
$city = '';
if (!empty($_POST['city'])) {
  $city = $_POST['city'];

}

$neighbour = '';
if (!empty($_POST['neighbour'])) {
  $neighbour = $_POST['neighbour'];

}


$house = '';
if (!empty($_POST['house'])) {
  $house = $_POST['house'];

}





$gender = isset($_POST['gender']) ? $_POST['gender'] : false;
   if ($gender) {
       $gender = htmlentities($_POST['gender'], ENT_QUOTES, "UTF-8"); 


   } 



if(isset($_FILES['userfile']))
{
  if($_FILES['userfile']['error'] == 0 )
  {
    
    $pic = uniqid();
    $uploaded_file = "images/$pic.jpg";
    
    move_uploaded_file($_FILES['userfile']['tmp_name'], $uploaded_file);
    
  }

}

if(isset($_FILES['userfile_photo']))
{
  // if($_FILES['userfile']['error'] == 0 )
  // {
    
    $pic = uniqid();
    $uploaded_file_photo = "images/$pic.jpg";
    
    move_uploaded_file($_FILES['userfile_photo']['tmp_name'], $uploaded_file_photo);
    
  // }

}



$bac_country = isset($_POST['bac_country']) ? $_POST['bac_country'] : false;
   if ($bac_country) {
       $bac_country = htmlentities($_POST['bac_country'], ENT_QUOTES, "UTF-8"); 

   } 



$bac_mention = isset($_POST['bac_mention']) ? $_POST['bac_mention'] : false;
   if ($bac_mention) {
       $bac_mention = htmlentities($_POST['bac_mention'], ENT_QUOTES, "UTF-8"); 

   } 

   $bac_department = '';
if (!empty($_POST['bac_department'])) {
  $bac_department = $_POST['bac_department'];
}

$bac_city = '';
if (!empty($_POST['bac_city'])) {
  $bac_city = $_POST['bac_city'];
}
$bac_year = '';
if (!empty($_POST['bac_year'])) {
  $bac_year = $_POST['bac_year'];
}
$bac_serie = '';
if (!empty($_POST['bac_serie'])) {
  $bac_serie = $_POST['bac_serie'];
}




$postbac_country = isset($_POST['postbac_country']) ? $_POST['postbac_country'] : false;
   if ($postbac_country) {
       $postbac_country = htmlentities($_POST['postbac_country'], ENT_QUOTES, "UTF-8"); 

   } 



$postbac_mention = isset($_POST['postbac_mention']) ? $_POST['postbac_mention'] : false;
   if ($postbac_mention) {
       $postbac_mention = htmlentities($_POST['postbac_mention'], ENT_QUOTES, "UTF-8"); 

   } 

   $postbac_department = '';
if (!empty($_POST['postbac_department'])) {
  $postbac_department = $_POST['postbac_department'];
}

$postbac_city = '';
if (!empty($_POST['postbac_city'])) {
  $postbac_city = $_POST['postbac_city'];
}
$postbac_year = '';
if (!empty($_POST['postbac_year'])) {
  $postbac_year = $_POST['postbac_year'];
}
$postbac_serie = '';
if (!empty($_POST['postbac_serie'])) {
  $postbac_serie = $_POST['postbac_serie'];
}


if(isset($_FILES['postbac_userfile']))
{
//   if($_FILES['postbac_userfile']['error'] == 0 )
//   {
    
    $pic = uniqid();
    $postbac_uploaded_file = "images/$pic.jpg";
    
    move_uploaded_file($_FILES['postbac_userfile']['tmp_name'], $postbac_uploaded_file);
    
//   }

}



$postbac_country2 = isset($_POST['postbac_country2']) ? $_POST['postbac_country2'] : false;
   if ($postbac_country2) {
       $postbac_country2 = htmlentities($_POST['postbac_country2'], ENT_QUOTES, "UTF-8"); 

   } 



$postbac_mention2 = isset($_POST['postbac_mention2']) ? $_POST['postbac_mention2'] : false;
   if ($postbac_mention2) {
       $postbac_mention2 = htmlentities($_POST['postbac_mention2'], ENT_QUOTES, "UTF-8"); 

   } 

   $postbac_department2 = '';
if (!empty($_POST['postbac_department2'])) {
  $postbac_department2 = $_POST['postbac_department2'];
}

$postbac_city2 = '';
if (!empty($_POST['postbac_city2'])) {
  $postbac_city2 = $_POST['postbac_city2'];
}
$postbac_year2 = '';
if (!empty($_POST['postbac_year2'])) {
  $postbac_year2 = $_POST['postbac_year2'];
}
$postbac_serie2 = '';
if (!empty($_POST['postbac_serie2'])) {
  $postbac_serie2 = $_POST['postbac_serie2'];
}


if(isset($_FILES['postbac_userfile2']))
{
//   if($_FILES['postbac_userfile2']['error'] == 0 )
//   {
    
    $pic = uniqid();
    $postbac_uploaded_file2 = "images/$pic.jpg";
    
    move_uploaded_file($_FILES['postbac_userfile2']['tmp_name'], $postbac_uploaded_file2);
    
//   }

}


$postbac_country3 = isset($_POST['postbac_country3']) ? $_POST['postbac_country3'] : false;
   if ($postbac_country3) {
       $postbac_country3 = htmlentities($_POST['postbac_country3'], ENT_QUOTES, "UTF-8"); 

   } 



$postbac_mention3 = isset($_POST['postbac_mention3']) ? $_POST['postbac_mention3'] : false;
   if ($postbac_mention3) {
       $postbac_mention3 = htmlentities($_POST['postbac_mention3'], ENT_QUOTES, "UTF-8"); 

   } 

   $postbac_department3 = '';
if (!empty($_POST['postbac_department3'])) {
  $postbac_department3 = $_POST['postbac_department3'];
}

$postbac_city3 = '';
if (!empty($_POST['postbac_city3'])) {
  $postbac_city3 = $_POST['postbac_city3'];
}
$postbac_year3 = '';
if (!empty($_POST['postbac_year3'])) {
  $postbac_year3 = $_POST['postbac_year3'];
}
$postbac_serie3 = '';
if (!empty($_POST['postbac_serie3'])) {
  $postbac_serie3 = $_POST['postbac_serie3'];
}


if(isset($_FILES['postbac_userfile3']))
{
//   if($_FILES['postbac_userfile2']['error'] == 0 )
//   {
    
    $pic = uniqid();
    $postbac_uploaded_file3 = "images/$pic.jpg";
    
    move_uploaded_file($_FILES['postbac_userfile3']['tmp_name'], $postbac_uploaded_file3);
    
//   }

}


$postbac_country4 = isset($_POST['postbac_country4']) ? $_POST['postbac_country4'] : false;
   if ($postbac_country4) {
       $postbac_country4 = htmlentities($_POST['postbac_country4'], ENT_QUOTES, "UTF-8"); 

   } 



$postbac_mention4 = isset($_POST['postbac_mention4']) ? $_POST['postbac_mention4'] : false;
   if ($postbac_mention4) {
       $postbac_mention4 = htmlentities($_POST['postbac_mention4'], ENT_QUOTES, "UTF-8"); 

   } 

   $postbac_department4 = '';
if (!empty($_POST['postbac_department4'])) {
  $postbac_department4 = $_POST['postbac_department4'];
}

$postbac_city4 = '';
if (!empty($_POST['postbac_city4'])) {
  $postbac_city4 = $_POST['postbac_city4'];
}
$postbac_year4 = '';
if (!empty($_POST['postbac_year4'])) {
  $postbac_year4 = $_POST['postbac_year4'];
}
$postbac_serie4 = '';
if (!empty($_POST['postbac_serie4'])) {
  $postbac_serie4 = $_POST['postbac_serie4'];
}


if(isset($_FILES['postbac_userfile4']))
{
//   if($_FILES['postbac_userfile2']['error'] == 0 )
//   {
    
    $pic = uniqid();
    $postbac_uploaded_file4 = "images/$pic.jpg";
    
    move_uploaded_file($_FILES['postbac_userfile4']['tmp_name'], $postbac_uploaded_file4);
    
//   }

}


if(isset($_FILES['bordreau_userfile']))
{
  if($_FILES['bordreau_userfile']['error'] == 0 )
  {
    
    $pic = uniqid();
    $bordreau_uploaded_file = "images/$pic.jpg";
    
    move_uploaded_file($_FILES['bordreau_userfile']['tmp_name'], $bordreau_uploaded_file);
    
  }

}

if(isset($_FILES['bac_userfile']))
{
  if($_FILES['bac_userfile']['error'] == 0 )
  {
    
    $pic = uniqid();
    $bac_uploaded_file = "images/$pic.jpg";
    
    move_uploaded_file($_FILES['bac_userfile']['tmp_name'], $bac_uploaded_file);
    
    }
    

  }


  if(isset($_FILES['bac_userfile_att']))
{
//   if($_FILES['bac_userfile']['error'] == 0 )
//   {
    
    $pic = uniqid();
    $bac_uploaded_file_att = "images/$pic.jpg";
    
    move_uploaded_file($_FILES['bac_userfile_att']['tmp_name'], $bac_uploaded_file_att);
    
  //   }

  }


  if(isset($_FILES['postbac_userfile_r1']))
{
//   if($_FILES['postbac_userfile']['error'] == 0 )
//   {
    
    $pic = uniqid();
    $postbac_uploaded_file_r1 = "images/$pic.jpg";
    
    move_uploaded_file($_FILES['postbac_userfile_r1']['tmp_name'], $postbac_uploaded_file_r1);
    
//   }

}

  if(isset($_FILES['postbac_userfile_r2']))
{
//   if($_FILES['postbac_userfile']['error'] == 0 )
//   {
    
    $pic = uniqid();
    $postbac_uploaded_file_r2 = "images/$pic.jpg";
    
    move_uploaded_file($_FILES['postbac_userfile_r2']['tmp_name'], $postbac_uploaded_file_r2);
    
//   }

}

 if(isset($_FILES['postbac_userfile_r3']))
{
//   if($_FILES['postbac_userfile']['error'] == 0 )
//   {
    
    $pic = uniqid();
    $postbac_uploaded_file_r3 = "images/$pic.jpg";
    
    move_uploaded_file($_FILES['postbac_userfile_r3']['tmp_name'], $postbac_uploaded_file_r3);
    
//   }

}

 if(isset($_FILES['postbac_userfile_r4']))
{
//   if($_FILES['postbac_userfile']['error'] == 0 )
//   {
    
    $pic = uniqid();
    $postbac_uploaded_file_r4 = "images/$pic.jpg";
    
    move_uploaded_file($_FILES['postbac_userfile_r4']['tmp_name'], $postbac_uploaded_file_r4);
    
//   }

}

 if(isset($_FILES['postbac_userfile_r5']))
{
//   if($_FILES['postbac_userfile']['error'] == 0 )
//   {
    
    $pic = uniqid();
    $postbac_uploaded_file_r5 = "images/$pic.jpg";
    
    move_uploaded_file($_FILES['postbac_userfile_r5']['tmp_name'], $postbac_uploaded_file_r5);
    
//   }

}

 if(isset($_FILES['postbac_userfile_r6']))
{
//   if($_FILES['postbac_userfile']['error'] == 0 )
//   {
    
    $pic = uniqid();
    $postbac_uploaded_file_r6 = "images/$pic.jpg";
    
    move_uploaded_file($_FILES['postbac_userfile_r6']['tmp_name'], $postbac_uploaded_file_r6);
    
//   }

}

if(isset($_FILES['postbac_userfile_r7']))
{
//   if($_FILES['postbac_userfile']['error'] == 0 )
//   {
    
    $pic = uniqid();
    $postbac_uploaded_file_r7 = "images/$pic.jpg";
    
    move_uploaded_file($_FILES['postbac_userfile_r7']['tmp_name'], $postbac_uploaded_file_r7);
    
//   }

}

if(isset($_FILES['postbac_userfile_r8']))
{
//   if($_FILES['postbac_userfile']['error'] == 0 )
//   {
    
    $pic = uniqid();
    $postbac_uploaded_file_r8 = "images/$pic.jpg";
    
    move_uploaded_file($_FILES['postbac_userfile_r8']['tmp_name'], $postbac_uploaded_file_r8);
    
//   }

}


$bordreau = '';
if (!empty($_POST['bordreau'])) {
  $bordreau = $_POST['bordreau'];
}

$bank = '';
if (!empty($_POST['bank'])) {
  $bank = $_POST['bank'];
}

// Controller les erreurs dans le formulaire


$errors = array();    

// Le formulaire a ete soumis, on a appuye sur le bouton Continuer

if (!empty($_POST)) {


  if (empty($field)) {
    $errors['field'] = 'Le champ \'Filière\' ne doit pas être vide.';
  }

  if (empty($site)) {
    $errors['site'] = 'Le champ \'Site de la formation\' ne doit pas être vide.';
  }



 if (empty($field_year)) {
    $errors['field-year'] = 'Le champ \'Année de formation\' ne doit pas être vide.';
  }

  if (empty($gender)) {

      $errors['gender'] = 'Le champ \'Civilité\' ne doit pas être vide.';

    
  }


  // On check les erreurs possibles
  if (empty($name)) {

      $errors['name'] = 'Le champ \'Nom\' ne doit pas être vide.';

    
  }

  if (empty($sur_name)) {
     $errors['surname'] = 'Le champ \'Prénom\' ne doit pas être vide.';
  }
  

  if (empty($birth_day)) {
    $errors['birth-day'] = 'Veuillez renseigner votre date de naissance';
  }

  if (empty($birth_month)) {
    $errors['birth-day'] = 'Veuillez renseigner votre date de naissance';
  }
  
if (empty($birth_year)) {
    $errors['birth-day'] = 'Veuillez renseigner votre date de naissance';
  }

  if (empty($birth_country)) {
    $errors['birth-country'] = 'Le champ \'Pays de Naissance\' ne doit pas être vide.';
  }

  if (empty($birth_department)) {
    $errors['birth-department'] = 'Le champ \'Département de Naissance\' ne doit pas être vide.';
  }

  if (empty($birth_city)) {
    $errors['birth-city'] = 'Le champ \'Ville de Naissance\' ne doit pas être vide.';
  }

  if (empty($citizen)) {
    $errors['citizen'] = 'Le champ \'Nationalité\' ne doit pas être vide.';
  }
  

  if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Veuillez renseigner un email valide';
    }

  if ($email != $confirm_email) {
        $errors['confirm-email'] = 'Vos adresses e-mail ne correspondent pas';
    }

  if (empty($phone)) {
    $errors['phone'] = 'Le champ \'Téléphone\' ne doit pas être vide.';
  }



  if (empty($indicatif)) {
    $errors['indicatif'] = 'Le champ \'indicatif\' ne doit pas être vide.';
  }

  if (empty($residence_country)) {
    $errors['residence-country'] = 'Le champ \'Pays de résidence\' ne doit pas être vide.';
  }

    if (empty($city)) {
    $errors['city'] = 'Le champ \'Ville de résidence\' ne doit pas être vide.';
  }

   if (empty($neighbour)) {
    $errors['neighbour'] = 'Le champ \'Quartier de résidence\' ne doit pas être vide.';
  }

  if (empty($uploaded_file)) {
    $errors['userfile'] = 'Le champ \'Votre acte de naissance\' ne doit pas être vide.';
  }

//   if ($_FILES["userfile"]["size"] > 500000) {

//     $errors['userfile'] = 'L\'image ne doit pas dépasser 500 Ko';
// }
  

  if (empty($password)) {
    $errors['password'] = 'Veuillez renseigner un mot de passe';
  } else if (strlen($password) < 8) {
    $errors['password'] = 'Votre mot de passe doit comporter au moins 8 caractères';
  }
  if (!empty($password) && $password !== $confirm_password) {
    $errors['confirm_password'] = 'Les 2 mots de passe ne correspondent pas';
  }


    
  
  
  //debug($errors);

  // Aucune erreur dans le formulaire, tous les champs ont été saisis correctement
  if (empty($errors)) {

    $query = $db->prepare('SELECT * FROM inscription WHERE email = :email');
    $query->bindValue(':email', $email, PDO::PARAM_STR);
    $query->execute();
    $inscription = $query->fetch();

    if (!empty($inscription)) {
      $errors['email'] = 'Cet email est deja pris';
    } else {

    // $crypted_password = password_hash($password, PASSWORD_BCRYPT);

    $query = $db->prepare('INSERT INTO inscription SET name = :name, surname = :surname, othernames = :othernames, city = :city, gender = :gender, fieldyear = :fieldyear, field = :field, birthday = :birthday, birthmonth = :birthmonth, birthyear = :birthyear, birthcountry = :birthcountry, birthcity = :birthcity, citizen = :citizen, birthdepartment = :birthdepartment, email = :email, confirmmail = :confirmmail, phone = :phone, residencecountry = :residencecountry, neighbour = :neighbour, house = :house, chemin = :chemin, password = :password, fix = :fix, bac_mention = :bac_mention, bac_year = :bac_year, bac_city = :bac_city, bac_serie = :bac_serie, bac_country = :bac_country, bac_chemin = :bac_chemin, postbac_mention = :postbac_mention, postbac_department = :postbac_department, postbac_country = :postbac_country, postbac_city = :postbac_city, postbac_serie = :postbac_serie, postbac_year = :postbac_year, code_aleatoire = :code_aleatoire, postbac_chemin = :postbac_chemin, site = :site, bordreau = :bordreau, bank = :bank, bordreau_chemin = :bordreau_chemin, postbac_mention2 = :postbac_mention2, postbac_department2 = :postbac_department2, postbac_country2 = :postbac_country2, postbac_city2 = :postbac_city2, postbac_serie2 = :postbac_serie2, postbac_year2 = :postbac_year2, postbac_mention3 = :postbac_mention3, postbac_department3 = :postbac_department3,  postbac_country3 = :postbac_country3, postbac_city3 = :postbac_city3, postbac_serie3 = :postbac_serie3, postbac_year3 = :postbac_year3, postbac_mention4 = :postbac_mention4, postbac_department4 = :postbac_department4, postbac_country4 = :postbac_country4, postbac_city4 = :postbac_city4, postbac_serie4 = :postbac_serie4, postbac_year4 = :postbac_year4, postbac_chemin2 = :postbac_chemin2, postbac_chemin3 = :postbac_chemin3, postbac_chemin4 = :postbac_chemin4, bac_chemin_att = :bac_chemin_att, chemin_releve1 = :chemin_releve1, chemin_releve2 = :chemin_releve2, chemin_releve3 = :chemin_releve3, chemin_releve4 = :chemin_releve4 , chemin_releve5 = :chemin_releve5, chemin_releve6 = :chemin_releve6, chemin_releve7 = :chemin_releve7, chemin_releve8 = :chemin_releve8, statute = :statute, statute_student = :statute_student, status_sf = :status_sf, status_general = :status_general, chemin_photo = :chemin_photo');

    // Pour chacune des variables précédées d'un : on doit faire un bindValue pour passer la valeur à la requête
    $query->bindValue(':name', $name, PDO::PARAM_STR);
    $query->bindValue(':surname', $sur_name, PDO::PARAM_STR);
    $query->bindValue(':othernames', $other_names, PDO::PARAM_STR);
    $query->bindValue(':city', $city, PDO::PARAM_STR);
    $query->bindValue(':gender', $gender, PDO::PARAM_STR);
    $query->bindValue(':fieldyear', $field_year, PDO::PARAM_STR);
    $query->bindValue(':field', $field, PDO::PARAM_STR);
    $query->bindValue(':birthday', $birth_day, PDO::PARAM_STR); 
    $query->bindValue(':birthmonth', $birth_month, PDO::PARAM_STR);
    $query->bindValue(':birthyear', $birth_year, PDO::PARAM_STR);
    $query->bindValue(':birthcountry', $birth_country, PDO::PARAM_STR);  
    $query->bindValue(':birthdepartment', $birth_department, PDO::PARAM_STR);
    $query->bindValue(':birthcity', $birth_city, PDO::PARAM_STR);
    $query->bindValue(':citizen', $citizen, PDO::PARAM_STR);
    $query->bindValue(':email', $email, PDO::PARAM_STR);
    $query->bindValue(':confirmmail', $confirm_email, PDO::PARAM_STR);
    $query->bindValue(':phone', $phone, PDO::PARAM_STR);
    $query->bindValue(':residencecountry', $residence_country, PDO::PARAM_STR);
    $query->bindValue(':neighbour', $residence_country, PDO::PARAM_STR);
    $query->bindValue(':house', $residence_country, PDO::PARAM_STR);
    $query->bindValue(':chemin', $uploaded_file, PDO::PARAM_STR);
    $query->bindValue(':password', $password, PDO::PARAM_STR);
    $query->bindValue(':fix', $fix, PDO::PARAM_STR);
    $query->bindValue(':bac_year', $bac_year, PDO::PARAM_STR);
    $query->bindValue(':bac_mention', $bac_mention, PDO::PARAM_STR);
    $query->bindValue(':bac_serie', $bac_serie, PDO::PARAM_STR);
    $query->bindValue(':bac_city', $bac_city, PDO::PARAM_STR);
    $query->bindValue(':bac_country', $bac_country, PDO::PARAM_STR);
    $query->bindValue(':bac_chemin', $bac_uploaded_file, PDO::PARAM_STR);
    $query->bindValue(':postbac_mention', $postbac_mention, PDO::PARAM_STR);
    $query->bindValue(':postbac_department', $postbac_department, PDO::PARAM_STR);
    $query->bindValue(':postbac_country', $postbac_country, PDO::PARAM_STR);
    $query->bindValue(':postbac_city', $postbac_city, PDO::PARAM_STR);
    $query->bindValue(':postbac_serie', $postbac_serie, PDO::PARAM_STR);
    $query->bindValue(':postbac_year', $postbac_year, PDO::PARAM_STR);
    $query->bindValue(':postbac_chemin', $postbac_uploaded_file, PDO::PARAM_STR);
    $query->bindValue(':code_aleatoire', $code_aleatoire, PDO::PARAM_STR);
    $query->bindValue(':site', $site, PDO::PARAM_STR);
    $query->bindValue(':bordreau', $bordreau, PDO::PARAM_STR);
    $query->bindValue(':bank', $bank, PDO::PARAM_STR);
    $query->bindValue(':bordreau_chemin', $bordreau_uploaded_file, PDO::PARAM_STR);
    $query->bindValue(':postbac_mention2', $postbac_mention2, PDO::PARAM_STR);
    $query->bindValue(':postbac_department2', $postbac_department2, PDO::PARAM_STR);
    $query->bindValue(':postbac_country2', $postbac_country2, PDO::PARAM_STR);
    $query->bindValue(':postbac_city2', $postbac_city2, PDO::PARAM_STR);
    $query->bindValue(':postbac_serie2', $postbac_serie2, PDO::PARAM_STR);
    $query->bindValue(':postbac_year2', $postbac_year2, PDO::PARAM_STR);
    $query->bindValue(':postbac_chemin2', $postbac_uploaded_file2, PDO::PARAM_STR);
    $query->bindValue(':postbac_mention3', $postbac_mention3, PDO::PARAM_STR);
    $query->bindValue(':postbac_department3', $postbac_department3, PDO::PARAM_STR);
    $query->bindValue(':postbac_country3', $postbac_country3, PDO::PARAM_STR);
    $query->bindValue(':postbac_city3', $postbac_city3, PDO::PARAM_STR);
    $query->bindValue(':postbac_serie3', $postbac_serie3, PDO::PARAM_STR);
    $query->bindValue(':postbac_year3', $postbac_year3, PDO::PARAM_STR);
    $query->bindValue(':postbac_chemin3', $postbac_uploaded_file3, PDO::PARAM_STR);
    $query->bindValue(':postbac_mention4', $postbac_mention4, PDO::PARAM_STR);
    $query->bindValue(':postbac_department4', $postbac_department4, PDO::PARAM_STR);
    $query->bindValue(':postbac_country4', $postbac_country4, PDO::PARAM_STR);
    $query->bindValue(':postbac_city4', $postbac_city4, PDO::PARAM_STR);
    $query->bindValue(':postbac_serie4', $postbac_serie4, PDO::PARAM_STR);
    $query->bindValue(':postbac_year4', $postbac_year4, PDO::PARAM_STR);
    $query->bindValue(':postbac_chemin4', $postbac_uploaded_file4, PDO::PARAM_STR);
     $query->bindValue(':bac_chemin_att', $bac_uploaded_file_att, PDO::PARAM_STR);
     // $query->bindValue(':chemin_photo', $uploaded_file_photo, PDO::PARAM_STR);
     $query->bindValue(':chemin_releve1', $postbac_uploaded_file_r1, PDO::PARAM_STR);
     $query->bindValue(':chemin_releve2', $postbac_uploaded_file_r2, PDO::PARAM_STR);
     $query->bindValue(':chemin_releve3', $postbac_uploaded_file_r3, PDO::PARAM_STR);
     $query->bindValue(':chemin_releve4', $postbac_uploaded_file_r4, PDO::PARAM_STR);
     $query->bindValue(':chemin_releve5', $postbac_uploaded_file_r5, PDO::PARAM_STR);
     $query->bindValue(':chemin_releve6', $postbac_uploaded_file_r6, PDO::PARAM_STR);
     $query->bindValue(':chemin_releve7', $postbac_uploaded_file_r7, PDO::PARAM_STR);
     $query->bindValue(':chemin_releve8', $postbac_uploaded_file_r8, PDO::PARAM_STR);
     $query->bindValue(':statute', $statute, PDO::PARAM_STR);
     $query->bindValue(':statute_student', $statute_student, PDO::PARAM_STR);
      $query->bindValue(':status_sf', $stat_sf, PDO::PARAM_STR);
      $query->bindValue(':status_general', $status_general, PDO::PARAM_STR);
     $query->bindValue(':chemin_photo', $uploaded_file_photo, PDO::PARAM_STR);









     




    // On execute la requête
    $query->execute();

    // On récupère le numéro de la ligne automatiquement généré par MySQL avec l'attribut AUTO_INCREMENT
    $insert_id = $db->lastInsertId();

    if (!empty($insert_id)) {
      $_SESSION['inscription_id'] = $insert_id;
      echo '<div class="alert alert-success" role="alert">';
      echo 'Votre candidature a bien été envoyée';
      echo '</div>';

      header('Location: sent.php');    

  
    }
    $errors['db_error'] = 'Erreur interne, merci de reessayer ulterieurement';
  }
   }

}

include 'inscription.php'; 



?>







