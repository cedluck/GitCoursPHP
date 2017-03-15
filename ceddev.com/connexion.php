<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Connection</title>
	</head>
	<body>
		<h1>CONNEXION</h1>
		<section>
			<form id="form_connexion" action='connexion.php' method="POST">
				<p>
					<label for="Pseudo">Pseudo </label><input type="text" name="pseudo"/><br/><br/>
					<label for="pass">Mot de passe </label><input type="password" name="pass"/><br/><br/>
					<input type="submit" value="Se connecter"/>
				</p>
			</form>
		</section>
		<?php
		

		if (isset($_POST['pseudo']) AND ($_POST['pass'])!=NULL)
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
			$req = $bdd->prepare('SELECT id, pseudo FROM membres WHERE pseudo = :pseudo  AND pass = :pass');
			$req->execute(array('pseudo'=>htmlspecialchars($_POST['pseudo']), 'pass'=> $pass_hache));
			$resultat = $req->fetch();
				
			if (!$resultat)
			{
				echo '<h2>Mauvais identifiant ou mot de passe !</h2><br/><br/>';
			}
			else
			{
			    session_start();
			    $_SESSION['id'] = $resultat['id'];
			    $_SESSION['pseudo'] = $resultat['pseudo'];
			    header('location:index.php');
			}
		}	
		else
		{
			echo '<h2>Saisissez votre pseudo et votre mot de passe.</h2>'; 
		}
			
		?>
			
	</body>
</html>