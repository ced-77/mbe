<?php 
/*
	Corp de page de la connéction ou de l'inscription

 */

	/*
		vétification de l'existance d'une connexion à une session*
		si celle-ci existe on renvoi vers l'index ou vers la gestion du compte
		on verra par la suite mais pour le moment vers l'index

		Si aucune session on affiche le choix connexion ou inscription qui pour l'un renvera
		vers le gestion du compte et l'autre vers un formulaire d'inscription
	 */
	
		// initialisation des variables générales du copr de page
			$erreurs = array();
	
		//vérification de l'existance d'une session par la variable initialisé dans l'index
			if ( ! empty( $utilisateur ) ) {
				header('index.php?page=accueil');
				exit;
			}

		// vérification d'un post
			if ( ! empty ($_POST) ) {
				$connexion = $_POST;
				echo ('valeur de la variable connexion : ');
				var_dump($connexion);
				// vérification de l'existance du pseudo
					if ( verifi_pseudo($connexion['pseudo'] ) ) {
						//vérificaiton du mot de passe
						
					} else { $erreurs['pseudo'] = 'Pseudo innexistant'; }
			}





 ?>

 <!-- 
		debut du script html de la page de connexion ou d'inscription
  -->

  <section>
  	<h2>Connexion</h2>
  	<form action="" method="post" >
  		<p>
	  		<label for="pseudo" >Pseudo : </label>
	  		<input type="text" name="pseudo" id="pseudo" />
		</p>
		<p>
	  		<label for="password" >Mot de passe : </label>
	  		<input type="password" name="password" id="password" />
		</p>
  		<input type="submit" name="envoyer" value="Envoyer" />
  		
  	</form>
  </section>

  <section>
  	<h2>Inscription</h2>
  	<a href="index.php?page=inscription" >Pour créer un compte cliquer ici...</a>
  </section>