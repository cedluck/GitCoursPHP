<?php

/*//Récupérationdes données de la BDD
try
{
	$bdd = new PDO('mysql:host=127.0.0.1;port=8889;dbname=test;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT console, nom, prix FROM jeux_video WHERE console="NES" OR console="PC" ORDER BY prix DESC LIMIT 4, 10');
while ($donnees = $reponse->fetch())
{
	echo '<p>'. $donnees['console'].' - ' .$donnees['nom'].' - '. $donnees['prix'].'euros'.'</p>';
}
$reponse->closeCursor();

Récupération des données de la BDD par l'url
try
{
	$bdd = new PDO('mysql:host=127.0.0.1;port=8889;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $e)
{	
       die('Erreur : '.$e->getMessage());
}
if (isset($_GET['console']))
{
	$requete = $bdd->prepare('SELECT * FROM jeux_video WHERE console=?');//ou WHERE console = :console (marqueur nominatif)
	$requete->execute(array($_GET['console']));//ou (array('console' => $-GET['console']))
	while ($donnees = $requete->fetch())
	{
		echo '<p>'. $donnees['console'].' - ' .$donnees['nom'].' - '. $donnees['prix'].' euros'.'</p>';
	}
}
$reponse->closeCursor();*/

//INSERER DES DONNEES DANS UNE BDD

try
{
	$bdd = new PDO('mysql:host=127.0.0.1;port=8889;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$bdd->exec('INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES(\'Battlefield 1942\', \'Patrick\', \'PC\', 45, 50, \'2nde guerre mondiale\')');

echo 'Le jeu a bien été ajouté !';

//Insertion de données variables grâce à une requête préparée
try
{
	$bdd = new PDO('mysql:host=127.0.0.1;port=8889;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$req = $bdd->prepare('INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES(:nom, :possesseur, :console, :prix, :nbre_joueurs_max, :commentaires)');
$req->execute(array('nom' => $nom,'possesseur' => $possesseur,'console' => $console,'prix' => $prix,'nbre_joueurs_max' => $nbre_joueurs_max,'commentaires' => $commentaires));

echo 'Le jeu a bien été ajouté !';

//UPDTE de données dans une BDD 

$bdd->exec('UPDATE jeux_video SET prix = 10, nbre_joueurs_max = 32 WHERE nom = \'Battlefield 1942\'');


$nb_modifs = $bdd->exec('UPDATE jeux_video SET possesseur = \'Florent\' WHERE possesseur = \'Michel\'');
echo $nb_modifs . ' entrées ont été modifiées !';//renvoie le nombre d'entrée modifié

//Avec une requête préparée

$req = $bdd->prepare('UPDATE jeux_video SET prix = :nvprix, nbre_joueurs_max = :nv_nb_joueurs WHERE nom = :nom_jeu');// NE PAS OUBLIER WHERE
$req->execute(array(
	'nvprix' => $nvprix,
	'nv_nb_joueurs' => $nv_nb_joueurs,
	'nom_jeu' => $nom_jeu
	));

//SUPPRIMER UNE ENTREE

$bdd->exec('DELETE FROM jeux_video  WHERE nom = \'Battlefield 1942\'');//ou \id = 26) par exemple


$req = $bdd->prepare('DELETE FROM jeux_video WHERE nom = :nom_jeu');
$req->execute(array(
	'nvprix' => $nvprix,
	'nv_nb_joueurs' => $nv_nb_joueurs,
	'nom_jeu' => $nom_jeu
	));
/*
?>