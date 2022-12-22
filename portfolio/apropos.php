<div class="paragraphe">
<a name="apropos"></a>
<div class="imageflo">
<h2>A propos</h2>
<?php
$data=yaml_parse_file("apropos.yaml");
    echo '<h1>'.$data["description"].'</h1>';
    echo '<img src="'.$data['image'].'">';
?>
