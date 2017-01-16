<?php

	// incoporation des données générales sous forme de variable
	//  en attendant de reussir à les mettre sous forme de constante
		require_once ('parametre_general/parametre_general.php');

	// incorporation du fichier commun de regroupement des fonctions php
		require_once ('function/functions.php');


	// vérification de l'ouverture de la session
		$session = session_utilisateur_existe();
		var_dump($session);
	// et récuperation des données de l'utilisateur


	// vérification recupération des variables GET de la barre d'adresse
	

	






// fin du code PHP
?>
<!-- 
	Debut de la pagd HTML
 -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Site de massage</title>

		<!-- insertion des feuilles CSS -->
			<?php include ('include/css.html'); ?>
			 

	</head>
	<body>
		<header>
			<!-- incorporaion de la navigation -->
				<?php include ('include/navigation.php'); ?>
		</header>

		<main>
			
		</main>

		<footer>
			<!-- incorporation du footer -->
				<?php include ('include/footer.php'); ?>
		</footer>



	<!-- insertion des feuilles javaScript -->
		<?php include ('include/javascript.html'); ?>

	</body>
</html>