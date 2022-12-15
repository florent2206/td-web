<div class="formation">
<a name="formation"></a>
<h2>Formation</h2>
<?php
    $data=yaml_parse_file("formation.yaml");
    
foreach($data AS $tab) {
    echo '<p>'.$tab["poste"].'</p>';
    echo '<p>'.$tab["division"].'</p>'; 
    echo '<div>';
    echo '<img src="'.$tab['slam'].'">';
    echo '<p>'.$tab["infoslam"].'</p>';
    echo '</div>';
    echo '<div>';
    echo '<img src="'.$tab['sisr'].'">';
    echo '<p>'.$tab["infosisr"].'</p>';  
    echo '</div>';
}
    
?>
</div>