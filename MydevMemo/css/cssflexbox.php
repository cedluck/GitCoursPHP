<!DOCTYPE html>
<html>
	<head>
		<title>cssflexbox</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../fonts_style/style.css"/>
	</head>
	
	<body>	
		<div id="container">
			<nav style="margin-left: -180px;margin-top: 150px;">
				<h2>
					<span style="color:white;">navigation</span>			
					<a href="#principe"><h4>Propriété flex</h4></a>
					<a href="#direction"><h4>Direction</h4></a>
					<a href="#return"><h4>Retour à la ligne</h4></a>
					<a href="#alignement"><h4>Alignement</h4></a>
					<a href="#repartission"><h4>Répartission</h4></a>
					<a href="#order"><h4>Ordre et taille</h4></a>
					<a href="cssmediaqueries.php">chapitre suivant...</a>
					<a href="cssproprietes.php">chapitre précédent...</a>
					<div id="allerEnHautIcone"><a href="#container"><img src="../png/allerEnHaut.png"></a></div>
				</h2>
			</nav>
			<div>
				<div id="entete1">			
					<span><h1>CSS3 : la flexbox</h1></span><br/>
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
						<a href="cssflexbox.php"  class="cat" style="background-color: #0171BA;">Flexbox</a>
						<a href="cssmediaqueries.php"  class="cat">Media Queries</a>
					</div>
					<em>Cette page est inspirée par le cours <a href="https://openclassrooms.com/courses/apprenez-a-creer-votre-site-web-avec-html5-et-css3">"apprenez a creer votre site web avec html5 et css3"</a> du MOOC <a href="https://openclassrooms.com">openclassrooms</a>. Créateur : <a href="https://openclassrooms.com/membres/mateo21">Mathieu Nebra</a></em>
				</div>
				<script src="../js/ajax.js"></script>
				<script src="../js/nav2.js"></script>
				<br/>
			</div>
			<section>
				<?php include("../html/regexhtml.php");?>
				<?php include("cssHighlight.php");?>
				<!--le principe-->
				<h3 id="principe">Ré-arranger des éléments dans un conteneur grâce à la flexbox</h3>
				<ul>
					<p>Code Html :</p>
<?php
$texte = "<pre>&lt;div id=&quot;conteneur&quot;&gt;
    &lt;div class=&quot;element&quot;&gt;Elément 1&lt;/div&gt;
    &lt;div class=&quot;element&quot;&gt;Elément 2&lt;/div&gt;
    &lt;div class=&quot;element&quot;&gt;Elément 3&lt;/div&gt;
&lt;/div&gt;</pre>";
RegEx($texte);
?>			
						<p>Propriété flex de la feuille de style :</p>
<?php
$texte = "<pre>#conteneur /*le selecteur sélectionne le conteneur*/
{
    display: flex;
}</pre>";
RegexCss($texte);
?>
						<p>Par défaut la propriété flex arrange les éléments sur une ligne :</p>
					<img src="../png/csschap2_1.png"/>
				</ul>
				<!--direction-->
				<h3 id="direction">Choisir une direction</h3>
				<ul>
					<p>Propriété <code>flex-direction</code> :</p>						
<?php
$texte = "<pre>#conteneur
{
    display: flex;
    flex-direction: colmun;
}</pre>";
RegexCss($texte);
?>	
					<img src="../png/csschap2_2.png"/>
					<br/><br/>						
<?php
$texte = "<pre>#conteneur
{
    display: flex;
    flex-direction: colmun-reverse;
}</pre>";
RegexCss($texte);
?>	
					<img src="../png/csschap2_3.png"/>
					<p>Possibilité d'utiliser row-reverse.</p>
				</ul>
				<!--retour à la ligne-->
				<h3 id="return">Retour à la ligne et alignement</h3>
				<ul>
					<p>Retour à la ligne, propriété <code>flex-wrap</code>:</p>						
<?php
$texte = "<pre>#conteneur
{
    display: flex;
    flex-wrap: wrap;
}</pre>";
RegexCss($texte);
?>	
					<img src="../png/csschap2_4.png"/>
				</ul>
				<!--alignement-->
				<h3 id="alignement">Alignement sur l'axe principal et l'axe secondaire</h3>
				<ul>
					<p>Principe de base :</p>
					<table>
						<tr>
							<th></th><th>axe principal</th><th>axe secondaire</th>
						</tr>
						<tr>
							<td>alignement </td><td>horizontale</td><td>verticale</td>
						</tr>
						<tr>
							<td>alignement </td><td>verticale</td><td>horizontale</td>
						</tr>
						<tr>
							<td>propriété</td><td><code>justify-content</code></td><td><code>align-items</code></td>
						</tr>


					</table>
					<p>Alignement de l'axe principal :</p>						
<?php
$texte = "<pre>#conteneur
{
    display: flex;
    justify-content: space-around;
}</pre>";
RegexCss($texte);
?>	
					<p>S'applique aussi si les éléments sont alignés dans une direction verticale.</p>
					<img src="../png/csschap2_5.png"/>
					<br/>
					<p>Aligner sur l'axe secondaire :</p>						
<?php
$texte = "<pre>#conteneur
{
    display: flex;
    justify-content: center;
    align-items: center;
}</pre>";
RegexCss($texte);
?>	
					<br/>
					<img src="../png/csschap2_6.png"/>
					<br/><br/>
					<p>Centrage grâce à la propriété <code>margin</code> :</p>						
<?php
$texte = "<pre>#conteneur
{
    display: flex;
}
.element
{
    margin: auto;
}</pre>";
RegexCss($texte);
?>	
					<br/>
					<p>Aligner un seul élément :</p>						
<?php
$texte = "<pre>#conteneur
{
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
}

.element:nth-child(2) /*On prend le deuxième bloc élément */
{
    background-color: blue;
    align-self: flex-end; /*Seul ce bloc sera aligné à la fin */
}

/*...*/</pre>";
RegexCss($texte);
?>
					<img src="../png/csschap2_7.png"/>	
				</ul>
				<!--répartission-->
				<h3 id="repartission">Répartir sur plusieurs lignes</h3>
				<ul>
					<p>A partir de :</p>						
<?php
$texte ="<pre>&lt;div id=&quot;conteneur&quot;&gt;
    &lt;div class=&quot;element&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;element&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;element&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;element&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;element&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;element&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;element&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;element&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;element&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;element&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;element&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;element&quot;&gt;&lt;/div&gt;
&lt;/div&gt;</pre>";
ReGex($texte);
?>
					<p>On peut répatir les éléments sur plusieurs lignes avec <code>flex-wrap</code> (retour a la ligne) :</p>						
<?php
$texte = "<pre>#conteneur
{
    display: flex;
    flex-wrap: wrap;
}</pre>";
RegexCss($texte);
?>	
					<img src="../png/csschap2_8.png"/>
					<br/><br/>
					<p>Voici comment se répartiront les élements grâce à la propriété <code>align-content</code> :</p>
					<table>
						<tr>
							<th>valeur</th><th>description</th>
						</tr>
						<tr>
							<td>stretch(par défault)</td><td>les éléments s'étirent pour occuper tout l'espace</td>
						</tr>
						<tr>
							<td>flex-start</td><td>les éléments sont placés au début</td>
						</tr>
						<tr>
							<td>flex-end</td><td>les éléments sont placés à la fin</td>
						</tr>
						<tr>
							<td>center</td><td>les éléments sont placés au centre</td>
						</tr>
						<tr>
							<td>space-between</td><td>les éléments sont séparés avec de l'espace entre eux</td>
						</tr>
						<tr>
							<td>space-around </td><td>les éléments sont séparés avec de l'espace entre eux,<br/> mais il y a aussi de l'espace au début et à la fin</td>
						</tr>
					</table>
					<br/>
					<p>Ces différentes valeurs produiront ces différentes répartissions :</p>
					<img src="../png/csschap2_9.png"/>
				</ul>
				<!--ordre et taille-->
				<h3 id="order">Choisir l'ordre des éléments et jouer sur leurs tailles.</h3>
				<ul>
					<p>Changer l'ordre des éléments grâce a la propriété <code>order</code> :</p>
<?php
$texte ="
<pre>.element:nth-child(1) /*selectionne élément 1 (orange)*/
{
    order: 3; /*place élément 1 en 3ieme position*/
}
.element:nth-child(2) /*selectionne élément 2 (bleu)*/
{
    order: 1; /*place élément 2 en 1ière position*/
}
.element:nth-child(3) /*selectionne élément 3 (vert)*/
{
    order: 2; /*place élément 3 en 2ieme position*/
}</pre>";
RegexCss($texte);
?>				
					<br/>
					<img src="../png/csschap2_10.png"/><br/><br/>
					<p>Faire grossir ou maigrir un éléments grâce à <code>flex</code> :</p>
<?php
$texte ="<pre>.element:nth-child(2) /*sélectionne le 2ieme élément*/
{
    flex: 1; /*étire l'élément*/
}</pre>";
RegexCss($texte);
?>				
					<img src="../png/csschap2_11.png"/><br/><br/>
					<p>La valeur de la propriété <code>flex</code> est relative aux autres éléments :</p>
<?php
$texte ="<pre>.element:nth-child(1)
{
    flex: 2; /*élément 1 est 2X plus gros que élément 2*/
}
.element:nth-child(2)
{
    flex: 1;
}</pre>";
RegexCss($texte);
?>
				<img src="../png/csschap2_12.png"/><br/><br/>
				<p><code>flex</code> est une super-propriété qui combine <code>flex-grow</code> (grossir) <code>flex-shrink</code> (maigrir) <br/>
				et <code>flex-basis</code> (taille par défault).</p>	
				</ul>
			</section>
		</div>
		<?php include("../footer.php");?>
	</body>
</html>