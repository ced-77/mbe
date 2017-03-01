<?php
	/*
		Script de saisi de l'inscription d'un membre ou d'un nouveau administrateur
		et apres saisie du formulaire, celui-ci controle la saisie avant enregistrement 
		en base de donnée
	 */
	
	// initialisation du tableau des erreurs
		$erreurs = array();

  


	// Vérfication de l'existance d'un POST et si ok verfification de celui ci
		if ( ! empty($_POST) ) {

      var_dump($_POST);
      
          



      // recuperation des variables du tableau $_POST
          $pseudo = $_POST['pseudo'];
          $email = $_POST['email'];
          $password = $_POST['mot_de_passe'];



			// Début de la vérification de la saisie
      

        // vérification des champs obligatoires
           // initialisation du tableau de controle des champs obligatoire
            $champs_obligatoire = array(
                'pseudo' => 'pseudo',
                'email' => 'email',
                'mot_de_passe' => 'mot_de_passe',
                 );

           // verification de l'existance des champs du formulaire et du remplissage des champs du formulaire
                  foreach ($champs_obligatoire as $champBienEcrit => $champ) {

                    if ( ! estPoste($champ)) { // si resultat faux (FALSE)
                      
                      // ajout d'un message d'erreur
                        $erreurs[$champ] = '-  Ce champ est obligatoire -';

                      // verification
                        var_dump($champ);
                        var_dump($erreurs[$champ]);


                    // fin du if estPoste()
                    }
                  // fin du foreach pour l'existance et le remplissage des champs
                  }





				// verification des conditions des champs avant enregistrement
					
            // verification de l'existance du pseudo
               if ( verif_pseudo_existe( $pseudo ) ) {
                  // vérification de l'existance de l'email
                    if ( verif_mail_existe( $email ) ) {


                    } else { $erreurs['email'] = 'Cette E-mail existe déjà, veuillez en saisir un nouveau.' ;}
               } else { $erreurs['pseudo'] = 'Ce pseudonime existe déjà, veuillez en trouver un autre.'; }
							
		} 





  // gestion des erreurs


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
  			<input type="text" name="pseudo" id="pseudo" placeholder="Texte" /> 
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
  			<label for="email">E-mail :</label>
  			<input type="email" name="email" id="email"  placeholder="Email@mail.mail" value="" /> 

  		</p>
  	<!-- saisie du nom de famille -->
  		<p>
  			<label for="nom">Nom :</label>
  			<input type="text" name="nom" id="nom" placeholder="Min = , Max = " value="" />
  		</p>
  	<!-- Saisie du prenom -->
  		<p>
  			<label for="prenom" >Prénom :</label>
  			<input type="text" name="prenom" placeholder="Min = , Max = " id="prenom" />
  		</p>

  	<!-- Saisie du téléphone -->
      <p>
        <label for="telephone">Téléphone :</label>
        <input type="text" name="telephone" id="telephone" placeholder="+33XXXXXXXXX" />
      </p>

  	<!-- Definition de l'acreditation en input hiden -->
  		<input type="hidden" name="acreditation" value="0" />

  	<!-- validation du forumlaire -->
  		<p>
  			<input type="submit" name="validation" />
  			<input type="reset" name="correction" />
  		</p>


  	

  	



  </form>