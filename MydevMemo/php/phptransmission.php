<!DOCTYPE html>
<html>
	<head>
		<title>phptransmission</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../fonts_style/style.css"/>
	</head>
	
	<body>	
		<div id="container">
			<nav style="margin-left: -180px;margin-top: 150px;">
				<h2>
					<span style="color:white;">navigation</span>			
					<a href="#url"><h4>Transmission par URL</h4></a>
					<a href="#recuperation"><h4>Récupérer les données</h4></a>
					<a href="#formulaire"><h4>Données des formulaires</h4></a>
					<a href="#securite"><h4>Sécurité : faille XSS</h4></a>
					<a href="#superglobale"><h4>Variables superglobales</h4></a>
					<a href="#session"><h4>Les sessions</h4></a>
					<a href="#cookies"><h4>Les cookies</h4></a>
					<a href="phpbdd.php">chapitre suivant...</a>
					<a href="phptabfonction.php">chapitre précédent...</a>
					<div id="allerEnHautIcone"><a href="#container"><img src="../png/allerEnHaut.png"></a></div>
				</h2>
			</nav>
			<div>
				<div id="entete1">			
					<span><h1>PHP : transmission de données</h1></span><br/>
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
						<a href="phptransmission.php"  class="cat" style="background-color: #8892BF;">Transmission</a>
						<a href="phpbdd.php"  class="cat">Les BDD</a>
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
				<!--transmission par l'url-->
				<h3 id="url">Transmettre par l'url</h3>
				<ul>
					<p>Transmettre des informations de pages à pages dans un même site en passant par l'url :</p>
<pre>http://www.monsite.com/page.php?parametre1=information&amp;parametre2=autreInformation
</pre>				
					<p>Comme dans cet exemple :</p>
					<img src="../png/phpchap3_1.png"/>
					<p>Cette méthode de transmission est limitée à 256 caractères.</p>
					<p>Création d'un lien avec des paramètres :</p>
<?php
$texte ="<pre>
&lt;!--& à été remplacer par &amp;amp; dans le code source--&gt;
&lt;a href=&quot;pageCible.php?parametre1=information&amp;amp;parametre2=autreInformation&quot;&gt;text&lt;/a&gt;</pre>";
Regex($texte);
?>
				</ul>
				<!--récupérer les données par l'url-->
				<h3 id="recuperation">Récupérer les données par l'url</h3>
				<ul>
					<p>La page cible de l'adresse url créé une variable de type <em>array</em> spécial : <em>$_GET</em> que l'on peut traité comme n'importe quel <em>array</em> :</p>
					<?php
$texte = "<pre>
/*le parametre transmis par l'url est une valeur de la clé parametre de la variable $._GET*/
&lt;?php echo &dollar;_GET['parametre']; ?> // affichera la valeur

/*avec plusieurs paramètres $._GET*/
<?php echo &dollar;_GET['parametre1'].' '.&dollar;_GET['parametre2']; ?> // affichera les valeurs des 2 paramètres
</pre>";
Regex($texte);
?></pre>
					<p>Si le paramètre manque dans l'url, le navigateur va afficher ce message...</p>
<pre>Notice: Undefined index: parametre in C:\mamp\htdocs\page.php on line 1</pre>
					<p>...lorsqu'on fera appel à la variable $_GET</p>
					<strong>Tester la présence d'une variable grâce a l'instruction "isset" :</strong>
<?php
$texte ="<pre>&lt;?php
if(isset(&dollar;_GET['parametre1']) AND isset(&dollar;_GET['parametre2'])) // On a les 2 paramètres
{
	echo &dollar;_GET['parametre1'] . ' ' . &dollar;_GET['parametre2'];
}
else // Il manque des paramètres, on avertit le visiteur
{
	echo 'Il faut renseigner les paramètres !';
}
?></pre>";
Regex($texte);
?>		
					<strong>Forcer la conversion en nombre entier en cas de transmission d'une variable de type nombre (int, float etc ...)</strong>
<?php
$texte ="<pre>&lt;?php
if(&dollar;_GET['nombre'])
{
	// 1 : On force la conversion en nombre entier
	&dollar;_GET['nombre'] = (int) &dollar;_GET['nombre'];

	echo &dollar;_GET['nombre'];
}
else
{
   echo 'Il faut renseigner un nombre!';
}
?>";
Regex($texte);
?></pre>
				</ul>
				<!--Transmission des données d'un formulaire-->
				<h3 id="formulaire">Transmission des données d'un formulaire</h3>
				<ul>
					<p>Déclaration de la méthode <em>POST</em> dans la balise HTML <em>&lt;form&gt;</em> de la page du formulaire :</p>

<?php
$texte = "<pre>&lt;form action=&quot;cible.php&quot; method=&quot;post&quot;&gt; &lt;!--méthode POST --&gt;
&lt;p&gt;
    &lt;input type=&quot;text&quot; name=&quot;parametre&quot; /&gt;
    &lt;input type=&quot;submit&quot; value=&quot;Valider&quot; /&gt;
&lt;/p&gt;

&lt;textarea name=&quot;parametre&quot; rows=&quot;X&quot; cols=&quot;Y&quot;&gt;
Votre message ici.
&lt;/textarea&gt;</pre>";
Regex($texte);
?>
					<em>C'est l'attribut name ="..." qui est utlisé pour transmètre le paramètre.</em>
					<p>Comme pour la méthode <em>get</em>, la méthode <em>post</em> déclarée comme valeur de l'attribut <em>method ="..."</em>
					permet de créer une variable de type array <em>$_POST</em> vers la page cible déclarée dans <em>action ="..."</em> :</p>

<?php
$texte = "<pre>&lt;?php echo &dollar;_POST['parametre']; ?&gt;

&lt;?php echo &dollar;_POST['parametre1'].' '.&dollar;_POST['parametre2'].' '.&dollar;_POST['parametre3']; ?&gt;</pre>";
Regex($texte);
?>					
					<p><em>Cette méthode permet de faire passer autant de données voulues sans passer par l'url. Elle est donc beaucoup plus sûre</em>.</p>

					<p><strong>Utlisation de cette méthode dans tous les types d'imput de la balise &lt;form&gt; :</strong></p>
<?php
$texte = "<pre>/*TEXTAREA*/
&lt;textarea name=&quot;message&quot; rows=&quot;X&quot; cols=&quot;Y&quot;&gt;
Votre message ici.
&lt;/textarea&gt;
&lt;?php echo &dollar;_POST['message'] ?&gt; //l'attribut name définit le nom de la variable

/*LISTE DEROULANTE*/
&lt;select name=&quot;choix&quot;&lt;
    &lt;option value=&quot;choix1&quot;&gt;Choix 1&lt;/option&gt;
    &lt;option value=&quot;choix2&quot; selected=&quot;selected&quot; &gt;Choix 2&lt;/option&gt;//choix par défaut
    &lt;option value=&quot;choix3&quot;&gt;Choix 3&lt;/option&gt;
    &lt;option value=&quot;choix4&quot;&gt;Choix 4&lt;/option&gt;
&lt;/select&gt;

&lt;?php echo &dollar;_POST['choix'] ?&gt; //l'attribut value définit le nom de la variable
exemple : si l'utilisateur choisit Choix3 c'est la valeur de value=&quot;choix3&quot; qui sera transmis à la page cible

/*BOITE A COCHER*/
&lt;input type=&quot;checkbox&quot; name=&quot;boite&quot; id=&quot;boite&quot; /&gt; &lt;label for=&quot;boite&quot;&gt; Boite à cocher &lt;/label&gt;

&lt;?php echo &dollar;_POST['boite'] ?&gt; //l'attribut name définit le nom de la variable

/*BOUTONS D'OPTION*/
Question ?
&lt;input type=&quot;radio&quot; name=&quot;reponse&quot; value=&quot;oui&quot; id=&quot;oui&quot; checked=&quot;checked&quot; /&gt; &lt;label for=&quot;oui&quot;&gt;Oui&lt;/label&gt;
&lt;input type=&quot;radio&quot; name=&quot;reponse&quot; value=&quot;non&quot; id=&quot;non&quot; /&gt; &lt;label for=&quot;non&quot;&gt;Non&lt;/label&gt;

&lt;?php echo &dollar;_POST['reponse'] ?&gt; //l'attribut name définit le nom de la variable
La variable transmet la valeur de value : &dollar;_POST['reponse']='oui' ou &dollar;_POST['reponse']='non'

/*CHAMPS CACHES*/
Permet de transmettre des données sans les afficher
&lt;input type=&quot;hidden&quot; name=&quot;pseudo&quot; value=&quot;Pseudo&quot; /&gt;

&lt;?php echo &dollar;_POST['pseudo'] ?&gt; //l'attribut name définit le nom de la variable
!!! ATTENTION LA VALEUR DU CHAMP PEUT ETRE CONSULTER 
		      LOSRQU'ON AFFICHE LE CODE SOURCE DE LA PAGE HTML !!!!
</pre>";
Regex($texte);
?>
				</ul>
				<!--securité et faille XSS-->
				<h3 id="securite">Ne faites jamais confiance aux données reçues : la faille XSS</h3>
				<ul>
					<p>Rien n'empêche a l'utilisateur du site de mettre autre chose que ce qu'on lui demande dans les champs des formulaires :</p>
<?php
$texte = "<pre>
&lt;form action=&quot;cible.php&quot; method=&quot;post&quot;&gt;
&lt;p&gt;
    &lt;input type=&quot;text&quot; name=&quot;prenom&quot; /&gt;
    &lt;input type=&quot;submit&quot; value=&quot;Valider&quot; /&gt;
&lt;/p&gt;

&lt;p&gt;Je sais comment tu t'appelles. Tu t'appelles &lt;?php echo &dollar;_POST['prenom']; ?&gt; !&lt;/p&gt;</pre>";
Regex($texte);
?>
					<p>Si l'utilisateur décide de mettre une balise HTML :</p>
					<?php $texte = "<pre>&lt;strong&gt;Badaboum&lt;/strong&gt;</pre>";Regex($texte);?>
					<p>Le résultat donnera :</p>
					<pre>Je sais comment tu t'appelles. Tu t'appelles <strong>Badaboum</strong> !</pre>
					<p>Ce n'est pas très grave avec ce genre de balise mais l'utilisateur peut mettre une balise &lt;script&gt; avec un script en JavaScript susceptible de nuire au site :</p>
					<?php $texte = "<pre>&lt;script type=&quot;text/javascript&quot;&gt;alert('Badaboum')&lt;/script&gt;</pre>";Regex($texte);?>
					<p>Donnera ce résultat :</p>
					<img src="../png/phpchap3_2.png"/><br/>
					<p><em>C'EST CE QU'ON APPELLE UN FAILLE XSS (cross-site scripting) !</em></p>

					<p>D'autre script JavaScript peuvent altérer définitivement la bonne marche du site ou accéder à des données privées (comme les mots de passes) des utilisateurs stockés sur une base de donnée.</em>


					<p>Pour éviter la faille XSS, il suffit d'appliquer la fonction PHP <em>htmlspecialchars</em> sur tous les textes envoyés par vos visiteurs que vous afficherez.</p>

					<?php $texte = "<pre>&lt;p&gt;Je sais comment tu t'appelles. Tu t'appelles &lt;?php echo htmlspecialchars(&dollar;_POST['prenom']); ?&gt; !&lt;/p&gt;</pre>";Regex($texte);?>
					<p>Cette fonction échappe les caractèrès spéciaux de HTML comme <em><</em> et <em>></em> qui deviendront <em>&amp;lt;</em> et <em>&amp;gt;</em> et empêcheront la balise de s'exécuter.<br/>
					On peut utiliser la fonction <em>strip_tags</em> à la place de <em>htmlspecialchars</em> pour retirer les balises HTML plutôt que de les échapper.</p>
				</ul>
				<!--Variable supeglobal-->
				<h3 id="superglobale">Variables superglobales</h3>
				<ul>
					<em>$_GET et $_POST sont des variables superglobales : PHP créera un array lorsqu'elle seront appelées. Cet array contiendra de nombreux paramètres utiles.</em>
					<p><strong>Tableau des variables superglobales et leurs description :</strong></p>
					<table>
						<tr>
							<th>Variable</th><th>Description</th>
						</tr>
						<tr>
							<td><em>$_SERVER</em></td><td>valeurs renvoyées par le serveur.<br/> Ex : <em>$_SERVER['REMOTE_ADDR']</em> donne l'adresse IP du client qui a demandé à voir la page.</td>
						</tr>
						<tr>
							<td><em>$_ENV</em></td><td>variables d'environnement toujours données par le serveur.</td>
						</tr>
						<tr>
							<td><em>$_SESSION</em></td><td>variables de session : variables qui restent stockées sur le serveur le temps de la présence d'un visiteur. </td>
						</tr>
						<tr>
							<td><em>$_COOKIE</em></td><td>valeurs des cookies enregistrés sur l'ordinateur du visiteur.<br/>
							stocke des informations sur l'ordinateur du visiteur pendant plusieurs mois</td>
						</tr>
						<tr>
							<td><em>$_GET</em></td><td>données envoyées en paramètres dans l'URL.</td>
						</tr>
						<tr>
							<td><em>$_POST</em></td><td>informations qui viennent d'être envoyées par un formulaire.</td>
						</tr>
						<tr>
							<td><em>$_FILES</em></td><td>contient la liste des fichiers qui ont été envoyés via un formulaire.</td>
						</tr>
					</table>
				</ul>
				<!--Session-->
				<h3 id="session">Session et Cookies</h3>
				<ul>
					<p><strong>Fonctionnement d'une sessions :</strong></p>

						<li>1- Un visiteur arrive sur votre site. On demande à créer une session pour lui. PHP génère alors un nouméro unique en hexadécimal, (par exemple : a02bbffc6198e6e0cc2715047bc3766f), appelé « ID de session » (ou  PHPSESSID ). PHP transmet automatiquement cet ID de page en page en utilisant généralement un cookie.</li>
						<li>2- Une fois la session générée, on peut créer une infinité de variables de session pour nos besoins. Par exemple, on peut créer une variable  $_SESSION['nom']  qui contient le nom du visiteur,  $_SESSION['prenom']  qui contient le prénom, etc. Le serveur conserve ces variables même lorsque la page PHP a fini d'être générée. Cela veut dire que, quelle que soit la page de votre site, vous pourrez récupérer par exemple le nom et le prénom du visiteur via la superglobale  $_SESSION  !</li>
						<li>3- Lorsque le visiteur se déconnecte de votre site, la session est fermée et PHP « oublie » alors toutes les variables de session que vous avez créées. Il est en fait difficile de savoir précisément quand un visiteur quitte votre site. En effet, lorsqu'il ferme son navigateur ou va sur un autre site, le vôtre n'en est pas informé. Soit le visiteur clique sur un bouton « Déconnexion » (que vous aurez créé) avant de s'en aller, soit on attend quelques minutes d'inactivité pour le déconnecter automatiquement : on parle alors de timeout. Le plus souvent, le visiteur est déconnecté par un timeout.</li>

<?php $texte = "<pre>&lt;?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

// On s'amuse à créer quelques variables de session dans $._SESSION
&dollar;_SESSION['prenom'] = 'Jean';
&dollar;_SESSION['nom'] = 'Dupont';
&dollar;_SESSION['age'] = 24;
?&gt;

&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;utf-8&quot; /&gt;
        &lt;title&gt;Titre de ma page&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
    &lt;p&gt;
        Salut &lt;?php echo &dollar;_SESSION['prenom']; ?&gt; !&lt;br /&gt;//appel de prenom de l'ARRAY $._SESSION
        Tu es à l'accueil de mon site (index.php). Tu veux aller sur une autre page ?
    &lt;/p&gt;
    &lt;p&gt;
        &lt;a href=&quot;mapage.php&quot;&gt;Lien vers mapage.php&lt;/a&gt;&lt;br /&gt;
        &lt;a href=&quot;monscript.php&quot;&gt;Lien vers monscript.php&lt;/a&gt;&lt;br /&gt;
        &lt;a href=&quot;informations.php&quot;&gt;Lien vers informations.php&lt;/a&gt;
    &lt;/p&gt;
    &lt;/body&gt;
&lt;/html&gt;</pre>";Regex($texte);?>
					<em>Pour pouvoir utiliser les variables &dollar;_SESSION sur les autres pages il faut démarrer ces pages par :</em>
<?php $texte="<pre>&lt;?php session_start(); ?&gt;// On démarre la session AVANT toute chose

//code HTML
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;utf-8&quot; /&gt;
        &lt;title&gt;Titre de ma page&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
    &lt;p&gt;Re-bonjour !&lt;/p&gt;
    &lt;p&gt;
        Je me souviens de toi ! Tu t'appelles &lt;?php echo &dollar;_SESSION['prenom'] . ' ' . &dollar;_SESSION['nom']; ?&gt; !&lt;br /&gt;
        Et ton âge hummm... Tu as &lt;?php echo &dollar;_SESSION['age']; ?&gt; ans, c'est ça ? :-D
    &lt;/p&gt;
    &lt;/body&gt;
&lt;/html&gt;</pre>";Regex($texte);?>
					<p>Fermeture d'une session : <br/>
					<strong>session_destroy()</strong>  : ferme la session du visiteur. Cette fonction est automatiquement appelée lorsque le visiteur ne charge plus de page de votre site pendant plusieurs minutes (c'est le timeout), mais vous pouvez aussi créer une page « Déconnexion » si le visiteur souhaite se déconnecter manuellement.</p>
				</ul>
				<!--cookies-->
				<h3 id="cookies">Les cookies </h3>
				<ul>
					<p>Un cookie est un petit fichier  stocké sur l'ordinateur client qui fonctionne un peu comme une session sauf qu'il a une durée de vie plus longue.</p>
					<p><strong>Consulter les cookies sur son ordinateur :</strong></p>
					<img src="../png/phpchap3_3.png"/>
					<p>Les cookie sont classé par site web. On peut effacer les cookie un à un ou totalement grâce au menu de chaque navigateur internet.</p>
					<p><strong>Ecrire un cookie :</strong></p>
					<p>On donne 3 parametres :<br/>
					<ul>
						1- le nom du cookie<br/>
						2- la valeur du cookie<br/>
						3- la date d'expiration du cookie sous forme de timestamp avec la fonction time()(nombre de sec écoulées depuis le 1er janvier 1970)
					</ul></p>
<?php $texte="<pre>&lt;?php setcookie('pseudo', 'JimDoe', time() + 365*24*3600); ?&gt; //expire dans 1 an
</pre>";Regex($texte);?>
					<p><strong>Sécuriser les cookies grâce à "httponly" :</strong></p>
<?php $texte="<pre>&lt;?php setcookie('pseudo', 'JimDoe', time() + 365*24*3600, null, null, false, true); ?&gt;
//httponly est le dernier parametre
</pre>";Regex($texte);?>
<?php $texte="<pre>&lt;?php setcookie('pseudo', 'JimDoe', time() + 365*24*3600, null, null, false, true);// On écrit un cookie
// Et SEULEMENT MAINTENANT, on peut commencer à écrire du code html
 ?&gt;

&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;utf-8&quot; /&gt;
        &lt;title&gt;Ma super page PHP&lt;/title&gt;
    &lt;/head&gt;
    etc..
</pre>";Regex($texte);?>					
					<p><em>Comme pour session_star, setcookie doit impérativement être placé avant tout code HMTL.</em> </p>
					<p><strong>Afficher un cookie :</strong></p>
					<p>PHP va créer une superglobale <code>$_COOKIE</code> :</p>
<?php $texte="<pre>
&lt;p&gt;
Ce code affiche ce &lt;?php echo &dollar;_COOKIE['pseudo']; ?&gt; cookie et ce &lt;?php echo &dollar;_COOKIE['pays']; ?&gt; cookie.
&lt;/p&gt;
</pre>";Regex($texte);?>
					<p>À noter que si le cookie n'existe pas, la variable superglobale n'existe pas. Il faut donc faire un  <strong>isset</strong>  pour vérifier si le cookie existe ou non.</p>
					<p><strong>Modifier un cookie existant :</strong></p>
					<p>Il faut refaire appel à  setcookie  en gardant le même nom de cookie, ce qui « écrasera » l'ancien.</p>
<?php $texte="<pre>&lt;?php setcookie('pseudo', 'Kaldric', time() + 365*24*3600, null, null, false, true); ?&gt; //changement du pseudo
</pre>";Regex($texte);?>
					<p><em>A noter que le temps d'expiration du cookie sera remis à zéro pour 1 an.</em></p>
				</ul>
			</section>
		</div>
	<?php include("../footer.php");?>
	</body>
</html>