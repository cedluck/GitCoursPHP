<?php
	session_start();

	if(isset($_POST['nvemail']) AND $_POST['nvemail'])
	{
		
		try
		{
			$bdd = new PDO('mysql:host=127.0.0.1;port=8889;dbname=test;charset=utf8', 'root', 'root');
		} 
		catch (Exception $e)
		{
			die('Erreur : '.$e->getMessage());
		}
		$req = $bdd->prepare('UPDATE  membres SET email = :nvemail WHERE email = :email ');
		$req->execute(array('nvemail' => $_POST['nvemail'], 'email' => $_SESSION['email']));
		header('location:connexion.php');

	}
	else
	{
		header('location:profil.php');
	}
	
?>