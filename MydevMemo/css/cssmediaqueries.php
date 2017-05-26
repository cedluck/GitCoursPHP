<!DOCTYPE html>
<html>
	<head>
		<title>cssmediaqueries</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../fonts_style/style.css"/>
	</head>
	
	<body>	
		<div id="container">
			<nav style="margin-left: -180px;margin-top: 150px;">
				<h2>
					<span style="color:white;">navigation</span>			
					<a href="#appliquer"><h4>Appliquer un media css</h4></a>
					<a href="#mobiles"><h4>Media et mobiles</h4></a>
					<a href="cssflexbox.php">chapitre précédent...</a>
					<div id="allerEnHautIcone"><a href="#container"><img src="../png/allerEnHaut.png"></a></div>
				</h2>
			</nav>
			<div>
				<div id="entete1">			
					<span><h1>CSS3 : media queries</h1></span><br/>
					<div id="flexDirRow">
						<a href="../index.php" class="bouton_hor_nav">Acceuil</a>
						<a id="c" class="bouton_hor_nav">C++</a>
						<a id="Qt" class="bouton_hor_nav">Qt</a>
						<a id="html" class="bouton_hor_nav">HTML 5</a>
						<a id="css" class="bouton_hor_nav" style="background-color: #0171BA;">CSS 3</a>		
						<a id="javascript" class="bouton_hor_nav">JAVASCRIP</a>
						<a id="phpMySql" class="bouton_hor_nav">PHP MySQL</a>		
					</div>
					<div id="navigation" style="border: 2px solid  #0171BA;">
						<a href="cssproprietes.php" class="cat">Feuille de style</a>
						<a href="cssflexbox.php"  class="cat">Flexbox</a>
						<a href="cssmediaqueries.php"  class="cat" style="background-color: #0171BA;">Media Queries</a>
					</div>
					<em>Cette page est inspirée par le cours <a href="https://openclassrooms.com/courses/apprenez-a-creer-votre-site-web-avec-html5-et-css3">"apprenez a creer votre site web avec html5 et css3"</a> du MOOC <a href="https://openclassrooms.com">openclassrooms</a>. Créateur : <a href="https://openclassrooms.com/membres/mateo21">Mathieu Nebra</a></em>
				</div>
					<script src="../js/ajax.js"></script>
					<script src="../js/nav2.js"></script>
					<br/>
				
				<section>
				<?php include("../html/regexhtml.php");?>
				<?php include("cssHighlight.php");?>
				<!--Dans une nouvelle feuille de style-->
				<h3 id="appliquer">Apliquer une rêgle de media query.</h3>
				<ul>
					<p>Code à mettre dans la balise &lt;head&gt; de la page avec la propriété <code>media=".."</code>.</p>
<?php
$texte ="<pre>&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;utf-8&quot; /&gt;

        &lt;!-- Pour tout le monde --&gt;
        &lt;link rel=&quot;stylesheet&quot; href=&quot;style.css&quot; /&gt;

        &lt;!-- Pour ceux qui ont une résolution inférieure à 1280px --&gt;
        &lt;link rel=&quot;stylesheet&quot; media=&quot;screen and (max-width: 1280px)&quot; href=&quot;petite_resolution.css&quot; /&gt; 

        &lt;title&gt;Media queries&lt;/title&gt;
    &lt;/head&gt;</pre>";
ReGex($texte);
?>
    			<br/>		
				<p>On peut aussi établir les rêgles dans la feuille de style déjà existante.</p>
<?php
$texte ="<pre>h1
{
    color: blue;
}

@media screen and (max-width: 1280px)
{
    h1 /*Rédigez vos propriétés CSS ici*/
	{
    	color: red;
	}
}

.class
{
    autrePropriete1: autreValeur1;
    autrePropriete2: autreValeur2;
}</pre>";
RegexCss($texte);
?>
					<p>Tableau des media (rêgles) disponibles.</p>
						<table>
							<tr>
								<th>media</th><th>description</th><th>valeur possible</th>
							</tr>
							<tr>
								<td>color</td><td>gestion de la couleur (en bits/pixel).</td><td></td>
							</tr>
							<tr>
								<td>height</td><td>hauteur de la zone d'affichage (fenêtre).</td><td></td>
							</tr>
							<tr>
								<td>width</td><td>largeur de la zone d'affichage (fenêtre).</td><td></td>
							</tr>
							<tr>
								<td>device-height</td><td>hauteur du périphérique.</td><td></td>
							</tr>
							<tr>
								<td>device-width</td><td>largeur du périphérique.</td><td></td>
							</tr>
							<tr>
								<td>orientation</td><td>orientation du périphérique (portrait ou paysage)</td><td></td>
							</tr>
							<tr>
								<td>media</td> <td>type d'écran de sortie.</td><td>screen : écran « classique »<br/>
																					handheld : périphérique mobile<br/>
																					print : impression<br/>
																					tv : télévision<br/>
																					projection : projecteur<br/>
																					all : tous les types d'écran</td>
							</tr>
					</table>
						 <p>Combinaison des media :</p>
						 <table>
						 	<tr>
						 		<th>media</th><th>description</th>
						 	</tr>
						 	<tr>
						 		<td>only</td><td>"uniquement</td>
						 	</tr>
						 	<tr>
						 		<td>and</td><td>"et</td>
						 	</tr>
						 	<tr>
						 		<td>not</td><td>"non</td>
						 	</tr>
						 </table>
						 <p>Exemple :</p>
<?php
$texte ="
<pre>/*Sur les écrans, lorsque la largeur de la fenêtre fait au maximum 1280px*/
@media screen and (max-width: 1280px)

/*Sur tous types d écran, lorsque la largeur de la fenêtre est comprise entre 1024px et 1280px*/
@media all and (min-width: 1024px) and (max-width: 1280px)

/*Sur les téléviseurs*/
@media tv

/*Sur tous types d'écrans orientés verticalement*/
@media all and (orientation: portrait)</pre>";
RegexCss($texte);
?>
					</ul>
					<!--Dans une nouvelle feuille de style-->
					<h3 id="mobiles">Media queries avec les mobiles</h3>
					<ul>
						<p>Les appareils mobiles utilisent un affichage simulé appellé <em>viewport</em>. Voici un tableau des différents <em>viewport</em> par défaut des navigateurs mobiles :</p>
						<table>
							<tr>
								<th>Navigateur</th><th>Largeur du <em>viewport</em> par défaut</th>
							</tr>
							<tr>
								<td>Opera Mobile</td><td>850 pixels</td>
							</tr>
							<tr>
								<td>iPhone Safari</td><td>980 pixels</td>
							</tr>
							<tr>
								<td>Android</td><td>800 pixels</td>
							</tr>
							<tr>
								<td>Windows Phone</td><td>1024 pixels</td>
							</tr>
						</table>
						<p>Il est préférable d'utiliser la rêgle <em>device-width</em> pour cibler un appareil mobile.<br/>
						Aucun navigateur mobile, à part Opera mobile, ne reconnait le media <em>handheld</em>, ils se comportent comme un <em>screen</em>.
						</p>
						<p>Modifier la largeur du viewport grâce a la balise &lt;meta&gt; dans l'en-tête de la page :</p>
						<?php $texte ="<pre>&lt;meta name=&quot;viewport&quot; content=&quot;width=320&quot; /&gt;</pre>";ReGex($texte);?>
						<p>Demander au <em>viewport</em> d'être de même largeur que l'écran :</p>
						<?php $texte ="<pre>&lt;meta name=&quot;viewport&quot; content=&quot;width=device-width&quot; /&gt;</pre>";ReGex($texte);?>
					</ul>
				</section>
			</div>
		</div>
		<?php include("../footer.php");?>
	</body>
</html>