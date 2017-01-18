<!-- 
	Fichier de navigation (balise NAV)
 -->

 	<nav>
		<ul>
			<li>
				<a href="index.php?page=accueil" >Accueil</a>
			</li>
			<li>
				<a href="index.php?page=amma" >Le massage amma</a>
			</li>
			<li>
				<a href="#">Prestation</a>
			</li>

			<li>
				<a href="#">Demarche</a>
			</li>

			<li>
				<a href="#">Tarifs</a>
			</li>

			<li>
				<a href="#">Témoignages</a>
			</li>

			<li>
				<a href="#">Parcours</a>
			</li>
		
			<!--

				Gestion de la connexion et de l'acces au compte utilisateur
				
			 -->

				<?php if ( !empty($session) && $session = TRUE ) : ?>

					<!-- affichage du pseudo de connexion -->
					<span>
						<?php echo( $utilisateur['pseudo'] ); ?>
					</span>

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