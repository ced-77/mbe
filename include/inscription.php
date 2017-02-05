<?php
	/*
		Script de saisi de l'inscription d'un membre ou d'un nouveau administrateur
		et apres saisie du formulaire, celui-ci controle la saisie avant enregistrement 
		en base de donnée
	 */
	
	// initialisation du tableau des erreurs
		$erreurs = array();

	// Vérfication de l'existance d'un POST et si ok verfification de celui ci
		if ( empty($_POST) ) {
			// Début de la vérification de la saisie
				// verification de l'existance de la saisie du nom
					if ( !empty( trim($_POST['nom']) ) ) {

					} else { $erreurs['nom'] = 'Vous devez renter un nom'}		
		} 


// Fin du script PHP
 ?>

 <!-- 
		Debut du code HTML, de la page
  -->

  <h2>Formulaire d'inscription</h2>
  <form action="#" method="post">

  	<!-- Saisie du pseudo -->
  		<p>
  			<label for="pseudo" >Pseudo :</label>
  			<input type="text" name="pseudo" id="pseudo" /> 
  		</p>

  	<!-- Saisie du mot de passe -->
  		<p>
  			<label for="mot_de_passe" >Mot de passe :</label>
  			<input type="password" name="mot_de_passe" id="mot_de_passe" class="password" />
  		</p>

  	<!-- Saisie de la confirmation du mot de passe -->
  		<p>
  			<label for="confirme_mot_de_passe">Confirmation mot de passe :</label>
  			<input type="password" name="confirme_mot_de_passe" id="confirme_mot_de_passe" class="password" />
  		</p>

  	<!-- Saisie de l'adresse mail -->
  		<p>
  			<label for="mail">E-mail :</label>
  			<input type="email" name="mail" id="mail" /> 

  		</p>
  	<!-- saisie du nom de famille -->
  		<p>
  			<label for="nom">Nom :</label>
  			<input type="text" name="nom" id="nom" value="" />
  		</p>
  	<!-- Saisie du prenom -->
  		<p>
  			<label for="prenom" >Prénom :</label>
  			<input type="text" name="prenom" id="prenom" id="prenom" />
  		</p>

  	<!-- Saisie du téléphone -->

  	<!-- Definition de l'acreditation en input hiden -->
  		<input type="hidden" name="acreditation" value="0" />

  	<!-- validation du forumlaire -->
  		<p>
  			<input type="submit" name="validation" />
  			<input type="reset" name="correction" />
  		</p>


  	

  	



  </form>