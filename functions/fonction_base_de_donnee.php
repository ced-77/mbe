<?php

/*
	fichier regroupant les fonctions 
	gérant la base de donnée en générale

 */

	// Récupération des données de paramettre générales si ceux-ci
	// non pas déjà été chargés. Les parametres sont déclarée en CONSTANTE
	
		require_once ('parametre_general/parametre_general.php');


	/**
	 *
	 * Fonction gérant l'ouverture de base de donnée en PDO
	 *
	 * 	@return 
	 * 	
	 */
			function ouverture_base() {

				
				// appel la variable $pdo qui se trouve dans le fil globale 
				// pour vérifier si la connexion n'est pas deja creer
				// si la variable n'exite pas GLOBAL la créé dans le fil
				// global
					global $pdo;

				// vérification de la nulité de la variable $pdo
					if ( !isset( $pdo ) ) {

						// creation du DSN
						$dsn = 'mysql:dbname='.NOM_BASE_DE_DONNEE.';host='.HOST.';charset=utf8';

						// connexion au nouveau PDO
						$pdo = new PDO ($dsn,ROOT_BASE_DE_DONNEE, USERNAME_BASE_DE_DONNEE, PASSWORD_BASE_DE_DONNEE);
					}
				// retourne le resutlat
					return $pdo ;


			// fin ouverture base de donnée
			}



	/**
	*				estPoste()
	*
	*	fonction qui va vérifier l'existence d'un champ du formulaire 
	* et la non-vacuité d'un champ posté par la varible ($_POST)
	*
	* @param string $champ le nom du champ à vérifier
	*
	* @return boolean, TRUE si le champ existe et est rempli sinon FALSE
	*/
		function estPoste($champ) {
			$existe = (! empty($_POST[$champ]) && trim($_POST[$champ]) !== '' ) ;
			
			return $existe; // retourne le resultat TRUE ou FALSE

		// fin de la fonction estPoste
		}



	/**
	*				longueurEntre()
	*
	*	fonction pour controler la longueur d'un champs 
	*  avec un minimum et un maximum de caractère
	* 
	*  @param string $champ , nom du champ à vérifier
	*  @param int $min, longueur minimum du champ
	*  @param int $max, longueur maximum du champ
	*
	*  @return boolean, TRUE si compris entre min et max sinon FALSE 
	*/

		function longueurEntre($champ, $min, $max) {
			// vérification de l'éxistance du champ
				if (estPoste($champ)) {
					// si le champ existe
					// on calcule sa longeur
						$longueurChamp = strlen($_POST[$champ]);

						// on renvoie le resultat sur la condition de sa longueur mini et maxi
							return ($longueurChamp >= $min && $longueurChamp <= $max);

				// fin de la condition sur l'existance 
				} else {
					return FALSE;
				}

			
		// fin de la fonction longeurEntre()
		}


	/**
	 *				emailValide() 
	 *
	 *	fonction pour controler la validitée de l'e-mail
	 *
	 *	@param string $champ, nom de l'adresse mail
	 *
	 *	@return boolean, TRUE si l'adresse est valide sinon FALSE
	 */

		function emailValide($champ) {
			return !empty($_POST[$champ]) && filter_var($_POST[$champ], FILTER_VALIDATE_EMAIL) !== FALSE;
		}


