<?php

/*
	commande pour déclarer que l'on utilise _SESSION 
*/

	if (session_status() === PHP_SESSION_NONE) {session_start();}