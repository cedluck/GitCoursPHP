<!DOCTYPE html>
<html>
	<head>
		<title>csspropriétés</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../fonts_style/style.css"/>
	</head>
	
	<body>	
		<div id="container">
			<nav style="margin-left: -180px;margin-top: 150px;">
				<h2>
					<span style="color:white;">navigation</span>			
					<a href="#schema"><h4>Style CSS</h4></a>
					<a href="#forme"><h4>Forme du texte</h4></a>
					<a href="#couleurfond"><h4>Couleur et Fond</h4></a>
					<a href="#boites"><h4>Boîtes</h4></a>
					<a href="#listes"><h4>Listes</h4></a>
					<a href="#tableau"><h4>Tableaux et curseur</h4></a>
					<a href="cssflexbox.php">chapitre suivant...</a>
					<div id="allerEnHautIcone"><a href="#container"><img src="../png/allerEnHaut.png"></a></div>
				</h2>
			</nav>
			<div>
				<div id="entete1">			
					<span><h1>CSS3 : feuilles de style </h1></span><br/>
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
						<a href="cssproprietes.php" class="cat" style="background-color: #0171BA;">Feuille de style</a>
						<a href="cssflexbox.php"  class="cat">Flexbox</a>
						<a href="cssmediaqueries.php"  class="cat">Media Queries</a>
					</div>
					<em>Cette page est inspirée par le cours <a href="https://openclassrooms.com/courses/apprenez-a-creer-votre-site-web-avec-html5-et-css3">"apprenez a creer votre site web avec html5 et css3"</a> du MOOC <a href="https://openclassrooms.com">openclassrooms</a>. Créateur : <a href="https://openclassrooms.com/membres/mateo21">Mathieu Nebra</a></em>
				</div>
				<script src="../js/ajax.js"></script>
				<script src="../js/nav2.js"></script>
				<br/>
			</div>
			<section>
				<?php include("cssHighlight.php");?>
				<!--schéma d'une feuille de style-->
				<h3 id="schema">Schéma d'une feuille de style CSS3</h3>
				<ul>
<?php
$texte = "<pre>/*commentaires*/
p /*<= selecteur*/
{
       propriete1: valeur1;
       propriete2: valeur2;
       propriete3: valeur3;
}
*  /*<= sélecteur universel*/
{
	propriete1: valeur1;
}

h1 h2  /*balise contenue dans une autre*/
{
	propriete1: valeur1;
}
h1 + p  /*balise qui en suit une autre*/
{
	propriete1: valeur1;
}
a[title] /*balise qui possède un attribut*/
{
	propriete1: valeur1;
}
a[title=&quot;texte_description&quot;] /*balise qui possède un attribut (title) 
						dont la valeur est précisée (texte_decription)*/
{
	propriete1: valeur1;
}
a[title*=&quot;description&quot;] /*balise qui possède un attribut (title) qui contient
						le mot (description) dans sa valeur (texte_description)*/
{							
	propriete1: valeur1;
}

/*déclarer 2 balise identique*/
h1, h2 /*<= selecteur*/
{
       propriete1: valeur1;
       propriete2: valeur2;
       propriete3: valeur3;
       propriete4: valeur4;
}

/*déclarer un style sur des class*/
.class /*<= selecteur*/
{
    propriete1: valeur1;
}

/*déclarer un style sur des id*/
#id /*<= selecteur*/
{
	propriete1: valeur1;
}
</pre>";
RegexCss($texte);
?>
				</ul>
				<h3 id="forme">Tableau des propriétés de mise en forme du texte</h3>
				<ul>
					<table>
						<tr>
							<th>Propriété</th><th>Valeurs (exemples)</th><th>Description</th>
						</tr>
						<tr>
							<td>font-family</td><td>police1, police2, serif, arial...(possibilité d'offrir plusieurs choix de police)</td><td>Nom de police</td>
						</tr>
						<tr>
							<td>@font-face</td><td>Nom et source de la police</td><td>Police personnalisée</td>
						</tr>
						<tr>
							<td>font-size</td><td>1.3em, 16px, 120%, xx-small, x-small, small, medium, large, x-large, xx-large</td><td>Taille du texte</td>
						</tr>
						<tr>
							<td>font-weight</td><td>bold, normal</td><td>Gras</td>
						</tr>
						<tr>
							<td>font-style</td><td>italic, oblique, normal</td><td>Italique</td>
						</tr>
						<tr>
							<td>text-decoration</td><td>underline, overline, line-through, blink, none</td><td>Soulignement, ligne au-dessus, barré ou clignotant</td>
						</tr>
						<tr>
							<td>font-variant</td><td>small-caps, normal</td><td>Petites capitales</td>
						</tr>
						<tr>
							<td>text-transform</td><td>capitalize, lowercase, uppercase</td><td>Capitales</td>
						</tr>
						<tr>
							<td>font</td><td>-</td><td>Super propriété de police. Combine : font-weight, font-style, font-size, font-variant, font-family.</td>
						</tr>
						<tr>
							<td>text-align</td><td>left, center, right, justify</td><td>Alignement horizontal</td>
						</tr>
						<tr>
							<td>vertical-align</td><td>baseline, middle, sub, super, top, bottom</td><td>Alignement vertical (cellules de tableau ou éléments inline-block uniquement)</td>
						</tr>
						<tr>
							<td>line-height</td><td>18px, 120%, normal...</td><td>Hauteur de ligne</td>
						</tr>
						<tr>
							<td>text-indent</td><td>25px</td><td>Alinéa</td>
						</tr>
						<tr>
							<td>white-space</td><td>pre, nowrap, normal</td><td>Césure</td>
						</tr>
						<tr>
							<td>word-wrap</td><td>break-word, normal</td><td>Césure forcée</td>
						</tr>
						<tr>
							<td>text-shadow</td><td>5px 5px 2px blue</td><td>(horizontale, verticale, fondu, couleur)</td>
						</tr>
					</table>
					<p>Code CSS3 pour définir une police personnalisé et les différents formats de fichiers de polices de caractères : </p>
<?php
$texte = "<pre>@font-face {
    font-family: 'MaSuperPolice';
    src: url('MaSuperPolice.eot') format('eot'),
     	url('MaSuperPolice.woff') format('woff'),
     	url('MaSuperPolice.ttf') format('truetype'),
     	url('MaSuperPolice.svg') format('svg');
}
/*DIFFERENTS FORMAT :
	- Embedded OpenType. Fonctionne sur IE uniquement
	- Web Open Font Format. Nouveau format conçu pour le Web,
		 		qui fonctionne sur IE9 et tous les autres navigateurs.
	- TrueType Font. Fonctionne sur IE9 et tous les autres navigateurs.
	- SVG Font. Le seul format reconnu sur les iPhones et iPads pour le moment.*/</pre>";
RegexCss($texte);
?>
					<p>Différents sites qui proposent des polices libres de droits : <a href="http://www.fontsquirrel.com/"><em>fontsquirrel.com</em></a>, <a href="http://www.dafont.com/fr/"><em>dafont.com</em></a> !</p>
				</ul>
				<h3 id="couleurfond">Tableau des propriétés de couleur et de fond.</h3>
				<ul>
					<table>
						<tr>
							<th>Propriété</th><th>Valeurs (exemples)</th><th>Description</th>
						</tr>
						<tr>
							<td>color</td><td>nom, rgb(rouge,vert,bleu)<br/>, rgba(rouge,vert,bleu,transparence),<br/> #CF1A20...</td><td>Couleur du texte</td>
						</tr>
						<tr>
							<td>background-color</td><td>Identique à color</td><td>Couleur de fond</td>
						</tr>
						<tr>
							<td>background-image</td><td>url('image.png')</td><td>Image de fond</td>
						</tr>
						<tr>
							<td>background-attachment</td><td>fixed, scroll</td><td>Fond fixe</td>
						</tr>
						<tr>
							<td>background-repeat</td><td>repeat-x, repeat-y, no-repeat, repeat</td><td>Répétition du fond</td>
						</tr>
						<tr>
							<td>background-position</td><td>(x y), top, center, bottom, left, right</td><td>Position du fond</td>
						</tr>
						<tr>
							<td>background</td><td>-</td><td>Super propriété du fond. Combine : background-image, background-repeat, background-attachment, background-position</td>
						</tr>
						<tr>
							<td>opacity</td><td>0.5</td><td>Transparence</td>
						</tr>
					</table>
				</ul>
				<h3 id="boites">Tableau des propriétés des boîtes.</h3>
				<ul>
					<table>
						<tr>
							<th>Propriété</th><th>Valeurs (exemples)</th><th>Description</th>
						</tr>
						<tr>
							<td>color</td><td>nom, rgb(rouge,vert,bleu)<br/>, rgba(rouge,vert,bleu,transparence),<br/> #CF1A20...</td><td>Couleur du texte</td>
						</tr>
						<tr>
							<td>width</td><td>150px, 80%...</td><td>Largeur</td>
						</tr>
						<tr>
							<td>height</td><td>150px, 80%...</td><td>Hauteur</td>
						</tr>
						<tr>
							<td>min-width</td><td>150px, 80%...</td><td>Largeur minimale</td>
						</tr>
						<tr>
							<td>max-width</td><td>150px, 80%...</td><td>Largeur maximale</td>
						</tr>
						<tr>
							<td>min-height</td><td>150px, 80%...</td><td>Hauteur minimale</td>
						</tr>
						<tr>
							<td>max-height</td><td>150px, 80%...</td><td>Hauteur maximale</td>
						</tr>
						<tr>
							<td>margin-top</td><td>23px</td><td>Marge en haut</td>
						</tr>
						<tr>
							<td>margin-left</td><td>23px</td><td>Marge à gauche</td>
						</tr>
						<tr>
							<td>margin-right</td><td>23px</td><td>Marge à droite</td>
						</tr>
						<tr>
							<td>margin-bottom</td><td>23px</td><td>Marge en bas</td>
						</tr>
						<tr>
							<td>margin</td><td>23px 5px 23px 5px (haut, droite, bas, gauche)</td><td>Super-propriété de marge. Combine : margin-top, margin-right, margin-bottom, margin-left.</td>
						</tr>
						<tr>
							<td>padding-left</td><td>23px</td><td>Marge intérieure à gauche</td>
						</tr>
						<tr>
							<td>padding-right</td><td>23px</td><td>Marge intérieure à droite</td>
						</tr>
						<tr>
							<td>padding-bottom</td><td>23px</td><td>Marge intérieure en bas</td>
						</tr>
						<tr>
							<td>padding-top</td><td>23px</td><td>Marge intérieure en haut</td>
						</tr>
						<tr>
							<td>padding</td><td>23px 5px 23px 5px (haut, droite, bas, gauche)</td><td>Super-propriété de marge intérieure. Combine : padding-top, padding-right, padding-bottom, padding-left.</td>
						</tr>
						<tr>
							<td>border-width</td><td>3px</td><td>Épaisseur de bordure</td>
						</tr>
						<tr>	
							<td>border-color</td><td>nom, rgb(rouge,vert,bleu),<br/> rgba(rouge,vert,bleu,transparence),<br/> #CF1A20...</td><td>Couleur de bordure</td>
						</tr>
						<tr>
							<td>border-style</td><td>solid, dotted, dashed, double, groove, ridge, inset, outset</td><td>Type de bordure</td>
						</tr>
						<tr>	
							<td>border</td><td>3px solid black</td><td>Super-propriété de bordure. Combine border-width, border-color, border-style. Existe aussi en version border-top, border-right, border-bottom, border-left.</td>
						</tr>
						<tr>
							<td>border-radius</td><td>5px</td><td>Bordure arrondie</td>
						</tr>
						<tr>
							<td>box-shadow</td><td>6px 6px 0px black</td><td>(horizontale, verticale, fondu, couleur) Ombre de boîte</td>
						</tr>
					</table>		
				</ul>
				<h3 id="listes">Tableau des propriétés des listes.</h3>
				<ul>
					<table>
						<tr>
							<th>Propriété</th><th>Valeurs (exemples)</th><th>Description</th>
						</tr>
						<tr>
							<td>list-style-type</td><td>disc, circle, square, decimal, lower-roman, upper-roman, lower-alpha, upper-alpha, none</td><td>Type de liste</td>
						</tr>

						<tr>
							<td>list-style-position</td><td>inside, outside</td><td>Position en retrait</td>
						</tr>
						<tr>
							<td>list-style-image</td><td>url('puce.png')</td><td>Puce personnalisée</td>
						</tr>
						<tr>
							<td>list-style</td><td>-</td><td>Super-propriété de liste. Combine list-style-type, list-style-position, list-style-image.</td>
						</tr>
					</table>
				</ul>
				<h3 id="tableau">Tableau des propriétés des tableaux et du curseur</h3>
				<ul>
					<table>
						<tr>
							<th>Propriété</th><th>Valeurs (exemples)</th><th>Description</th>
						</tr>
						<tr>
							<td>border-collapse</td><td>collapse, separate</td><td>Fusion des bordures</td>
						</tr>
						<tr>
							<td>empty-cells</td><td>hide, show</td><td>Affichage des cellules vides</td>
						</tr>
						<tr>
							<td>caption-side</td><td>bottom, top</td><td>Position du titre du tableau</td>
						</tr>
					</table>
					<p>Autres propriétés</p>
					<table>
						<tr>
							<th>Propriété</th><th>Valeurs (exemples)</th><th>Description</th>
						</tr>
						<tr>
							<td>cursor</td><td>crosshair, default, help, move, pointer, progress, text, wait, e-resize, ne-resize, auto...</td><td>Curseur de souris</td>
						</tr>
					</table>

				</ul>
			</section>
		</div>
		<?php include("../footer.php");?>
	</body>
</html>