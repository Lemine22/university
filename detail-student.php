<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Back-office</title>
    <link rel="icon" type="image/ipg" href="img/logo.jpg">
    <link rel="stylesheet" href="css/enroll-form.css">
</head>
<body>


<h2><a href="reponses.php">REPONSES AUTOMATIQUES</a></h2>

    <section>
        <h1>Dossier étudiant</h1>
        <h1 class="home"><a href="backoffice_sc.php">Revenir à la page principale</a> </h1>

        <table class="standard-table">
            <caption>Filière et Formation</caption>
            <thead>
                <tr>

                    <th>Identifiant</th>
                    <th>Filière</th>
                    <th>Année de formation</th>
                    
                </tr>

                <!--name, surname, othernames, city, gender, fieldyear, field, birthday , birthmonth, birthyear, birthcountry, birthcity, citizen, birthdepartment, email, confirmmail, phone, residencecountry, neighbour, house  !-->
            </thead>
            <tbody>
               
                    <tr>
                        <td><?= strtoupper($info['code_aleatoire']) ?></td>
                        <td><?= strtoupper($info['field']) ?></td>
                        <td><?= strtoupper($info['fieldyear']) ?></td>
                        
                    </tr>
               
            </tbody>
        </table>
    </section>



    <section>
  

        <table class="standard-table">
            <caption>Etat Civil</caption>
            <thead>
                <tr>

                    
                    <th>Civilité</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Autres noms</th>
                    <th>Date de Naissance</th>
                    <th>Pays de Naissance</th>
                    <th>Département de Naissance</th>
                    <th>Ville de Naissance</th>
                    <th>Nationalité</th>
                </tr>

            </thead>
            <tbody>
               
                    <tr>
                        
                        <td><?= strtoupper($info['gender']) ?></td>
                        <td><?= strtoupper($info['name']) ?></td>
                        <td><?= strtoupper($info['surname']) ?></td>
                        <td><?= strtoupper($info['othernames']) ?></td>
                        <td><?= $info['birthday'].'/'.$info['birthmonth'].'/'.$info['birthyear'] ?></td>
                        <td><?= strtoupper($info['birthcountry']) ?></td>
                        <td><?= strtoupper($info['birthdepartment']) ?></td>
                        <td><?= strtoupper($info['birthcity']) ?></td>
                        <td><?= strtoupper($info['citizen']) ?></td>
                    </tr>
               
            </tbody>
        </table>
    </section>


<section>
  

        <table class="standard-table">
            <caption>Information de Contact</caption>
            <thead>
                <tr>

                    
                    <th>Adresse mail personnelle</th>
                    <th>Téléphone portable</th>
                    <th>Téléphone fixe</th>
                    <th>Pays de résidence</th>
                    <th>Ville de résidence</th>
                    <th>Cartier de résidence</th>
                    <th>Maison</th>
                 
                </tr>

                <!--name, surname, othernames, city, gender, fieldyear, field, birthday , birthmonth, birthyear, birthcountry, birthcity, citizen, birthdepartment, email, confirmmail, phone, residencecountry, neighbour, house  !-->
            </thead>
            <tbody>
               
                    <tr>
                        
                        <td><?= $info['email'] ?></td>
                        <td><?= $info['indicatif'].' '.$info['phone'] ?></td>
                        <td><?= $info['fix'] ?></td>
                        <td><?= strtoupper($info['residencecountry']) ?></td>
                        <td><?= strtoupper($info['city']) ?></td>
                        <td><?= strtoupper($info['neighbour']) ?></td>
                        <td><?= strtoupper($info['house']) ?></td>
                    </tr>
               
            </tbody>
        </table>
    </section>


    <div class="photo">
        
        <h3>Acte de Naissance</h3>

            <?= "<img src='".$info['chemin']."'  height=\"500\" width=\"500\">" ?>

            <h3>Photo du candidat</h3>

            <?= "<img src='".$info['chemin_photo']."'  height=\"500\" width=\"500\">" ?>


    </div>


<section>
  

        <table class="standard-table">
            <caption>Informations du bac</caption>
            <thead>
                <tr>

                    
                    <th>Pays</th>
                    <th>Ville</th>
                    <th>Département</th>
                    <th>Série</th>
                    <th>Année</th>
                 
                </tr>

              
            </thead>
            <tbody>
               
                    <tr>
                        
                        <td><?= strtoupper($info['bac_country']) ?></td>
                        <td><?= strtoupper($info['bac_city']) ?></td>
                        <td><?= strtoupper($info['bac_department']) ?></td>
                         <td><?= strtoupper($info['bac_serie'])?></td>
                        <td><?= $info['bac_year'] ?></td>
                        
                    </tr>
               
            </tbody>
        </table>
    </section>

    <div class="photo">
        
        <h3>Relevé de notes Baccalauréat</h3>

            <?= "<img src='".$info['bac_chemin']."'  height=\"500\" width=\"500\">" ?>


            <h3>Attestation Baccalauréat</h3>

            <?= "<img src='".$info['bac_chemin_att']."'  height=\"500\" width=\"500\">" ?>


    </div>


<section>
  

        <table class="standard-table">
            <caption>1ère année postbac</caption>
            <thead>
                <tr>

                    
                    <th>Pays</th>
                    <th>Ville</th>
                    <th>Etablissement</th>
                    <th>Filière</th>
                    <th>Année</th>
                 
                </tr>

              
            </thead>
            <tbody>
               
                    <tr>
                        
                        <td><?= strtoupper($info['postbac_country']) ?></td>
                        <td><?= strtoupper($info['postbac_city']) ?></td>
                        <td><?= strtoupper($info['postbac_department']) ?></td>
                         <td><?= strtoupper($info['postbac_serie']) ?></td>
                        <td><?= $info['postbac_year'] ?></td>
                        
                    </tr>
               
            </tbody>
        </table>
    </section>

    <div class="photo">
        
        <h3>Relevé elevé de notes 1</h3>

            <?= "<img src='".$info['postbac_chemin']."'  height=\"600\" width=\"600\">" ?>
            <h3>Relevé de notes 2</h3>

            <?= "<img src='".$info['chemin_releve1']."'  height=\"600\" width=\"600\">" ?>

            <h3>Relevé de notes 3</h3>

            <?= "<img src='".$info['chemin_releve2']."'  height=\"600\" width=\"600\">" ?>


    </div>






<section>
  

        <table class="standard-table">
            <caption>2ème année postbac</caption>
            <thead>
                <tr>

                    
                    <th>Pays</th>
                    <th>Ville</th>
                    <th>Etablissement</th>
                    <th>Filière</th>
                    <th>Année</th>
                 
                </tr>

              
            </thead>
            <tbody>
               
                     <tr>
                        
                        <td><?= strtoupper($info['postbac_country2']) ?></td>
                        <td><?= strtoupper($info['postbac_city2']) ?></td>
                        <td><?= strtoupper($info['postbac_department2']) ?></td>
                         <td><?= strtoupper($info['postbac_serie2']) ?></td>
                        <td><?= $info['postbac_year2'] ?></td>
                        
                    </tr>
               
            </tbody>
        </table>
    </section>

    <div class="photo">
        
        <h3>Diplôme ou relevé des notes 2ème année postbac</h3>

            <?= "<img src='".$info['postbac_chemin2']."'  height=\"600\" width=\"600\">" ?>


            <h3>Relevé de notes 2</h3>

            <?= "<img src='".$info['chemin_releve3']."'  height=\"600\" width=\"600\">" ?>

            <h3>Relevé de notes 3</h3>

            <?= "<img src='".$info['chemin_releve4']."'  height=\"600\" width=\"600\">" ?>


    </div>


    <section>
  

        <table class="standard-table">
            <caption>3ème année postbac</caption>
            <thead>
                <tr>

                    
                    <th>Pays</th>
                    <th>Ville</th>
                    <th>Etablissement</th>
                    <th>Filière</th>
                    <th>Année</th>
                 
                </tr>

              
            </thead>
            <tbody>
               
                     <tr>
                        
                        <td><?= strtoupper($info['postbac_country3']) ?></td>
                        <td><?= strtoupper($info['postbac_city3']) ?></td>
                        <td><?= strtoupper($info['postbac_department3']) ?></td>
                         <td><?= strtoupper($info['postbac_serie3']) ?></td>
                        <td><?= $info['postbac_year3'] ?></td>
                        
                    </tr>
               
            </tbody>
        </table>
    </section>

    <div class="photo">
        
        <h3>Diplôme ou relevé des notes 3ème année postbac </h3>

            <?= "<img src='".$info['postbac_chemin3']."'  height=\"600\" width=\"600\">" ?>


            <h3>Relevé de notes 2</h3>

            <?= "<img src='".$info['chemin_releve5']."'  height=\"600\" width=\"600\">" ?>

            <h3>Relevé de notes 3</h3>

            <?= "<img src='".$info['chemin_releve6']."'  height=\"600\" width=\"600\">" ?>


    </div>


     <section>
  

        <table class="standard-table">
            <caption>4ème année postbac</caption>
            <thead>
                <tr>

                    
                    <th>Pays</th>
                    <th>Ville</th>
                    <th>Etablissement</th>
                    <th>Filière</th>
                    <th>Année</th>
                 
                </tr>

              
            </thead>
            <tbody>
               
                     <tr>
                        
                        <td><?= strtoupper($info['postbac_country4']) ?></td>
                        <td><?= strtoupper($info['postbac_city4']) ?></td>
                        <td><?= strtoupper($info['postbac_department4']) ?></td>
                         <td><?= strtoupper($info['postbac_serie4']) ?></td>
                        <td><?= $info['postbac_year4'] ?></td>
                        
                    </tr>
               
            </tbody>
        </table>
    </section>

    <div class="photo">
        
        <h3>Diplôme ou relevé des notes 4ème année postbac </h3>

            <?= "<img src='".$info['postbac_chemin4']."'  height=\"600\" width=\"600\">" ?>


            <h3>Relevé de notes 2</h3>

            <?= "<img src='".$info['chemin_releve7']."'  height=\"600\" width=\"600\">" ?>

            <h3>Relevé de notes 3</h3>

            <?= "<img src='".$info['chemin_releve8']."'  height=\"600\" width=\"600\">" ?>


    </div>




    


    <section>
  

        <table class="standard-table">
            <caption>informations de paiment</caption>
            <thead>
                <tr>

                    
                    <th>Numéro du bordreau</th>
                    <th>Nom de la banque</th>
                    
                 
                </tr>

              
            </thead>
            <tbody>
               
                    <tr>
                        
                        <td><?= $info['bordreau'] ?></td>
                        <td><?= strtoupper($info['bank']) ?></td>
               
                        
                    </tr>
               
            </tbody>
        </table>
    </section>

    <div class="photo">
        
        <h3>Bordreau</h3>

            <?= "<img src='".$info['bordreau_chemin']."'  height=\"600\" width=\"600\">" ?>


    </div>


    
</body>
</html>





