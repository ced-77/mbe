<!-- 
	Fichier de navigation (balise NAV)
 -->

 	<nav>
		<ul>
			<li>
				<a href="#">Accueil</a>
			</li>
			<li>
				<a href="#">1er choix</a>
			</li>
			<li>
				<a href="#">2ème choix</a>
			</li>
		
			<!--

				Gestion de la connexion et de l'acces au compte utilisateur
				
			 -->

				<?php if ( !empty($session) && $session = TRUE ) : ?>

					<!-- si une session existe et est ouverte on met le choix vers la page du compte -->
					<li>
						<a href="#">Votre compte</a>
					</li>
					<!-- et on met aussi la déconnexion  -->
					<li>
						<a href="#">Déconnexion</a>
					</li>
				<?php else : ?>

					<!-- si une session n'existe pas on met le choix pour se connecter -->
					<li>
						<a href="#">Connexion</a>
					</li>
				<?php endif ?>
				
			
		</ul>
	</nav>	