<?php setcookie('pseudo', 'Kaldric', time() + 365*24*3600, null, null, false, true); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Minichat</title>
</head>
<body>
<form action="minichat_post.php" method="post">
	<p>
	<label for='pseudo'>Votre Pseudo</label> : <input type="text" name="pseudo" value = <?php echo $_COOKIE['pseudo']; ?> id='pseudo' /><br/>
	<label for='message'>Message</label> : <input type="text" name="message" id='message'/><br/>
	<input type="submit" value="Envoyer"/>
</form>
<form action="minichat.php" method='get'>
	<input type="submit" value="Rafraichir">
</form>

<?php
try
{
	$bdd = new PDO('mysql:host=127.0.0.1;port=8889;dbname=test;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
	die ('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT pseudo, message FROM minichat ORDER BY id DESC LIMIT 0, 20');
while ($donnees = $reponse->fetch())
{
	echo '<p><strong>' . htmlspecialchars($donnees['pseudo']).' : </strong>'. htmlspecialchars($donnees['message']).'</p>';
}
$reponse->closeCursor();
	
?>



</body>
</html>










