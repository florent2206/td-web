<!DOCTYPE HTML>
	<html lang="fr">
		<head>
			<title>Florent</title>
			<meta charset="utf8">
			<link rel="stylesheet" href="style.css">
			<link rel="icon" href="fl.png">
		</head>
		<body>
			<nav>
				<a href="">Accueil</a>
				<a href="#A Propos">A propos</a>
				<a href="#competences">Compétences</a>
				<a href="#experience">Expérience</a>
				<a href="#formation">Formation</a>
				<a href="#contact">Contact</a>

				<?php
                date_default_timezone_set('Europe/Paris');
                $date = date('d-m-y h:i:s');
                echo $date;
            	?>
			</nav>

			<?php
			// ################## Page accueil ##################################
			  include("accueil.php");
			?>
			
			<a name="A Propos"></a>

			<?php
				// ################## Page A propos ##################################
			  include("apropos.php");
			?>

			
			<a name="competences"></a>
			
			<?php
				// ################## Page Compétences ##################################
				include("competences.php");
			?>

			<br><a name="experiences"></a>

			<?php
				// ################## Page expériences ##################################
				include("experiences.php");
			?>

			<a name="formation"></a>

			<?php
				// ################## Page formation ##################################
				include("formation.php");
			?>
			
		</body>
		<footer>
			<a name="contact"></a>

			<?php
				// ################## Page contact ##################################
				include("contact.php");
			?>
		</footer>
	</html>