<!DOCTYPE html>
<html>
	<head>
		<title>htmlstructure</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="fonts_style/style.css"/>
	</head>
	
	<body>	
		<div id="container">
			<nav style="margin-left: -180px;margin-top: 150px;">
				<h2>
					<span style="color:white;">navigation</span>			
					<a href="#structurante"><h4>Balises structurantes</h4></a>
					<a href="#structure"><h4>Schéma</h4></a>
					<a href="#header"><h4>Balise d'en-tête</h4></a>
					<a href="htmltableform.php">chapitre suivant...</a>
					<a href="htmlbases.php">chapitre précédent...</a>				
					<div id="allerEnHautIcone"><a href="#container"><img src="png/allerEnHaut.png"></a></div>
				</h2>
			</nav>
			<div id="central">
				<div id="entete1">			
					<span><h1>HTML5: structure des pages</h1></span><br/>
					<div id="flexDirRow">
						<a href="index.php" class="bouton_hor_nav">Acceuil</a>
						<a id="c" class="bouton_hor_nav">C++</a>
						<a id="Qt" class="bouton_hor_nav">Qt</a>
						<a id="html" class="bouton_hor_nav">HTML 5</a>
						<a id="css" class="bouton_hor_nav">CSS 3</a>		
						<a id="javascript" class="bouton_hor_nav">JAVASCRIP</a>
						<a id="phpMySql" class="bouton_hor_nav">PHP MySQL</a>		
					</div>
					<div id="navigation" class="html">
						Cliquez sur le language qui vous intéresse pour accéder à son mémo.
					</div>
				</div>
					<script src="js/ajax.js"></script>
					<script src="js/nav2.js"></script>
					<br/>
			</div>
			<section>
			<!--balises structurant-->
			<h3 id="structurante">Les balises structurantes de HTML5</h3>
			<ul>
				<table>
					<tr>
						<th>Balise</td><th>Description</td>
					</tr>
					<tr>
						<td>&lt;header&gt;</td><td>En-tête</td>
					</tr>
					<tr>
						<td>&lt;nav&gt;</td><td>Liens principaux de navigation</td>
					</tr>
					<tr>
						<td>&lt;footer&gt;</td><td>Pied de page</td>
					</tr>
					<tr>
						<td>&lt;section&gt;</td><td>Section de page</td>
					</tr>
					<tr>
						<td>&lt;article&gt;</td><td>Article (contenu autonome)</td>
					</tr>
					<tr>
						<td>&lt;aside&gt;</td><td>Informations complémentaires</td>
					</tr>

				</table>
			</ul>
			<!--structures générale-->
			<h3 id="structure">Schéma de la structure d'une page web</h3>
			<ul>
				<p>Ceci est à quoi la stucture d'une page html devrait ressembler.</p>
				<img src="png/htmlstructure.png" title="structure d'une page en HTML5" alt="sturcture d'une page"/>
			</ul>
			<!--header-->
			<h3 id="header">Les balises de l'en-tête de page</h3>
			<ul>
				<table>
					<tr>
						<th>Balise</td><th>Description</td>
					</tr>
					<tr>
						<td>&lt;link /&gt;</td><td>Liaison avec une feuille de style</td>
					</tr>
					<tr>
						<td>&lt;meta /&gt;</td><td>Métadonnées de la page web (charset, mots-clés,etc.)</td>
					</tr>
					<tr>
						<td>&lt;script&gt;</td><td>Code JavaScript</td>
					</tr>
					<tr>
						<td>&lt;style&gt;</td><td>Code CSS</td>
					</tr>
					<tr>
						<td>&lt;title&gt;</td><td>Titre de la page</td>
					</tr>
				</table>
			</ul>
			</section>
		</div>
		<?php include("footer.php");?>
	</body>
</html>

