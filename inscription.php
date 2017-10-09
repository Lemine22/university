<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Inscription</title>

  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="icon" type="image/ipg" href="img/logo.jpg">

    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <link rel="stylesheet" href="css/style.css">

  
</head>
<body>

<style>
  .one, .two, .three, .four, .five, .six{
    width: 90%;
    background-color: green;
    height: 30px;
    color: white;
    text-align: center;
    font-size: 30px;
    padding-top: 10px;
    padding-bottom: 10px;
    border-radius: 50px;
    cursor: pointer;
  }
  .two{
    margin-top: 20px;
  }
  .one{
    margin-bottom: 80px;
  }

  .five{
    margin-top: 80px;
  }

  


 /* .form6{
    margin-top: 200px;
  }*/

  .six{
    margin-bottom: -50px;

  }

  .three{
    margin-top: 20px;
  }


  .apper{
      display: none;
    }

    .birth{
      width: 70px;
    }

    i{
      margin-left: 50px;
    }

    .form6{
      margin-top: 80px;
    }

    /*.left{
      margin-left: 100px;
    }*/
</style>


<style>
.tooltip {
    position: relative;
    display: inline-block;
    border-bottom: 1px dotted black;

}

.tooltip .tooltiptext {
  border:solid 1px green;
    visibility: hidden;
    width: 160px;
    background-color: #EFF0A2;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 10px 5px;
    margin-left: 150px;

    /* Position the tooltip */
    position: absolute;
    z-index: 1;
    color: green;
    font-size: 18px;
}

.tooltip:hover .tooltiptext {
    visibility: visible;
}
</style>

 


      <!-- FORMULAIRE  !-->


  <h1>Création de votre dossier</h1>

       <?php if (!empty($errors)) { ?>
      <div class="red" role="alert">
        <ul>
          <?php
          foreach($errors as $error) {
            echo '<li>'.$error.'</li>';
          }
          ?>
        </ul>
      </div>
      <?php } ?>  

      
      
      <h3 class="one formation" href=".form1">Filière et formation <i class="fa fa-chevron-down" aria-hidden="true"></i>

</h3>
      <form id="myForm" action="" method="POST" enctype="multipart/form-data">

        <!-- Rubrique FORMATION ET NIVEAU   !-->

        <div class="form1 apper">

        <label for="field-year" class="tooltip">Année de formation<span class="tooltiptext"> Choisissez l’année d’étude pour laquelle vous postulez</span><span>*</span></label>
          <select name="fieldyear" onchange='Choix(this.form)'>
            <option></option>
            <option value="DUT 1">DUT 1</option>
            <option value="DUT 2">DUT 2</option>
            <option value="Licence">Licence</option>
            <option value="Master 1">Master 1</option>
            <option value="Mater 2">Master 2</option>

          </select><br>
          <label for="field-year" class="tooltip">Filière <span class="tooltiptext">Choisissez  votre filière</span><span>*</span></label>

          <select name="field"> <OPTION></OPTION> <OPTION></OPTION> <OPTION></OPTION><OPTION></OPTION><OPTION></OPTION><OPTION></OPTION><OPTION></OPTION><OPTION></OPTION><OPTION></OPTION><OPTION></OPTION><OPTION></OPTION><OPTION></OPTION><OPTION></OPTION><OPTION></OPTION><OPTION></OPTION></select>


              <script>
    function Choix(form) { i = form.fieldyear.selectedIndex; switch (i) { case 1 : var txt = new Array ('AGRONOMIE','BANQUE FINANCE ASSURANCE','COMMUNICATION DES ENTREPRISES','FINANCE COMPTABILITE','GENIE CIVIL','GENIE ELECTRICQUE ET INFORMATIQUE INDUSTRIELLE','GENIE TELECOMS ET RESEAUX','MANAGEMENT DES RESSOURCES HUMAINES','MARKETING ET TECHNIQUE DE COMMERCIALISATION','TECHNIQUES AUDIOVISUELLES ET DE LA COMMUNICATION','TRANSPORT ET LOGISTIQUE'); break; case 2 : var txt = new Array ('AGRONOMIE','BANQUE FINANCE ASSURANCE','COMMUNICATION DES ENTREPRISES','FINANCE COMPTABILITE','GENIE CIVIL','GENIE ELECTRICQUE ET INFORMATIQUE INDUSTRIELLE','GENIE TELECOMS ET RESEAUX','MANAGEMENT DES RESSOURCES HUMAINES','MARKETING ET TECHNIQUE DE COMMERCIALISATION','TECHNIQUES AUDIOVISUELLES ET DE LA COMMUNICATION','TRANSPORT ET LOGISTIQUE'); break; case 3 : var txt = new Array ('PRODUCTION ANIMALE','PRODUCTION VEGETALE','MARKETING ET COMMUNICATION COMMERCIALE','MANAGEMENT DES RESSOURCES HUMAINES','MARKETING ET TECHNIQUE DE COMMERCIALISATION','TECHNIQUES AUDIOVISUELLES ET DE LA COMMUNICATION','TRANSPORT ET LOGISTIQUE'); break; case 4 : var txt = new Array ('AGRONOMIE','COMPTABILITE CONTROLE ET AUDIT','FINANCE','GENIE CIVIL','GESTION','INFORMATIQUE APPLIQUEE A LA GESTION DES ENTREPRISES','INFORMATIQUE RESEAUX ET TELECOMMUNICATION','TECHNIQUES AUDIO-VISUEL ET DE LA COMMUNICATION','TRANSPORT ET LOGISTIQUE'); break; case 5 : var txt = new Array ('AGRONOMIE','AUDIT ET CONTROLE DE GESTION','BANQUE FINANCE','FINANCE','GENIE CIVIL','GESTION DES PROJETS ET MANAGEMENT DE LA QUALITE','COMPTABILITE CONTROLE ET AUDIT','MAKETING COMMUNICATION COMMERCIALE ET STRATEGIE','INFORMATIQUE APPLIQUEE A LA GESTION DES ENTREPRISES','INFORMATIQUE RESEAUX ET TELECOMMUNICATION','TECHNIQUES AUDIO-VISUEL ET DE LA COMMUNICATION','PETITES MOYENNES ENTREPRISES - INDUSTRIES','TRANSPORT ET LOGISTIQUE'); break;}for (i=0;i<txt.length;i++) { form.field.options[i+1].text=txt[i]; } } 
  </script>

      





          <!-- <label for="field"> Filière<span>*</span></label>
          <select name="field" id="">
          <option value=""></option>
          <optgroup label="DUT 1">
          <option value="AGRONOMIE">AGRONOMIE</option>
          <option value="BANQUE FINANCE ASSURANCE">BANQUE FINANCE ASSURANCE</option>
          <option value="COMMUNICATION DES ENTREPRISES">COMMUNICATION DES ENTREPRISES</option>
          <option value="FINANCE COMPTABILITE">FINANCE COMPTABILITE</option>
          <option value="GENIE CIVIL">GENIE CIVIL</option>
          <option value="GENIE ELECTRICQUE ET INFORMATIQUE INDUSTRIELLE">GENIE ELECTRICQUE ET INFORMATIQUE INDUSTRIELLE</option>
          <option value="GENIE TELECOMS ET RESEAUX">GENIE TELECOMS ET RESEAUX</option>
          <option value="MANAGEMENT DES RESSOURCES HUMAINES">MANAGEMENT DES RESSOURCES HUMAINES</option>
          <option value="MARKETING ET TECHNIQUE DE COMMERCIALISATION">MARKETING ET TECHNIQUE DE COMMERCIALISATION</option>
          <option value="TECHNIQUES AUDIOVISUELLES ET DE LA COMMUNICATION">TECHNIQUES AUDIOVISUELLES ET DE LA COMMUNICATION</option>
          <option value="TRANSPORT ET LOGISTIQUE">TRANSPORT ET LOGISTIQUE</option>
          <optgroup label="DUT 2">

          <option value="AGRONOMIE">AGRONOMIE</option>
          <option value="BANQUE FINANCE ASSURANCE">BANQUE FINANCE ASSURANCE</option>
          <option value="COMMUNICATION DES ENTREPRISES">COMMUNICATION DES ENTREPRISES</option>
          <option value="FINANCE COMPTABILITE">FINANCE COMPTABILITE</option>
          <option value="GENIE CIVIL">GENIE CIVIL</option>
          <option value="GENIE ELECTRICQUE ET INFORMATIQUE INDUSTRIELLE">GENIE ELECTRICQUE ET INFORMATIQUE INDUSTRIELLE</option>
          <option value="GENIE TELECOMS ET RESEAUX">GENIE TELECOMS ET RESEAUX</option>
          <option value="MANAGEMENT DES RESSOURCES HUMAINES">MANAGEMENT DES RESSOURCES HUMAINES</option>
          <option value="MARKETING ET TECHNIQUE DE COMMERCIALISATION">MARKETING ET TECHNIQUE DE COMMERCIALISATION</option>
          <option value="TECHNIQUES AUDIOVISUELLES ET DE LA COMMUNICATION">TECHNIQUES AUDIOVISUELLES ET DE LA COMMUNICATION</option>
          <option value="TRANSPORT ET LOGISTIQUE">TRANSPORT ET LOGISTIQUE</option>



          <optgroup label="Licence">

          <option value="PRODUCTION ANIMALE">PRODUCTION ANIMALE</option>
          <option value="
          PRODUCTION VEGETALE">PRODUCTION VEGETALE</option>
          <option value="
          MARKETING ET COMMUNICATION COMMERCIALE">MARKETING ET COMMUNICATION COMMERCIALE</option>
          <option value="
          MANAGEMENT DES RESSOURCES HUMAINES">MANAGEMENT DES RESSOURCES HUMAINES</option>
          <option value="
          TECHNIQUES AUDIOVISUELLES ET DE LA COMMUNICATION">TECHNIQUES AUDIOVISUELLES ET DE LA COMMUNICATION</option>
          <option value="
          TECHNIQUES COMPTABLE ET FINANCIERE">TECHNIQUES COMPTABLE ET FINANCIERE</option>
          <option value="TRANSPORT ET LOGISTIQUE">TRANSPORT ET LOGISTIQUE</option>

          <optgroup label="Master 1">


          <option value="AGRONOMIE">AGRONOMIE</option>
          <option value="COMPTABILITE CONTROLE ET AUDIT">COMPTABILITE CONTROLE ET AUDIT</option>
          <option value="FINANCE">FINANCE</option>
          <option value="GENIE CIVIL">GENIE CIVIL</option>
          <option value="GESTION">GESTION</option>
          <option value="INFORMATIQUE APPLIQUEE A LA GESTION DES ENTREPRISES">INFORMATIQUE APPLIQUEE A LA GESTION DES ENTREPRISES</option>
          <option value="INFORMATIQUE RESEAUX ET TELECOMMUNICATION">INFORMATIQUE RESEAUX ET TELECOMMUNICATION</option>
          <option value="TECHNIQUES AUDIO-VISUEL ET DE LA COMMUNICATION">TECHNIQUES AUDIO-VISUEL ET DE LA COMMUNICATION</option>
          <option value="GESTION">GESTION</option>
          <option value="TRANSPORT ET LOGISTIQUE">TRANSPORT ET LOGISTIQUE</option>

          <optgroup label="Master 2">

          <option value="AGRONOMIE">AGRONOMIE</option>
          <option value="AUDIT ET CONTROLE DE GESTION">AUDIT ET CONTROLE DE GESTION</option>
          <option value="BANQUE FINANCE">BANQUE FINANCE</option>
          <option value="FINANCE">FINANCE</option>
          <option value="GENIE CIVIL">GENIE CIVIL</option>
          <option value="GESTION DES PROJETS ET MANAGEMENT DE LA QUALITE">GESTION DES PROJETS ET MANAGEMENT DE LA QUALITE</option>
          <option value="GESTION DES RESSOURCES HUMAINES ET RELATIONS SOCIALES">GESTION DES RESSOURCES HUMAINES ET RELATIONS SOCIALES</option>
          <option value="COMPTABILITE CONTROLE ET AUDIT">COMPTABILITE CONTROLE ET AUDIT</option>
          <option value="MAKETING COMMUNICATION COMMERCIALE ET STRATEGIE">MAKETING COMMUNICATION COMMERCIALE ET STRATEGIE</option>
          <option value="INFORMATIQUE APPLIQUEE A LA GESTION DES ENTREPRISES">INFORMATIQUE APPLIQUEE A LA GESTION DES ENTREPRISES</option>
          <option value="INFORMATIQUE RESEAUX ET TELECOMMUNICATION">INFORMATIQUE RESEAUX ET TELECOMMUNICATION</option>
          <option value="TECHNIQUES AUDIO-VISUEL ET DE LA COMMUNICATION">TECHNIQUES AUDIO-VISUEL ET DE LA COMMUNICATION</option>
          <option  value="PETITES MOYENNES ENTREPRISES - INDUSTRIES"> PETITES MOYENNES ENTREPRISES - INDUSTRIES</option>
          <option value="TRANSPORT ET LOGISTIQUE">TRANSPORT ET LOGISTIQUE</option>


          </select> -->
          <br>


          <label for="field-year" class="tooltip">Site de la formation<span class="tooltiptext">Choisissez le site de l’UPI-ONM sur lequel vous désirez étudier</span><span>*</span></label>
          <select name="site">
            <option></option>
            <option value="Cotonou">Cotonou</option>
            <option value="Porto-Novo">Porto-Novo</option>
            <option value="Abomey">Abomey</option>
            <option value="Lokossa">Lokossa</option>
            <option value="Parakou">Parakou</option>
            <option value="Djougou">Djougou</option>

          </select><br>

                    
        </div>


        <!-- Rubrique ETAT CIVIL  !-->

        <h3 class="five" href=".form5">Etat Civil <i class="fa fa-chevron-down" aria-hidden="true"></i>

</h3>
        <div class="form5 apper">
        <!-- <p class="green">Etat Civil</p> -->
          <label for="gender" class="tooltip">Civilité<span class="tooltiptext">Choisissez l’option qui vous correspond</span><span>*</span></label>
          <select name="gender">
            <option></option>
            <option value="femme">Madame</option>
            <option value="Mademoiselle">Made moiselle</option>
            <option value="homme">Monsieur</option>

          </select><br> 
          <label for="name" class="tooltip">Nom<span class="tooltiptext">Inscrivez  votre nom de famille</span><span>*</span></label>
          <input type="text" name="name" value="<?= $name ?>"><br>
          <label for="surname" class="tooltip">Prénom<span class="tooltiptext">Inscrivez le premier prénom qui figure sur votre acte de naissance</span><span>*</span></label> 
          <input type="text" name="surname" class="nom" value="<?= $sur_name ?>"><br>
          <label for="other-names" class="tooltip">Autres prénoms<span class="tooltiptext">Inscrivez tous vos autres prénoms dans l’ordre qui est sur votre acte de naissance</span></label>
          <input type="text" name="other-names" value="<?= $other_names ?>"><br>



          <label for="birth-day" class="tooltip">Date de Naissance<span class="tooltiptext">Choisissez la date, le mois et l’année de naissance</span><span>*</span></label>     <select class="birth left" name="birth-day"><option></option><?php $j= 1 ;
          while ($j<=31)
          {
            ?>                      
            <option value='<?php echo $j;?>' ><?php echo $j;?></option>
            <?php $j++;
          }                  
          ?>
        </select>
        <!-- le mois -->

        <select class="birth" name="birth-month"><option></option>
          <?php $j= 1 ;
          while ($j<=12)
          {
            ?>                      
            <option value='<?php echo $j;?>' ><?php echo $j;?></option>
            <?php $j++;
          }                  
          ?>
        </select>


        <!-- l'année -->
        <select class="birth" name="birth-year"><option></option>
          <?php $j= 1950;
          while ($j<=date(Y)-10 )
          {
            ?>                      
            <option value='<?php echo $j;?>' ><?php echo $j;?></option>
            <?php $j++;
          }                  
          ?>
        </select>

        <br>
        <label for="birth-country" class="tooltip">Pays de Naissance<span class="tooltiptext">Sélectionnez dans la liste votre pays de naissance</span><span>*</span></label>

        <select name="birth-country" value="<?= $birth_country ?>">

<option value=""></option>

<option value="Afghanistan">Afghanistan </option>
<option value="Afrique_Centrale">Afrique_Centrale </option>
<option value="Afrique_du_sud">Afrique_du_Sud </option>
<option value="Albanie">Albanie </option>
<option value="Algerie">Algerie </option>
<option value="Allemagne">Allemagne </option>
<option value="Andorre">Andorre </option>
<option value="Angola">Angola </option>
<option value="Anguilla">Anguilla </option>
<option value="Arabie_Saoudite">Arabie_Saoudite </option>
<option value="Argentine">Argentine </option>
<option value="Armenie">Armenie </option>
<option value="Australie">Australie </option>
<option value="Autriche">Autriche </option>
<option value="Azerbaidjan">Azerbaidjan </option>

<option value="Bahamas">Bahamas </option>
<option value="Bangladesh">Bangladesh </option>
<option value="Barbade">Barbade </option>
<option value="Bahrein">Bahrein </option>
<option value="Belgique">Belgique </option>
<option value="Belize">Belize </option>
<option value="Benin">Benin </option>
<option value="Bermudes">Bermudes </option>
<option value="Bielorussie">Bielorussie </option>
<option value="Bolivie">Bolivie </option>
<option value="Botswana">Botswana </option>
<option value="Bhoutan">Bhoutan </option>
<option value="Boznie_Herzegovine">Boznie_Herzegovine </option>
<option value="Bresil">Bresil </option>
<option value="Brunei">Brunei </option>
<option value="Bulgarie">Bulgarie </option>
<option value="Burkina_Faso">Burkina_Faso </option>
<option value="Burundi">Burundi </option>

<option value="Caiman">Caiman </option>
<option value="Cambodge">Cambodge </option>
<option value="Cameroun">Cameroun </option>
<option value="Canada">Canada </option>
<option value="Canaries">Canaries </option>
<option value="Cap_vert">Cap_Vert </option>
<option value="Chili">Chili </option>
<option value="Chine">Chine </option>
<option value="Chypre">Chypre </option>
<option value="Colombie">Colombie </option>
<option value="Comores">Colombie </option>
<option value="Congo">Congo </option>
<option value="Congo_democratique">Congo_democratique </option>
<option value="Cook">Cook </option>
<option value="Coree_du_Nord">Coree_du_Nord </option>
<option value="Coree_du_Sud">Coree_du_Sud </option>
<option value="Costa_Rica">Costa_Rica </option>
<option value="Cote_d_Ivoire">Côte_d_Ivoire </option>
<option value="Croatie">Croatie </option>
<option value="Cuba">Cuba </option>

<option value="Danemark">Danemark </option>
<option value="Djibouti">Djibouti </option>
<option value="Dominique">Dominique </option>

<option value="Egypte">Egypte </option>
<option value="Emirats_Arabes_Unis">Emirats_Arabes_Unis </option>
<option value="Equateur">Equateur </option>
<option value="Erythree">Erythree </option>
<option value="Espagne">Espagne </option>
<option value="Estonie">Estonie </option>
<option value="Etats_Unis">Etats_Unis </option>
<option value="Ethiopie">Ethiopie </option>

<option value="Falkland">Falkland </option>
<option value="Feroe">Feroe </option>
<option value="Fidji">Fidji </option>
<option value="Finlande">Finlande </option>
<option value="France">France </option>

<option value="Gabon">Gabon </option>
<option value="Gambie">Gambie </option>
<option value="Georgie">Georgie </option>
<option value="Ghana">Ghana </option>
<option value="Gibraltar">Gibraltar </option>
<option value="Grece">Grece </option>
<option value="Grenade">Grenade </option>
<option value="Groenland">Groenland </option>
<option value="Guadeloupe">Guadeloupe </option>
<option value="Guam">Guam </option>
<option value="Guatemala">Guatemala</option>
<option value="Guernesey">Guernesey </option>
<option value="Guinee">Guinee </option>
<option value="Guinee_Bissau">Guinee_Bissau </option>
<option value="Guinee equatoriale">Guinee_Equatoriale </option>
<option value="Guyana">Guyana </option>
<option value="Guyane_Francaise ">Guyane_Francaise </option>

<option value="Haiti">Haiti </option>
<option value="Hawaii">Hawaii </option>
<option value="Honduras">Honduras </option>
<option value="Hong_Kong">Hong_Kong </option>
<option value="Hongrie">Hongrie </option>

<option value="Inde">Inde </option>
<option value="Indonesie">Indonesie </option>
<option value="Iran">Iran </option>
<option value="Iraq">Iraq </option>
<option value="Irlande">Irlande </option>
<option value="Islande">Islande </option>
<option value="Israel">Israel </option>
<option value="Italie">italie </option>

<option value="Jamaique">Jamaique </option>
<option value="Jan Mayen">Jan Mayen </option>
<option value="Japon">Japon </option>
<option value="Jersey">Jersey </option>
<option value="Jordanie">Jordanie </option>

<option value="Kazakhstan">Kazakhstan </option>
<option value="Kenya">Kenya </option>
<option value="Kirghizstan">Kirghizistan </option>
<option value="Kiribati">Kiribati </option>
<option value="Koweit">Koweit </option>

<option value="Laos">Laos </option>
<option value="Lesotho">Lesotho </option>
<option value="Lettonie">Lettonie </option>
<option value="Liban">Liban </option>
<option value="Liberia">Liberia </option>
<option value="Liechtenstein">Liechtenstein </option>
<option value="Lituanie">Lituanie </option>
<option value="Luxembourg">Luxembourg </option>
<option value="Lybie">Lybie </option>

<option value="Macao">Macao </option>
<option value="Macedoine">Macedoine </option>
<option value="Madagascar">Madagascar </option>
<option value="Madère">Madère </option>
<option value="Malaisie">Malaisie </option>
<option value="Malawi">Malawi </option>
<option value="Maldives">Maldives </option>
<option value="Mali">Mali </option>
<option value="Malte">Malte </option>
<option value="Man">Man </option>
<option value="Mariannes du Nord">Mariannes du Nord </option>
<option value="Maroc">Maroc </option>
<option value="Marshall">Marshall </option>
<option value="Martinique">Martinique </option>
<option value="Maurice">Maurice </option>
<option value="Mauritanie">Mauritanie </option>
<option value="Mayotte">Mayotte </option>
<option value="Mexique">Mexique </option>
<option value="Micronesie">Micronesie </option>
<option value="Midway">Midway </option>
<option value="Moldavie">Moldavie </option>
<option value="Monaco">Monaco </option>
<option value="Mongolie">Mongolie </option>
<option value="Montserrat">Montserrat </option>
<option value="Mozambique">Mozambique </option>

<option value="Namibie">Namibie </option>
<option value="Nauru">Nauru </option>
<option value="Nepal">Nepal </option>
<option value="Nicaragua">Nicaragua </option>
<option value="Niger">Niger </option>
<option value="Nigeria">Nigeria </option>
<option value="Niue">Niue </option>
<option value="Norfolk">Norfolk </option>
<option value="Norvege">Norvege </option>
<option value="Nouvelle_Caledonie">Nouvelle_Caledonie </option>
<option value="Nouvelle_Zelande">Nouvelle_Zelande </option>

<option value="Oman">Oman </option>
<option value="Ouganda">Ouganda </option>
<option value="Ouzbekistan">Ouzbekistan </option>

<option value="Pakistan">Pakistan </option>
<option value="Palau">Palau </option>
<option value="Palestine">Palestine </option>
<option value="Panama">Panama </option>
<option value="Papouasie_Nouvelle_Guinee">Papouasie_Nouvelle_Guinee </option>
<option value="Paraguay">Paraguay </option>
<option value="Pays_Bas">Pays_Bas </option>
<option value="Perou">Perou </option>
<option value="Philippines">Philippines </option>
<option value="Pologne">Pologne </option>
<option value="Polynesie">Polynesie </option>
<option value="Porto_Rico">Porto_Rico </option>
<option value="Portugal">Portugal </option>

<option value="Qatar">Qatar </option>

<option value="Republique_Dominicaine">Republique_Dominicaine </option>
<option value="Republique_Tcheque">Republique_Tcheque </option>
<option value="Reunion">Reunion </option>
<option value="Roumanie">Roumanie </option>
<option value="Royaume_Uni">Royaume_Uni </option>
<option value="Russie">Russie </option>
<option value="Rwanda">Rwanda </option>

<option value="Sahara Occidental">Sahara Occidental </option>
<option value="Sainte_Lucie">Sainte_Lucie </option>
<option value="Saint_Marin">Saint_Marin </option>
<option value="Salomon">Salomon </option>
<option value="Salvador">Salvador </option>
<option value="Samoa_Occidentales">Samoa_Occidentales</option>
<option value="Samoa_Americaine">Samoa_Americaine </option>
<option value="Sao_Tome_et_Principe">Sao_Tome_et_Principe </option>
<option value="Senegal">Senegal </option>
<option value="Seychelles">Seychelles </option>
<option value="Sierra Leone">Sierra Leone </option>
<option value="Singapour">Singapour </option>
<option value="Slovaquie">Slovaquie </option>
<option value="Slovenie">Slovenie</option>
<option value="Somalie">Somalie </option>
<option value="Soudan">Soudan </option>
<option value="Sri_Lanka">Sri_Lanka </option>
<option value="Suede">Suede </option>
<option value="Suisse">Suisse </option>
<option value="Surinam">Surinam </option>
<option value="Swaziland">Swaziland </option>
<option value="Syrie">Syrie </option>

<option value="Tadjikistan">Tadjikistan </option>
<option value="Taiwan">Taiwan </option>
<option value="Tonga">Tonga </option>
<option value="Tanzanie">Tanzanie </option>
<option value="Tchad">Tchad </option>
<option value="Thailande">Thailande </option>
<option value="Tibet">Tibet </option>
<option value="Timor_Oriental">Timor_Oriental </option>
<option value="Togo">Togo </option>
<option value="Trinite_et_Tobago">Trinite_et_Tobago </option>
<option value="Tristan da cunha">Tristan de cuncha </option>
<option value="Tunisie">Tunisie </option>
<option value="Turkmenistan">Turmenistan </option>
<option value="Turquie">Turquie </option>

<option value="Ukraine">Ukraine </option>
<option value="Uruguay">Uruguay </option>

<option value="Vanuatu">Vanuatu </option>
<option value="Vatican">Vatican </option>
<option value="Venezuela">Venezuela </option>
<option value="Vierges_Americaines">Vierges_Americaines </option>
<option value="Vierges_Britanniques">Vierges_Britanniques </option>
<option value="Vietnam">Vietnam </option>

<option value="Wake">Wake </option>
<option value="Wallis et Futuma">Wallis et Futuma </option>

<option value="Yemen">Yemen </option>
<option value="Yougoslavie">Yougoslavie </option>

<option value="Zambie">Zambie </option>
<option value="Zimbabwe">Zimbabwe </option>

</select>   <br>

        <label for="nationalité" class="tooltip">Département de Naissance<span class="tooltiptext">Inscrivez le nom de votre département de naissance</span><span>*</span></label>
        <input type="text" name="birth-department" value="<?= $birth_department ?>">

        <br>

        <label for="nationalité" class="tooltip">Ville de naissance <span class="tooltiptext">Saisissez votre ville de naissance</span><span>*</span></label>
        <input type="text" name="birth-city" value="<?= $birth_city ?>">

        <br>
        <label for="nationalité" class="tooltip">Nationalité<span class="tooltiptext"> Choisissez votre nationalité principale</span><span>*</span></label>
       
        <select name="citizen" value="<?= $citizen ?>">

<option value=""></option>

<option value="Afghanistan">Afghanistan </option>
<option value="Afrique_Centrale">Afrique_Centrale </option>
<option value="Afrique_du_sud">Afrique_du_Sud </option>
<option value="Albanie">Albanie </option>
<option value="Algerie">Algerie </option>
<option value="Allemagne">Allemagne </option>
<option value="Andorre">Andorre </option>
<option value="Angola">Angola </option>
<option value="Anguilla">Anguilla </option>
<option value="Arabie_Saoudite">Arabie_Saoudite </option>
<option value="Argentine">Argentine </option>
<option value="Armenie">Armenie </option>
<option value="Australie">Australie </option>
<option value="Autriche">Autriche </option>
<option value="Azerbaidjan">Azerbaidjan </option>

<option value="Bahamas">Bahamas </option>
<option value="Bangladesh">Bangladesh </option>
<option value="Barbade">Barbade </option>
<option value="Bahrein">Bahrein </option>
<option value="Belgique">Belgique </option>
<option value="Belize">Belize </option>
<option value="Benin">Benin </option>
<option value="Bermudes">Bermudes </option>
<option value="Bielorussie">Bielorussie </option>
<option value="Bolivie">Bolivie </option>
<option value="Botswana">Botswana </option>
<option value="Bhoutan">Bhoutan </option>
<option value="Boznie_Herzegovine">Boznie_Herzegovine </option>
<option value="Bresil">Bresil </option>
<option value="Brunei">Brunei </option>
<option value="Bulgarie">Bulgarie </option>
<option value="Burkina_Faso">Burkina_Faso </option>
<option value="Burundi">Burundi </option>

<option value="Caiman">Caiman </option>
<option value="Cambodge">Cambodge </option>
<option value="Cameroun">Cameroun </option>
<option value="Canada">Canada </option>
<option value="Canaries">Canaries </option>
<option value="Cap_vert">Cap_Vert </option>
<option value="Chili">Chili </option>
<option value="Chine">Chine </option>
<option value="Chypre">Chypre </option>
<option value="Colombie">Colombie </option>
<option value="Comores">Colombie </option>
<option value="Congo">Congo </option>
<option value="Congo_democratique">Congo_democratique </option>
<option value="Cook">Cook </option>
<option value="Coree_du_Nord">Coree_du_Nord </option>
<option value="Coree_du_Sud">Coree_du_Sud </option>
<option value="Costa_Rica">Costa_Rica </option>
<option value="Cote_d_Ivoire">Côte_d_Ivoire </option>
<option value="Croatie">Croatie </option>
<option value="Cuba">Cuba </option>

<option value="Danemark">Danemark </option>
<option value="Djibouti">Djibouti </option>
<option value="Dominique">Dominique </option>

<option value="Egypte">Egypte </option>
<option value="Emirats_Arabes_Unis">Emirats_Arabes_Unis </option>
<option value="Equateur">Equateur </option>
<option value="Erythree">Erythree </option>
<option value="Espagne">Espagne </option>
<option value="Estonie">Estonie </option>
<option value="Etats_Unis">Etats_Unis </option>
<option value="Ethiopie">Ethiopie </option>

<option value="Falkland">Falkland </option>
<option value="Feroe">Feroe </option>
<option value="Fidji">Fidji </option>
<option value="Finlande">Finlande </option>
<option value="France">France </option>

<option value="Gabon">Gabon </option>
<option value="Gambie">Gambie </option>
<option value="Georgie">Georgie </option>
<option value="Ghana">Ghana </option>
<option value="Gibraltar">Gibraltar </option>
<option value="Grece">Grece </option>
<option value="Grenade">Grenade </option>
<option value="Groenland">Groenland </option>
<option value="Guadeloupe">Guadeloupe </option>
<option value="Guam">Guam </option>
<option value="Guatemala">Guatemala</option>
<option value="Guernesey">Guernesey </option>
<option value="Guinee">Guinee </option>
<option value="Guinee_Bissau">Guinee_Bissau </option>
<option value="Guinee equatoriale">Guinee_Equatoriale </option>
<option value="Guyana">Guyana </option>
<option value="Guyane_Francaise ">Guyane_Francaise </option>

<option value="Haiti">Haiti </option>
<option value="Hawaii">Hawaii </option>
<option value="Honduras">Honduras </option>
<option value="Hong_Kong">Hong_Kong </option>
<option value="Hongrie">Hongrie </option>

<option value="Inde">Inde </option>
<option value="Indonesie">Indonesie </option>
<option value="Iran">Iran </option>
<option value="Iraq">Iraq </option>
<option value="Irlande">Irlande </option>
<option value="Islande">Islande </option>
<option value="Israel">Israel </option>
<option value="Italie">italie </option>

<option value="Jamaique">Jamaique </option>
<option value="Jan Mayen">Jan Mayen </option>
<option value="Japon">Japon </option>
<option value="Jersey">Jersey </option>
<option value="Jordanie">Jordanie </option>

<option value="Kazakhstan">Kazakhstan </option>
<option value="Kenya">Kenya </option>
<option value="Kirghizstan">Kirghizistan </option>
<option value="Kiribati">Kiribati </option>
<option value="Koweit">Koweit </option>

<option value="Laos">Laos </option>
<option value="Lesotho">Lesotho </option>
<option value="Lettonie">Lettonie </option>
<option value="Liban">Liban </option>
<option value="Liberia">Liberia </option>
<option value="Liechtenstein">Liechtenstein </option>
<option value="Lituanie">Lituanie </option>
<option value="Luxembourg">Luxembourg </option>
<option value="Lybie">Lybie </option>

<option value="Macao">Macao </option>
<option value="Macedoine">Macedoine </option>
<option value="Madagascar">Madagascar </option>
<option value="Madère">Madère </option>
<option value="Malaisie">Malaisie </option>
<option value="Malawi">Malawi </option>
<option value="Maldives">Maldives </option>
<option value="Mali">Mali </option>
<option value="Malte">Malte </option>
<option value="Man">Man </option>
<option value="Mariannes du Nord">Mariannes du Nord </option>
<option value="Maroc">Maroc </option>
<option value="Marshall">Marshall </option>
<option value="Martinique">Martinique </option>
<option value="Maurice">Maurice </option>
<option value="Mauritanie">Mauritanie </option>
<option value="Mayotte">Mayotte </option>
<option value="Mexique">Mexique </option>
<option value="Micronesie">Micronesie </option>
<option value="Midway">Midway </option>
<option value="Moldavie">Moldavie </option>
<option value="Monaco">Monaco </option>
<option value="Mongolie">Mongolie </option>
<option value="Montserrat">Montserrat </option>
<option value="Mozambique">Mozambique </option>

<option value="Namibie">Namibie </option>
<option value="Nauru">Nauru </option>
<option value="Nepal">Nepal </option>
<option value="Nicaragua">Nicaragua </option>
<option value="Niger">Niger </option>
<option value="Nigeria">Nigeria </option>
<option value="Niue">Niue </option>
<option value="Norfolk">Norfolk </option>
<option value="Norvege">Norvege </option>
<option value="Nouvelle_Caledonie">Nouvelle_Caledonie </option>
<option value="Nouvelle_Zelande">Nouvelle_Zelande </option>

<option value="Oman">Oman </option>
<option value="Ouganda">Ouganda </option>
<option value="Ouzbekistan">Ouzbekistan </option>

<option value="Pakistan">Pakistan </option>
<option value="Palau">Palau </option>
<option value="Palestine">Palestine </option>
<option value="Panama">Panama </option>
<option value="Papouasie_Nouvelle_Guinee">Papouasie_Nouvelle_Guinee </option>
<option value="Paraguay">Paraguay </option>
<option value="Pays_Bas">Pays_Bas </option>
<option value="Perou">Perou </option>
<option value="Philippines">Philippines </option>
<option value="Pologne">Pologne </option>
<option value="Polynesie">Polynesie </option>
<option value="Porto_Rico">Porto_Rico </option>
<option value="Portugal">Portugal </option>

<option value="Qatar">Qatar </option>

<option value="Republique_Dominicaine">Republique_Dominicaine </option>
<option value="Republique_Tcheque">Republique_Tcheque </option>
<option value="Reunion">Reunion </option>
<option value="Roumanie">Roumanie </option>
<option value="Royaume_Uni">Royaume_Uni </option>
<option value="Russie">Russie </option>
<option value="Rwanda">Rwanda </option>

<option value="Sahara Occidental">Sahara Occidental </option>
<option value="Sainte_Lucie">Sainte_Lucie </option>
<option value="Saint_Marin">Saint_Marin </option>
<option value="Salomon">Salomon </option>
<option value="Salvador">Salvador </option>
<option value="Samoa_Occidentales">Samoa_Occidentales</option>
<option value="Samoa_Americaine">Samoa_Americaine </option>
<option value="Sao_Tome_et_Principe">Sao_Tome_et_Principe </option>
<option value="Senegal">Senegal </option>
<option value="Seychelles">Seychelles </option>
<option value="Sierra Leone">Sierra Leone </option>
<option value="Singapour">Singapour </option>
<option value="Slovaquie">Slovaquie </option>
<option value="Slovenie">Slovenie</option>
<option value="Somalie">Somalie </option>
<option value="Soudan">Soudan </option>
<option value="Sri_Lanka">Sri_Lanka </option>
<option value="Suede">Suede </option>
<option value="Suisse">Suisse </option>
<option value="Surinam">Surinam </option>
<option value="Swaziland">Swaziland </option>
<option value="Syrie">Syrie </option>

<option value="Tadjikistan">Tadjikistan </option>
<option value="Taiwan">Taiwan </option>
<option value="Tonga">Tonga </option>
<option value="Tanzanie">Tanzanie </option>
<option value="Tchad">Tchad </option>
<option value="Thailande">Thailande </option>
<option value="Tibet">Tibet </option>
<option value="Timor_Oriental">Timor_Oriental </option>
<option value="Togo">Togo </option>
<option value="Trinite_et_Tobago">Trinite_et_Tobago </option>
<option value="Tristan da cunha">Tristan de cuncha </option>
<option value="Tunisie">Tunisie </option>
<option value="Turkmenistan">Turmenistan </option>
<option value="Turquie">Turquie </option>

<option value="Ukraine">Ukraine </option>
<option value="Uruguay">Uruguay </option>

<option value="Vanuatu">Vanuatu </option>
<option value="Vatican">Vatican </option>
<option value="Venezuela">Venezuela </option>
<option value="Vierges_Americaines">Vierges_Americaines </option>
<option value="Vierges_Britanniques">Vierges_Britanniques </option>
<option value="Vietnam">Vietnam </option>

<option value="Wake">Wake </option>
<option value="Wallis et Futuma">Wallis et Futuma </option>

<option value="Yemen">Yemen </option>
<option value="Yougoslavie">Yougoslavie </option>

<option value="Zambie">Zambie </option>
<option value="Zimbabwe">Zimbabwe </option>

</select>   <br>
        <label for="acte" class="tooltip">Acte de Naissance<span class="tooltiptext">Cliquez sur «parcourir» pour ajouter l'image scannée de votre acte de naissance. La taille de votre image doit être inférieure à 500ko.</span><span>*</span></label>
        <input type="file" id="userfile" name="userfile"/><br>

        <label for="acte" class="tooltip">Photo<span class="tooltiptext">Cliquez sur « parcourir » pour ajouter votre photo au format d'une photo d’identité : 3,5x4,5cm. La taille de votre image doit être inférieure à 500 ko.</span><span>*</span></label>
        <input type="file" id="userfile" name="userfile_photo"/>
      </div>
      
      <!-- Rubrique CONTACT   !-->

      <h3 class="six" href=".form6">Informations de contact <i class="fa fa-chevron-down" aria-hidden="true"></i></h3>
      
      <div class="form6 apper">



      <!-- <p class="green">Informations de contact</p> -->
        
        <label for="" class="tooltip">Adresse mail personnelle<span class="tooltiptext">Saisissez votre adresse mail </span><span>*</span></label>
        <input type="email" name="email" value="<?= $email ?>"><br>
        <label for="" class="tooltip">Confirmation de l'adresse <mailspan class="tooltiptext">Saisissez à nouveau votre adresse mail </mailspan><span>*</span></label>
        <input type="phone" name="confirm-email" value="<?= $confirm_email ?>"><br>
        <label for="email" class="tooltip">Mot de passe <span class="tooltiptext">Saisissez un mot de passe qui vous permettra de vous connecter à la plateforme </span><span>*</span></label>
        <input type="password" name="password"><br>
        <label for="" class="tooltip">Confirmez votre mot de passe <span class="tooltiptext">Saisissez à nouveau votre mot de passe</span><span>*</span></label>
        <input type="password" name="confirm_password"><br>
        <input type="phone" name="indicatif" class="indicatif" placeholder="indicatif" value="<?= $indicatif ?>">
        <label for="email" class="pin tooltip">Téléphone portable<span class="tooltiptext">Saisissez votre numéro téléphone portable avec l'indicatif associé (00299 pour le Bénin) </span></label>
        <input type="phone" name="phone" class="phone" value="<?= $phone ?>"><br>
        <label for="email" class="tooltip">Téléphone fixe <span class="tooltiptext"> Saisissez le numéro de votre téléphone fixe.</span></label>
        <input type="phone" name="fix" value="<?= $fix ?>"><br>
        <label for="residence-country" class="tooltip">Pays de résidence<span class="tooltiptext">Choisissez votre pays de résidence</span></label>  

          <select name="residence-country" value="<?= $residence_country ?>">

<option value=""></option>

<option value="Afghanistan">Afghanistan </option>
<option value="Afrique_Centrale">Afrique_Centrale </option>
<option value="Afrique_du_sud">Afrique_du_Sud </option>
<option value="Albanie">Albanie </option>
<option value="Algerie">Algerie </option>
<option value="Allemagne">Allemagne </option>
<option value="Andorre">Andorre </option>
<option value="Angola">Angola </option>
<option value="Anguilla">Anguilla </option>
<option value="Arabie_Saoudite">Arabie_Saoudite </option>
<option value="Argentine">Argentine </option>
<option value="Armenie">Armenie </option>
<option value="Australie">Australie </option>
<option value="Autriche">Autriche </option>
<option value="Azerbaidjan">Azerbaidjan </option>

<option value="Bahamas">Bahamas </option>
<option value="Bangladesh">Bangladesh </option>
<option value="Barbade">Barbade </option>
<option value="Bahrein">Bahrein </option>
<option value="Belgique">Belgique </option>
<option value="Belize">Belize </option>
<option value="Benin">Benin </option>
<option value="Bermudes">Bermudes </option>
<option value="Bielorussie">Bielorussie </option>
<option value="Bolivie">Bolivie </option>
<option value="Botswana">Botswana </option>
<option value="Bhoutan">Bhoutan </option>
<option value="Boznie_Herzegovine">Boznie_Herzegovine </option>
<option value="Bresil">Bresil </option>
<option value="Brunei">Brunei </option>
<option value="Bulgarie">Bulgarie </option>
<option value="Burkina_Faso">Burkina_Faso </option>
<option value="Burundi">Burundi </option>

<option value="Caiman">Caiman </option>
<option value="Cambodge">Cambodge </option>
<option value="Cameroun">Cameroun </option>
<option value="Canada">Canada </option>
<option value="Canaries">Canaries </option>
<option value="Cap_vert">Cap_Vert </option>
<option value="Chili">Chili </option>
<option value="Chine">Chine </option>
<option value="Chypre">Chypre </option>
<option value="Colombie">Colombie </option>
<option value="Comores">Colombie </option>
<option value="Congo">Congo </option>
<option value="Congo_democratique">Congo_democratique </option>
<option value="Cook">Cook </option>
<option value="Coree_du_Nord">Coree_du_Nord </option>
<option value="Coree_du_Sud">Coree_du_Sud </option>
<option value="Costa_Rica">Costa_Rica </option>
<option value="Cote_d_Ivoire">Côte_d_Ivoire </option>
<option value="Croatie">Croatie </option>
<option value="Cuba">Cuba </option>

<option value="Danemark">Danemark </option>
<option value="Djibouti">Djibouti </option>
<option value="Dominique">Dominique </option>

<option value="Egypte">Egypte </option>
<option value="Emirats_Arabes_Unis">Emirats_Arabes_Unis </option>
<option value="Equateur">Equateur </option>
<option value="Erythree">Erythree </option>
<option value="Espagne">Espagne </option>
<option value="Estonie">Estonie </option>
<option value="Etats_Unis">Etats_Unis </option>
<option value="Ethiopie">Ethiopie </option>

<option value="Falkland">Falkland </option>
<option value="Feroe">Feroe </option>
<option value="Fidji">Fidji </option>
<option value="Finlande">Finlande </option>
<option value="France">France </option>

<option value="Gabon">Gabon </option>
<option value="Gambie">Gambie </option>
<option value="Georgie">Georgie </option>
<option value="Ghana">Ghana </option>
<option value="Gibraltar">Gibraltar </option>
<option value="Grece">Grece </option>
<option value="Grenade">Grenade </option>
<option value="Groenland">Groenland </option>
<option value="Guadeloupe">Guadeloupe </option>
<option value="Guam">Guam </option>
<option value="Guatemala">Guatemala</option>
<option value="Guernesey">Guernesey </option>
<option value="Guinee">Guinee </option>
<option value="Guinee_Bissau">Guinee_Bissau </option>
<option value="Guinee equatoriale">Guinee_Equatoriale </option>
<option value="Guyana">Guyana </option>
<option value="Guyane_Francaise ">Guyane_Francaise </option>

<option value="Haiti">Haiti </option>
<option value="Hawaii">Hawaii </option>
<option value="Honduras">Honduras </option>
<option value="Hong_Kong">Hong_Kong </option>
<option value="Hongrie">Hongrie </option>

<option value="Inde">Inde </option>
<option value="Indonesie">Indonesie </option>
<option value="Iran">Iran </option>
<option value="Iraq">Iraq </option>
<option value="Irlande">Irlande </option>
<option value="Islande">Islande </option>
<option value="Israel">Israel </option>
<option value="Italie">italie </option>

<option value="Jamaique">Jamaique </option>
<option value="Jan Mayen">Jan Mayen </option>
<option value="Japon">Japon </option>
<option value="Jersey">Jersey </option>
<option value="Jordanie">Jordanie </option>

<option value="Kazakhstan">Kazakhstan </option>
<option value="Kenya">Kenya </option>
<option value="Kirghizstan">Kirghizistan </option>
<option value="Kiribati">Kiribati </option>
<option value="Koweit">Koweit </option>

<option value="Laos">Laos </option>
<option value="Lesotho">Lesotho </option>
<option value="Lettonie">Lettonie </option>
<option value="Liban">Liban </option>
<option value="Liberia">Liberia </option>
<option value="Liechtenstein">Liechtenstein </option>
<option value="Lituanie">Lituanie </option>
<option value="Luxembourg">Luxembourg </option>
<option value="Lybie">Lybie </option>

<option value="Macao">Macao </option>
<option value="Macedoine">Macedoine </option>
<option value="Madagascar">Madagascar </option>
<option value="Madère">Madère </option>
<option value="Malaisie">Malaisie </option>
<option value="Malawi">Malawi </option>
<option value="Maldives">Maldives </option>
<option value="Mali">Mali </option>
<option value="Malte">Malte </option>
<option value="Man">Man </option>
<option value="Mariannes du Nord">Mariannes du Nord </option>
<option value="Maroc">Maroc </option>
<option value="Marshall">Marshall </option>
<option value="Martinique">Martinique </option>
<option value="Maurice">Maurice </option>
<option value="Mauritanie">Mauritanie </option>
<option value="Mayotte">Mayotte </option>
<option value="Mexique">Mexique </option>
<option value="Micronesie">Micronesie </option>
<option value="Midway">Midway </option>
<option value="Moldavie">Moldavie </option>
<option value="Monaco">Monaco </option>
<option value="Mongolie">Mongolie </option>
<option value="Montserrat">Montserrat </option>
<option value="Mozambique">Mozambique </option>

<option value="Namibie">Namibie </option>
<option value="Nauru">Nauru </option>
<option value="Nepal">Nepal </option>
<option value="Nicaragua">Nicaragua </option>
<option value="Niger">Niger </option>
<option value="Nigeria">Nigeria </option>
<option value="Niue">Niue </option>
<option value="Norfolk">Norfolk </option>
<option value="Norvege">Norvege </option>
<option value="Nouvelle_Caledonie">Nouvelle_Caledonie </option>
<option value="Nouvelle_Zelande">Nouvelle_Zelande </option>

<option value="Oman">Oman </option>
<option value="Ouganda">Ouganda </option>
<option value="Ouzbekistan">Ouzbekistan </option>

<option value="Pakistan">Pakistan </option>
<option value="Palau">Palau </option>
<option value="Palestine">Palestine </option>
<option value="Panama">Panama </option>
<option value="Papouasie_Nouvelle_Guinee">Papouasie_Nouvelle_Guinee </option>
<option value="Paraguay">Paraguay </option>
<option value="Pays_Bas">Pays_Bas </option>
<option value="Perou">Perou </option>
<option value="Philippines">Philippines </option>
<option value="Pologne">Pologne </option>
<option value="Polynesie">Polynesie </option>
<option value="Porto_Rico">Porto_Rico </option>
<option value="Portugal">Portugal </option>

<option value="Qatar">Qatar </option>

<option value="Republique_Dominicaine">Republique_Dominicaine </option>
<option value="Republique_Tcheque">Republique_Tcheque </option>
<option value="Reunion">Reunion </option>
<option value="Roumanie">Roumanie </option>
<option value="Royaume_Uni">Royaume_Uni </option>
<option value="Russie">Russie </option>
<option value="Rwanda">Rwanda </option>

<option value="Sahara Occidental">Sahara Occidental </option>
<option value="Sainte_Lucie">Sainte_Lucie </option>
<option value="Saint_Marin">Saint_Marin </option>
<option value="Salomon">Salomon </option>
<option value="Salvador">Salvador </option>
<option value="Samoa_Occidentales">Samoa_Occidentales</option>
<option value="Samoa_Americaine">Samoa_Americaine </option>
<option value="Sao_Tome_et_Principe">Sao_Tome_et_Principe </option>
<option value="Senegal">Senegal </option>
<option value="Seychelles">Seychelles </option>
<option value="Sierra Leone">Sierra Leone </option>
<option value="Singapour">Singapour </option>
<option value="Slovaquie">Slovaquie </option>
<option value="Slovenie">Slovenie</option>
<option value="Somalie">Somalie </option>
<option value="Soudan">Soudan </option>
<option value="Sri_Lanka">Sri_Lanka </option>
<option value="Suede">Suede </option>
<option value="Suisse">Suisse </option>
<option value="Surinam">Surinam </option>
<option value="Swaziland">Swaziland </option>
<option value="Syrie">Syrie </option>

<option value="Tadjikistan">Tadjikistan </option>
<option value="Taiwan">Taiwan </option>
<option value="Tonga">Tonga </option>
<option value="Tanzanie">Tanzanie </option>
<option value="Tchad">Tchad </option>
<option value="Thailande">Thailande </option>
<option value="Tibet">Tibet </option>
<option value="Timor_Oriental">Timor_Oriental </option>
<option value="Togo">Togo </option>
<option value="Trinite_et_Tobago">Trinite_et_Tobago </option>
<option value="Tristan da cunha">Tristan de cuncha </option>
<option value="Tunisie">Tunisie </option>
<option value="Turkmenistan">Turmenistan </option>
<option value="Turquie">Turquie </option>

<option value="Ukraine">Ukraine </option>
<option value="Uruguay">Uruguay </option>

<option value="Vanuatu">Vanuatu </option>
<option value="Vatican">Vatican </option>
<option value="Venezuela">Venezuela </option>
<option value="Vierges_Americaines">Vierges_Americaines </option>
<option value="Vierges_Britanniques">Vierges_Britanniques </option>
<option value="Vietnam">Vietnam </option>

<option value="Wake">Wake </option>
<option value="Wallis et Futuma">Wallis et Futuma </option>

<option value="Yemen">Yemen </option>
<option value="Yougoslavie">Yougoslavie </option>

<option value="Zambie">Zambie </option>
<option value="Zimbabwe">Zimbabwe </option>

</select>   <br>
        <label for="city" class="tooltip">Ville de résidence<span class="tooltiptext">Saisissez votre ville de résidence</span></label>
        <input type="text" name="city" value="<?= $city ?>"><br>
        <label for="neighbour" class="tooltip">Quartier de résidence<span class="tooltiptext">Saisissez votre quartier de résidence</span></label>
        <input type="text" name="neighbour" value="<?= $neighbour ?>"><br>

        <label for="house" class="tooltip">Maison<span class="tooltiptext">Saisissez le nom de votre résidence</span></label>
        <input type="text" name="house" value="<?= $house ?>"><br>
       
      </div> 
    
</body>
</html>



<?php include 'bac.php'; ?> 