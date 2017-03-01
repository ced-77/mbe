<?php 
/*
	Fichier des fonctions qui ont attrait
	à la gestion de la base utilisteur

 */

	// Récuperation des paramettre genarale si celles-ci
	// non pas déjà été chargées.
	
		require_once ('parametre_general/parametre_general.php'); 

	// récuperation des fonctions
		require_once ('functions/functions.php');

	/*
		Fonctions d'ordre générales
	 */
	
		/**
		 *		verif_pseudo_existe()
		 * 
		 * 	Fonction pour vérifier si le pseudo existe déjà dans
		 * 	la base de donnée
		 *
		 * @param string, $pseudo, le pseudo à vérifier pour eviter un doublon.
		 *
		 * @return  boolean, True pour si un pseudo existe et False pour si le pseudo n'existe pas
		 * 
		 */
		
			function verif_pseudo_exsite( $pseudo ) {
				// ouverture de la base de donnée
					$pdo = ouverture_base();
				
				// création de la requete avec alias pour eviter tout problème de saisie
					$requete = 'SELECT pseudo FROM '.TABLE_UTILISATEUR.' WHERE pseudo = :pseudo';

				// preparation de la requete
					$prepareRequete = $pdo -> prepare($requete);
				// remplacement des alias par les valeurs
					
					$prepareRequete -> bindValue(':pseudo', $pseudo);
				// execution de la requette
					$prepareRequete -> execute();

				// retourne le resultat en boolean
					return $prepareRequete -> fetch() !== FALSE;
					
			// fin de la fonction de vérification du pseudo
			}






