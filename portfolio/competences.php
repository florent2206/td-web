<div class="paragraphe">
<a name="competences"></a>
<h2>Compétences</h2>
<?php
    // ################## Page competences ##################################
    $data=yaml_parse_file("competences.yaml");
    foreach($data AS $domaine=>$tbCompetences){
        echo '<h4>'.$domaine.'</h4>';
        foreach($tbCompetences AS $competence){
            echo '<p>'.$competence["nom"].' : '.$competence["niveau"].'</p>'.'<br>';
     }
    }
?>