<?php

	// incoporation des données générales sous forme de variable
	//  en attendant de reussir à les mettre sous forme de constante
		require_once ('parametre_general/parametre_general.php');

	// incorporation du fichier commun de regroupement des fonctions php
		require_once ('functions/functions.php');


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

		

	

	






// fin du code PHP
?>
<!-- 
	Debut de la pagd HTML
 -->
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta charset="utf-8" />
		<title>Site de massage</title>

		<!-- insertion des feuilles CSS -->
			<?php include ('include/css.php'); ?>
			 

	</head>
	<body>
		<header>
			<!-- incorporation du premier bandeau -->
				<section>
					<img src="<?php echo(SOCIETE_CHEMIN_NOM_LOGO_ORGANISME); ?>" alt="" />
					<span>Certification n° <?php echo(SOCIETE_CERTIFICATION); ?></span>
				</section>

			<!-- incorporation du titre -->
				<section>
					<h1>Titre du site</h1>
					<p>Phrase d'accroche</p>
					<img src="<?php echo(SOCIETE_CHEMIN_NOM_LOGO_SITE); ?>" alt="" />
					<p>
						<span><?php echo(SOCIETE_NUMERO_TELEPHONE); ?></span>
						<span><?php echo(SOCIETE_ADRESSE_MAIL); ?></span>
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