<!DOCTYPE html>
<html>
	<head>
		<title>phptabfonction</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../fonts_style/style.css"/>
	</head>
	
	<body>	
		<div id="container">
			<nav style="margin-left: -180px;margin-top: 150px;">
				<h2>
					<span style="color:white;">navigation</span>			
					<a href="#tableaux"><h4>Les tableaux</h4></a>
					<a href="#parcourir"><h4>Parcourir un array</h4></a>
					<a href="#recherche"><h4>Recherche dans un array</h4></a>
					<a href="#fonctions"><h4>Les fonctions en PHP</h4></a>
					<a href="#preexistantes"><h4>Fonctions pré-existantes</h4></a>
					<a href="#include"><h4>Les inclusions de pages</h4></a>
					<a href="phptransmission.php">chapitre suivant...</a>
					<a href="phpbases.php">chapitre précédent...</a>
					<div id="allerEnHautIcone"><a href="#container"><img src="../png/allerEnHaut.png"></a></div>
				</h2>
			</nav>
			<div>
				<div id="entete1">			
					<span><h1>PHP : tableaux et fonctions</h1></span><br/>
					<div id="flexDirRow">
						<a href="../index.php" class="bouton_hor_nav">Acceuil</a>
						<a id="c" class="bouton_hor_nav">C++</a>
						<a id="Qt" class="bouton_hor_nav">Qt</a>
						<a id="html" class="bouton_hor_nav">HTML 5</a>
						<a id="css" class="bouton_hor_nav">CSS 3</a>		
						<a id="javascript" class="bouton_hor_nav">JAVASCRIP</a>
						<a id="phpMySql" class="bouton_hor_nav" style="background-color: #8892BF;">PHP MySQL</a>		
					</div>
					<div id="navigation" style="border: 2px solid  #8892BF;">
						<a href="phpbases.php" class="cat">Les bases</a>
						<a href="phptabfonction.php" class="cat"  style="background-color: #8892BF;">Tableaux/fonctions</a>
						<a href="phptransmission.php"  class="cat">Transmission</a>
						<a href="phpbdd.php"  class="cat">Les BDD</a>
						<a href="phpsql.php"  class="cat">Langage SQL</a>
						<a href="phpregex.php"  class="cat">Regex</a>
					</div>
					<em>Cette page est inspirée par le cours <a href="https://openclassrooms.com/courses/concevez-votre-site-web-avec-php-et-mysql">"concevez votre site web avec php et mysql"</a> du MOOC <a href="https://openclassrooms.com">openclassrooms</a>. Créateur : <a href="https://openclassrooms.com/membres/mateo21">Mathieu Nebra</a></em>
					</div>
					<script src="../js/ajax.js"></script>
					<script src="../js/nav2.js"></script>
					<br/>
				</div>
				<section>
				<?php include("../html/regexhtml.php");?>
				<!--tableaux-->
				<h3 id="tableaux">Les tableaux en php</h3>
				<ul>
					<p>Les tableaux numérotés : les variables deviennent des <em>arrays</em>.<br/>
				Les arrays numérotés permettent de stocker une série d'éléments du même type.</p>
<?php
$texte = "<pre>&lt;?php
// La fonction ARRAY permet de créer un ARRAY
&dollar;variable = array ('valeur1', 'valeur2', 'valeur3', 'valeur4', 'valeur5');
?>

/*Autre notation*/
&lt;?php
&dollar;variable[0] = 'valeur1';
&dollar;variable[1] = 'valeur2';
&dollar;variable[2] = 'valeur3';
?>

/*Php met automatiquement les numéros*/
&lt;?php
&dollar;variable[] = 'valeur1'; // Créera $.variable[0]
&dollar;variable[] = 'valeur2'; // Créera $.variable[1]
&dollar;variable[] = 'valeur3'; // Créera $.variable[2]
?>

/*AFFICHAGE D'UN TABLEAU NUMEROTE*/
&lt;?php
echo $.variable[1]; // affichera la variable 2
?>
</pre>";
ReGex($texte);
?>				
					<em><p>Les tableaux/arrays associatifs : des étiquettes (clé) à la place des numéros.</em><br/>
				Les arrays associatifs permettent de découper une donnée en plusieurs sous-éléments.</p>
<?php
$texte = "<pre>&lt;?php
// On crée une ARRAY $.variable
&dollar;variable = array (
    'cle1' => 'valeur1',
    'cle2' => 'valeur2',
    'cle3' => 'valeur3',
    'cle4' => 'valeur4');
?>
	
/*AUTRE NOTATION*/
&lt;?php
&dollar;variable['cle1'] = 'valeur1';
&dollar;variable['cle2'] = 'valeur2';
&dollar;variable['cle3'] = 'valeur3';
&dollar;variable['cle4'] = 'valeur4';
?>

/*AFFICHAGE D'UN TABLEAU ASSOCIATIF*/
&lt;?php
echo &dollar;variable['cle2']; // affichera la valeur 2
?></pre>";
ReGex($texte);
?>
				</ul>
				<!--parcourir les arrays-->
				<h3 id="parcourir">Parcourir un array</h3>
				<ul>
					<p>Parcourir un <em>array numéroté</em> grâce a la boucle <em>for</em> : </p>
<?php
$texte = "<pre>&lt;?php
&dollar;variable = array ('valeur1', 'valeur2', 'valeur3', 'valeur4', 'valeur5'); // On crée notre ARRAY $.variable

for (&dollar;numero = 0; &dollar;numero < 5; &dollar;numero++;) // Puis on fait une boucle pour tout afficher :
{
    echo &dollar;variable[$.numero] . '&lt;br /&gt;'; // affichera $.variable[0],$.variable[1] etc.
}
?></pre>";
ReGex($texte);
?>	
					<p>Parcourir tout type d'<em>arrays</em> grâce a la fonction <em>foreach</em> : </p>
<?php
$texte = "<pre>/*ARRAY NUMEROTE*/
&lt;?php
&dollar;variable = array ('valeur1', 'valeur2', 'valeur3', 'valeur4', 'valeur5');

foreach(&dollar;variable as &dollar;element)
{
    echo &dollar;element . '&lt;br />'; // affichera $.variable[0], $.variable[1] etc.
}
?>

/*ARRAY ASSOCIATIF*/
&lt;?php
&dollar;variable = array (
    'cle1' => 'valeur1',
    'cle2' => 'valeur2',
    'cle3' => 'valeur3',
    'cle4' => 'valeur4');

foreach(&dollar;variable as &dollar;element)
{
    echo &dollar;element . '&lt;br />'; // affichera $.variable[0], $.variable[1] etc.
}
?>

/*ON PEUT AUSSI RECUPERER LES CLES DES ELEMENTS*/
&lt;?php
/* création de l'ARRAY */
foreach(&dollar;variable as &dollar;cle => &dollar;element)
{
    echo '[' . &dollar;cle . '] vaut ' . &dollar;element . '&lt;br />';
}
?></pre>";
ReGex($texte);
?>	
					<p>Afficher rapidement un array avec <code>print_r</code> : afficher la totalité du contenu d'un array. Utile pour le débogage.</p>
<?php
$texte = "<pre>&lt;?php
&dollar;variable = array (
    'cle1' => 'valeur1',
    'cle2' => 'valeur2',
    'cle3' => 'valeur3',
    'cle4' => 'valeur4');

echo '&lt;pre&gt;';
print_r(&dollar;variable);
echo '&lt;/pre&gt;';
?></pre>";
ReGex($texte);
?>	
					<p>Résultat :</p>
					<img src="../png/phpchap1_2.png"/>
				</ul>
				<!--Recherche-->
				<h3 id="recherche">Recherche dans un <em>array</em>.</h3>
				<ul>
					<table>
						<tr>
							<th>fonctions</th><th>description</th>
						</tr>
						<tr>
							<td><code>array_key_exists</code></td><td>pour vérifier si une clé existe dans l'array</td>
						</tr>
						<tr>
							<td><code>in_array</code></td><td>pour vérifier si une valeur existe dans l'array</td>
						</tr>
					</table>
					<p>Ces deux fonctions renvoie un booléen qui permettent de faire facilement un test :</p>
<?php
$texte = "<pre>/*RECHERCHE DE L'EXISTANCE D'UNE CLE*/
if (array_key_exists('cle2', &dollar;variable)) // mettre le parametre cle entre guillemets
{
    echo 'La clé &quot;cle2&quot; se trouve dans l'array &dollar;variable !';
}

/*RECHERCHE DE L'EXISTANCE D'UNE VALEUR*/
if (in_array('valeur2', &dollar;variable)) // mettre le parametre valeur entre guillemets
{
    echo 'La valeur &quot;valeur2&quot; se trouve dans l'array &dollar;variable !';
}</pre>";
ReGex($texte);
?>
					<p>Récupérer la clé d'une valeur dans l'array : <code>array_search</code></p>
					Cette fonction renvoie false si elle ne trouve pas la valeur et :
					<ul>
						- soit le numéro de la clé dans un array numéroté.<br/>
						- soit la clé correspondante à la valeur recherchée dans un array associatif.
					</ul>
<?php
$texte = "<pre>&lt;?php
/*créationde l'ARRAY (numéroté ou associatif)*/
$&dollar;position = array_search('valeur1', &dollar;variable); // dans un ARRAY numéroté
echo '&quot;valeur2&quot; se trouve en position ' . &dollar;position . '&lt;br />'; // affichera : &quot;&quot;valeur1&quot; se trouve en position 0

&dollar;cle = array_search('valeur4', &dollar;variable); // dans un ARRAY associatif
echo '&quot;valeur4&quot; correspond à la clé :' . &dollar;cle; / affichera : &quot;&quot;valeur4&quot; correspond a la clé : cle4
?></pre>";
ReGex($texte);
?>
				</ul>
				<!--Fonctions-->
				<h3 id="fonctions">Les fonctions en PHP</h3>
				<ul>
					<p>Créer un fonction avec ou sans paramètre(s) :</p>
<?php
$texte = "<pre>/*FONCTION SANS PARAMETRE*/
&lt;?php
function fonctionSansParametre()
{
	echo 'Un text &lt;br/>';
}

/*FONCTION AVEC PARAMETRE*/
&lt;?php
function fonctionAvecParametre(&dollar;parametre1, &dollar;parametre2, &dollar;parametre3)
{
    echo 'Le parametre1 est ' . &dollar;parametre1 . 
     		', le parametre2 est ' . &dollar;parametre2 .
     		', le parametre3 est ' . &dollar;parametre3 .' !';
}
?></pre>";
ReGex($texte);
?>
					<p>Appeler une fonction avec ou sans paramètre(s) :</p>
<?php
$texte = "<pre>&lt;?php
fonctionSansParametre()
?>

&lt;?php
&dollar;unNombre = 5;
fonctionAvecParametre(&quot;par1&quot;, &dollar;unNombre, 10)
?></pre>";
ReGex($texte);
?>
					<p>Voici ce que cela donnera :</p>
					<img src="../png/phpchap1_3.png"/>

					<p>Fonction qui renvoie une valeur grâce à l'instruction <code>return</code> :</p>
<?php
$texte = "<pre>&lt;?php
/* FONCTION QUI MULTIPLI 2 nombres */
function multiplier(&dollar;nombre1, &dollar;nombre2)
{
   &dollar;resultat = &dollar;nombre1 * &dollar;nombre2; // calcul
   return &dollar;resultat; // indique la valeur à renvoyer, ici le résulatt de la multiplication
}

/* APPEL DE LA FONCTION */
&dollar;multiplication = multiplier(6, 9);
echo 'Le résultat de la multiplication de 6 et 9 est ' . &dollar;multiplication;
?></pre>";
ReGex($texte);
?>
					<img src="../png/phpchap1_4.png"/>
				</ul>
				<!--fonction pré-existante-->
				<h3 id="preexistantes">Les fonctions prêtes à l'emploi de PHP</h3>
				<ul>

					<p>PHP offre de nombreuse fonction dejà programmer qu'il suffit d'appeler :</p>
					<ul>
						<li>- Une fonction qui permet de rechercher et de remplacer des mots dans une variable</li>
						<li>- Une fonction qui envoie un fichier sur un serveur</li>
						<li>- Une fonction qui permet de créer des images miniatures (aussi appelées thumbnails)</li>
						<li>- Une fonction qui envoie un mail avec PHP (très pratique pour faire une newsletter !)</li>
						<li>- Une fonction qui permet de modifier des images, y écrire du texte, tracer des lignes, des rectangles, etc</li>
						<li>- Une fonction qui crypte des mots de passe</li>
						<li>- Une fonction qui renvoie l'heure, la date…</li>
						<li>- Etc.</li>
					</ul>
					<p>Une liste des fonctions et leurs documentations est disponilbe <a href="http://fr.php.net/manual/fr/funcref.php" target="_blank"><em>ici</em></a>.</p>
					<p>Traitement des chaînes de caractères :</p>
					<table>
						<tr>
							<th>fonction</th><th>description</th><th>paramètres</th>
						</tr>
						<tr>
							<td>strlen</td><td>retourne la longueur d'une chaîne de caractères (espaces compris).</td><td>la chaîne de caractère entre guillemet</td>
						</tr>
						<tr>
							<td>str_replace</td><td>remplace une chaîne de caractères par une autre.</td><td>1- la chaîne qu'on recherche entre guillemet<br/>
																												2- la chaîne qui remplace entre guillemet<br/>
																												3- la chaîne ou on fait la recherche entre guillemet</td>
						</tr>
						<tr>
							<td>str_shuffle</td><td>Mélange aléatoirement les caractères d'une chaîne</td><td>la chaîne de caractère entre guillemet</td>
						</tr>
						<tr>
							<td>strtolower</td><td>met tous les caractères d'une chaîne en minuscules.</td><td>la chaîne de caractère entre guillemet</td>
						</tr>
						<tr>
							<td>strtoupper</td><td>met tous les caractères d'une chaîne en majuscules.</td><td>la chaîne de caractère entre guillemet</td>
						</tr>
					</table>
<?php
$texte = "<pre>/*EXEMPLE DE STR_REPLACEµ:
&lt;?php
&dollar;ma_variable = str_replace('b', 'p', 'bim bam boum');
 
echo &dollar;ma_variable;
?></pre>";
ReGex($texte);
?>
					<img src="../png/phpchap1_5.png"/>
					<p>Tableau des paramètres à envoyer à la fonction <code>date ()</code> (renvoie l'heure et la date) :</p>
					<table>
						<tr>
							<th>Paramètre (respecter les majuscules/minuscules)</th><th>Description</th>
						</tr>
						<tr>
							<td>H</td><td>Heure</td>
						</tr>
						<tr>
							<td>i</td><td>Minute</td>
						</tr>
						<tr>
							<td>d</td><td>Jour</td>
						</tr>
						<tr>
							<td>m</td><td>Mois</td>
						</tr>
						<tr>
							<td>Y</td><td>Année</td>
						</tr>						
					</table>
					<p>Ainsi :</p>
<?php
$texte = "<pre>&lt;?php
&dollar;annee = date('Y');
echo &dollar;annee;
?></pre>";
ReGex($texte);
?>
					<p>Renvoie l'année : 2017.</p>
				</ul>
				<!--inclure des portions de page-->
				<h3 id="include">Inclusion de pages</h3>
				<ul>
					<p>Shéma du principe d'inclusion de pages :</p>
					<img src="../png/phpchap1_6.png" title="shéma tirer du cours concevez-votre-site-web-avec-php-et-mysq de openclassrooms" />
					<p>Le code PHP :</p>
<?php
$texte = "<pre>&lt;?php include(&quot;adresseDeLaSectionAInclure.php&quot;); ?></pre>";
ReGex($texte);
?>
				</ul>
			</section>
		</div>
	<?php include("../footer.php");?>
	</body>
</html>