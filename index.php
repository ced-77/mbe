<?php

	// incoporation des données générales sous forme de variable
	//  en attendant de reussir à les mettre sous forme de constante
		require_once ('parametre_general/parametre_general.php');

	// incorporation du fichier commun de regroupement des fonctions php
		require_once ('function/functions.php');


	// vérification de l'ouverture de la session
		$session = session_utilisateur_existe();
		
	// et récuperation des données de l'utilisateur
		if ( ! empty($session) && $session != FALSE ) {
			// on recupere les données de la session
				$utilisateur = $_SESSION['utilisateur'];
				
		}

		// essais pour controle du fonctionnement de la navigation
			// $session = true;


	// vérification recupération des variables GET de la barre d'adresse
		$corp_page =''; // reinitialisation de la variable
		$corp_page = ( empty( $_GET['page'] ) )? 'accueil' : $_GET['page'];

		// verification de la variable pour voir le bug
			var_dump($corp_page);

	

	






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
			<?php include ('include/css.php'); ?>
			 

	</head>
	<body>
		<header>
			<!-- incorporation du premier bandeau -->
				<section>
					<img src="<?php echo($societe_chemin_nom_logo_organisme); ?>" alt="" />
					<span>Certification n° <?php echo($societe_certification); ?></span>
				</section>

			<!-- incorporation du titre -->
				<section>
					<h1>Titre du site</h1>
					<p>Phrase d'accroche</p>
					<img src="<?php echo($societe_chemin_nom_logo_site); ?>" alt="" />
					<p>
						<span><?php echo($societe_numero_telephone); ?></span>
						<span><?php echo($societe_adresse_mail); ?></span>
					</p>
					
				</section>


			<!-- incorporaion de la navigation -->
				<?php include ('include/navigation.php'); ?>
		</header>

		<main>
			<!-- incorporation du corp de page -->
				<?php include ('include/'.$corp_page.'.php'); ?>
			
		</main>

		<footer>
			<!-- incorporation du footer -->
				<?php include ('include/footer.php'); ?>
		</footer>



	<!-- insertion des feuilles javaScript -->
		<?php include ('include/javascript.html'); ?>

	</body>
</html>