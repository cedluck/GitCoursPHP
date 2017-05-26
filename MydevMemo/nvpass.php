<?php
session_start();

if ($_POST['pass']!=NULL)
{
	try
	{
		$bdd = new PDO('mysql:host=127.0.0.1;port=8889;dbname=test;charset=utf8', 'root', 'root');
	} 
	catch (Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}

	$pass_hache= sha1($_POST['pass']);
	$req = $bdd->prepare('SELECT pass FROM membres WHERE pass = :pass');
	$req->execute(array('pass'=> $pass_hache));
	$resultat = $req->fetch();

	if($resultat)
	{ 
		if($_POST['nvpass']!=NULL)
		{
			if($_POST['confirmation']!=$_POST['nvpass'])
			{
				echo '<h3>--Les nouveaux mots de passe ne correspondent pas !--<a href="profil.php"> Retour</a></h3>';
			}
			else
			{ 
				$pass_hache = sha1($_POST['nvpass']);
				$req = $bdd->prepare('UPDATE  membres SET pass = :nvpass WHERE pass = :pass ');
				$req->execute(array('nvpass' => $pass_hache, 'pass' => $_SESSION['pass']));
				header('location:connexion.php');
			}
		}
		else
		{
			header('location:profil.php');
		}
	}
	else
	{
		echo '<h3>Ce n\'est pas pas votre ancien mot de passe !<a href="profil.php"> Retour</a></h3>';
	}	
}
else
{
	echo '<h3>Entrez votre ancien mot de passe ! <a href="profil.php"> Retour</a></h3>';
}