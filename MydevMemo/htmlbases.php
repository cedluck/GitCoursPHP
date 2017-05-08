<!DOCTYPE html>
<html>
	<head>
		<title>htmlbases</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="fonts_style/style.css"/>
	</head>
	
	<body>	
		<div id="container">
			<nav style="margin-left: -180px;margin-top: 150px;">
				<h2>
					<span style="color:white;">navigation</span>			
					<a href="#structure"><h4>Structure de base</h4></a>
					<a href="#caniuse"><h4>caniuse.com</h4></a>
					<a href="#balises"><h4>Balises HTML5</h4></a>
					<a href="#tableaubalise"><h4>Liste de balises</h4></a>
					<a href="htmlstructure.php">chapitre suivant...</a>
					<div id="allerEnHautIcone"><a href="#container"><img src="png/allerEnHaut.png"></a></div>
				</h2>
			</nav>
			<div id="central">
				<div id="entete1">			
					<span><h1>HTML5 : les bases</h1></span><br/>
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
					<!---STRUCTURE-->
					<h3 id="structure">Structure de base d'une page HTML5</h3>
					<ul>
						<p>Copier/coller ce code à chaque nouvelle page dans l'éditeur de texte.</p>
						<div class="console">
<pre>&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;utf-8&quot; /&gt;
        &lt;title&gt;Titre&lt;/title&gt;
    &lt;/head&gt;

    &lt;body&gt;
    
    &lt;/body&gt;
&lt;/html&gt;</pre>			
						</div>
						<p><code>&lt;html&gt;</code>, <code>&lt;head&gt;</code> et <code>&lt;body&gt;</code> sont des balises ditent de "premier niveau".</p>
					</ul>
					<!--CANIUSE-->
					<h3 id="caniuse">Caniuse</h3>
					<ul>
						<p>Le site <a href="caniuse.com"><em>caniuse.com</em></a> tient à jour une liste des fonctionnalités prises en charge par les différentes versions de chaque navigateur.
						</p>
						<img src="png/caniuse.png"/>
						
					</ul>
					<!--BALISES-->
					<h3 id="balises">Ls différentes balise en HTML5</h3>
					<ul>
						<p>Voici quelques balises basiques en HTML5</p>
						<div class="console">
<pre>&lt;p&gt;Paragraphe&lt;/p&gt;

&lt;!--Ecrire un commentaire--&gt;

&lt;br/&gt;retour a la ligne

&lt;h1&gt;titre très important&lt;/h1&gt;

&lt;h2&gt;titre important&lt;/h2&gt;

&lt;h3&gt;titre moins important&lt;/h3&gt;

&lt;h4&gt;titre encore moins important&lt;/h4&gt;

&lt;h5&gt;titre pas important&lt;/h5&gt;

&lt;h6&gt;titre pas important du tout&lt;/h6&gt;

&lt;em&gt;mise en valeur italic&lt;/em&gt;

&lt;strong&gt;mise en valeur gras&lt;/strong&gt;

&lt;mark&gt;mise en valeur du texte&lt;/mark&gt;

&lt;ul&gt;début d'une liste(indentation vers la droite)
	&lt;li&gt;élément(s) d'une liste&lt;/li&gt;
&lt;/ul&gt;fin d'une liste(fin de l'indentation)

&lt;ol&gt;début d'une liste ordonnée(indentation vers la droite)
	&lt;li&gt;élément(s) d'une liste ordonnée&lt;/li&gt;
&lt;/ol&gt;fin d'une liste ordonnée(fin de l'indentation)

&lt;a href=&quot;autrePage.html&quot;&gt;non du lien&lt;/a&gt;

&lt;a href=&quot;#ancre&quot;&gt;non du lien&lt;/a&gt;
	=>ira à id=&quot;#ancre&quot;

&lt;a href=&quot;#autrePage.html#ancre&quot;&gt;non du lien&lt;/a&gt;
	=>ira à id=&quot;#ancre de l'autre page&quot;

&lt;a href=&quot;autrePage.html&quot; title=&quot;infobulle&quot; target=&quot;_blank&quot;&gt;non du lien&lt;/a&gt;
								_blank ouvre la page dans un autre onglet

&lt;a href=&quot;mailto:votrePseudo@votrEmail.com&quot;&gt;Envoyer moi un e-mail !&lt;/a&gt;

&lt;a href=&quot;monFichier.zip&quot;&gt;Téléchargez ce fichier&lt;/a&gt;

&lt;figure&gt;
	&lt;img src=&quot;images/nonImage.jpg&quot;alt =&quot;desciptionde l'image&quot; title=&quot;infobulle&quot;/&gt;
	&lt;figcaption&gt;text concernant l'image&lt;/figcaption&gt;
&lt;/figure&gt;</pre>
						</div>	
					</ul>
					<!--tableau de balise-->
					<h3 id="tableaubalise">Tableau récapitulatif (et non exhaustif) des balises de structuration de texte</h3>
					<ul>
						<table>
							<tr>
								<th>Balise</td><th>Description</td>						
							</tr>
							<tr>
								<td>&lt;abbr&gt;</td><td>Abréviation</td>						
							</tr>
							<tr>
								<td>&lt;blockquote&gt;</td><td>Citation (longue)</td>						
							</tr>
							<tr>
								<td>&lt;cite&gt;</td><td>Citation du titre d'une œuvre ou d'un évènement</td>						
							</tr>
							<tr>
								<td>&lt;q&gt;</td><td>Citation (courte)</td>						
							</tr>
							<tr>
								<td>&lt;sup&gt;</td><td>Exposant</td>						
							</tr>
							<tr>
								<td>&lt;sub&gt;</td><td>Indice</td>						
							</tr>
							<tr>
								<td>&lt;audio&gt;</td><td>Son</td>						
							</tr>
							<tr>
								<td>&lt;video&gt;</td><td>Vidéo</td>						
							</tr>
							<tr>
								<td>&lt;source&gt;</td><td>Format source pour les balises <code>&lt;audio&gt;</code> et <code>&lt;video&gt;</code></td>						
							</tr>
							<tr>
								<td>&lt;hr /&gt;</td><td>Ligne de séparation horizontale</td>						
							</tr>
							<tr>
								<td>&lt;address&gt;</td><td>Adresse de contact</td>						
							</tr>
							<tr>
								<td>&lt;del&gt;</td><td>Texte supprimé</td>						
							</tr>
							<tr>
								<td>&lt;ins&gt;</td><td>Texte inséré</td>						
							</tr>
							<tr>
								<td>&lt;dfn&gt;</td><td>Définition</td>						
							</tr>
							<tr>
								<td>&lt;kbd&gt;</td><td>Saisie clavier</td>						
							</tr>
							<tr>
								<td>&lt;pre&gt;</td><td>Affichage formaté (pour les codes sources)</td>						
							</tr>
							<tr>
								<td>&lt;progress&gt;</td><td>Barre de progression</td>						
							</tr>
							<tr>
								<td>&lt;time&gt;</td><td>Date ou heure</td>						
							</tr>
							<tr>
								<td>&lt;dl&gt;</td><td>Liste de définitions</td>						
							</tr>
							<tr>
								<td>&lt;dte&gt;</td><td>Terme à définir</td>						
							</tr>
							<tr>
								<td>&lt;dd&gt;</td><td>Définition du terme</td>						
							</tr>

						</table>
					</ul>


			</div>
		</div>
		<?php include("footer.php");?>
	</body>
</html>
				