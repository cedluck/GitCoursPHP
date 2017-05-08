<!DOCTYPE html>
<html>
	<head>
		<title>htmltableform</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="fonts_style/style.css"/>
	</head>
	
	<body>	
		<div id="container">
			<nav style="margin-left: -180px;margin-top: 150px;">
				<h2>
					<span style="color:white;">navigation</span>			
					<a href="#tableau"><h4>Les tableaux</h4></a>
					<a href="#baliseform"><h4>Formulaire basique</h4></a>
					<a href="#tabtype"><h4>Saisie enrichie</h4></a>
					<a href="#zonesoptions"><h4>Zones d'options</h4></a>
					<a href="#listederoulante"><h4>Listes Déroulantes</h4></a>
					<a href="#finEnvoie"><h4>Regrouper/Envoyer</h4></a>
					<a href="htmlstructure.php">chapitre précédent...</a>
					<div id="allerEnHautIcone"><a href="#container"><img src="png/allerEnHaut.png"></a></div>
				</h2>
			</nav>
			<div id="central">
				<div id="entete1">			
					<span><h1>HTML5 : Tableaux et formulaires</h1></span><br/>
					<div id="flexDirRow">
						<a href="index.php" class="bouton_hor_nav">Acceuil</a>
						<a id="c" class="bouton_hor_nav">C++</a>
						<a id="Qt" class="bouton_hor_nav">Qt</a>
						<a id="html" class="bouton_hor_nav">HTML 5</a>
						<a id="css" class="bouton_hor_nav">CSS 3</a>		
						<a id="javascript" class="bouton_hor_nav">JAVASCRIP</a>
						<a id="phpMySql" class="bouton_hor_nav">PHP MySQL</a>		
					</div>
					<div id="navigation" class="html">
						Cliquez sur le language qui vous intéresse pour accéder à son mémo.
					</div>
				</div>
				<script src="js/ajax.js"></script>
				<script src="js/nav2.js"></script>
				<br/>
			</div>
			<section>
			<!--tableeu-->
			<h3 id="tableau">Balises et codage d'un tableau</h3>
			<ul>
				<table>
					<caption>Balise de tableau.</caption>
					<tr>
						<th>Balise</th><th>Description</th>
					</tr>
					<tr>
						<td>&lt;table&gt;</td><td>Tableau</td>
					</tr>
					<tr>
						<td>&lt;caption&gt;</td><td>Titre du tableau</td>
					</tr>
					<tr>
						<td>&lt;tr&gt;</td><td>Ligne de tableau</td>
					</tr>
					<tr>
						<td>&lt;th&gt;</td><td>Cellule d'en-tête</td>
					</tr>
					<tr>
						<td>&lt;td&gt;</td><td>Cellule</td>
					</tr>
					<tr>
						<td>&lt;thead&gt;</td><td>Section de l'en-tête du tableau</td>
					</tr>
					<tr>
						<td>&lt;tbody&gt;</td><td>Section du corps du tableau</td>
					</tr>
					<tr>
						<td>&lt;tfoot&gt;</td><td>Section du pied du tableau</td>
					</tr>
				</table>
				<p>Voici comment on fait un tableau en HTML5 :</p>
				<div class="console">
<pre>&lt;table&gt;
	&lt;caption&gt;Titre du tableau&lt;/caption&gt;
	&lt;tr&gt;
		&lt;th&gt;En-tête du tableau&lt;/th&gt;&lt;th&gt;En-tête du tableau&lt;/th&gt;
	&lt;/tr&gt;
	&lt;tr&gt;
		&lt;td&gt;cellule&lt;/td&gt;td&gt;cellule&lt;/td&gt;
	&lt;/tr&gt;
	&lt;tr&gt;
		&lt;td&gt;cellule&lt;/td&gt;td&gt;cellule&lt;/td&gt;
	&lt;/tr&gt;
	etc...
&lt;/table&gt;</pre>
				</div>
			</ul>
			<!---les formulaire-->
			<h3 id="baliseform">Balises des formulaires en HTML5</h3>
			<ul>
				<table>
					<tr>
						<th>Balise</th><th>Description</th>
					</tr>
					<tr>
						<td>&lt;form&gt;</td><td>Formulaire</td>
					</tr>
					<tr>
						<td>&lt;fieldset&gt;</td><td>Groupe de champs</td>
					</tr>
					<tr>
						<td>&lt;legend&gt;</td><td>Titre d'un groupe de champs</td>
					</tr>
					<tr>
						<td>&lt;label&gt;</td><td>Libellé d'un champ</td>
					</tr>
					<tr>
						<td>&lt;input /&gt;</td><td>Champ de formulaire (texte, mot de passe, case à cocher, bouton, etc.)</td>
					</tr>
					<tr>
						<td>&lt;textarea&gt;</td><td>Zone de saisie multiligne</td>
					</tr>
					<tr>
						<td>&lt;select&gt;</td><td>Liste déroulante</td>
					</tr>
					<tr>
						<td>&lt;option&gt;</td><td>Élément d'une liste déroulante</td>
					</tr>
					<tr>
						<td>&lt;optgroup&gt;</td><td>Groupe d'éléments d'une liste déroulante</td>
					</tr>
				</table>
				<p>Voici comment on écrit un formulaire :</p>
				<div class="console">
<pre>&lt;!--Il faut le même nom pour lier un label (for=) a son champ (name=) --&gt;

&lt;form method=&quot;post&quot; action=&quot;traitement&quot;&gt;
	&lt;label for=&quot;nomDuChamp&quot;&gt;Titre du champ :&lt;/label&gt;
	&lt;input type=&quot;typeDuChamp&quot; name=&quot;nomDuChamp&quot; id=&quot;nomDuChamp&quot;
				placeholder=&quot;Ex : quelquechose&quot; size=&quot;unNombre&quot; maxlength=&quot;unNombre&quot; /&gt;
&lt;/form&gt;
</pre>
				</div>
				<p>L'attribut <code>method=".."</code> sert a indiquer la méthod d'envoie :
					<ul>
						<li><code>post</code> : envoie un grand nombre d'information.</li>
						<li><code>get</code> : envoie un nombre limmitée à 255 caractère par l'adresse url de la page (à éviter).</li>
					</ul>
				</p>
				<p>L'attribut <code>action=".."</code> sert a indiquer la page où les informations seront envoyées.</p>
				<p>Sélection automatique d'un champ :
					<ul>
						</code></li><div class="console">
						&lt;input type=&quot;text&quot; name=&quot;nom&quot; id=&quot;nom&quot; <code>autofocus</code> /&gt;
						</div>
					</ul>
				</p>
				<p>Rendre un champ obligatoire :
					<ul>
						</code></li><div class="console">
						&lt;input type=&quot;text&quot; name=&quot;nom&quot; id=&quot;nom&quot; <code>required</code> /&gt;
						</div>
					</ul>
				</p>
			</ul>
			<!--tableau des différent type de champ de saisie-->
			<h3 id="tabtype">Zone de saisie enrichie (balise input)</h3>
			<ul>
				<p>Voici les différents attributs <code>type</code> qu'on peut donner a la balise <code>&lt;input&gt;</code>.</p>
				<table>
					<tr>
						<th>type</th><th>Description</th>
					</tr>
					<tr>
						<td>text</td><td>Champ de saisie mono-ligne</td>
					</tr>
					<tr>
						<td>textearea</td><td>Champ de saisie multi-ligne</td>
					</tr>
					<tr>
						<td>password</td><td>Champ de saisie où les caractères sont cachés</td>
					</tr>
					<tr>
						<td>url</td><td>Champ de saisie d'une adresse absolue</td>
					</tr>
					<tr>
						<td>tel</td><td>Saisie d'un numéro de téléphone</td>
					</tr>
					<tr>
						<td>number</td><td>Saisie un nombre entier (attributs <code>min</code> <code>max</code> et <code>step</code> possible)</td>
					</tr>
					<tr>
						<td>range</td><td>Saisie d'un nombre grâce à un curseur (attributs <code>min</code> <code>max</code> et <code>step</code> possible)</td>
					</tr>
					<tr>
						<td>color</td><td>Saisie d'une couleur grâce à  un nuancier</td>
					</tr>
					<tr>
						<td>date</td><td>Saisie une date selon différents format : <code>date</code><code>time</code><code>week</code><code>month</code><code>datetime</code><code>datetime-local</code></td>
					</tr>
					<tr>
						<td>search</td><td>Saisie d'une recherche (options supplémentaires du navigateur)</td>
					</tr>
				</table>
			</ul>
			<!--Zone d'option-->
			<h3 id="zonesoptions">Les Zones d'options</h3>
			<ul>
				<p>Zone d'option avec de type <code>radio</code>.</p>
				<div class="console">
<pre>&lt;!--On garde le même nom à chaque input pour indiquer à quelque groupe fait partie le bouton.--&gt;

&lt;form&gt;
	&lt;input type="radio" name="<code>nom</code>" value="valeur1" id="id1" /&gt; &lt;label for="valeur1"&gt;text&lt;/label&gt;&lt;br /&gt;
   	&lt;input type="radio" name="<code>nom</code>" value="valeur2" id="id2" /&gt; &lt;label for="valeur2"&gt;text&lt;/label&gt;&lt;br /&gt;
   	&lt;input type="radio" name="<code>nom</code>" value="valeur3" id="id3" /&gt; &lt;label for="valeur3"&gt;texts&lt;/label&gt;&lt;br /&gt;
   	&lt;input type="radio" name="<code>nom</code>" value="valeur4" id="id4" /&gt; &lt;label for="valeur4"&gt;text!&lt;/label&gt;			  
&lt;/form&gt;

&lt;form&gt;
	&lt;input type="radio" name="<code>nom2</code>" value="valeur5" id="id5" /&gt; &lt;label for="valeur5"&gt;text&lt;/label&gt;&lt;br /&gt;
   	&lt;input type="radio" name="<code>nom2</code>" value="valeur6" id="id6" /&gt; &lt;label for="valeur6"&gt;text&lt;/label&gt;&lt;br /&gt;
   	&lt;input type="radio" name="<code>nom2</code>" value="valeur7" id="id7" /&gt; &lt;label for="valeur7"&gt;texts&lt;/label&gt;&lt;br /&gt;
   	&lt;input type="radio" name="<code>nom2</code>" value="valeur8" id="id8" /&gt; &lt;label for="valeur8"&gt;text!&lt;/label&gt;			  
&lt;/form&gt;</pre>
				</div>
				<p>Possibilité de rajouté l'attribut <code>checked</code> pour sélectioner un bouton par défaut.</p>				
			</ul>
			<!--Listes déroulants-->
			<h3 id="listederoulante">Les listes déroulantes</h3>
			<ul>
				<p>Utilisation de la balise <code>&lt;select&gt;</code> avec plusieurs groupes de choix (balise <code>&lt;optgroup&gt;</code>).</p>
				<div class="console">
<pre>&lt;!--L'attribut value sert a identifié le choix.--&gt;

&lt;form&gt;
   &lt;label for="nomDeListe"&gt;text&lt;/label&gt;&lt;br /&gt;
       &lt;select name="nomDeListe" id="id"&gt;

          &lt;optgroup label="nomDuGroupe1"&gt;
               &lt;option value="valeur1"&gt;valeur1&lt;/option&gt;
               &lt;option value="valeur2&gt;valeur2&lt;/option&gt;
               &lt;option value="valeur3"&gt;valeur3&lt;/option&gt;
               &lt;option value="valeur4&gt;valeur4&lt;/option&gt;
           &lt;/optgroup&gt;

           &lt;optgroup label="nomDuGroupe2"&gt;
               &lt;option value="valeur5"&gt;valeur5&lt;/option&gt;
               &lt;option value="valeur6"&gt;valeur6&lt;/option&gt;
           &lt;/optgroup&gt;
&lt;/form&gt;</pre>
				</div>
				<p>Possibilité de rajouté l'attribut <code>selected</code> pour sélectioner une option par défaut.</p>
			</ul>
			<!--Finalisation et envoie du formulaire-->
			<h3 id="finEnvoie">Regrouper les champs et les envoyer.</h3>
			<ul>
				<p>Regroupement de plusieurs types de saisies différents avec &lt;fieldset&gt; et &lt;legend&gt;.</p>
				<div class="console">
<pre>&lt;form method="post" action="traitement.php"&gt;
 
   &lt;fieldset&gt;
       &lt;legend&gt;nomDuGroup1&lt;/legend&gt; &lt;!-- Titre du fieldset --&gt; 

       &lt;label for=&quot;nom1&quot;&gt;text&lt;/label&gt;
       &lt;input type=&quot;text&quot; name=&quot;nom1&quot; id=&quot;nom1&quot; /&gt;
 
       &lt;label for=&quot;email&quot;&gt;text&lt;/label&gt;
       &lt;input type=&quot;email&quot; name=&quot;email&quot; id=&quot;email&quot; /&gt;

   &lt;/fieldset&gt;
 
   &lt;fieldset&gt;
       &lt;legend&gt;nomDuGroup2&lt;/legend&gt; &lt;!-- Titre du fieldset --&gt;
       &lt;p&gt;      
           &lt;input type=&quot;radio&quot; name=&quot;nom2&quot; value=&quot;valeur1&quot; id=&quot;valeur1&quot; /&gt; &lt;label for=&quot;valeur1&quot;&gt;text&lt;/label&gt;
           &lt;input type=&quot;radio&quot; name=&quot;nom2&quot; value=&quot;valeur2&quot; id=&quot;valeur2&quot; /&gt; &lt;label for=&quot;valeur2&quot;&gt;text&lt;/label&gt;
       &lt;/p&gt;
 
       &lt;p&gt;
           &lt;label for=&quot;precisions&quot;&gt;text&lt;/label&gt;
           &lt;textarea name=&quot;nom3&quot; id=&quot;nom3&quot; cols=&quot;unNombre&quot; rows=&quot;unNombre&quot;&gt;&lt;/textarea&gt;
       &lt;/p&gt;
   &lt;/fieldset&gt;
&lt;/form&gt;</pre>
				</div>
				<p>Différent type de bouton d'envoie :
				<ul>
					<li>type=&quot;<code>submit</code>&quot; : bouton qui envoie vers le page indiquée par action="..".</li>
					<li>type=&quot;<code>reset</code>&quot; : remise à zéro du formulaire.</li>
					<li>type=&quot;<code>image</code>&quot; : équivalent à submit mais prend une image (indiquer par l'attribut src="..".</li>
					<li>type=&quot;<code>button</code>&quot; : bouton générique utiliser surtout pour JavaScript.</li>	
				</ul>
				</p>
			</ul>
			</section>
		</div>
		<?php include("footer.php");?>
	</body>
</html>