<?php

	try
	{
 		$bdd = new PDO('mysql:host=127.0.0.1;port=8889;dbname=test;charset=utf8', 'root', 'root');
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}
	if (isset($_POST['pseudo']) AND isset($_POST['message']))
	{
		$req = $bdd->prepare('INSERT INTO minichat (pseudo, message) VALUES (:pseudo, :message)');
		$req->execute(array('pseudo'=>$_POST['pseudo'],'message'=>$_POST['message']));
	}
	$req->closeCursor();
	header('location: minichat.php');

?>