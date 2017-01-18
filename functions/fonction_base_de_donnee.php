<?php

/*
	fichier regroupant les fonctions 
	gérant la base de donnée en générale

 */

	/**
	 *
	 * Fonction gérant l'ouverture de base de donnée en PDO
	 *
	 * 	@return 
	 * 	
	 */
			function ouverture_base() {

				// vérification si on peut recupérer le donnee dans le fichier
				// generale pour avoir les variables de configurations afin de
				// ne pas les remettre en paramettre de la fonction
				
					require_once ('parametre_general/parametre_general.php');


				// appel la variable $pdo qui se trouve dans le fil globale 
				// pour vérifier si la connexion n'est pas deja creer
				// si la variable n'exite pas GLOBAL la créé dans le fil
				// global
					global $pdo;

				// vérification de la nulité de la variable $pdo
					if ( !isset( $pdo ) ) {

						// creation du DSN
						$dsn = 'mysql:dbname='.$nom_base_de_donnee.';host=localhost;charset=utf8';

						// connexion au nouveau PDO en locale SEULEMENT
						$pdo = new PDO ($dsn,$root,'');
					}
				// retourne le resutlat
					return $pdo ;


			// fin ouverture base de donnée
			}



	/**
	 *
	 * 	Fonction pour récupérer la liste complète 
	 * 	d'une table précise
	 *
	 * 	@param string  $table, nom de la table à récupérer
	 * 	@return array , liste complète de tous les champs avec toutes les données
	 * 	
	 */
			function toutes_donnees($table) {
				

			// fin de la fonction toutes_donnees
			}

