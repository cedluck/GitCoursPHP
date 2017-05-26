<!DOCTYPE html>
<html>
	<head>
		<title>phpregex</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../fonts_style/style.css"/>
	</head>
	
	<body>	
		<div id="container">
			<nav style="margin-left: -180px;margin-top: 150px;">
				<h2>
					<span style="color:white;">navigation</span>
					<a href="#expreg"><h4>Expressions régulières</h4></a>			
					<a href="#pregmatch"><h4>preg_match</h4></a>
					<a href="#pregreplace"><h4>preg_replace</h4></a>
					<a href="#classesabregees"><h4>les classes abrégées</h4></a>
					<a href="#comunregex"><h4>Expressions courantes</h4></a>
					<a href="phpbdd.php">chapitre précédent...</a>
					<div id="allerEnHautIcone"><a href="#container"><img src="../png/allerEnHaut.png"></a></div>
				</h2>
			</nav>
			<div>
				<div id="entete1">			
					<span><h1>PHP : les expressions régulières</h1></span><br/>
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
						<a href="phpsql.php"  class="cat">Langage SQL</a>
						<a href="phpregex.php"  class="cat" style="background-color: #8892BF;">Regex</a>
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
				<!--Les expréssions régulières-->
				<h3 id="expreg">Les expression régulière</h3>
				<ul>
					<p>Les expressions régulières sont un système très poussé pour effectuer des recherches ou des remplacements dans des chaînes de caractères. Par exemple :<br/>
					- Pour vérifier automatiquement des adresse email ou des mots de passe dans des formulaires.<br/>
					- Modifier une date d'un format à un autre.<br/>
					- Remplacer automatiquement toutes adresse «http://» par des liens clicables.<br/>
					- Créer sont propre langage simplifié ) partir de html comme le fameux bbCode.</p>
					<p>Il existe deux types d'expressions régulières :<br/>
					- <em>POSIX</em> : c'est un langage d'expressions régulières mis en avant par PHP, qui se veut un peu plus simple que PCRE (ça n'en reste pas moins assez complexe). Toutefois plus lent que PCRE.<br/>
					- <em>PCRE</em> : ces expressions régulières sont issues d'un autre langage (le Perl). Considérées comme un peu plus complexes, elles sont surtout bien plus rapides et performantes.</p>
					<p><strong>Les différentes fonctions :</strong>
					<ul>
						- <em>preg_grep</em><br/>
						- <em>preg_split</em><br/>
						- <em>preg_quote</em><br/>
						- <em>preg_match</em><br/>
						- <em>preg_match_all</em><br/>
						- <em>preg_replace</em><br/>
						- <em>preg_replace_callback</em>
					</ul></p>



				</ul>
				<!--métacaractères-->
				<h3 id="pregmatch">La fonction preg_match</h3>
				<ul>
					<em>Fonction qui renvoie un booléen si elle trouve l'expression recherchée dans une chaîne de caractères.</em>
<?php
$texte= "<pre>&lt?php 
	if(preg_match('#guitare#','J\'aime la guitare.'))
	{
		echo 'VRAI';
	}
	else
	{
		echo 'FAUX';
	} 
?&gt;</pre>";
Regex($texte);
?>					
					<p>Le premier paramètre est l'expression régulière entourée par les délémiteurs <em>#</em>.<br/>
					Le deuxième paramètre est la chaîne de caractères.</p>
					<p>Les métacaractères sont des caractères spéciaux qui ont un rôle particulier  dans les expréssions régulières.<br/>
					 Dans PCRE on trouve : <em># ! ^ $ ( ) [ ] { } ? + * . \ |</em><br/>
					 Ces caratères doivent être échappés avec <em>\</em> s'ils apparaissent dans l'expression régulière.</p>

					<em> Métacaractère # et | </em></br>
					<pre><?php echo '1.1 - J\'aime la guitare.'; if(preg_match('#guitare#','J\'aime la guitare.')){echo ' => #guitare# VRAI';}else{echo 'FAUX';} ?></pre>
					<pre><?php echo '1.2 - J\'aime la guitare.';if(preg_match('#GUITARE#i','J\'aime la guitare.')){echo ' => #GUITARE#i (maj ou pas) VRAI';}else{echo 'FAUX';}?></pre>
					<pre><?php echo '1.3 - J\'aime la guitare.';if(preg_match('#guitare|banjo#','J\'aime la guitare.')){echo ' => #guitare|banjo# (guitare ou banjo) VRAI';}else{echo 'FAUX';}?></pre>
					<pre><?php echo '1.4 - J\'aime la banjo.';if(preg_match('#guitare|banjo#','J\'aime le banjo.')){echo ' => #guitare|banjo# (guitare ou banjo) VRAI';}else{echo 'FAUX';}?></pre>
					<pre><?php echo '1.5 - J\'aime la piano.';if(preg_match('#guitare|banjo#','J\'aime piano.')){echo 'VRAI';}else{echo ' => #guitare|banjo# (guitare ou banjo) FAUX';}?></pre>
					
					<em> Métacaractère $ et ^ </em></br>
					<pre><?php echo '2.1 - Vive PHP'; if(preg_match('#PHP$#','Vive PHP')){echo ' => #PHP$# (PHP à la fin) VRAI';}else{echo 'FAUX';}?></pre>
					<pre><?php echo '2.2 - Vive PHP et MySQL';if(preg_match('#PHP$#','Vive PHP et MySQL')){echo 'VRAI';}else{echo ' => #PHP$# (PHP à la fin) FAUX';}?></pre>
					<pre><?php echo '2.3 - Vive le PHP';if(preg_match('#^Vive#','Vive PHP')){echo ' => #^Vive# (Vive au début) VRAI';}else{echo 'FAUX';}//?></pre>
					<pre><?php echo '2.4 - Vive le PHP';if(preg_match('#^PHP#','Vive PHP')){echo 'VRAI';}else{echo ' => #^PHP# (PHP au début) FAUX';}//?></pre>
					
					<em> Métacaractère [] </em></br>
					<p>Pas besoin d'échappé les métacaractères à l'intérieur des classes sauf <em>#</em>, <em>]</em>.<br/>
					<em>-</em> s'échappe en le métant au début ou à la fin de la classe.</p>
					<pre><?php echo '3.1 - la nuit tous les chats sont gris.';if(preg_match('#gr[iao]s#','la nuit tous les chats sont gris.')){echo ' => #gr[iao]s#  (gris gras ou gros) VRAI';}else{echo 'FAUX';}?></pre>
					<pre><?php echo '3.2 - la nuit tous les chats sont gras.';if(preg_match('#gr[iao]s#','la nuit tous les chats sont gras.')){echo ' => #gr[iao]s# (gris gras ou gros) VRAI';}else{echo 'FAUX';}?></pre>
					<pre><?php echo '3.3 - la nuit tous les chats sont gros.';if(preg_match('#gr[iao]s#','la nuit tous les chats sont gros.')){echo ' => #gr[iao]s# (gris gras ou gros) VRAI';}else{echo 'FAUX';}?></pre>
					
					<em> Métacaractère - dans [] </em></br>
					<pre><?php echo '4.1 - la nuit tous les chats sont grps.';if(preg_match('#gr[a-z]s#','la nuit tous les chats sont grps.')){echo ' => #gr[a-z]s# (gras grbs etc...) VRAI';}else{echo 'FAUX';}?></pre>
					<pre><?php echo '4.2 - la nuit tous les chats sont grPs.';if(preg_match('#gr[a-zA-Z]s#','la nuit tous les chats sont grPs.')){echo ' => #gr[a-zA-Z]s# (gras à grzs/grAs à grZs)  VRAI';}else{echo 'FAUX';}//?></pre>
					<pre><?php echo '4.3 - la nuit tous les chats sont gr6s.';if(preg_match('#gr[0-9]s#','la nuit tous les chats sont gr6s.')){echo ' => #gr[0-9]s# (gr1s à gr9s) VRAI';}else{echo 'FAUX';}?></pre>
					<pre><?php echo htmlspecialchars('4.4 - la nuit tous <h2>les</h2> chats sont gris.');if(preg_match('#<h[1-6]>#','la nuit tous <h2>les</h2> chats sont gris.')){echo htmlspecialchars(' => #<h[1-6]># (<h1> à <h6>) VRAI');}else{echo 'FAUX';}?></pre>
					<pre><?php echo htmlspecialchars('4.5 - la nuit tous <h8>les</h8> chats sont gris.');if(preg_match('#<h[1-6]>#','la nuit tous <h8>les</h8> chats sont gris.')){echo 'VRAI';}else{echo htmlspecialchars(' => #<h[1-6]># (<h1> à <h6>) FAUX');}?></pre>
					
					<em> Métacaractère ^ dans [] et avant [] </em></br>
					<pre><?php echo htmlspecialchars('5.1 - la nuit tous <h8>les</h8> chats sont gris.');if(preg_match('#<h[^1-6]>#','la nuit tous <h8>les</h8> chats sont gris.')){echo htmlspecialchars(' => #<h[^1-6]># (PAS <h1> à <h6>) VRAI');}else{echo 'FAUX';}?></pre>
					<pre><?php echo htmlspecialchars('5.2 - la nuit tous <hM>les</h2> chats sont gris.');if(preg_match('#^<h[^1-6]>#','la nuit tous <hM>les</h2> chats sont gris.')){echo 'VRAI';}else{echo htmlspecialchars(' => #^<h[^1-6]># (PAS <h1> à <h6> au début) FAUX');}?></pre>
					<pre><?php echo htmlspecialchars('5.3 - <hM>la nuit tous les</h2> chats sont gris.'); if(preg_match('#^<h[^1-6]>#','<hM>la nuit tous les</h2> chats sont gris.')){echo htmlspecialchars(' => #^<h[^1-6]># (PAS <h1> à <h6> au début) VRAI');}else{echo 'FAUX';}?></pre>
					
					<em> Métacaractère ?</em></br>
					<pre><?php echo '6.1 - Ayay'; if(preg_match('#Ay(ay)?#','Ayay')){echo ' => #Ay(ay)?# (Ay puis ay 0 ou 1 fois) VRAI';}else{echo 'FAUX';}?></pre>
					<pre><?php echo '6.2 - Ay'; if(preg_match('#Ay(ay)?#','Ay')){echo ' => #Ay(ay)?# (Ay puis ay 0 ou 1 fois)( VRAI';}else{echo 'FAUX';}?></pre>
					
					<em> Métacaractère +</em></br>
					<pre><?php echo '7.1 - Ayay'; if(preg_match('#Ay(ay)+#','Ayay')){echo ' => #Ay(ay)+# (Ay puis ay 1 ou plus) VRAI';}else{echo 'FAUX';}?></pre>
					<pre><?php echo '7.2 - Ayayayayay'; if(preg_match('#Ay(ay)+#','Ayayayayay')){echo ' => #Ay(ay)+# (Ay puis  ay 1 ou plus) VRAI';}else{echo 'FAUX';}?></pre>
					
					<em> Métacaractère *</em></br>
					<pre><?php echo '8.1 - Ayay';if(preg_match('#Ay(ay)*#','Ayay')){echo ' => #Ay(ay)*# (Ay puis ay 0 ou plus) VRAI';}else{echo 'FAUX';}?></pre>
					<pre><?php echo '8.2 - Ay';if(preg_match('#Ay(ay)*#','Ay')){echo ' => #Ay(ay)*#(Ay puis ay 0 ou plus) VRA';}else{echo 'FAUX';}?></pre>
					
					<em> Métacaractère {} </em></br>
					<pre><?php echo '9.1 - Ayayayay';if(preg_match('#Ay(ay){3}#','Ayayayay')){echo ' => #Ay(ay){3}# (y puis ay 3 fois) VRAI';}else{echo 'FAUX';}?></pre>
					<pre><?php echo '9.2 - Ayayay';if(preg_match('#Ay(ay){3}#','Ayayay')){echo 'VRAI';}else{echo ' #Ay(ay){3}# => (Ay puis ay 3 fois) FAUX';}?></pre>
					<pre><?php echo '9.3 - Ayayayayay';if(preg_match('#Ay(ay){3}#','Ayayayayay')){echo ' => #Ay(ay){3}# (Ay puis ay 3 fois) VRAI car 3 fois ou plus';}else{echo 'FAUX';}?></pre>
					<pre><?php echo '9.4 - Ayayay';if(preg_match('#^Ay(ay){3}$#','Ayayay')){echo 'VRAI';}else{echo ' => #^Ay(ay){3}$ (Ay au début puis ay 3 fois à la fin) FAUX';}?></pre>
					<pre><?php echo '9.5 - 888';if(preg_match('#^[0-9]{3}$#','888')){echo ' => ^[0-9]{3}$ (présence unique d\'un chiffre 3 fois) VRAI';}else{echo 'FAUX';}?></pre>
					<pre><?php echo '9.6 - 5888'; if(preg_match('#^[0-9]{3}$#','5888')){echo 'VRAI';}else{echo ' => ^[0-9]{3}$ (présence unique d\'un chiffre 3 fois) FAUX';}?></pre>
					
					<em> Métacaractère , dans {} </em></br>
					<pre><?php echo '10.1 - 5888000'; if(preg_match('#^[0-9]{3,6}$#','5888000')){echo 'VRAI';}else{echo ' => ^[0-9]{3,6}$ (présence unique d\'un chiffre entre 3 et 6 fois) FAUX';}?></pre>
					<pre><?php echo '10.2 - 5888000000';if(preg_match('#^[0-9]{3,}$#','5888000000')){echo ' => #^[0-9]{3,}$ (présence unique d\'un chiffre 3 fois ou plus) VRAI';}else{echo 'FAUX';}?></pre>
					<pre><?php echo '10.3 - 58';if(preg_match('#^[0-9]{3,}$#','58')){echo 'VRAI';}else{echo ' => ^[0-9]{3,}$ (présence unique d\'un chiffre 3 fois ou plus) FAUX';}?></pre>
					
					<em> Métacaractère .</em></br>
					<pre><?php echo ' ';if(preg_match('#.#', ' ')) {echo ' => #.# (n\'importe quel caractère) VRAI';} else {echo 'FAUX';}?></pre>
					<pre><?php echo 's';if(preg_match('#.#', 's')) {echo ' => #.# (n\'importe quel caractère) VRAI';} else {echo 'FAUX';}?></pre>
					<pre><?php echo 'ab3 ';if(preg_match('#.{3}# ', 'ab3')) {echo ' => #.{3}# (n\'importe quel caractère 3 fois) VRAI';} else {echo 'FAUX';}?></pre>
					
					<em>Echaper les métacaractères</em></br>
					<pre><?php echo 'Je vais bien.';if(preg_match('#\.#', 'Je vais bien. ')){echo ' => #\.# (présence d\'un point) VRAI';} else {echo 'FAUX';}?></pre>
					<pre><?php echo 'Je vais bien !';if(preg_match('#\.#', 'Je vais bien ! ')){echo 'VRAI';} else {echo ' => #\.# (présence d\'un point) FAUX';}?></pre>
					<pre><?php echo 'Ca va ?';if(preg_match('#\?#', 'Ca va ?')){echo ' => #\?# (présence d\'un point d\'interrogation) VRAI';} else {echo 'FAUX';}?></pre>
					
				</ul>
				<!--capture-->
				<h3 id="capture">Les captures</h3>
				<ul>
					<pre><?php echo '05/09/1994';if(preg_match('#^[0-9]{2}/[0-9]{2}/[0-9]{4}$#', '05/09/1994')){echo ' => #^[0-9]{2}/[0-9]{2}/[0-9]{4}$# VRAI';} else {echo 'FAUX';}?></pre>
					<pre><?php echo '05/09-1994';if(preg_match('#^[0-9]{2}/[0-9]{2}/[0-9]{4}$#', '05/09-1994')){echo 'VRAI';} else {echo '  => #^[0-9]{2}/[0-9]{2}/[0-9]{4}$# FAUX';}?></pre>
					<pre><?php echo '05/09/1994';if(preg_match('#^([0-9]{2}/){2}[0-9]{4}$#', '05/09/1994')){echo ' => #^([0-9]{2}/){2}[0-9]{4}$# VRAI';} else {echo 'FAUX';}?></pre>
					
				</ul>
				<!--preg_replace-->
				<h3 id="pregreplace">Fonction preg_replace</h3>
				<ul>
					<p>Parenthèses capturantes : avec <em>preg_replace</em> chaque parenthèse de l'espression régulière génère une variable $1, $2 etc... qu'on pourra alors appeller dans un second paramètre comme dans cette exemple (bbCode) :
<?php
$texte ="<pre>&dollar;text = preg_replace('#\[b\](.+)\[/b\]#i', '<strong>&dollar;1</strong>', 'laChaineDeCaractères' );</pre>";
Regex($texte);
?>
					Ici <em>$1</em> correspond à ceux qu'il y a entre les prenthèses de l'expression régulière <em>(.+)</em>, c'est à dire <em>.+</em> (soit tous caractère au moins 1 fois).</p>
					Shéma :<br/>			
					<img src="../png/phpchap6_1.png"/>
					<p>$0 est toujours créée ; elle contient toute la regex.</p>
					<pre><?php echo '05/09/1994'; $annee = preg_replace('#^([0-9]{2}/){2}([0-9]{4})$#', '$2', '05/09/1994'); echo  ' => (\'#^([0-9]{2}/){2}([0-9]{4})$#\', \'$2\', \'05/09/1994\') An : '.$annee;?></pre>
					<pre><?php echo '05/09/1994'; $annee = preg_replace('#^([0-9]{2}/){2}([0-9]{4})$#', '= > $2', '05/09/1994'); echo  ' => (\'#^([0-9]{2}/){2}([0-9]{4})$#\', \'= > $2\', \'05/09/1994\') An : '.$annee;?></pre>
					<pre><?php echo '05/09/1994'; $date = preg_replace('#^([0-9]{2})/([0-9]{2})/([0-9]{4})$#', '$1 $2 $3', '05/09/1994'); echo  ' => (\'#^([0-9]{2})/([0-9]{2})/([0-9]{4})$#\', \'$1 $2 $3\', \'05/09/1994\') date : '.$date;?></pre>
					<pre><?php echo '05/09/1994'; $date = preg_replace('#^([0-9]{2})/([0-9]{2})/([0-9]{4})$#', '$3 $2 $1', '05/09/1994'); echo  ' => (\'#^([0-9]{2})/([0-9]{2})/([0-9]{4})$#\', \'$3 $2 $1\', \'05/09/1994\') date : '.$date;?></pre>
					<pre><?php echo '20/01/2005'; $date = preg_replace('#^([0-9]{2})/([0-9]{2})/([0-9]{4})$#', '$3-$2-$1', '20/01/2005'); echo  ' => (\'#^([0-9]{2})/([0-9]{2})/([0-9]{4})$#\', \'$3-$2-$1\', \'20/01/2005\') date : '.$date;?></pre>
					
					<em>Exclusion de parenthèse :</em><br/>
					<pre>preg_replace('#(anti)co(?:nsti)(tu(tion)nelle)ment#', '$1$2');</pre> la 2ieme parenthèse (nsti) n'est pas capturée :<br/>
						- $0 : anticonstitutionnellement<br/>
						- $1 : anti<br/>
						- $2 : tutionnelle<br/>
						- $3 : tion<br/>
						- ?:nsti à été exclut
				</ul>
				<!--classes abrégée-->
				<h3 id="classesabregees">Classes abrégées</h3>
				<ul>
					<em>\d</em> => Indique un chiffre. Ça revient exactement à taper[0-9]<br/>
					<em>\D</em> =>  ndique ce qui n'est PAS un chiffre. Ça revient à taper [^0-9]<br/>
					<em>\w</em> => Indique un caractère alphanumérique ou un tiret de soulignement. Cela correspond à [a-zA-Z0-9_]<br/>
					<em>\W</em> => Indique ce qui n'est PAS un mot. Si vous avez suivi, ça revient à taper [^a-zA-Z0-9_]<br/>
					<em>\t</em> => Indique une tabulation<br/>
					<em>\n</em> => Indique une nouvelle ligne<br/>
					<em>\r</em> => Indique un retour chariot<br/>
					<em>\s</em> => Indique un espace blanc<br/>
					<em>\S</em> => Indique ce qui n'est PAS un espace blanc (\t \n \r)<br/>
					<em>.</em> => Indique n'importe quel caractère. Il autorise donc tout !<br/> 
					<p>Pour le point, il existe une exception : il indique tout sauf les entrées (\n).
					Pour faire en sorte que le point indique tout, même les entrées, vous devrez utiliser l'option « s » de PCRE. Exemple :
					#[0-9]-.#s</p>
				</ul>
				<!--regex courant-->
				<h3 id="comunregex">Expressions régulières courantes.</h3>
				<ul>
					<em> Regex de numéro de tél </em>
					<pre>	#^0[1-68]([-. ]?\d{2}){4}$#</pre>
					<em> Regex d'email </em>
					<pre>	#^[a-z\d.-_]+@[a-z\d.-_]{2,}\.[a-z]{2,4}$#</pre>
					<em> Exemple de regex dans un requête SQL </em>
					<pre>SELECT nom FROM visiteurs WHERE ip REGEXP '^84\.254(\.[0-9]{1,3}){2}$'</pre>
					Traduction : «
					sélectionne tous les noms de la table "visiteurs" dont l'IP commence par « 84.254 » et se termine par deux autres nombres de un à trois chiffre(s) (ex. : 84.254.6.177)».<br/>
					Donnera toutes les IP commencant par 84.254 à partir d'un table dans une BDD.</p>

					<em>Regex d'un lien dans un texte </em><br/>
					<pre> preg_replace('#http://[a-z0-9._/-]+$#i', '<a href="$0">$0</a>', 'mydevmemo.com');</pre>
					Donnera : http://mydevmemo.com/
				</ul>
			</section>
		</div>
		<?php include("../footer.php"); ?>
	</body>
</html>