<?php
	session_start();

	if(isset($_POST['nvpseudo']) AND $_POST['nvpseudo'])
	{
		
		try
		{
			$bdd = new PDO('mysql:host=127.0.0.1;port=8889;dbname=test;charset=utf8', 'root', 'root');
		} 
		catch (Exception $e)
		{
			die('Erreur : '.$e->getMessage());
		}
		$req = $bdd->prepare('UPDATE  membres SET pseudo = :nvpseudo WHERE pseudo = :pseudo ');
		$req->execute(array('nvpseudo' => $_POST['nvpseudo'], 'pseudo' => $_SESSION['pseudo']));
		header('location:connexion.php');

	}
	else
	{
		header('location:profil.php');
	}
?>