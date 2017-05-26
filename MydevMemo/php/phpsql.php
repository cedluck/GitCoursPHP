<!DOCTYPE html>
<html>
	<head>
		<title>phpsql</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../fonts_style/style.css"/>
	</head>
	
	<body>	
		<div id="container">
			<nav style="margin-left: -180px;margin-top: 150px;">
				<h2>
					<span style="color:white;">navigation</span>			
					<a href="#SQL"><h4>Le langage des requêtes</h4></a>
					<a href="#injection"><h4>Failles d'injection SQL</h4></a>
					<a href="#inserer"><h4>Insérer des entrées</h4></a>
					<a href="#modifier"><h4>Modifier des entrées</h4></a>
					<a href="#supprimer"><h4>Supprimer des entrées</h4></a>
					<a href="#erreursSQL"><h4>Erreur SQL en PHP</h4></a>
					<a href="#fonctionsSQL"><h4>Les fonctions SQL</h4></a>
					<a href="#dateSQL"><h4>Les dates en SQL</h4></a>
					<a href="#fonctionsdateSQL"><h4>Fonctions sur les dates</h4></a>
					<a href="#jointure"><h4>Jointure entre les tables</h4></a>
					<a href="phpregex.php">chapitre suivant...</a>
					<a href="phpbdd.php">chapitre précédent...</a>
					<div id="allerEnHautIcone"><a href="#container"><img src="../png/allerEnHaut.png"></a></div>
				</h2>
			</nav>
			<div>
				<div id="entete1">			
					<span><h1>PHP : le langage SQL</h1></span><br/>
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
						<a href="phptabfonction.php" class="cat">Tableaux/fonctions</a>
						<a href="phptransmission.php"  class="cat"">Transmission</a>
						<a href="phpbdd.php"  class="cat">Les BDD</a>
						<a href="phpsql.php"  class="cat" style="background-color: #8892BF;">Langage SQL</a>
						<a href="phpregex.php"  class="cat">Regex</a>
						<br/>
					</div>
					<em>Cette page est inspirée par le cours <a href="https://openclassrooms.com/courses/concevez-votre-site-web-avec-php-et-mysql">"concevez votre site web avec php et mysql"</a> du MOOC <a href="https://openclassrooms.com">openclassrooms</a>. Créateur : <a href="https://openclassrooms.com/membres/mateo21">Mathieu Nebra</a></em>
					</div>
					<script src="../js/ajax.js"></script>
					<script src="../js/nav2.js"></script>
					<br/>
				</div>
				<section>
				<?php include("../html/regexhtml.php");?>
				<!--SQL le langage des requêtes-->
				<h3 id="SQL">Le langage des requêtes : SQL</h3>
				<ul>
					<p><strong>SQL est un langage qui permet de communiquer avec MySQL. Par exemple :</strong></p>
<pre>
	SELECT * FROM nomTable
</pre>
					<p>ce traduit par « prends tous ce qu'il y a dans la table nomTable».<br/>
					- <em>SELECT</em> :  est un mot-clé qui détermine le type d'opération<br/>
					- <em>*</em> : indique le champs auxquels imputer cette opérations (ici select)<br/>
					- <em>FROM</em> : fait la liaison entre le nom des champs et le nom de la table<br/>
					- <em>nomTable</em> : c'est le nom de la table dans laquelle SELECT pioche les entrées.</p>

					<p><strong>Préciser le nom d'un champ.</strong> Comme dans cette exemple : 
<pre>
	SELECT nom FROM jeux_video 
</pre>
					qui se traduit par « Sélectionne le champ "nom" dans la table "jeux_video" » </p>
					<p><strong>Ajouter des critères de sélection précis <em>WHERE</em> :</strong>
<pre>
	SELECT * FROM jeux_video WHERE possesseur='Patrick'
</pre>				
					qui se traduit par « Sélectionne tous les champs de la table jeux_video lorsque le champ possesseur est égal à Patrick »</p>
					<p><strong>Combiner plusieurs conditions avec <em>AND</em> et/ou <em>OR</em> :</strong>
<pre>
	SELECT * FROM jeux_video WHERE possesseur='Patrick' AND prix < 20
</pre>
					Traduction : « Sélectionne tous les champs de jeux_video lorsque le possesseur est Patrick ET lorsque le prix est inférieur à 20 ».</p>
<pre>
	SELECT * FROM jeux_video WHERE possesseur='Patrick' OR prix < 20
</pre>
					Traduction : « Sélectionne tous les champs de jeux_video lorsque le possesseur est Patrick OU lorsque le prix est inférieur à 20 ».</p>
					<p><strong>Ordonner les résultats de la requête <em>ORDER BY</em> :</strong>
<pre>
	SELECT * FROM jeux_video ORDER BY prix
</pre>				
					Traduction : « Sélectionne tous les champs de jeux_video et ordonne les résultats par prix croissants ».</p>
					<p><strong>On peut préciser dans quel sens on ordonne avec <em>DESC</em></strong> :
<pre>
	SELECT * FROM jeux_video ORDER BY prix DESC
</pre>
					Traduction : « Sélectionne tous les champs de jeux_video, et ordonner les résultats par prix décroissants ».</p>
					<p><strong>Ne sélectionner qu'une partie du résultat avec LIMIT</strong> :
<pre>
	SELECT * FROM jeux_video LIMIT 0, 20
</pre>
					Traduction : « Sélectionne les 20 premières entrées de tous les champs de la table jeux_video »</p>
					<p><em>Schéma du fonctionnement de <strong>LIMIT</strong></em> :</p>
					<img src="../png/phpchap4_13.png"/>
					<p><strong>Combinaison de toutes ces requêtes :</strong>
<pre>
	SELECT nom, possesseur, console, prix 
	FROM jeux_video 
	WHERE console='Xbox' OR console='PS2'
	ORDER BY prix 
	DESC 
	LIMIT 0,10
</pre>
					Traduction : «SELECTIONNE les champs nom, possesseur, console et prix de la TABLE jeux_vidéo là ou le champ 'console' est égal à "XboX" OU égal à "PS2", ORDONNE les par prix DECROISSANT, et AFFICHE les 10 premiers »</p>
				</ul>
				<!--faille d'injection SQL-->
				<h3 id="injection">Sécurité : les failles d'injection SQL</h3>
				<ul>
					<p>Si on veut utiliser une variable issu d'un formulaire dans une requête on pourrait le faire comme ceci :</p>
<?php
$texte ="<pre>&lt;?php
&dollar;reponse = &dollar;bdd ->query
			('SELECT nom FROM jeux_video WHERE possesseur=\' '.&dollar;_POST['possesseur'].' \' ');
?&gt;</pre>";
Regex($texte);
?>
					<p><em>CECI EST TRES MAUVAIS !!! </em> un utilisateur pourrait injecter une requête SQL dans l'array $_POST et endomager irrémédiablement la BDD.<br/>
					<em>C'est ce qu'on appelle une <a href="https://fr.wikipedia.org/wiki/Injection_SQL"><strong>FAILLE D'INJECTION SQL</strong></a></em>.(<- voir page wikipédia)</p>
					<p><strong>La solution aux failles d'injection SQL, les requêtes préparées :</strong></p>
<?php
$texte ="<pre>&lt;?php

&dollar;req = &dollar;bdd ->prepare('SELECT nom FROM jeux_video WHERE possesseur = ? AND prix <= ?');
&dollar;req ->execute(array(&dollar;_GET['possesseur'], &dollar;_GET['prix_max']));

?&gt;</pre>";
Regex($texte);
?>	
					<p><em>prepare()</em> prépare la requête sans ses variables.<br/>
					<em>execute</em> remplace les <em>?</em> de la requête par les variables <em>$_GET</em> dans le bon ordre. Les "<em>?</em>" s'appel des marqueurs nom nominatif.</p>
					<p><strong>Avec des marqueurs nominatifs :</strong></p>
<?php
$texte ="<pre>&lt;?php

&dollar;req = &dollar;bdd ->prepare('SELECT nom, prix FROM jeux_video 
		    					WHERE possesseur = :possesseur AND prix <= :prixmax');
&dollar;req ->execute(array('possesseur' => &dollar;_GET['possesseur'], 'prixmax' => &dollar;_GET['prix_max']));

?&gt;</pre>";
Regex($texte);
?>
					<p>L'avantage des marqueurs nominatifs est qu'ils sont plus facile à gérer losqu'il y a beaucoup de variables, de plus ils n'ont pas besoin d'être déclarés dans le bon ordre.</p>
				</ul>
				<!--INSERER des données-->
				<h3 id="inserer">Insérer des données dans une BDD</h3>
				<ul>
					<p><strong>Ajouter des entrées avec <em>INSERT INTO</em> :</strong></p>
<pre>
	INSERT INTO nomTable(chap1, champ2, champ 3 etc...) <br/>						VALUES('valeurChamp1', 'valeurChamp2', 'valeurChamp3', nombre, etc...)
</pre>
					<p>Les nombres n'ont pas besoin d'être entourés d'apostrophes.</p>
					<p><em>INSERT INTO</em> : c'est le mot-clé de l'opération.<br/>
					<em>nomTable</em> : le nom de la table dans laquelle on insère les entrées.<br/>
					<em>(...)</em> : entre parenthèses le nom des champs qui vont être insérés, séparés par une virgule.<br/>
					<em>VALUES</em> : indique qu'on va entrer les valeurs des champs.<br/>
					<em>(' ', ' ', ...)</em> : entre parenthèses les valeurs des champs <em>dans le même ordre qu'indiqué après nomTable.</em></p>
					<em>On peu se passer d'insérer le champ des Id : en effet MySQL le fait automatiquement grâce à la propriété <strong>auto_increment</strong>.</em>
					<br/>
					<p>On est pas obligé de lister les noms des champs après <em>INSERT INTO</em>, mais dans ce cas on devra préciser les  valeurs de tous les champs, y compris la valeur du champ des <em>Id</em> qui sera vide : <em>' '</em>.</p>
<pre>
	INSERT INTO nomTable VALUES(' ', valeurChamp1', 'valeurChamp2', 'valeurChamp3', nombre, etc...)
</pre>
					<p><strong>Ecrire des données dans une BDD avec PHP</strong> :</p>
<?php
$texte ="<pre>&lt;?php
try
{
	&dollar;bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch(Exception &dollar;e)
{
        die('Erreur : '.&dollar;e->getMessage());
}

// On ajoute une entrée dans la table jeux_video
&dollar;bdd ->exec('INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max, commentaires)
						VALUES(\'Battlefield 1942\', \'Patrick\', \'PC\', 45, 50, \'2nde guerre mondiale\')');

echo 'Le jeu a bien été ajouté !';

?&gt;</pre>";
Regex($texte);
?>
					<p><strong>Insérer des entrées avec des marqueurs nominatifs :</strong></p>
<?php
$texte ="<pre>&lt;?php
&dollar;req = &dollar;bdd ->prepare('INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max,
			commentaires)VALUES(:nom, :possesseur, :console, :prix, :nbre_joueurs_max, :commentaires)');

&dollar;req ->execute(array(
	'nom' => &dollar;nom,
	'possesseur' => &dollar;possesseur,
	'console' => &dollar;console,
	'prix' => &dollar;prix,
	'nbre_joueurs_max' => &dollar;nbre_joueurs_max,
	'commentaires' => &dollar;commentaires
	));

echo 'Le jeu a bien été ajouté !';
?&gt;</pre>";
Regex($texte);
?>
				</ul>
				<!--Modifié des entrées-->
				<h3 id="modifier">Modifier des entrée avec <em>UPDATE</em></h3>
				<ul>
					<p><strong>Utilisation de UPDATE :</strong></p>
<pre>
	UPDATE nomTable SET champ1 = valeur1, champ2 = nombre etc... WHERE ID = id
</pre>
					<p><em>UPDATE</em> : mot-clé qui permet de modifié une entrée.<br/>
					<em>nomTable</em> : le nom de la table.<br/>
					<em>SET</em> : sépare le nom de la table des champs à modifier.<br/>
					<em> champ1 = valeur1, champ2 ...</em> : modifie les valeurs des champs qu'on veut modifier. (entre apostrophes échappées pour les chaînes de caractères)<br/>
					<em>WHERE</em> : permet de dire à MySQL quelle entrée il doit modifier. On utilise souvent le champ des <em>Id</em> pour indiquer quelle entrée modifier.</p>
					<em>ATTENTION : si le mot-clé WHERE n'est pas précisé, MySql ne saura pas qu'elle entrée modifier et affectera donc toutes les entrées !!!!</em>
					<br/>
					<p><strong>Modifier les entrée en PHP :</strong></p>
<?php
$texte ="<pre>&lt;?php
&dollar;nb_modifs = &dollar;bdd ->exec('UPDATE jeux_video SET possesseur = \'Florent\' WHERE possesseur = \'Michel\'');
echo &dollar;nb_modifs . ' entrées ont été modifiées !';
?&gt;</pre>";
Regex($texte);
?>
					<p><em>UPDATE</em> renvoie le nombre d'entrées modifiées qu'on peut récupérer dans une varible (ici $nb_modif)</p>
					<p><strong>Avec une requête préparer et des marqueurs nominatifs :</strong></p>
<?php
$texte ="<pre>&lt;?php
&dollar;req = &dollar;bdd ->prepare('UPDATE jeux_video SET prix = :nvprix, 
								nbre_joueurs_max = :nv_nb_joueurs WHERE nom = :nom_jeu');
&dollar;req ->execute(array (
	'nvprix' => &dollar;nvprix,
	'nv_nb_joueurs' => &dollar;nv_nb_joueurs,
	'nom_jeu' => &dollar;nom_jeu
	));
?&gt;</pre>";
Regex($texte);
?>
				</ul>
				<!--Suprimer des entrées-->
				<h3 id="supprimer">Supprimer des entrée avec <em>DELETE</em></h3>
				<ul>
					<p><strong>Utilisation de DELETE :</strong></p>
<pre>
	DELETE FROM nomTable WHERE champ1 ='valeurChamp1'  champ2 ='valeurChamp2'
</pre>				
				<p><em>DELETE</em> : mot-clé qui permet de SUPPRIMER une entrée.<br/>
					<em>nomTable</em> : le nom de la table.<br/>
					<em>WHERE</em> : indique qu'elle(s) entrée(s) doi(ven)t être supprimée(s).</p>
					<em>!!! ATTENTION : si WHERE n'est pas précisé toutes le entrées de la table seront éffacées !!!</em>
					<p><strong>En PHP :</strong></p>
<?php
$texte ="<pre>&lt;?php
&dollar;bdd ->exec('DELETE FROM jeux_video WHERE nom=\'Battlefield 1942\'');
echo 'L'entrées a bien été supprimé.';
?&gt;</pre>";
Regex($texte);
?>

<?php
$texte ="<pre>&lt;?php
&dollar;req = &dollar;bdd ->prepare('DELETE FROM jeux_video WHERE nom_jeu=:nom_jeu');
&dollar;req ->execute(array (
	'nom_jeu' => &dollar;nom_jeu,
	));
?&gt;</pre>";
Regex($texte);
?>
				</ul>
				<!--Erreurs en SQL-->
				<h3 id="erreursSQL">Repérer l'erreur SQL en PHP</h3>
				<ul>
					<p><strong>Pour demander à PHP d'afficher une erreur sur une requête SQL :</strong></p>
<?php
$texte ="<pre>&lt;?php
&dollar;reponse = &dollar;bdd ->query('SELECT nom FROM jeux_video') or die(print_r(&dollar;bdd ->errorInfo()));
?&gt;</pre>";
Regex($texte);
?>
					<p>Renvoie un message de ce type lorsqu'une erreur survient dans une requête SQL :</p>
<pre>
	You have an error in your SQL syntax near 'XXX'
</pre>
				</ul>
				<!--Fonctions SQL-->
				<h3 id="fonctionsSQL">Les fonctions scalaire et d'agrégat de SQL</h3>
				<ul>
					<em> Le langage SQL permet d'effectuer des calculs directement sur des données à l'aide de fonctions toutes prêtes.</em>
					<p>Les fonctions SQL peuvent être classées en deux catégories :
					<ul>
					- <em>les fonctions scalaires</em> : elles agissent sur chaque entrée. Par exemple transformer en majuscules la valeur de chacune des entrées d'un champ, ou à l'inverse en minuscule.<br/>
					- <em>les fonctions d'agrégat</em> : lorsque vous utilisez ce type de fonctions, des calculs sont faits sur l'ensemble de la table pour retourner une valeur. Par exemple, calculer la moyenne des prix retourne une valeur : le prix moyen.
					</ul></p>
					<p>Ces fonctions ne modifient pas la BDD mais renvoient des données transformées à PHP.</p>
					<em>Il faut utiliser les mot-clé AS pour donner un alias au champs transformés par les fonction.</em>
					<p>Fonctions scalaires :</p>
					<pre>SELECT UPPER(nom) AS nom_maj FROM jeux_video <= AS donne nom_maj comme alias à nom</pre>
					<p>Fonctions d'agrégats :</p>
					<pre>SELECT AVG(prix) AS prix_moyen FROM jeux_video <= AS donne prix_moyen comme alias à prix</pre>

					<p><strong>Tableau des fonctions scalaires :</strong></p>
					<table>
						<tr>
							<th>Fonction</th><th>Description</th><th>Exemple</th>
						</tr>
						<tr>
							<td><em>UPPER</em></td><td>convertit le texte d'un champ en majuscules.</td><td>SELECT UPPER(nom) AS nom_maj FROM jeux_video</td>
						</tr>
						<tr>
							<td><em>LOWER</em></td><td>convertit le texte d'un champ en minuscule.</td><td>SELECT LOWER(nom) AS nom_min FROM jeux_video</td>
						</tr>
						<tr>
							<td><em>LENGTH</em></td><td>récupère la longueur des champs.</td><td>SELECT LENGTH(nom) AS longueur_nom FROM jeux_video</td>
						</tr>
						<tr>
							<td><em>ROUND()</em></td><td>arrondit la valeur des champs. (type numeric)<br/> paramètre : nomDuChamp, décimale après la virgule. </td><td>SELECT ROUND(prix, 2) AS prix_arrondi FROM jeux_video</td>
						</tr>
					</table>
					<p><strong>Tableau des fonctions d'agrégats :</strong></p>
					<table>
						<tr>
							<th>Fonction</th><th>Description</th><th>Exemple</th>
						</tr>
						<tr>
							<td><em>AVG</em></td><td>Retourne la moyenne d'un champ contenant des nombres.</td><td>SELECT AVG(prix) AS prix_moyen FROM jeux_video</td>
						</tr>
						<tr>
							<td><em>SUM</em></td><td>Additionne les valeurs d'un champ.</td><td>SELECT SUM(prix) AS prix_total FROM jeux_video WHERE possesseur='Patrick'</td>
						</tr>
						<tr>
							<td><em>MAX</em></td><td>Retourne la valeur maximale d'un champ.</td><td>SELECT MAX(prix) AS prix_max FROM jeux_video</td>
						</tr>
						<tr>
							<td><em>MIN</em></td><td>Retourne la valeur minimale d'un champ.</td><td>SELECT MIN(prix) AS prix_min FROM jeux_video</td>
						</tr>
						<tr>
							<td><em>COUNT()</em></td><td>Compte le nombre d'entrées d'un champs.<br/>
							Prends en paramètre : *, NULL ou unChamp.</td><td>SELECT COUNT(*) AS nb_jeux FROM jeux_video</td>
						</tr>
						<tr>
							<td><em>COUNT(DISTINCT nomChamp)</em></td><td>Compte le nombre de valeurs distinctes sur un champ précis.</td><td>SELECT COUNT(DISTINCT possesseur) AS nbpossesseurs FROM jeux_video</td>
						</tr>
					</table>
					<p><em>COUNT(DISTINCT ...)</em> permet de savoir combien de personnes différentes sont référencées dans la table.</p>
					<p><strong>Le groupement de données : GROUP BY et HAVING</strong></p>
						<p>Exemple :</p>
						<pre>SELECT AVG(prix) AS prix_moyen, console FROM jeux_video GROUP BY console</pre>
						<p>Cette requêtes va rendre le prix moyen des jeux pour chaque console :</p>
						<img src="../png/phpchap4_14.png"/><br/>
						<p><em>HAVING</em> est un peu comme <em>WHERE</em> mais agit une fois que les données sont regroupées. Exemple :</p>
						<pre>SELECT AVG(prix) AS prix_moyen, console FROM jeux_video GROUP BY console HAVING prix_moyen <= 10</pre>
						<p>Cette requête va donner les prix moyen des jeux regrouper par console <em> dont le prix moyen est inférieur à 10 euros</em> :</p>
						<img src="../png/phpchap4_15.png"/><br/>
						<p>On peut avoir les deux mots-clé <em>WHERE</em> et <em>HAVING</em> dans la même requête :</p>
						<pre>SELECT AVG(prix) AS prix_moyen, console FROM jeux_video WHERE possesseur='Patrick' 
												GROUP BY console HAVING prix_moyen <= 10</pre>
				</ul>
				<!--les date en SQL-->
				<h3 id="dateSQL">Les dates en SQL</h3>
				<ul>
					<p><strong>Tableau des différents types de dates :</strong></p>
					<table>
						<tr>
							<th>Type</th><th>Description</th>
						</tr>
						<tr>
							<td><em>DATE</em></td><td>Stocke une date au format AAAA-MM-JJ (Année-Mois-Jour).</td>
						</tr>
						<tr>
							<td><em>TIME</em></td><td>Stocke un moment au format HH:MM:SS (Heures:Minutes:Secondes) .</td>
						</tr>
						<tr>
							<td><em>DATETIME</em></td><td>Stocke la combinaison d'une date et d'un moment de la journée au format AAAA-MM-JJ HH:MM:SS.</td>
						</tr>
						<tr>
							<td><em>TIMESTAMP</em></td><td>Stocke le nombre de secondes passées depuis le 1er janvier 1970 à 00 h 00 min 00 s).</td>
						</tr>
						<tr>
							<td><em>YEAR</em></td><td>Stocke une année, soit au format AA, soit au format AAAA..</td>
						</tr>
					</table>
					<p><strong>Création d'un champ date sur phpMyAdmin :</strong></p>
					<img src="../png/phpchap5_1.png"/>
					<p>Conseil : nommer le champ autrement que "date" car cela peut créer de la confusion avec le mot clé <em>DATE</em> du langageSQL. Préférer "date_creation" ou "date_modification" par exemple.</p>
					<p><strong>Utilisation des champs de date dans SQL</strong></p>
					<p>DATE :</p>
					<pre>SELECT pseudo, message, date FROM minichat WHERE date = '2010-04-02'</pre>
					<p>DATETIME :</p>
					<pre>SELECT pseudo, message, date FROM minichat WHERE date = '2010-04-02 15:28:22'</pre>
					<p><strong>Utilisation plus précise des dates grâce aux opérateurs :</strong></p>
					<p>Donne les messages postés après la date du 02 avril 2010 à 15h 28mins et 22 sec.</p>
					<pre>SELECT pseudo, message, date FROM minichat WHERE date >= '2010-04-02 15:28:22'</pre>
					<p>Donne les message postés entre le 02 et 18 avril 2010.</p>
					<pre>SELECT pseudo, message, date FROM minichat WHERE date >= '2010-04-02 00:00:00' 
															AND date <= '2010-04-18 00:00:00'</pre>
					<p>Autre syntaxe :</p>
					<pre>SELECT pseudo, message, date FROM minichat WHERE date BETWEEN '2010-04-02 00:00:00'
											 				AND '2010-04-18 00:00:00'</pre>
					<p><strong>Insérer une entrée contenant une date :</strong></p>
					<pre>INSERT INTO minichat(pseudo, message, date) VALUES('Mateo', 'Message !', '2010-04-02 16:32:22')</pre>
				</ul>
				<!--les date en SQL-->
				<h3 id="fonctionsdateSQL">Fonctions de gestion des dates</h3>
				<ul>
					<p>Permettent d'extraire des informations et d'effectuer des opérations sur les date :</p>
					<pre>INSERT INTO minichat(pseudo, message, date) VALUES('Mateo', 'Message !', NOW())</pre>
					<p><strong>Tableau des fonctions de gestion des dates :</strong></p>
					<table>
						<tr>
							<th>Fonctions</th><th>Description</th><th>Exemple</th>
						</tr>
						<tr>
							<td><em>NOW()</em></td><td>Obtenir la date et l'heure actuelles.</td><td>...VALUES('Mateo', 'Message !', NOW())</td>
						</tr>
						<tr>
							<td><em>CUREDATE()</em></td><td>Obtenir uniquement la date actuelles.</td><td>...VALUES('Mateo', 'Message !', CUREDATE())</td>
						</tr>
						</tr>
						<tr>
							<td><em>CURTIME()</em></td><td>Obtenir uniquement l'heure actuelles.</td><td>...VALUES('Mateo', 'Message !', CURETIME())</td>
						</tr>
						</tr>
						<tr>
							<td><em>DAY()</em></td><td>Extrait le jour.</td><td>SELECT pseudo, message, DAY(date) AS jour FROM minichat</td>
						</tr>
						<tr>
							<td><em>MONTH()</em></td><td>Extrait le mois.</td><td>SELECT pseudo, message, MONTH(date) AS mois FROM minichat</td>
						</tr>
						<tr>
							<td><em>YEAR()</em></td><td>Extrait l'année.</td><td>SELECT pseudo, message, YEAR(date) AS année FROM minichat</td>
						</tr>
						<tr>
							<td><em>HOUR()</em></td><td>Extrait les heures.</td><td>SELECT pseudo, message, HOUR(date) AS heures FROM minichat</td>
						</tr>
						<tr>
							<td><em>MINUTE()</em></td><td>Extrait les minutes.</td><td>SELECT pseudo, message, MINUTE(date) AS minutes FROM minichat</td>
						</tr>
						<tr>
							<td><em>SECOND()</em></td><td>Extrait les secondes.</td><td>SELECT pseudo, message, SECOND(date) AS secondes FROM minichat</td>
						</tr>
					</table>
					<p><strong>Formater une date grâce à <em>Date_FORMAT</em> :</strong></p>
					<pre>SELECT pseudo, message, DATE_FORMAT(date, '%d/%m/%Y %Hh%imin%ss') AS date FROM minichat</pre>
					<p><em>'%d/%m/%Y %Hh%imin%ss'</em> est le format "français".</p>
					<table>
						<tr>
							<th>Symbole</th><th>Description</th>
						</tr>
						<tr>
							<td>%d</td><td>jour</td>
						</tr>
						<tr>
							<td>%m</td><td>mois</td>
						</tr>
						<tr>
							<td>%Y</td><td>année</td>
						</tr>
						<tr>
							<td>%H</td><td>heure</td>
						</tr>
						<tr>
							<td>%i</td><td>minute</td>
						</tr>
						<tr>
							<td>%s</td><td>seconde</td>
						</tr>
					</table>
					<p><strong>Ajouter et soustraire des dates grâce à <em>DATE_ADD</em> et <em>DATE_SUB</em> :</strong></p>
					<p>Ajouter une date d'expiration de 15 jours  :</p>
					<pre>SELECT pseudo, message, DATE_ADD(date, INTERVAL 15 DAY) AS date_expiration FROM minichat</pre>
					<p>Remplacer ce qu'il ya après <em>INTERVAL</em> avec <em>MONTH</em>, <em>YEAR</em>,etc... pour avoir des intervales différents :</p>
					<pre>SELECT pseudo, message, DATE_ADD(date, INTERVAL 2 MONTH) AS date_expiration FROM minichat</pre>
					<p>Ici <em>date_expiration</em> sera date +<em> 2 MONTH</em></p>
					<p>De même si on veut soustraire des dates : </p>
					<pre>SELECT pseudo, message, DATE_SUB(date, INTERVAL 2 YEAR) AS date_first_message FROM minichat</pre>
				</ul>
				<!--jointures entre tables-->
				<h3 id="jointure">Les jointures entre plusieurs table d'une BDD</h3>
				<ul>
					<p>Pour joindre 2 tables d'une même BDD il faut créer un champ de liaison des 2 tables comme dans le shéma suivant :</p>
					<img src="../png/phpchap5_2.png"/>
					<p>Ici les champs de liaison qui permettrent de faire la jointure sont : "ID_proprietaire" pour la table "jeux_video" et "ID" pour la table "proprietaires".</p>
					<p><strong>Les requêtes de jointure interne :</strong><br/>
					La jointure interne force les données d'une table à avoir une correspondance dans l'autre table.</p>
					<p><em>Jointure interne avec" "WHERE" :</em></p>
<pre>SELECT jeux_video.nom, proprietaires.prenom
FROM proprietaires, jeux_video
WHERE jeux_video.ID_proprietaire = proprietaires.ID</pre>
					<p>- A noter : dans <em>SELECT table1.champ, table2.champ</em>, on précise la table avec son champ pour éviter les ambiguïtés, en effet un champ peut avoir le même nom dans 2 tables différentes, comme le champ "nom" dans le shéma précédent. On a préciser le nom de la table du 2ieme champ afin de respecter la nomenglature, mais ce n'est pas obligatoire car le champ "prenom" n'est présent que dans une seul table.<br/>
					<em>WHERE table1.champDeReference = table2.champDeReference</em> : c'est ici que la jointure s'effectue.</p>
					<em>Il est fortement conseillé d'utiliser des alias pour les champs et pour les tables lorsqu'on fait des jointures.</em>
<pre>SELECT j.nom AS nom_jeu, p.prenom AS prenom_proprietaire
FROM proprietaires AS p, jeux_video AS j
WHERE j.ID_proprietaire = p.ID</pre>
					<p>- <em>j</em> devriendra l'alias de la table jeux_video<br/>
					- <em>p</em> deviendra l'alias de la table proprietaires<br/>
					- <em>nom_jeux</em> deviendra l'alias de jeux_video.nom (qu'on appelle j.nom)<br/>
					- <em>prenom_proprietaire</em> deviendra l'alias de proprietaire.prenom (qu'on appelle p.prenom)</p>
					<p>On peut se passer du mot-clé <em>AS</em> :</p>
<pre>SELECT j.nom nom_jeu, p.prenom prenom_proprietaire
FROM proprietaires p, jeux_video j
WHERE j.ID_proprietaire = p.ID</pre>
					<p><em>Jointure interne avec "JOIN" (nouvelle syntaxe) :</em></p>
<pre>SELECT j.nom nom_jeu, p.prenom prenom_proprietaire
FROM proprietaires p
INNER JOIN jeux_video j
ON j.ID_proprietaire = p.ID</pre>
					<p>- <em>FROM proprietaire p</em> récupère les données d'une table principale.<br/>
					- <em>INNER JOIN jeux_video j</em> fait une jointure interne avec la table secondaire.<br/>
					- <em>ON j.ID_proprietaire = p.ID</em> fait la liason entre les champs de liaison.</p>
					<p>Grâce à cette nouvelle syntaxe on peut filtrer, ordonner et limiter les résultats :</p>
<pre>SELECT j.nom nom_jeu, p.prenom prenom_proprietaire
FROM proprietaires p
INNER JOIN jeux_video j
ON j.ID_proprietaire = p.ID
WHERE j.console = 'PC'
ORDER BY prix DESC
LIMIT 0, 10</pre>
					<p><strong>Les requêtes de jointure externe :</strong></p>
					<p>Les jointures externes permettent de récupérer toutes les données, même celles qui n'ont pas de correspondance.</p>
					<p><em>Récupérer toute la table de gauche avec "LEFT JOIN" :</em></p>
<pre>SELECT j.nom nom_jeu, p.prenom prenom_proprietaire
FROM proprietaires p
LEFT JOIN jeux_video j
ON j.ID_proprietaire = p.ID	
</pre>
					<p>Ici "proprietaires" est appelée la « table de gauche » et "jeux_video" la « table de droite ». Le "LEFT JOIN" demande à récupérer tout le contenu de la table de gauche, donc tous les propriétaires, même si ces derniers n'ont pas d'équivalence dans la table "jeux_video". Lorsqu'un champ n'a pas de correspondance il apparaît quand même mais avec la valeur "NULL".</p>
					<table>
						<tr>
							<th>nom_jeux</th><th>prenom_proprietaire</th>
						</tr>
						<tr>
							<td>Super Mario Bros</td><td>Florent</td>
						</tr>
						<tr>
							<td>Sonic</td><td>Patrick</td>
						</tr>
						<tr>
							<td>...</td><td>...</td>
						</tr>
						<tr>
							<td>NULL</td><td>Cédric</td>
						</tr>
					</table>
					<p><em>Récupérer toute la table de droite avec "RIGHT JOIN" :</em></p>
					<p>Le "RIGHT JOIN" demande à récupérer toutes les données de la table dite « de droite », même si celle-ci n'a pas d'équivalent dans l'autre table. </p>
<pre>SELECT j.nom nom_jeu, p.prenom prenom_proprietaire
FROM proprietaires p
RIGHT JOIN jeux_video j
ON j.ID_proprietaire = p.ID</pre>
					<p>La table de droite est « jeux_video ». On récupèrerait donc tous les jeux, même ceux qui n'ont pas de propriétaire associé.</p>
					<p>Un jeux n'aura pas de propriétaire associé lorsque :
					<ul>
						- soit le champ "ID_proprietaire" contient une valeur qui n'a pas d'équivalent dans la table des propriétaires.<br/>
						- soit le champ "ID_proprietaire" vaut "NULL", c'est-à-dire que personne ne possède ce jeu.
					</ul></p>
					<table>
						<tr>
							<th>nom_jeux</th><th>prenom_proprietaire</th>
						</tr>
						<tr>
							<td>Super Mario Bros</td><td>Florent</td>
						</tr>
						<tr>
							<td>Sonic</td><td>Patrick</td>
						</tr>
						<tr>
							<td>...</td><td>...</td>
						</tr>
						<tr>
							<td>Bomberman</td><td>NULL</td>
						</tr>
					</table>
				</ul>
			</section>
		</div>
		<?php include("../footer.php");?>
	</body>
</html>