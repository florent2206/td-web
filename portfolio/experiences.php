<div class="com">
<a name="experience"></a>
<h2>Expériences</h2>
<?php
$data=yaml_parse_file("experiences.yaml");
foreach($data AS $tab) {
    echo '<h4>'.$tab["poste"].'</h4>';
    echo '<p>'.$tab["lieu"].'</p>'.'<br>';
    echo '<p>'.$tab["descriptif"].'</p>'.' <br/> '; 
}
?>