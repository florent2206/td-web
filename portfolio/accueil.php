<?php
    // ################## Page Accueil ##################################
    $data=yaml_parse_file("accueil.yaml");
    echo '<p id="Nom">'.$data['nom'].' '.$data['prenom'].'</p>';
    echo '<p id="Ent">'.$data['accroche'].'</p>'; 
    //date_default_timezone_set('Europe/Paris');
    //$date = date('d-m-y h:i:s');
    //echo $date;
?>