<!DOCTYPE html>
<html>
<head>
	<title>pass</title>
</head>
<body>
<?php
session_start();

if (isset($_POST['pass']) AND $_POST['pass']!=NULL)
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
		if($_POST['confirmation']!=$_POST['nvpass'])
		{
			echo '--Les nouveaux mots de passe ne correspondent pas !--';
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
		echo '<h3>Ce n\'est pas pas votre ancien mot de passe !</h3>';
	}	
}
	
echo '<h3>Entrez votre ancien mot de passe ! <a href="profil.php"> Retour</a></h3>';

?>
</body>
</html>