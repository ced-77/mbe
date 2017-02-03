<?php
/*
	Fichier de paramettre générale du site
		Ecrit en CONSTANTES pour que celles-ci puissent 
		etre récupere et utilisées n'importe où sans contrainte

 */

	// activation des variables générales du site et de l'entreprise
		define('SOCIETE_NOM_SITE_COMPLET', 'Massages et Bien Etre');
		define('SOCIETE_NOM_SITE_COURT', 'MBE');
		define('SOCIETE_NUMERO_TELEPHONE','06.07.08.09.10');
		define('SOCIETE_ADRESSE_MAIL', 'contact@mbe.fr');
		define('SOCIETE_ADRESSE_POSTALE', '1, rue de la capitale');
		define('SOCIETE_CODE_POSTAL', '75000');
		define('SOCIETE_VILLE', 'Paris');
		define('SOCIETE_NUMERO_SIREN', '000 00000 000');
		define('SOCIETE_NUMERO_URSSAF', '0000 0000 0000');
		define('SOCIETE_CERTIFICATION', '0000000000');
		define('SOCIETE_CHEMIN_NOM_LOGO_SITE', '');
		define('SOCIETE_CHEMIN_NOM_LOGO_ORGANISME', '');






	// activation des variables pour la base de donnee
		define('NOM_BASE_DE_DONNEE', 'mbe');
		define('ROOT_BASE_DE_DONNEE', 'root');
		define('USERNAME_BASE_DE_DONNEE', '');
		define('PASSWORD_BASE_DE_DONNEE', '');


	// activation des variables pour la table utilisateur
		define('TABLE_UTILISATEUR', 'utilisateurs'); // nom de la table gerant les utilisateurs
		define('CHEMIN_PHOTO_UTILISATEUR',''); // nom du chemin où se trouve les photos des utilisateurs
	

	// activation des variables pour la table produits
		define('TABLE_PRODUITS', 'massages'); // nom de la table des produits proposés
		define('CHEMIN_PHOTO_PRODUIT',''); // nom du chemin où se trouve les photos des produits


	// activation des variables pour la table produits dérivés
		define('TABLE_PRODUITS_DERIVES', ''); // nom de la table des sous produits ou produits dérivés

	// activation des variables pour les longueurs des champs des tables pour les formulaires
		define('PSEUDO_MAX', '');
		define('PSEUDO_MINI', '');
		define('NOM_MAX', '');

