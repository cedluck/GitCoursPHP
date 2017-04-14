<!DOCTYPE html>
<html>
	<head>
		<title>Intro Javascript</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="fonts_style/style.css"/>

	</head>
	<body>
		
		<div id="container">			
			<span><h1>INTRODUCTION A JAVASCRIPT</h1></span><br/>
			<div id="description">
				<a class="bouton_nav" href="javascriptPoo.php">cliquez ici pour découvrir la Poo en JavaScript</a>
				<a class="bouton_nav" href="index.php">cliquez ici pour voir des exemples</a>
			</div>


			<div id="central" style="margin-top: 25px;">
				<nav style="margin-left: -180px;margin-top: -75px;">
				<h2>
					
					<a  href="#environnement"><h4>L'environnement de travail</h4></a>
					<a  href="#typeNombre"><h4>Le type nombre</h4></a>
					<a  href="#typeChaine"><h4>Le type chaîne</h4></a>
					<a  href="#affVal"><h4>Affichage d'une valeur</h4></a>
					<a  href="#comm"><h4>Commentaires</h4></a>
					<a  href="#declareVar"><h4>Déclarer une variable</h4></a>
					<a  href="#notionExp"><h4>La notion d'expression</h4></a>
					<a  href="#convType"><h4>Conversions de types</h4></a>
					<a  href="#saisie"><h4>Saisie d'informations</h4></a>
					<a  href="#saisieNb"><h4>Saisie d'un nombre</h4></a>
					<a  href="#nommageVar"><h4>Nommage de variable</h4></a>
					<a  href="#instructionIf"><h4>L'instruction if</h4></a>
					<a  href="#instructionElse"><h4>L'instruction else</h4></a>
					<a  href="#instructionElseIf"><h4>L'instruction else if</h4></a>
					<a  href="#opeLog"><h4>Opérateurs logique</h4></a>
					<a  href="#instructionSwitch"><h4>L'instruction SWITCH</h4></a>
					<a  href="#while"><h4>Boucle while</h4></a>
					<a  href="#for"><h4>Boucle for</h4></a>
					<div id="allerEnHautIcone"><a href="#container"><img src="allerEnHaut.png"></a></div>
				</h2>
				</nav>


				<section>
				<?php
				function RegEx($texte){
					//$texte = nl2br($texte);					
					$texte = preg_replace('#(.*)(log)(\(.*)#isU', '$1<span style="color:fuchsia">$2</span>$3', $texte);//log
					$texte = preg_replace('#(.*)(var)(\s[a-zA-Z0-9]*)([;\s=].*)#isU', '$1<span style="color:aqua">$2</span><span style="color:fuchsia">$3</span>$4', $texte);//var = x
					$texte = preg_replace('#(.*)(if[\s]*)(\(.*)#isU', '$1<span style="color:aqua">$2</span>$3', $texte);//if (
					$texte = preg_replace('#(.*)(else|alert|switch|case|break|default)(.*)#isU', '$1<span style="color:aqua">$2</span>$3', $texte);

					$texte = preg_replace('#(.*)([0-9])(.*)#isU', '$1<span style="color:#45ce55">$2</span>$3', $texte);//chiffre
					$texte = preg_replace('#(.*)("[\s]*[a-zA-Z0-9éèêà\-ç\s!?\'.,;%\#]*[\s]*")(.*)#isU', '$1<span style="color:#ff8000">$2</span>$3', $texte);//entre guillemets
					$texte = preg_replace('#(.*)(//.*\n)(.*)#isU', '$1<span style="color:grey">$2</span>$3', $texte);
					$texte = preg_replace('#(.*)(/\*.*\*/)(.*)#isU', '$1<span style="color:grey">$2</span>$3', $texte);
					echo $texte;
				}?>
					<!--ENVIRONEMENT-->
					<h3 id="environnement">L'environnement de travail</h3>
					<ul><p>Il y a plusieurs manière de traviller avec Javascript :<br/>
					<br/>
					On peut soit coder avec Javascript en ligne grâce à <a  href="https://jsfiddle.net">JSFidle</a>, <a  href="http://jsbin.com/">JS Bin</a> ou <a  href="https://codepen.io/">CodePen</a>.<br/>
					<br/>
					Ou on peut créer son propre environnement de travail avec un IDE (Eclipse, WebStorm, VisualStudio) ou un éditeur de texte comme Sublime Text, Atom ou <a  href="http://brackets.io/">Brackets</a>.<br/>
					Il faut utiliser l'outil de dévelopement des navigateurs. Celui de Firefox est recommandé (touche alt -> outils -> Développement Web -> Outils de développement).</br>
					Associé votre page HTML avec le code Javascript grâce a la balise <<span style ="color:fuchsia">script</span> src="...">  dans la balise body de votre code HTML comme ceci :</br/>
					</p><img src="jschap1_0.png"/>
					<p>Il est recommander de créer un dossier html et un dossier js pour stocker vos pages web et vos fichiers javascript associés :</p>
					<img src="browser.png"/>
					<p>VOUS POUVEZ COMMENCER A CODER !!</p></ul>
					<!--TYPE NOMBRE-->
					<h3 id="typeNombre">Le type nombre</h3>
					<ul><p>Une valeur de type nombre (number) représente une valeur numérique, autrement dit une quantité. Comme en mathématiques, on distingue les valeurs entières (ou entiers) 0, 1, 2, 3... et les valeurs réelles (ou réels) auxquelles on ajoute des chiffres après la virgule pour plus de précision.<br/>
					Le résultat suivant est obtenu en tapant les opérations dans l'onglet console de l'outils de développement Web de Firefox (en bas, après le signe >> vert) :</p>
					<img src="jschap1_1.png"/></ul>
					<!--TYPE CHAINE-->
					<h3 id="typeChaine">Le type chaîne</h3>				
					<ul><p> Une valeur de type chaîne de caractères (en abrégé chaîne, ou encore string en anglais) représente un texte. Ces valeurs sont délimitées par une paire de guillemets doubles :"Ceci est une chaîne". Pour inclure dans une chaîne certains caractères spéciaux, on utilise le caractère\ (qui se prononce "antislash" ou "backslash" en anglais) qui donne un sens particulier au caractère suivant. Par exemple,\n permet d'ajouter un retour à la ligne dans une chaîne.<br/>
					L'opérateur+ peut être appliqué à deux valeurs de type chaîne. Son résultat est la jointure de ces deux chaînes, appelée concaténation.</p>
					<img src="jschap1_2.png"/></ul>
					<!--AFFICHAGE VALEUR-->
					<h3 id="affVal">Affichage d'une valeur</h3>
					<ul><p>Voici comment afficher le résultat de valeurs dans la console de votre outils de développent sur firefox</p>
					<div class="console">
					<?php
						$texte = "console.log(\"Bonjour en Javascript !\");<br/>
						console.log(\"Faisons quelques calculs.\");<br/>
						console.log(4 + 7);<br/>
						console.log(12 / 0);<br/>
						console.log(\"Au revoir !\");";
						RegEx($texte);
					?>
					</div>
					<p>Résultat dans la console :</p>
					<img src="jschap1_3.png"/></ul>
					<!--COMMENTAIRES-->
					<h3 id="comm">Commentaires</h3><ul><p>Voici comment on écrit des commentaires dans un code javascript :
					<div class="console">
					<?php
					$texte = "console.log(\"Bonjour en JavaScript !\");<br/>
						//console.log(\"Faisons quelques calculs.\");<br/>
						/* Un commentaire <br/>
						sur plusieurs<br/>
						lignes */";
					RegEx($texte);					
					?>						
					</div></p></ul>
					<!--DECLARER VARIABLE-->
					<h3 id="declareVar">Déclarer une variable</h3>
					<ul><p>Voici un exemple de code qui déclare plusieurs variables puis affiche leurs valeurs.</p>
					<div class="console">
					<?php
						$texte = "var x;<br/>
						console.log(x);<br/>
						<br/>
						var a = 3.14;<br/>
						console.log(a);<br/>
						<br/>
						var b = 0;<br/>
						b += 1;<br/>
						b++;<br/>
						console.log(b);<br/>
						<br/>
						var h=\"5\";<br/>
						console.log(h+1);<br/>
						h = Number(\"5\");<br/>
						console.log(h+1);";
					RegEx($texte);
					?>
					</div>
					<p>Résultat dans la console</p>
					<img src="jschap1_4.png"/></ul>
					<!--NOTION D'EXPRESSION-->
					<h3 id="notionExp">La notion d'expressions</h3>
					<ul><p>Une expression est un morceau de code qui produit une valeur<br/>
					Le calcul de la valeur d'une expression s'appelle l'évaluation.</p>
					<div class="console">
					<?php
						$texte = "// 3 est une expression dont la valeur est le nombre 3<br/>
						var c = 3;<br/>
						// d est une expression dont la valeur est celle de c (ici 3)<br/>
						var d = c;<br/>
						// (d + 1) est une expression<br/>
						// Sa valeur est celle de d augmentée de 1 (ici 4)<br/>
						d = d + 1; // d contient la valeur 4<br/>
						console.log(d); // Affiche 4
						";
						RegEx($texte);
					?>
					</div>
					<p>La console affichera 4</p></ul>
					<!--CONVERSIONS DE TYPE-->
					<h3 id="convType">Conversions de types</h3>
					<ul><p>L'évaluation d'une expression peut entraîner des conversions de type. Elle sont dites conversions implicites : elle se font automatiquement.<br/>
					 En cas d'échec de la conversion d'un nombre, la valeur du résultat est NaN (Not a Number).<br/>
					 JavaScript dispose des ordres Number() et String() qui convertissent respectivement en un nombre et une chaîne la valeur placée entre parenthèses.</p>
					<div class="console">
					<?php 
						$texte = "var f = 100;<br/><br/>
						console.log(\"La variable f contient la valeur \" + f);<br/>
						<br/>
						var g = \"cinq\" * 2;<br/>
						console.log(g);<br/>
						<br/>
						var h = \"5\";<br/>
						console.log(h + 1); // Concaténation<br/>
						<br/>
						h = Number(\"5\");<br/>
						console.log(h + 1); // Addition numérique
						";
						RegEx($texte);
					?>
					</div>
					<p>La console affichera : </p>
					<img src="jschap1_5.png"/></ul>
					<!--SAISIE-->
					<h3 id="saisie">Saisie et affichage d'informations</h3>
					<ul><p>Voici une façon de saisir des informations et de les afficher.</p>
					<div class="console">
						<?php
						$texte ="var prenom = prompt(\"Entrez votre prénom\");<br/>
						alert(\"Bonjour, \" + prenom);";
						RegEx($texte);
					?>
					</div>
					<p>Une boîte de dialogue apparaît pour demander la saisie du prénom. Puis une autre affichera "Bonjour," suivi du prénom.</p></ul>
					<!--SAISIE DE NOMBRE-->
					<h3 id="saisieNb">Saisie d'un nombre</h3>
					<ul><p>Voici comment saisir un nombre</p>
					<div class="console">
						<?php
						$texte = "var saisie = prompt(\"Entrez un nombre\"); // saisie est de type chaîne<br/>
						var nb = Number(saisie); // nb est de type nombre<br/>
						<br/>
						var nb = Number(prompt(\"Entrez un nombre\")); // nb est de type nombre
						";
						RegEx($texte);
					?>
					</div></ul>
					<!--NOMMAGE-->
					<h3 id="nommageVar">Comment faire pour bien nommer les variables de ses programmes ?</h3>
					<ul><p>Choisir des noms significatifs.<br/>
					Bannir les caractères accentués.<br/>
					Ne pas utiliser les noms réservés du langage.<br/>
					Adopter une convention de nommage : par exemple, les <em>nomsmontantTravauxMaison</em> ou <em>codeClientSuivant</em> respectent la norme camelCase..</p></ul>
					<!--INSTRUCTION IF-->
					<h3 id="instructionIf">L'instruction if</h3>
					<ul><p>La paire d'accolades ouvrante et fermante délimite ce que l'on appelle un bloc de code associé à l'instruction if. Cette instruction représente un test. On peut la traduire par l'ordre suivant : "Si la condition est vraie, alors exécute les instructions contenues dans le bloc de code".</p>
					<div class="console">
					<?php
					$texte ="var nombre = Number(prompt(\"Entrez un nombre  \"));<br/>
						if (nombre>0){<ul>
						    console.log(nombre+ \" est positif\");</ul>
						}<br/>
						<br/>
						var nombre = Number(prompt(\"Entrez un nombre  \"));<br/>
						if (nombre >= 0){<ul>
						    console.log(nombre + \" est positif ou nul\");</ul>
						}";
						RegEx($texte);
					?>
					</div>
					<p>La console affichera : </p>
					<img src="jschap1_6.png"/></ul>
					<!--INSTRUCTION ELSE-->
					<h3 id="instructionElse">L'instruction else</h3>
					<ul><p>On peut traduire une instruction if/else comme ceci : "Si la condition est vraie, alors exécute les instructions du bloc de code associé au if, sinon exécute celles du bloc de code associé au else".</p>
					<div class="console">
					<?php
					$texte ="var nombre = Number(prompt(\"Entrez un nombre\"));<br/>
						if (nombre>0){<ul>
							console.log(nombre + \" est positif\");</ul>
						}else{<ul>
						   console.log(nombre+ \" est négatif ou nul\");</ul>
						}<br/>
						<br/>
						var nombre = Number(prompt(\"Entrez un nombre\"));<br/>
						if (nombre>0){<ul>
						  	console.log(nombre + \" est positif\");</ul>
						}else{<ul>
						    if (nombre <0){<ul>
						     console.log(nombre + \" est négatif\");</ul>
						    }else{<ul>
						        console.log(nombre+ \" est nul\");</ul>
						    }</ul>
						}";
						RegEx($texte);
					?>
					</div>
					<p>Quand on entre 0 et 5 et la console affiche : </p>
					<img src="jschap1_7.png"/></ul>
					<!--INSTRUCTION ELSE IF-->
					<h3 id="instructionElseIf">L'instruction else if</h3>
					<ul><p>On rencontre fréquemment le cas particulier où la seule instruction d'un bloc <em>else</em> est un <em>if</em> (le <em>else</em> éventuellement associé à ce <em>if</em> ne compte pas comme une seconde instruction). Dans ce cas, il est possible d'écrire ce <em>if</em>  sur la même ligne que le premier <em>else</em>, sans accolades ni indentation.</p>
					<div class="console">
					<?php
					$texte ="var nombre = Number(prompt(\"Entrez un nombre\"));<br/>
						if (nombre > 0) {<ul>
						    console.log(nombre + \" est positif\");</ul>
						} else if (nombre < 0) {<ul>
						    console.log(nombre + \" est négatif\");</ul>
						} else {<ul>
						    console.log(nombre + \" est nul\");</ul>
						}";
						RegEx($texte);
					?>
					</div>
					<p>Avec 5, -1 et 0 la console affichera : </p>
					<img src="jschap1_8.png"/></ul>
					<!--OPERATEUR LOGIQUE-->
					<h3 id="opeLog">Les opérateurs logique ET, OU, NON</h3>
					<ul><p>Opérateur logique ET : &&<br/>
					Opérateur logique OU : ||<br/>
					Opérateur logique NON: ! avant la condition<br/>
					Exemples de ces 3 opérateurs logique :</p>
					<div class="console">
					<?php
					$texte ="var nombre = Number(prompt(\"Entrez un nombre\"));<br/>
						if ((nombre >= 0) && (nombre <= 100)){<ul>
						    console.log(nombre + \" est compris entre 0 et 100\");</ul>
						}<br/>
						<br/>
						var nombre = Number(prompt(\"Entrez un nombre\"));<br/>
						if ((nombre < 0) || (nombre > 100)){<ul>
						    console.log(nombre + \" est dans l'intervale 0, 100 \");</ul>
						}<br/>
						<br/>
						var nombre = Number(prompt(\"Entrez un nombre\"));<br/>
						if (!(nombre > 100)){<ul>
						    console.log(nombre + \" est inférieur ou égal à 100\");</ul>
						}";
						RegEx($texte);
					?>
					</div>
					<p>Avec 5 , 110 et -10 la console affichera : </p>
					<img src="jschap1_9.png"/></ul>
					<!--INSTRUCTION SWITCH-->
					<h3 id="instructionSwitch">L'instruction SWITCH</h3>
					<ul><p>Voici un programme :</p>
					<div class="console">
					<?php
					$texte ="var meteo = prompt(\"Quel temps fait-il dehors ?\");<br/>
						if (meteo === \"soleil\") {<ul>
						    console.log(\"Sortez en t-shirt.\");</ul>
						} else if (meteo === \"vent\") {<ul>
						    console.log(\"Sortez en pull.\");</ul>
						} else if (meteo === \"pluie\") {<ul>
						    console.log(\"Sortez en blouson.\");</ul>
						} else if (meteo === \"neige\") {<ul>
						    console.log(\"Restez au chaud à la maison.\");</ul>
						} else {<ul>
						    console.log(\"Je n'ai pas compris !\");</ul>
						}";
						RegEx($texte);
					?>
					</div>
					<p>Lorsqu'un programme consiste à déclencher un bloc d'opérations parmi plusieurs selon la valeur d'une expression, on peut l'écrire en utilisant l'instruction JavaScript <em>switch</em>.</p>
					<div class="console">
					<?php
					$texte ="var meteo = prompt(\"Quel temps fait-il dehors ?\");<br/>
						switch (meteo) {<ul>
						case \"soleil\":<ul>
						    console.log(\"Sortez en t-shirt.\");<br/>
						    break;</ul>
						case \"vent\":<ul>
						    console.log(\"Sortez en pull.\");<br/>
						    break;</ul>
						case \"pluie\":<ul>
						    console.log(\"Sortez en blouson.\");<br/>
						    break;</ul>
						case \"neige\":<ul>
						    console.log(\"Restez au chaud à la maison.\");<br/>
						    break;</ul>
						default:<ul>
						    console.log(\"Je n'ai pas compris !\");</ul>
						}";
						RegEx($texte);
					?>
					</div>
					<p>Les deux programme donne le même résultat :</p>
					<img src="jschap1_10.png"/></ul>
					<!--BOUCLE WHILE-->
					<h3 id="while">Boucle While</h3>
					<ul><p>La boucle <em>while</em> permet de répéter des instructions tant qu'une condition est vérifiée.<br/>
					On l'utilise quand on ne peut pas prévoir le nombre de tours de la boucle.</p>
					<div class="console">
					<?php
					$texte ="console.log(\"Début du programme\");<br/>
						var nombre = 1;<br/>
						while (nombre <= 5) {<ul>
						    console.log(nombre);<br/>
						    nombre++;</ul>
						}<br/>
						console.log(\"Fin du programme\");<br/>";

						RegEx($texte);
					?>
					</div>
					<p>Résultat dans la console :</p>
					<img src="jschap1_12.png"/></ul>
					<!--BOUCLE FOR-->
					<h3 id="for">Boucle for</h3>
					<ul><p>La boucle <em>for</em> permet de répéter des instructions dont la conditon est basée sur la valeur d'une variable.<br/>
					On l'utilise lorsqu'on connait le nombre de tours à l'avance.</p>
					<div class="console">
					<?php
					$texte ="console.log(\"Début du programme\");<br/>
						for (var compteur = 1;compteur <= 5;compteur++){<ul>
						    console.log(compteur);</ul>
						}<br/>
						console.log(\"Fin du programme\");";

					RegEx($texte);
					?>
					</div>
					<p>Résultat dans la console :</p>
					<img src="jschap1_12.png"/></ul>

				</section>
			</div>			
		</div>
		</h2>
		<?php include("footer.php");?>
	</body>
</html>