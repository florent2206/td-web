<?php 
	$message=$_GET['msg']??"bonjour!";
	$max=$_GET['nb']??5;
	$color=$_GET['color']??'black';
	$bgcolor=$_GET['bgcolor']??'white';
    ?>

<form method="get" action="variables.php">
    <input type="text" name="msg">
    <input type="number" value="1" max="6" min="1" name="nb">
    <input type="color" name="color">
    <input type="color" name="bgcolor">
    <button type="submit">Valider</button>
</form>

<?php
foreach (range(1,$max) as $i){
		echo "<h$1 style='color: $color;bakcground-color: $bgcolor'>
		$message</h$1>";
	}


    ?>