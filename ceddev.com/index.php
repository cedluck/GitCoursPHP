<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Index</title>
		<link rel="stylesheet" type="text/css" href="fonts_style/style.css"/>
	</head>
	<body>
		<div id="container">
			<div id="entete">

				<?php
				session_start();

				if(isset($_SESSION['pseudo']) AND isset($_SESSION['pseudo']))
				{
					echo '<h3> Bonjour '. $_SESSION['pseudo'].'. Vous êtes connecté ! <a class="bouton_top" href="profil.php">profil</a> <a class="bouton_top" href="deconnexion.php">deconnexion</a></h3><br/>';
				}
				else
				{
					echo '<h3><a class="bouton_top" href="Connexion.php">Connexion</a>  <a class="bouton_top" href="inscription.php">Inscription</a></h3><br/>';
				}

				?>
				<div id="description">
					<h3>Un site de documentation <br/>pour les dévelopeurs :<br/>C++ <br/>Qt <br/>HTM 5 <br/>CSS 3<br/>PHP MySQL <br/>JavaScript <br/><br/>Créé par Cédric Luckett</h3>
					<div>
						<h1>CEDDEV.FR</h1><br/></br/>
						<!--<a class="bouton_nav" href="profil.php">Qui je suis ?</a> <a class="bouton_nav" href="profil.php">Mon blog</a>-->
		 			</div>
		 		</div>				
			</div>
									
			<div id="central">
								
				<nav>	
					<h3>Logiciel</h3>
					<a class="bouton" href="profil.php">C++</a><br/>
					<a class="bouton" href="profil.php">Qt</a>
					<h3>Web</h3>
					<a class="bouton" href="profil.php">HTML 5</a><br/>
					<a class="bouton" href="profil.php">CSS 3</a><br/>				
					<a class="bouton" href="javascriptIntro.php">JAVASCRIP</a><br/>
					<a class="bouton" href="profil.php">PHP MySQL</a><br/>
								
				</nav>

				<section>
					<article>
					<h3>POURQUOI FAIRE UN SITE ?</h3>
						<p>
						Bon déjà j'adore coder donc déjà bah... j'ai coder un site.<br/><br/>
						Ensuite, étant un codeur débutant et comme la programmation est une activité d'une richesse inépuissable, il est difficile de tout retenir d'un coup. De plus j'aime maîtriser plusieurs languages. Donc je me retrouve souvent à chercher un exemple de code que j'ai parcouru pendant ma formation. J'en suis venu a me dire "Pourquoi ne pas avoir un site regroupant tous les petits bouts de codes qui me permettent d'avancer dans mon projet". Et voici la raison principale de l'existence de ce site.<br/><br/>
						J'en profite pour remercier les personnes qui m'ont aider et former dans cette entreprise : Mathieu Nebra (co-fondateur du site Openclassrooms et formateur), Baptiste Pesquet (enseignant agrégé en informatique à l'ENCSC), et bien sur mon ami Jean-Marc Biechy qui m'a donner le gout pour la programmation.
						</p>					
					</article>
					<article>
					<h3>CE QUE VOUS Y TROUVEREZ !</h3>
						<p>
						Essentiellement du code et ce qu'il donne. Le moins de texte possible mais un minimum quand même. Le but est que chacun s'y retrouve. Mais ne voyez pas ce site comme un MOOC. Tous les codes et les exemples sont repris des différents cours que j'ai suivi sur <a href="www.openclassrooms.com">Openclassrooms</a>, site que je vous recommande vivement de parcourir si vous voulez vous lancer véritablement dans la programmation informatique.<br/>
						Il y aura autant que possible le résultat engendré pour chaque code car c'est aussi ça que nous, les développeurs, nous venons chercher...<br/>
						</p>
					</article>
				</section>
				
			</div>
		
		</div>

	</body>
	<footer><?php include("footer.php");?></footer>
</html>