<!DOCTYPE html>
<html>
	<head>
		<title>Intro Javascript</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="fonts_style/style.css"/>
	</head>
	
	<body>	
		<div id="container">
			<nav style="margin-left: -180px;margin-top: 150px;">
				<h2>
					<span style="color:white;">navigation</span>			
					<a href="#fonction"><h4>Les fonctions</h4></a>
					<a href="#parametre"><h4>Passage de paramètres</h4></a>
					<a href="#predefinie"><h4>Fonctions prédefinies</h4></a>
					<a href="#chaineDeCaractere"><h4>Manipulater les chaînes</h4></a>
					<a href="#creationObj"><h4>Création d'un objet</h4></a>
					<a href="#utilisationObj"><h4>Utilisation d'un objet</h4></a>
					<a href="#methodes"><h4>Notion de méthode</h4></a>
					<a href="#prototype"><h4>Objet et prototype</h4></a>					
					<a href="#initObjet"><h4>Initialisation d'un objet</h4></a>
					<a href="#jdr"><h4>Petit jeux de rôle</h4></a>
					<div id="allerEnHautIcone"><a href="#container"><img src="png/allerEnHaut.png"></a></div>
				</h2>
			</nav>
			<div id="central">
				<div id="entete1">			
					<span><h1>La POO EN JAVASCRIPT</h1></span><br/>
					<div id="flexDirRow" >
						<a href="index.php" class="bouton_hor_nav">Acceuil</a>
						<a id="c" class="bouton_hor_nav">C++</a>
						<a id="Qt" class="bouton_hor_nav">Qt</a>
						<a id="html" class="bouton_hor_nav">HTML 5</a>
						<a id="css" class="bouton_hor_nav">CSS 3</a>		
						<a id="javascript" class="bouton_hor_nav">JAVASCRIP</a>
						<a id="phpMySql" class="bouton_hor_nav">PHP MySQL</a>		
					</div>
					<div id="navigation" class="javascript">
						Cliquez sur le language qui vous intéresse pour accéder à son mémo.
					</div>
					</div>
					<script src="js/ajax.js"></script>
					<script src="js/nav2.js"></script>
					<br/>
				</div>
				

				<section>
					<?php
					function RegEx($texte){
						$texte = nl2br($texte);
						//log()					
						$texte = preg_replace('#(.*)(log)(\(.*)#isU', '$1<span style="color:fuchsia">$2</span>$3', $texte);
						//var = x
						$texte = preg_replace('#(.*)(var)(\s[a-zA-Z0-9]*)([;\s=].*)#isU', '$1<span style="color:aqua">$2</span><span style="color:fuchsia">$3</span>$4', $texte);
						//if (
						$texte = preg_replace('#(.*)(if[\s]*)(\(.*)#isU', '$1<span style="color:aqua">$2</span>$3', $texte);
						//instruction
						$texte = preg_replace('#(.*)(else|alert|switch|case|break|default|length|min|toLocaleLowerCase|toLocaleUpperCase|charAt|return|random)(.*)#isU', '$1<span style="color:aqua">$2</span>$3', $texte);
						//function
						$texte = preg_replace('#(.*)(function[\s]*)(.*)(\()(.*)(\))#isU', '$1<span style="color:aqua">$2</span><span style="color:fuchsia">$3</span>$4<span style="color:orange">$5</span>$6', $texte);
						//numbers
						$texte = preg_replace('#(.*)([0-9]|Object|this)(.*)#isU', '$1<span style="color:#45ce55">$2</span>$3', $texte);
						//entre guillemets
						$texte = preg_replace('#(.*)("[\s]*[a-zA-Z0-9éèêàâ\-ç\s!?\'.,;%î\#]*[\s]*")(.*)#isU', '$1<span style="color:orange">$2</span>$3', $texte);
						//commentaires
						$texte = preg_replace('#(.*)(//.*\n)(.*)#isU', '$1<span style="color:grey">$2</span>$3', $texte);
						//commentaires multi ligne
						$texte = preg_replace('#(.*)(/\*.*\*/)(.*)#isU', '$1<span style="color:grey">$2</span>$3', $texte);
						echo $texte;
					}?>
				
					<!--FONCTION-->
					<h3 id="fonction">Les fonctions et leur valeur de retour</h3>
					<ul>
						<p>Une fonction est un regroupement d'instructions qui réalise une tâche donnée.</p>
						<div class="console">
							<?php
							$texte = "function direBonjour() {<ul>console.log(\"Bonjour !\");</ul>}
								
								console.log(\"Début du programme\");
								direBonjour();
								console.log(\"Fin du programme\");";
							RegEx($texte);
							?>
						</div>
						<p>Les fonctions permettent de morceler le code afin de le rendre plus clair. Elle permettent aussi de lutter contre la duplication de code en centralisant les codes redondants.<br/>
						L'utlisationdu mot-clé <em>return</em> dans une fonction permet de lui donner une valeur de retour.</p>
						<div class="console">
							<?php
							$texte = "function direBonjour() {<ul>return \"Bonjour !\";</ul>}
								
								console.log(\"Début du programme\");

								var resultat = direBonjour();
								console.log(resultat);

								console.log(\"Fin du programme\");";
							RegEx($texte);
							?>
						</div>
						<p>Cette valeur de retour peut être de n'importe quel type (nombre, chaîne, etc). En revanche, une fonction ne peut renvoyer qu'une seule valeur.<br/>
						Si on essaie de récupérer la valeur de retour d'une fonction qui n'inclut pas d'instruction <em>return</em>, on obtient la valeur JavaScript <em>undefined</em>.</p>
						<img src="png/jschap2_0.png"/>
					</ul>

					<!--Passage de paramètres-->
					<h3 id="parametre">Passage de paramètres</h3>
					<ul>
						<p>Un paramètre est une information dont une fonction a besoin pour jouer son rôle.<br/>
						La valeur d'un paramètre est fournie au moment de l'appel de la fonction : on dit que cette valeur est passée en paramètre. On appelle argument la valeur donnée à un paramètre lors d'un appel.</p>
						<div class="console">
							<?php
							$texte = "function direBonjour(prenom) {<ul>var message = \"Bonjour, \" + prenom + \" !\";
								return message;</ul>}
								
								console.log(direBonjour(\"Baptiste\"));
								console.log(direBonjour(\"Sophie\"));";
							RegEx($texte);
							?>
						</div>
						<p>Qui donnera ceci dans la console :</p>
						<img src="png/jschap2_1.png"/>
						<p>On peut passer plusieurs paramètres dans une fonction. La fonction les utlisera alors dans l'ordre ou il seront passé :</p>
						<div class="console">
							<?php
							$texte = "function presentation(prenom, age) {<ul>console.log(\"Tu t'appelles \" + prenom + \" et tu as \" + age + \" ans\");</ul>}

								presentation(\"Garance\", 7); // OK
								presentation(3, \"Prosper\"); // Erreur : inversion !
								";
							RegEx($texte);
							?>
						</div>
						<p>Lors du second appel, les valeurs données aux paramètres sont inversées</p>
						<img src="png/jschap2_2.png"/>
					</ul>
						

					<!--Utiliser les fonctions prédéfinies de JavaScript-->
					<h3 id="predefinie">Les fonctions prédéfinies de JavaScript</h3>
					<ul>
						<p>Javascript propose un grand nombre de fonction déjà définie.</p>
						<div class="console">
							<?php
							$texte = "console.log(Math.min(4.5, 5));
								console.log(Math.min(19, 9));
								console.log(Math.min(1, 1));
								
								console.log(Math.random());";
							RegEx($texte);
							?>
						</div>
						<p>Qui donnera ceci dans la console :</p>
						<img src="png/jschap2_3.png"/>
					</ul>

					<!--Manipulez les chaînes de caractères-->
					<h3 id="chaineDeCaractere">Manipuler les chaînes de caractères</h3>
					<ul>
						<p>Grâce aux fonctions prédifinies de Javascript on peut faire pleins de manipulations sur les chaînes de caractères, comme obtenir leurs longueurs :</p>
						<div class="console">
							<?php
							$texte = "console.log(\"ABC\".length);
							console.log(\"Je suis une chaîne\".length);
							
							var mot = \"Kangourou\";
							var longueurMot = mot.length;
							console.log(longueurMot);";
							RegEx($texte);
							?>
						</div>
						<p>Qui donnera ceci dans la console :</p>
						<img src="png/jschap2_4.png"/>
						<p>Ou on peut convertir les chaînes de caractères minuscules en majuscules et inversement :</p>
						<div class="console">
							<?php
							$texte = "var motInitial = \"Bora-Bora\";
								var motEnMinuscules = motInitial.toLocaleLowerCase();
								console.log(motEnMinuscules);
								var motEnMajuscules = motInitial.toLocaleUpperCase();
								console.log(motEnMajuscules);";
							RegEx($texte);
							?>
						</div>
						<p>Et obtenir ceci dans la console :</p>
						<img src="png/jschap2_5.png"/>
						<p>On peu aussi comparer 2 chaînes pour obtenir une booléens grâce a l'opérateur === :</p>
						<div class="console">
							<?php
							$texte = "var chaine = \"azerty\";
								console.log(\"Cas n° 1 : \" +(chaine===\"azerty\"));
								console.log(\"Cas n° 2 : \" +(chaine===\"qwerty\"));
								console.log(\"Cas n° 3 : \" +(\"azerty\"===\"Azerty\"));";
							RegEx($texte);
							?>
						</div>
						<p>Résultat des 3 cas :</p>
						<img src="png/jschap2_6.png"/>
						<p>Comme le montre le cas n°3, cet opérateur est "case sensitive" : il prend en compte les majuscule/minuscule lorsqu'elle compare les valeurs.</p>
						<p>Accéder à un caractère à partir de son indice : il existe deux possibilités pour accéder à un caractère d'une chaîne :</p>
						<div class="console">
							<?php
							$texte = "var sport = \"Tennis-ballon\";
								console.log(sport.charAt(0));//première possibilité
								console.log(sport[7]);//deuxième possibilité
								";
							RegEx($texte);
							?>
						</div>
						<br/>
						<img src="png/jschap2_7.png"/>
						<p>ATTENTION : le premier charactère d'une chaîne a toujours 0 comme indice !!</p>
					</ul>

					<!--Création d'un objet-->
					<h3 id="creationObj">Création d'un objet</h3>
					<ul>
						<p>La programmation orientée objet (en abrégé <em>POO</em>) est une manière d'écrire des programmes en utilisant des objets. Quand on utilise la <em>POO</em>, on cherche à représenter le domaine étudié sous la forme d'objets informatiques. Chaque objet informatique modélisera un élément de ce domaine.<br/>
						Voici comment on créé un objet avec javascript :</p>
						<div class="console">
							<?php
							$texte = "var stylo = {<ul>type: \"bille\",
							    couleur: \"bleu\",
							    marque: \"Bic\"</ul>};";
							RegEx($texte);
							?>
						</div>
						<p>Une autre possibilité pour créer des objets JavaScript consiste à utiliser un constructeur. Un constructeur est une fonction particulière dont le rôle est d'initialiser un nouvel objet.</p>
						<div class="console">
							<?php
							$texte = "// Constructeur MonObjet
							function MonObjet() {<ul>// Initialisation de l'objet
							    // ...</ul>}
							// Instanciation d'un objet à partir du constructeur
							var monObj = new MonObjet();
							";
							RegEx($texte);
							?>
						</div>
					</ul>

					<!--Utilisation d'un objet-->
					<h3 id="utilisationObj">Utilisation d'un objet</h3>
					<ul>
						<p>Voici comment afficher les propriétés de notre stylo.</p>
						<div class="console">
							<?php
							$texte = "
								console.log(stylo[\"type\"]);
								console.log(stylo.couleur);
								console.log(stylo.marque);
								";
							RegEx($texte);
							?>
						</div>
						<p>Ce qui donne :</p>
						<img src="png/jschap2_8.png"/>
						<p>L'accès à une propriété d'un objet est une expression qui produit une valeur.</p>
						<div class="console">
							<?php
							$texte = "var stylo = {<ul>type: \"bille\",
							    couleur: \"bleu\",
							    marque: \"Bic\"</ul>};
							
								console.log(\"Mon stylo à \" + stylo.type + \" \" + stylo.marque + \" écrit en \" + stylo.couleur);
								";
							RegEx($texte);
							?>
						</div>
							<br/>
						<img src="png/jschap2_9.png"/>
						<p>Une fois un objet créé, on peut modifier les valeurs de ses propriétés :</p>
						<div class="console">
							<?php
							$texte = "stylo.couleur = \"rouge\";
								stylo.prix = 2.5;// Ajout de la propriété prix à l'objet stylo
								console.log(\"Il coûte \" + stylo.prix + \" euros\");
								";
							RegEx($texte);
							?>
						</div>
						<br/>
						<img src="png/jschap2_10.png"/>
					</ul>

					<!--Notion de méthode-->
					<h3 id="methodes">Notion de méthode</h3>
					<ul>
						<p>Lorsqu'on réutilise plusieurs fois une fonction qui manipule un objet il est utile de le faire a l'intérieur même de l'objet.<br/>
						Par exemple, cette fonction décrit l'objet <em>perso</em> dans un jeux de rôle:</p>
						<div class="console">
							<?php
							$texte = "var perso = {<ul>nom: \"Aurora\",
		    					sante: 150,
		    					force: 25,</ul>};
								// Renvoie la description d'un personnage
								function decrire(personnage) {<ul>var description = personnage.nom + \" a \" + personnage.sante + \" points de vie et \" + personnage.force + \" en force\";
							    return description;</ul>}

								console.log(decrire(perso));";
							RegEx($texte);
							?>
						</div>
						<p>Elle peut être inséré dans l'objet <em>perso</em> (noter la différence de syntaxe de la fonction):</p>
						<div class="console">
							<?php
							$texte = "var perso = {<ul>nom: \"Aurora\",
		    					sante: 150,
		    					force: 25,

		    					// Renvoie la description du personnage
		    					decrire: function () {<ul>var description = this.nom + \" a \" + this.sante + \" points de vie et \" + this.force + \" en force\";
						        return description;</ul>}</ul>};

						        console.log(perso.decrire());";
							RegEx($texte);
							?>
						</div>
						<p>L'objet <em>perso</em> possède maintenant une propriété : la fonction <em>decrire()</em>. On l'appelle une méthode.</p>
						<p>Le mot-clé <em>this</em> :<br/>
						Dans la méthode <em>decrire()</em> de notre objet perso un nouveau mot-clé apparaît : <em>this</em>. Il est défini automatiquement par JavaScript à l'intérieur d'une méthode et représente l'objet sur lequel la méthode a été appelée. La méthode <em>decrire()</em> utilise <em>this</em> pour accéder aux propriétés de l'objet <em>perso</em> sur lequel elle a été appelée.</p>
						<p>Comme les fonctions, les méthodes peuvent être ajoutées après la création de l'objet comme ceci :</p>
						<div class="console">
							<?php
							$texte = "//Création de l'objet Perso
								var perso = {<ul>nom: \"Aurora\",
		    					sante: 150,
		    					force: 25,</ul>};

		    					// Création de la méthode decrire ()
								perso.decrire = function () {<ul>var description = this.nom + \" a \" + this.sante + \" points de<ul>vie et \" + this.force + \" en force\";</ul>return description;</ul>};

								 console.log(perso.decrire());";
							RegEx($texte);
							?>
						</div>
						<p>Notont qu'une méthode qui appel une propriété qui n'existe pas dans l'objet (par exemple this.xp) renvoie <em>undefined</em>.<br/>
						Tous ces codes donnent le même résultat :</p>
						<img src="png/jschap2_11.png"/>
						<p>Le langage JavaScript met à la disposition des programmeurs un certain nombre d'objets standards qui peuvent rendre de multiples services. Par exemple l'objet <em>console</em> que nous connaisons déjà bien, permet d'écrire un message dans la console des outils de développement des différents navigateurs.<br/>
						L'objet <em>Math</em> rassemble des fonctionnalités mathématiques.</p>
					</ul>

					<!--Objet et prototype-->
					<h3 id="prototype">Objet et prototype en Javascript</h3>
					<ul>
						<p>On pourrait reprendre l'objet "<em>perso</em>" créé précédement pour créer un autre personnage "<em>perso2</em>", avec d'autres propiétés de santé et de force, comme ceci :</p>
						<div class="console">
							<?php
								$texte = "var perso = {<ul>nom: \"Aurora\",//premier personnage
		    					sante: 150,
		    					force: 25,

		    					decrire: function () {<ul>var description = this.nom + \" a \" + this.sante + \" points de vie et \" + this.force + \" en force\";
						        return description;</ul>}</ul>};
						        console.log(perso.decrire());

						        var perso2 = {<ul>nom: \"Glacius\",//deuxième personnage
		    					sante: 130,
		    					force: 30,

		    					decrire: function () {<ul>var description = this.nom + \" a \" + this.sante + \" points de vie et \" + this.force + \" en force\";
						        return description;</ul>}</ul>};
						        console.log(perso2.decrire());";
							RegEx($texte);
							?>	
						</div>
						<p>Mais cela implique de réécrire tout l'objet une deuximèe fois. Heureusement Javascript permet de créer des modèles grâce au <em>prototype</em> en utilisant l'instruction <em>Object.create</em> :</p>
						<div class="console">
							<?php
								$texte = "var unObjet = {<ul>a: 2</ul>};

								// Crée unAutreObjet avec unObjet comme prototype
								var unAutreObjet = Object.create(unObjet);

								console.log(unAutreObjet.a); // Affiche 2
								";
							RegEx($texte);
							?>
						</div>
						<p>On a créé l'objet <em>unAutreObjet</em> avec le prototype de <em>unObjet</em>.<br/>
						On vois que la propriété <em>a</em> n'existe pas pour <em>unAutreObjet</em>, donc c'est la propriété <em>a</em> de <em>unObjet</em> qui est utilisé.<br/>
						<br/>
						Créont un prototype à nos personnage (avec une propriété <em>xp</em> en plus) :</p>
						<div class="console">
							<?php
								$texte = "var Personnage = {<ul>nom: \"\",
		    					sante: 0,
		    					force: 0,
		    					xp: 0,

		    					decrire: function () {<ul>var description = this.nom + \" a \" + this.sante + \" points de vie et \" + this.force + \" en force et \" + this.xp + \" points d'expérience\";
						        return description;</ul>}</ul>};

						        var perso1 = Object.create(Personnage);
		    					perso1.nom = \"Aurora\";
		    					perso1.sante = 150;
		    					perso1.force = 25;
		    					
						        var perso2 = Object.create(Personnage);
		    					perso2.nom = \"Glacius\";
		    					perso2.sante = 130;
		    					perso2.force = 30;

						        console.log(perso1.decrire());
						        console.log(perso2.decrire());";
							RegEx($texte);
							?>	
						</div>
						<p>Voici le résultat obtenu dans la console :</p>
						<img src="png/jschap2_12.png"/>
					</ul>

					<!--Initialisationd d'un objet-->
					<h3 id="initObjet">Initialisation d'un objet</h3>
					<ul>
						<p>On peut noter que le processus de création d'un objet peut être répétitif : dans l'exemple précédent pour chaque personnage, il faut successivement donner une valeur à chacune de ses propriétés. On peut faire mieux en créant une fonction d'initialisation dans l'objet Personnage :</p>
						<div class="console">
							<?php
								$texte = "var Personnage = {<ul>// Initialise le personnage
							    	init: function (nom, sante, force) {<ul>this.nom = nom;
							        	this.sante = sante;
							        	this.force = force;
							        	this.xp = 0;</ul>},</ul>
							   		// Renvoie la description du personnage
							    	decrire: function () {<ul>var description = this.nom + \" a \" + this.sante + \" points de vie, \" + this.force + \" en force et \" + this.xp + \" points d'expérience\";
							        return description;
							    }</ul>};";
							RegEx($texte);
							?>
						</div>
						<p>On appellera la méthode <em>init</em> lorsqu'on créera un personnage :</p>
						<div class="console">
							<?php 
								$texte ="var perso1 = Object.create(Personnage);
									perso1.init(\"Aurora\", 150, 25);

									var perso2 = Object.create(Personnage);
									perso2.init(\"Glacius\", 130, 30);

									console.log(perso1.decrire());
									console.log(perso2.decrire());
									";
								RegEx($texte);
							 ?>
						</div>
						<p>On peut ainsi créer d'autres types d'objets en utilisant les méthodes init (et les propriétés qui s'y r'attachent) de notre objet <em>Personnage</em> :</p>
						<div class="console">
						<?php
							$texte = "var Personnage = {<ul>// Initialise le personnage
							    initPerso: function (nom, sante, force) {
							        this.nom = nom;
							        this.sante = sante;
							        this.force = force;
							    }</ul>};

								var Joueur = Object.create(Personnage);<ul>// Initialise le joueur
								Joueur.initJoueur = function (nom, sante, force) {
								    this.initPerso(nom, sante, force);
								    this.xp = 0; // L'expérience du joueur est toujours initialisée à 0
								};</ul>
								// Renvoie la description du joueur
								Joueur.decrire = function () {<ul>var description = this.nom + \" a \" + this.sante + \" points de vie, \" +
								        this.force + \" en force et \" + this.xp + \" points d'expérience\";
								    return description;</ul>};

								var Adversaire = Object.create(Personnage);
								//Initialise l'adversaire
								Adversaire.initAdversaire = function (nom, sante, force, race, valeur) {<ul>this.initPerso(nom, sante, force);//!!!! ICI ON UTLISE initPerso DE L'OBJET Personnage !!!!!
								    this.race = race;//propriétés ajoutées de l'objet Adversaire
								    this.valeur = valeur;</ul>};";
							RegEx($texte);
							?>
						</div>
						<p>Utilisont ça pour créer deux types d'objets qui auront des proriétés communes et des propriétés spécifiques:</p>
						<div class="console">
						<?php
							$texte = "var joueur1 = Object.create(Joueur);
								joueur1.initJoueur(\"Aurora\", 150, 25);

								var joueur2 = Object.create(Joueur);
								joueur2.initJoueur(\"Glacius\", 130, 30);

								console.log(\"Bienvenue dans ce jeu d'aventure ! Voici nos courageux héros\");
								console.log(joueur1.decrire());
								console.log(joueur2.decrire());

								var monstre = Object.create(Adversaire);
								monstre.initAdversaire(\"ZogZog\", 40, 20, \"orc\", 10);

								console.log(\"Un affreux monstre arrive, c'est un \" + monstre.race + \" nommé \" + monstre.nom);";
							RegEx($texte);
							?>
						</div>
						<p>Notre petit jeux de rôle avance bien :</p>
						<img src="png/jschap2_13.png"/>
					</ul>

					<!--combat-->
					<h3 id="jdr">Petit Jeux de rôle</h3>
					<ul>
						<p>Finalisont notre jeux de rôle en ajoutant quelques méthodes de combat :</p>
						<div class="console">
						<?php
							$texte = "var Personnage = {<ul>// Initialise le personnage
							    initPerso: function (nom, sante, force) {
							        this.nom = nom;
							        this.sante = sante;
							        this.force = force;</ul>},
							    // Attaque un personnage cible
							    attaquer: function (cible) {<ul>if (this.sante > 0) {<ul>var degats = this.force;
							            console.log(this.nom + \" attaque \" + cible.nom + \" et lui fait \" + degats + \" points de dégâts\");
							            cible.sante = cible.sante - degats;
							            if (cible.sante > 0) {<ul>console.log(cible.nom + \" a encore \" + cible.sante + \" points de vie\");
							            } else {
							                cible.sante = 0;
							                console.log(cible.nom + \" est mort !\");
							            }</ul>} else {
							            console.log(this.nom + \" ne peut pas attaquer : il est mort...\");
							        }</ul>}</ul>};

								var Joueur = Object.create(Personnage);
								// Initialise le joueur
								Joueur.initJoueur = function (nom, sante, force) {<ul>this.initPerso(nom, sante, force);
								    this.xp = 0;</ul>};
								// Renvoie la description du joueur
								Joueur.decrire = function () {<ul>var description = this.nom + \" a \" + this.sante + \" points de vie, \" +
								        this.force + \" en force et \" + this.xp + \" points d'expérience\";
								    return description;</ul>};

								// Combat un adversaire
								Joueur.combattre = function (adversaire) {<ul>this.attaquer(adversaire);//UTILISE LA METHODE attaquer DE Personnage
								    if (adversaire.sante === 0) {<ul>console.log(this.nom + \" a tué \" + adversaire.nom + \" et gagne \" +
								            adversaire.valeur + \" points d'expérience\");
								        this.xp += adversaire.valeur;</ul>}</ul>};

								var Adversaire = Object.create(Personnage);
								// Initialise l'adversaire
								Adversaire.initAdversaire = function (nom, sante, force, race, valeur) {<ul>this.initPerso(nom, sante, force);
								    this.race = race;
								    this.valeur = valeur;</ul>};

								// ...
								    ";
								RegEx($texte);
								?>
						</div>
						<p>C'est parti pour des heures d'amusement !</p>
						<div class="console">
						<?php
							$texte = "// ...

								var joueur1 = Object.create(Joueur);
								joueur1.initJoueur(\"Aurora\", 150, 25);

								var joueur2 = Object.create(Joueur);
								joueur2.initJoueur(\"Glacius\", 130, 30);

								console.log(\"Bienvenue dans ce jeu d'aventure ! Voici nos courageux héros !\");
								console.log(joueur1.decrire());
								console.log(joueur2.decrire());

								var monstre = Object.create(Adversaire);
								monstre.initAdversaire(\"ZogZog\", 40, 20, \"orc\", 10);

								console.log(\"Un affreux monstre arrive, c'est un \" + monstre.race + \" nommé \" + monstre.nom);

								monstre.attaquer(joueur1);
								monstre.attaquer(joueur2);

								joueur1.combattre(monstre);
								joueur2.combattre(monstre);

								console.log(joueur1.decrire());
								console.log(joueur2.decrire());";
							RegEx($texte);
							?>
						</div>
						<p>YOUPI !! </p>
						<img src="png/jschap2_14.png"/>
					</ul>
				</section>
			</div>
		</div>
		<?php include("footer.php");?>
	</body>
</html>