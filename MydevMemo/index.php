<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Index</title>
		<link rel="stylesheet" type="text/css" href="fonts_style/style.css"/>

	</head>
	<body>
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

				$req = $bdd->query('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh %imin %ss\') AS date_creation_fr FROM billets ORDER BY date_creation DESC LIMIT 0,2');
				while ($donnees = $req->fetch())
				{
				?>
				<div id="news">
				<h3>INFO : <em><?php echo htmlspecialchars($donnees['titre']); ?> le <?php echo $donnees['date_creation_fr']; ?></em></h3>
				<p class="article"><?php echo nl2br(htmlspecialchars($donnees['contenu'])); ?></p>
				</div>				
				<?php
				}
				$req->closeCursor();					
				?>				
				<br/></br/>
				<!--<a class="bouton_nav" href="profil.php">Qui je suis ?</a> <a class="bouton_nav" href="profil.php">Mon blog</a>-->
	 		</div>
		</div>				
		<div id="container">							
			<div id="central">								
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
							La programmation est une activité d'une richesse inépuissable, il est difficile de tout retenir d'un coup. C'est pourquoi les informaticiens font appel à des documentations pour chaque language qu'ils utilisent. Ces documentations, bien qu'exhaustives et très instructives, sont parfois un peu fastidieuses, surtout pour les programmateurs débutants. C'est pour cela que ce site à été créé : accéder à l'essentiel des informations nécessaires pour coder en l'espace de 	quelques click.<br/>
							Attention ce site n'est pas là pour apprendre à coder dans différents languages, pour cela il est conseillé de passer par des sites plus spécialisés. Ici vous n'apprendrez pas ce qu'est une variable, une fonction ou ce qu'est la POO, comment bien indenter votre code, les normes de formatage etc... vous devrez déjà savoir cela.<br/><br/>
						</p>					
					</article>
					<article >
					<h3>CE QUE VOUS Y TROUVEREZ !</h3>
						<p class="article">
							Essentiellement du code et ce qu'il donne. Le moins de texte possible mais un minimum quand même. Le but est que chacun s'y retrouve. Mais ne voyez pas ce site comme un MOOC. Tous les codes et les exemples sont repris des différents cours du MOOC <em><a href="www.openclassrooms.com">Openclassrooms</a></em>, site vivement recommandé si vous voulez vous lancer véritablement dans la programmation informatique.
						</p>
						<table>
							<tr>
								<td><img src="png/screen1.png"/></td>
								<td><img src="png/screen2.png"/></td>
							</tr>
						</table>
						<h6>Quelques images du site !</h6>
					</article>
				</section>				
			</div>
		</div>	
		<div id="footer">	
			<h5><em>Logiciel</em><br/>		
			<br/>
				<a href="enconstruction.php">C++</a><br/>
				<a href="enconstruction.php">Qt</a><br/>	
			</h5>
			<h5><em>Web</em><br/>
			<br/>
				<a href="html/htmlbases.php">HTML</a><br/>
				<a href="css/cssproprietes.php">CSS</a><br/>
				<a href="javascript/javascriptIntro.php">Javascript</a><br/>
				<a href="php/phpbases.php">PHP/MySql</a><br/>
			</h5>
			<h5><em>Réseaux sociaux</em><br/><br/>
				<a href="https://github.com/cedluck/GitCoursPHP.git"><img src="png/githubIcon.png"></a><img src="png/fbIcon.png"></a>
			</h5>
			<h5><em>Retour à l'accueil</em><br/><br/>
				<a href="index.php"><img src="png/home.png"></a></h5>
			<h5>Copyright Cédric Luckett 2017.</h5>
		</div>
	</body>	
</html>