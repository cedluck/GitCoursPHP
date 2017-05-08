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
				<div id="flexDirRow" >
				<h1>MyDevMemo</h1>
				<?php
				try
				{	
					$bdd = new PDO('mysql:host=127.0.0.1;port=8889;dbname=test;charset=utf8', 'root', 'root');
				}
				catch(Exception $e)
				{
					die ('Erreur : '.$e->getMessage());
				}

				$req = $bdd->query('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh %imin %ss\') AS date_creation_fr FROM billets ORDER BY date_creation DESC LIMIT 0,1');
				while ($donnees = $req->fetch())
				{
				?>
				<div id="news">
				<h3>DERNIERE INFO : <em><?php echo htmlspecialchars($donnees['titre']); ?> le <?php echo $donnees['date_creation_fr']; ?></em>
				<p><?php echo nl2br(htmlspecialchars($donnees['contenu'])); ?></p></h3>
				</div>				
				<?php
				}
				$req->closeCursor();					
				?>				
				<br/></br/>
				<!--<a class="bouton_nav" href="profil.php">Qui je suis ?</a> <a class="bouton_nav" href="profil.php">Mon blog</a>-->
	 			</div>
		 	</div>				
									
			<div id="central" style="margin-top: 250px;">								
				<nav id="navigation1">
					<h3>Logiciel</h3>
					<a id="c" class="bouton_ver_nav" href="enconstruction.php">C++</a>
					<a id="Qt" class="bouton_ver_nav" href="enconstruction.php">Qt</a>
					<h3>Web</h3>
					<a id="html" class="bouton_ver_nav">HTML 5</a>
					<a id="css" class="bouton_ver_nav">CSS 3</a>			
					<a id="javascript" class="bouton_ver_nav">JAVASCRIP >></a>
					<a id="phpMySql" class="bouton_ver_nav">PHP MySQL</a>
					<br/>
					<script src="js/ajax.js"></script>
					<script src="js/nav1.js"></script>
				</nav>
				<section>										
					<article >
					<h3>POURQUOI FAIRE UN SITE ?</h3>
						<p class="article">
						Bon déjà j'adore coder donc... j'ai coder un site.<br/><br/>
						Ensuite, étant un codeur débutant et comme la programmation est une activité d'une richesse inépuissable, il est difficile de tout retenir d'un coup. De plus j'aime maîtriser plusieurs languages. Donc je me retrouve souvent à chercher un exemple de code que j'ai parcouru pendant ma formation. J'en suis venu a me dire "Pourquoi ne pas avoir un site regroupant tous les petits bouts de codes qui me permettent d'avancer dans mon projet". Et voici la raison principale de l'existence de ce site.<br/><br/>
						J'en profite pour remercier les personnes qui m'ont aider et former dans cette entreprise : Mathieu Nebra (co-fondateur du site Openclassrooms et formateur), Baptiste Pesquet (enseignant agrégé en informatique à l'ENCSC), et bien sur mon ami Jean-Marc Biechy qui m'a donner le gout pour la programmation.
						</p>					
					</article>
					<article >
					<h3>CE QUE VOUS Y TROUVEREZ !</h3>
						<p class="article">
						Essentiellement du code et ce qu'il donne. Le moins de texte possible mais un minimum quand même. Le but est que chacun s'y retrouve. Mais ne voyez pas ce site comme un MOOC. Tous les codes et les exemples sont repris des différents cours que j'ai suivi sur <em><a href="www.openclassrooms.com">Openclassrooms</a></em>, site que je vous recommande vivement de parcourir si vous voulez vous lancer véritablement dans la programmation informatique.</p>
						<table>
							<tr>
								<td><img src="png/screen1.png"/></td>
								<td><img src="png/screen2.png"/></td>
							</tr>
						</table>
						<h6>Quelques images du site !</h6>
						<p class="article">
						Il y aura autant que possible le résultat engendré pour chaque code car c'est aussi ça que nous, les développeurs, nous venons chercher...<br/>
						</p>
					</article>
				</section>				
			</div>		
		</div>
		<?php include("footer.php");?>
		
	</body>	
</html>