<?php

/*
	Fichier regroupant toutes les fonctions
	gérant la session

*/


	/**
	 *				session_utilisteur_existe()
	 *				
	 * 	fonction de vérification d'ouverture de la session d'un 
	 * 	utilisateur 
	 * 	
	 * 	@return bolean , true si la session est ouverte et FALSE si celle-ci n'existe pas
	 */
			function session_utilisateur_existe () {
				return isset($_SESSION['utilisateur']);
			}
	

	/**
	 *
	 * 	fonction pour ouvrir une session et y inserer les données utilisateur
	 *
	 *
	 * 
	 */


	

	


