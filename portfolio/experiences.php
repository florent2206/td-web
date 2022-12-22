<div class="com">
<h2 class="titre">Expériences</h2>
<?php
$data=yaml_parse_file("experiences.yaml");
foreach($data AS $tab) {
    echo '<h4>'.$tab["poste"].'</h4>';
    echo '<p>'.$tab["lieu"].'</p>'.'<br>';
    echo '<p>'.$tab["descriptif"].'</p>'.' <br/> '; 
}
?>