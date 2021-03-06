<!DOCTYPE html>
<html>
	<head>
		<title>javascript</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../fonts_style/style.css"/>
		
	</head>

	<body>		
		<div id="container">
			<nav style="margin-left: -180px;margin-top: 150px;">
				<h2>
					<span style="color:white;">navigation</span>				
					<a href="#environnement"><h4>L'environnement de travail</h4></a>
					<a href="#typeNombre"><h4>Le type nombre</h4></a>
					<a href="#typeChaine"><h4>Le type chaîne</h4></a>
					<a href="#affVal"><h4>Affichage d'une valeur</h4></a>
					<a href="#comm"><h4>Commentaires</h4></a>
					<a href="#declareVar"><h4>Déclarer une variable</h4></a>
					<a href="#notionExp"><h4>La notion d'expression</h4></a>
					<a href="#convType"><h4>Conversions de types</h4></a>
					<a href="#saisie"><h4>Saisie d'informations</h4></a>
					<a href="#saisieNb"><h4>Saisie d'un nombre</h4></a>
					<a href="#nommageVar"><h4>Nommage de variable</h4></a>				
					<a href="#instructions"><h4>IF, ELSE et ELSE IF</h4></a>
					<a href="#opeLog"><h4>Opérateurs logique</h4></a>
					<a href="#instructionSwitch"><h4>L'instruction SWITCH</h4></a>
					<a href="#boucles"><h4>Les boucles</h4></a>
					<a href="javascriptpoo.php">chapitre suivant...</a>
					<div id="allerEnHautIcone"><a href="#container"><img src="../png/allerEnHaut.png"></a></div>
				</h2>
			</nav>			
				<div id="entete1">			
					<span><h1>INTRODUCTION A JAVASCRIPT</h1></span><br/>	
					<div id="flexDirRow" class="javascript">
						<a href="../index.php" class="bouton_hor_nav">Acceuil</a>
						<a id="c" class="bouton_hor_nav">C++</a>
						<a id="Qt" class="bouton_hor_nav">Qt</a>
						<a id="html" class="bouton_hor_nav">HTML 5</a>
						<a id="css" class="bouton_hor_nav">CSS 3</a>			
						<a id="javascript" class="bouton_hor_nav" style="background-color: #F7DF1E;">JAVASCRIP</a>
						<a id="phpMySql" class="bouton_hor_nav">PHP MySQL</a>	
					</div>					
					<div id="navigation" style="border: 2px solid #F7DF1E;">
						<a href="javascriptintro.php" class="cat" style="background-color:#F7DF1E;">Intro >></a>
						<a href="javascriptpoo.php"  class="cat">Poo >></a>
						<a href="../enconstruction.php"  class="cat">D.O.M</a>
						<a href="../enconstruction.php"  class="cat">Dynamisme</a>
						<a href="../enconstruction.php"  class="cat">Server Web</a>
					</div>
					<script src="../js/ajax.js"></script>
					<script src="../js/nav2.js"></script>
					<em>Cette page est inspirée par le cours <a href="https://openclassrooms.com/courses/apprenez-a-coder-avec-javascript">"apprenez a coder avec javascript"</a> du MOOC <a href="https://openclassrooms.com">openclassrooms</a>. Créateur : <a href="https://openclassrooms.com/membres/bpesquet">Baptiste Pesquet</a></em>
					
				</div>
				
				<section>
					<?php include("regexjavascript.php");?>
					<!--ENVIRONEMENT-->
					<h3 id="environnement">L'environnement de travail</h3>
					<ul>
						<p>Il y a plusieurs manières de traviller avec Javascript :<br/>
						<br/>
						On peut soit coder avec Javascript en ligne grâce à <em><a  href="https://jsfiddle.net">JSFidle</a></em>, <em><a  href="http://jsbin.com/">JS Bin</a></em> ou <em><a  href="https://codepen.io/">CodePen</a></em>.<br/>
						<br/>
						Ou on peut créer son propre environnement de travail avec un IDE (Eclipse, WebStorm, VisualStudio) ou un éditeur de texte comme Sublime Text, Atom ou <em><a  href="http://brackets.io/">Brackets</a></em>.<br/>
						Il faut utiliser l'outil de dévelopement des navigateurs. Celui de Firefox est recommandé (touche alt -> outils -> Développement Web -> Outils de développement).</br>
						Associé votre page HTML avec le code Javascript grâce a la balise <<span style ="color:fuchsia">script</span> src="...">  dans la balise body de votre code HTML comme ceci :</br/>
						</p><img src="../png/jschap1_0.png"/>
						<p>Il est recommander de créer un dossier html et un dossier js pour stocker vos pages web et vos fichiers javascript associés :</p>
						<img src="../png/browser.png"/>
						<p>VOUS POUVEZ COMMENCER A CODER !!</p>
					</ul>
					<!--TYPE NOMBRE-->
					<h3 id="typeNombre">Le type nombre</h3>
					<ul>
						<p>Une valeur de type nombre (number) représente une valeur numérique, autrement dit une quantité. Comme en mathématiques, on distingue les valeurs entières (ou entiers) 0, 1, 2, 3... et les valeurs réelles (ou réels) auxquelles on ajoute des chiffres après la virgule pour plus de précision.<br/>
						Le résultat suivant est obtenu en tapant les opérations dans l'onglet console de l'outils de développement Web de Firefox (en bas, après le signe >> vert) :</p>
						<img src="../png/jschap1_1.png"/>
					</ul>
					<!--TYPE CHAINE-->
					<h3 id="typeChaine">Le type chaîne</h3>				
					<ul>
						<p> Une valeur de type chaîne de caractères (en abrégé chaîne, ou encore string en anglais) représente un texte. Ces valeurs sont délimitées par une paire de guillemets doubles :"Ceci est une chaîne". Pour inclure dans une chaîne certains caractères spéciaux, on utilise le caractère\ (qui se prononce "antislash" ou "backslash" en anglais) qui donne un sens particulier au caractère suivant. Par exemple,\n permet d'ajouter un retour à la ligne dans une chaîne.<br/>
						L'opérateur+ peut être appliqué à deux valeurs de type chaîne. Son résultat est la jointure de ces deux chaînes, appelée concaténation.</p>
						<img src="../png/jschap1_2.png"/>
					</ul>
					<!--AFFICHAGE VALEUR-->
					<h3 id="affVal">Affichage d'une valeur</h3>
					<ul>
						<p>Voici comment afficher le résultat de valeurs dans la console de votre outils de développent sur firefox. Tapez ce code dans le fichier .js de votre dossier js</p>
<?php
$texte = "<pre>console.log(\"Bonjour en Javascript !\");
console.log(\"Faisons quelques calculs.\");
console.log(4 + 7);
console.log(12 / 0);
console.log(\"Au revoir !\");</pre>";
RegEx($texte);
?>
						
						<p>Résultat dans la console lorsque vous lancez votre fichier html associé :</p>
						<img src="../png/jschap1_3.png"/>
					</ul>
					<!--COMMENTAIRES-->
					<h3 id="comm">Commentaires</h3>
					<ul>
						<p>Voici comment on écrit des commentaires dans un code javascript :</p>
<?php
$texte = "<pre>console.log(\"Bonjour en JavaScript !\");
//console.log(\"Faisons quelques calculs.\");
/* Un commentaire 
sur plusieurs
lignes */</pre>";
RegEx($texte);					
?>						
						
					</ul>
					<!--DECLARER VARIABLE-->
					<h3 id="declareVar">Déclarer une variable</h3>
					<ul>
						<p>Voici un exemple de code qui déclare plusieurs variables puis affiche leurs valeurs.</p>
<?php
$texte = "<pre>var x;
console.log(x);

var a = 3.14;
console.log(a);

var b = 0;
b += 1;
b++;
console.log(b);

var h=\"5\";
console.log(h+1);
h = Number(\"5\");
console.log(h+1);
</pre>";
RegEx($texte);
?>
						<p>Résultat dans la console</p>
						<img src="../png/jschap1_4.png"/>
					</ul>
					<!--NOTION D'EXPRESSION-->
					<h3 id="notionExp">La notion d'expressions</h3>
					<ul>
						<p>Une expression est un morceau de code qui produit une valeur<br/>
						Le calcul de la valeur d'une expression s'appelle l'évaluation.</p>
<?php
$texte = "<pre>// 3 est une expression dont la valeur est le nombre 3
var c = 3;
// d est une expression dont la valeur est celle de c (ici 3)
var d = c;
// (d + 1) est une expression
// Sa valeur est celle de d augmentée de 1 (ici 4)
d = d + 1; // d contient la valeur 4
console.log(d); // Affiche 4
</pre>";
RegEx($texte);
?>
						<p>La console affichera 4</p>
					</ul>
					<!--CONVERSIONS DE TYPE-->
					<h3 id="convType">Conversions de types</h3>
					<ul>
						<p>L'évaluation d'une expression peut entraîner des conversions de type. Elle sont dites conversions implicites : elle se font automatiquement.<br/>
					 	En cas d'échec de la conversion d'un nombre, la valeur du résultat est NaN (Not a Number).<br/>
					 	JavaScript dispose des ordres Number() et String() qui convertissent respectivement en un nombre et une chaîne la valeur placée entre parenthèses.</p>
<?php 
$texte = "<pre>var f = 100;
console.log(\"La variable f contient la valeur \" + f);

var g = \"cinq\" * 2;
console.log(g);

var h = \"5\";
console.log(h + 1); // Concaténation

h = Number(\"5\");
console.log(h + 1); // Addition numérique
</pre>";
RegEx($texte);
?>
						<p>La console affichera : </p>
						<img src="../png/jschap1_5.png"/>
					</ul>
					<!--SAISIE-->
					<h3 id="saisie">Saisie et affichage d'informations</h3>
					<ul>
						<p>Voici une façon de saisir des informations et de les afficher.</p>
<?php
$texte ="<pre>var prenom = prompt(\"Entrez votre prénom\");
alert(\"Bonjour, \" + prenom);</pre>";
RegEx($texte);
?>
						<p>Une boîte de dialogue apparaît pour demander la saisie du prénom. Puis une autre affichera "Bonjour," suivi du prénom.</p>
					</ul>
					<!--SAISIE DE NOMBRE-->
					<h3 id="saisieNb">Saisie d'un nombre</h3>
					<ul>
						<p>Voici comment saisir un nombre</p>
<?php
$texte = "<pre>var saisie = prompt(\"Entrez un nombre\"); // saisie est de type chaîne
var nb = Number(saisie); // nb est de type nombre

var nb = Number(prompt(\"Entrez un nombre\")); // nb est de type nombre
</pre>";
RegEx($texte);
?>					
					</ul>
					<!--NOMMAGE-->
					<h3 id="nommageVar">Comment faire pour bien nommer les variables de ses programmes ?</h3>
					<ul>
						<p>Choisir des noms significatifs.<br/>
						Bannir les caractères accentués.<br/>
						Ne pas utiliser les noms réservés du langage.<br/>
						Adopter une convention de nommage : par exemple, les <em>nomsMontantTravauxMaison</em> ou <em>codeClientSuivant</em> respectent la norme <em>camelCase</em>.</p>
					</ul>
					<!--INSTRUCTION IF-->
					<h3 id="instructions">Les instructions if/else et else if</h3>
					<ul>
						<p>La paire d'accolades ouvrante et fermante délimite ce que l'on appelle un bloc de code associé à l'instruction if. Cette instruction représente un test. On peut la traduire par l'ordre suivant : "Si la condition est vraie, alors exécute les instructions contenues dans le bloc de code".</p>
<?php
$texte ="<pre>var nombre = Number(prompt(\"Entrez un nombre  \"));
if (nombre>0){
	console.log(nombre+ \" est positif\");
}
	
var nombre = Number(prompt(\"Entrez un nombre  \"));
if (nombre >= 0){
	console.log(nombre + \" est positif ou nul\");
}</pre>";
	RegEx($texte);
?>
						<p>La console affichera : </p>
						<img src="../png/jschap1_6.png"/>
					</ul>
					<!--INSTRUCTION ELSE-->
					<ul>
						<p>On peut traduire une instruction if/else comme ceci : "Si la condition est vraie, alors exécute les instructions du bloc de code associé au if, sinon exécute celles du bloc de code associé au else".</p>
<?php
$texte ="<pre>var nombre = Number(prompt(\"Entrez un nombre\"));
	if (nombre>0){
		console.log(nombre + \" est positif\");
	}else{
		console.log(nombre+ \" est négatif ou nul\");
}
	
var nombre = Number(prompt(\"Entrez un nombre\"));
	if (nombre>0){
		console.log(nombre + \" est positif\");
	}else{<ul>if (nombre <0){
		console.log(nombre + \" est négatif\");
	}else{
		console.log(nombre+ \" est nul\");
	}
}</pre>";
	RegEx($texte);
?>
						<p>Quand on entre 0 et 5 et la console affiche : </p>
						<img src="../png/jschap1_7.png"/>
					</ul>
					<!--INSTRUCTION ELSE IF-->
					<ul>
						<p>On rencontre fréquemment le cas particulier où la seule instruction d'un bloc <em>else</em> est un <em>if</em> (le <em>else</em> éventuellement associé à ce <em>if</em> ne compte pas comme une seconde instruction). Dans ce cas, il est possible d'écrire ce <em>if</em>  sur la même ligne que le premier <em>else</em>, sans accolades ni indentation.</p>
<?php
$texte ="<pre>var nombre = Number(prompt(\"Entrez un nombre\"));
	if (nombre > 0) {<ul>console.log(nombre + \" est positif\");} else if (nombre < 0) {<ul>console.log(nombre + \" est négatif\");</ul>} else {<ul>   console.log(nombre + \" est nul\");</ul>}</pre>";
	RegEx($texte);
?>
					<p>Avec 5, -1 et 0 la console affichera : </p>
					<img src="../png/jschap1_8.png"/></ul>
					<!--OPERATEUR LOGIQUE-->
					<h3 id="opeLog">Les opérateurs logique ET, OU, NON</h3>
					<ul>
						<p>Opérateur logique ET : &&<br/>
						Opérateur logique OU : ||<br/>
						Opérateur logique NON: ! avant la condition<br/>
						Exemples de ces 3 opérateurs logique :</p>
<?php
$texte ="<pre>var nombre = Number(prompt(\"Entrez un nombre\"));
	if ((nombre >= 0) && (nombre <= 100)){
		console.log(nombre + \" est compris entre 0 et 100\");
	}

	var nombre = Number(prompt(\"Entrez un nombre\"));
	if ((nombre < 0) || (nombre > 100)){
		console.log(nombre + \" est dans l'intervale 0, 100 \");<
	}
	
	var nombre = Number(prompt(\"Entrez un nombre\"));
	if (!(nombre > 100)){
		console.log(nombre + \" est inférieur ou égal à 100\");
	}</pre>";
	RegEx($texte);
?>
						<p>Avec 5 , 110 et -10 la console affichera : </p>
						<img src="../png/jschap1_9.png"/>
					</ul>
					<!--INSTRUCTION SWITCH-->
					<h3 id="instructionSwitch">L'instruction SWITCH</h3>
					<ul>
						<p>Voici un programme :</p>
<?php
$texte ="<pre>var meteo = prompt(\"Quel temps fait-il dehors ?\");

	if (meteo === \"soleil\") {
		console.log(\"Sortez en t-shirt.\");
	} else if (meteo === \"vent\") {
		console.log(\"Sortez en pull.\");
	} else if (meteo === \"pluie\") {
		console.log(\"Sortez en blouson.\");
	} else if (meteo === \"neige\") {
		console.log(\"Restez au chaud à la maison.\");
	} else {
		console.log(\"Je n'ai pas compris !\");
	}</pre>";
	RegEx($texte);
?>
						<p>Lorsqu'un programme consiste à déclencher un bloc d'opérations parmi plusieurs selon la valeur d'une expression, on peut l'écrire en utilisant l'instruction JavaScript <em>switch</em>.</p>
						<?php
$texte ="<pre>var meteo = prompt(\"Quel temps fait-il dehors ?\");
	switch (meteo) {
		case \"soleil\":
			console.log(\"Sortez en t-shirt.\");
	    break;
		case \"vent\":
			console.log(\"Sortez en pull.\");
	    break;
		case \"pluie\":
			console.log(\"Sortez en blouson.\");
	    break;
		case \"neige\":
			console.log(\"Restez au chaud à la maison.\");
	    break;
		default:
			console.log(\"Je n'ai pas compris !\");}</pre>";
	RegEx($texte);
?>
						<p>Les deux programme donne le même résultat :</p>
						<img src="../png/jschap1_10.png"/>
					</ul>
					<!--LES BOUCLE-->
					<h3 id="boucles">Les boucles</h3>
					<ul>
						<p>La boucle <em>while</em> permet de répéter des instructions tant qu'une condition est vérifiée.<br/>
						On l'utilise quand on ne peut pas prévoir le nombre de tours de la boucle.</p>
<?php
$texte ="<pre>console.log(\"Début du programme\");
var nombre = 1;
while (nombre <= 5) {
	console.log(nombre);
    	nombre++;
}
console.log(\"Fin du programme\");</pre>";

	RegEx($texte);
?>
						<p>Résultat dans la console :</p>
						<img src="../png/jschap1_12.png"/>
						
						<p>La boucle <em>for</em> permet de répéter des instructions dont la conditon est basée sur la valeur d'une variable.<br/>
						On l'utilise lorsqu'on connait le nombre de tours à l'avance.</p>
<?php
$texte ="<pre>console.log(\"Début du programme\");
for (var compteur = 1;compteur <= 5;compteur++){
	console.log(compteur);
}
console.log(\"Fin du programme\");</pre>";
RegEx($texte);
?>
						<p>Résultat dans la console :</p>
						<img src="../png/jschap1_12.png"/>
					</ul>
				</section>
			</div>			
		</div>
		</h2>
		<?php include("../footer.php");?>
	</body>
</html>