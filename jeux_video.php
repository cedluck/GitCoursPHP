<?php

//Récupérationdes données de la BDD
/*$bdd = new PDO('mysql:host=127.0.0.1;port=8889;dbname=test;charset=utf8','root','root', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
$reponse = $bdd->query('SELECT console, nom, prix FROM jeux_video WHERE console="NES" OR console="PC" ORDER BY prix DESC LIMIT 5');
while ($donnees = $reponse->fetch())
{
	echo '<p>'. $donnees['console'].' - ' .$donnees['nom'].' - '. $donnees['prix'].'euros'.'</p>';
}


Récupération des données de la BDD par l'url*/

if (isset($_GET['console']))
{
	$bdd = new PDO('mysql:host=127.0.0.1;port=8889;dbname=test;charset=utf8','root','root', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
	$requete = $bdd->prepare('SELECT * FROM jeux_video WHERE console=?');
	$requete->execute(array($_GET['console']));
	while ($donnees = $requete->fetch())
	{
		echo '<p>'. $donnees['console'].' - ' .$donnees['nom'].' - '. $donnees['prix'].' euros'.'</p>';
	}
}
	

?>