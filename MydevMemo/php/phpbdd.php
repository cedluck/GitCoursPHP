<!DOCTYPE html>
<html>
	<head>
		<title>phpbdd</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../fonts_style/style.css"/>
	</head>
	
	<body>	
		<div id="container">
			<nav style="margin-left: -180px;margin-top: 150px;">
				<h2>
					<span style="color:white;">navigation</span>			
					<a href="#lireecrire"><h4>Lire et écrire</h4></a>
					<a href="#bdd"><h4>Les bases de données</h4></a>
					<a href="#phpmyadmin"><h4>phpMyAdmin</h4></a>
					<a href="#lecturedonnees"><h4>Lire une BDD avec PHP</h4></a>
					<a href="phpsql.php">chapitre suivant...</a>
					<a href="phptransmission.php">chapitre précédent...</a>
					<div id="allerEnHautIcone"><a href="#container"><img src="../png/allerEnHaut.png"></a></div>
				</h2>
			</nav>
			<div>
				<div id="entete1">			
					<span><h1>PHP : les bases de données</h1></span><br/>
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
						<a href="phpbdd.php"  class="cat" style="background-color: #8892BF;">Les BDD</a>
						<a href="phpsql.php"  class="cat">Langage SQL</a>
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
				<!--lire et écrire dans un fichier-->
				<h3 id="lireecrire">Lire et écrire des données dans un fichier</h3>
				<ul>
					<p>Les variables sont temporaire. Pour stocker des informations défitivement sur le site (comme les messages d'un forum) il faut les stocker sur un disque dur en créant un fichier.</p>
					<strong>Autoriser l'écriture de fichiers (chmod) avec un logiciel FTP (filezila) :</strong><br/>
					<img src="../png/phpchap4_2.png"/><br/>
					<p>On pourra ainsi changer les permissions dans un menu CHMOD :</p>
					<img src="../png/phpchap4_3.png"/><br/>
					<strong>Le code CHMOD du mode lecture et écriture est 777.</strong>
					<p><em>Consulter un tuto à propos du CHMOD : <a href="https://openclassrooms.com/courses/reprenez-le-controle-a-l-aide-de-linux/les-utilisateurs-et-les-droits#ss_part_5">Reprenez le contrôle à l'aide de Linux !</a></em></p>
					<strong>Lire et écrire dans un fichier :</strong>
					<p>Exemple d'un fichier qui permet de compter le nombre de fois qu'une page a été vue sur le site.</p>
<?php
$texte ="<pre>&lt;?php
&dollar;monfichier = fopen('compteur.txt', 'r+');//on ouvre le fichier en lecture et écriture 'r+'
 
&dollar;pages_vues = fgets(&dollar;monfichier); // On lit la première ligne (nombre de pages vues)
&dollar;pages_vues += 1; // On augmente de 1 ce nombre de pages vues
fseek(&dollar;monfichier, 0); // On remet le curseur au début du fichier
fputs(&dollar;monfichier, &dollar;pages_vues); // On écrit le nouveau nombre de pages vues
 
fclose(&dollar;monfichier);
 
echo '&lt;p&gt;Cette page a été vue ' . &dollar;pages_vues . ' fois !&lt;/p&gt;';
?&gt;</pre>";
Regex($texte);
?>					
					<strong>Tableau des modes <em>fopen</em> :</strong>
					<table>
						<tr>
							<th>Mode</th><th>Explication</th>
						</tr>
						<tr>
							<td>r</td><td>Ouvre le fichier en lecture seule.</td>
						</tr>
						<tr>
							<td>r+</td><td>Ouvre le fichier en lecture et écriture.</td>
						</tr>
						<tr>
							<td>a</td><td>Ouvre le fichier en écriture seule. Si le fichier n'existe pas, il est automatiquement créé.</td>
						</tr>
						<tr>
							<td>a+</td><td>Ouvre le fichier en lecture et écriture. Si le fichier n'existe pas, il est créé automatiquement. Attention : le répertoire doit avoir un CHMOD à 777 dans ce cas ! À noter que si le fichier existe déjà, le texte sera rajouté à la fin.</td>
						</tr>					
					</table>
					<p>Fonctions qui écrivent et lisent :</p>
					<table>
						<tr>
							<th>Fonction</th><th>Explication</th>
						</tr>
						<tr>
							<td>fgetc</td><td>lire caractère par caractère.</td>
						</tr>
						<tr>
							<td>fgets</td><td>lire ligne par ligne.</td>
						</tr>
						<tr>
							<td>fputs</td><td>Ecrit la ligne dans le fichier.</td>
						</tr>
						<tr>
							<td>fseek</td><td>Replace le curseur en début de fichier.</td>
						</tr>
					</table>
					<?php
					$texte ="
<pre>// f.seek s'utilise comme ça : 
fseek(&dollar;monfichir, 0) // 0 étant l'index du premier caractère du fichier.
</pre>";Regex($texte);
					?>

					<em>Si le fichier est ouvert avec le mode 'a 'ou 'a+', toutes les données écritent seront toujours ajoutées à la fin du fichier. La fonction 'fseek' n'aura donc aucun effet dans ce cas.</em>
				</ul>

				<!--les BDD et SGBD-->
				<h3 id="bdd">Les base de données (BDD) comme MySQL</h3>
				<ul>
					<em>Les base de données (BDD) sont des systèmes qui enregistent les données de façon ordonnées afin que les informations fournies par ces données soit toujours classées et facilement accessibles.</em>
					<p><strong>Schéma d'une base de données :</strong></p>
					<img src="../png/phpchap4_1.png"/><br/>
					<em>Chaque BDD contient des tables et chaque table contient des champs (colonnes) et des entrées (lignes).</em><br/>
					<p><strong>Les SGBD (Systèmes de Gestion de Bases de Données)</strong><br/>
					Les SGBD sont les programmes qui se chargent du stockage de vos données.</p>
					On communique avec MySQL grâce au langage SQL. Ce langage est commun à tous les SGBD (avec quelques petites différences néanmoins pour certaines fonctionnalités plus avancées).</p>
					<p><strong>PHP fait la jonction entre vous et MySQL :</strong></p>
					<img src="../png/phpchap4_4.png"/><br/>
					<p>Autre SGBD : 
						<ul>
							- <em>PostgreSQL :</em> libre et gratuit comme MySQL, avec plus de fonctionnalités mais un peu moins connu ;<br/>
							- <em>QLite :</em> libre et gratuit, très léger mais très limité en fonctionnalités ;<br/>
							- <em>Oracle :</em> utilisé par les très grosses entreprises ; sans aucun doute un des SGBD les plus complets, mais il n'est pas libre et on le paie le plus souvent très cher ;<br/>
							- <em>Microsoft SQL Server :</em> le SGBD de Microsoft.
						</ul>
					</p>
				</ul>
				<!--phpmyadmin-->
				<h3 id="phpmyadmin">phpMyAdmin</h3>
				<ul>
					<p>phpMyAdmin est une interface qui permet de visualiser les BDD. Accéder en tapant : http://localhost:8888/phpMyAdmin/index.php dans l'url du navigateur ou en cliquant sur les liens proposer par votre hébergeur de site.</p>
					<p><strong>L'accueil de phpMyAdmin :</strong></p>
					<img src="../png/phpchap4_5.png"/><br/>
					<p><strong>Créer une nouvelle BDD :</strong></p>
					<img src="../png/phpchap4_6.png"/><br/>
					<p>Interclassement permet de choisir un charset précis (utiliser de préférence utf8_general_ci).</p>
					<p><strong>Créer une nouvelle table :</strong></p>
					<img src="../png/phpchap4_7.png"/><br/>
					<p><strong>Renseigner les informations des champs :</strong></p>
					<img src="../png/phpchap4_8.png"/><br/>
					<p><em>Toute table doit posséder un champ qui joue le rôle de clé primaire. La clé primaire permet d'identifier de manière unique une entrée dans la table. En général, on utilise le champ id comme clé primaire.</em></p>
					<p>Détails des colonnes :</p>
					<table>
						<tr>
							<th>colonne</th><th>description</th>
						</tr>
						<tr>
							<td>Champ</td><td>permet de définir le nom du champ (très important !) </td>
						</tr>
						<tr>
							<td>Type</td><td>le type de données que va stocker le champ (nombre entier, texte, date...)</td>
						</tr>
						<tr>
							<td>Taille/Valeurs </td><td>taille maximale du champ, notamment pour VARCHAR => 255 carctères</td>
						</tr>
						<tr>
							<td>Index</td><td>active l'indexation du champ. Utiliser l'index PRIMARY sur les champs de type id</td>
						</tr>
						<tr>
							<td>AUTO_INCREMENT (A_I)</td><td>permet au champ de s'incrémenter tout seul à chaque nouvelle entrée</td>
						</tr>
					</table>
					<p><strong>Les types de champs MySQL</strong></p>
					<img src="../png/phpchap4_9.png"/><br/>
					<table>
						<tr>
							<th>catérgorie</th><th>type</th><th>description</th>
						</tr>
						<tr>
							<td></td><td>INT</td><td>nombre entier</td>
						</tr>
						<tr>
							<td></td><td>VARCHAR</td><td>texte court (entre 1 et 255 caractères)</td>
						</tr>
						<tr>
							<td></td><td>TEXT</td><td>long texte (on peut y stocker un roman sans problème)</td>
						</tr>
						<tr>
							<td></td><td>DATE</td><td>date (jour, mois, année).</td>
						</tr>
						<tr>
							<td>NUMERIC</td><td>TINYIN, SMALLINT...</td><td>les nombre : petits nombres entiers (TINYIN), gros nombres entiers (BIGINT), nombres décimaux, etc.</td>
						</tr>
						<tr>
							<td>DATE and TIME</td><td>DATE, DATETIME...</td><td>les dates et les heure : permettent de stocker une date, une heure, ou les deux à la fois.</td>
						</tr>
						<tr>
							<td>STRING</td><td>CHAR, VARCHAR...</td><td>les chaînes de caractères : types adaptés à toutes les tailles.</td>
						</tr>
						<tr>
							<td>SPATIAL</td><td>GEOMETRY, POINT...</td><td>bases de données spatiales utiles pour la cartographie.</td>
						</tr>
					</table>
					<p><strong>Opérations sur une table :</strong></p>
					<p>Sous l'onglet "structure" de phpMyAdmin on peut sélectionner les champ et éffectuer des opérations :</p>
					<img src="../png/phpchap4_10.png"/><br/>
					<p>Supprimer, modifier, mettre le champ en primaire etc...</p>
					<img src="../png/phpchap4_11.png"/><br/>
					<p><strong>Insérer un champ :</strong></p>
					<img src="../png/phpchap4_12.png"/><br/>
					<p>Le numéro d'id sera automatiquement créer grâce a l'option <code>auto_increment</code>.</p>
					<p><strong>Autre opérations :</strong></p>
					<p>D'autres opérations sont accessibles via leur onglet (SQL, Importer, Exporter...) :</p>
					<table>
						<tr>
							<th>onglet</th><th>description de l'opération</th>
						</tr>
						<tr>
							<td>SQL</td><td>permet d'éxécuter des requêtes SQL</td>
						</tr>
						<tr>
							<td>RECHERCHE</td><td>permet de faire une recherche dans chaque champ.</td>
						</tr>
						<tr>
							<td>EXPORTER</td><td>permet d'exporter la table sous forme de fichier .sql sur votre odinateur ou sur internet.</td>
						</tr>
						<tr>
							<td>IMPORTER</td><td>permet d'importer un fichier de requêtes SQL (.sql) dans votre BDD.</td>
						</tr>
						<tr>
							<td>PRIVILEGES</td><td>permet d'établir des règles de privilèges.</td>
						</tr>
						<tr>
							<td>OPERATIONS</td><td>permet de déplacer, changer les options, copier, maintenir, vider ou supprimer la table.</td>
						</tr>					
					</table>
				</ul>
				<h3 id="lecturedonnees">Lire les données d'une BDD avec PHP</h3>
				<ul>
					<p><strong>Se connecter à la BDD avec l'extension PDO :</strong></p>
					<p>Après avoir vérifié que l'extension PDO est activer sur votre serveur web (voir fichier php.ini), voilà comment on peut accéder à une base de donnée en PHP :</p>
<?php
$texte ="<pre>&lt;?php
// Sous WAMP (Windows)
&dollar;bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');

// Sous MAMP (Mac ou Windows)
&dollar;bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');
?&gt;</pre>";
Regex($texte);
?>
					<p><strong>Tester la présences d'erreurs :</strong></p>
<?php
$texte ="<pre>&lt;?php
try
{
	&dollar;bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch (Exception &dollar;e)
{
        die('Erreur : ' . &dollar;e ->getMessage());
}
?&gt;</pre>";
Regex($texte);
?>
					<p><strong>Traquer les erreurs :</strong></p>
<?php
$texte ="<pre>&lt;?php
try
{
	&dollar;bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '', 
					array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception &dollar;e)
{
        die('Erreur : ' . &dollar;e ->getMessage());
}
?&gt;</pre>";
Regex($texte);
?>					
					<p>Cela permet à PHP d'afficher les détails des erreurs commis lors d'une requête SQL.</p>
					<p><strong>Récupéréer les données d'une BDD.</strong></p>
<?php
$texte ="<pre>
&dollar;reponse = &dollar;bdd ->query('Tapez votre requête SQL ici');		
</pre>";
Regex($texte);
?>
					<p>$reponse contient toute la réponse de MySQL en vrac, sous forme d'objet.</p>
					<p><strong>Afficher le résultat d'une requête.</strong></p>
<?php
$texte ="<pre>
&dollar;donnees = &dollar;reponse ->fetch();		
</pre>";
Regex($texte);
?>
					<p>$donnees est un array qui contient champ par champ les valeurs des entrées. On fera donc $donnees['nomDuChamp'] pour obtenir la valeur du champ. fetch() rend false dans $données lorsqu'il ne rencontre pas ou plus de champs.</p>
					<p><strong>Fermer le curseur d'analyse des résultats après chaque requête :</strong></p>
<?php
$texte ="<pre>
&lt;?php &dollar;reponse ->closeCursor(); ?&gt;
</pre>";
Regex($texte);
?>
					<p><strong>Code complet d'une requête en PHP :</strong></p>
<?php
$texte ="<pre>&lt;?php
try
{
	&dollar;bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '',
						array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)););
}
catch(Exception &dollar;e)
{
        die('Erreur : '.&dollar;e ->getMessage());
}

&dollar;reponse = &dollar;bdd ->query('Tapez votre requête SQL ici');

//fetch() cherche la prochaine entrée dans $.reponse et l'organise en ARRAY,<br/>					lorsqu'il n'y a plus d'entrée fetch() rend false.
while (&dollar;donnees = &dollar;reponse ->fetch())
{
	echo &dollar;donnees ['nomDuChamp'] . '&lt;br /&gt;';
}

&dollar;reponse ->closeCursor();

?&gt;</pre>";
Regex($texte);
?>
				</ul>
			</section>
		</div>
		<?php include("../footer.php");?>
	</body>
</html>