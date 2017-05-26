<?php			
	if (isset($_POST['pseudo']) AND $_POST['pass']!=NULL)
	{
		try
		{
			$bdd = new PDO('mysql:host=127.0.0.1;port=8889;dbname=test;charset=utf8', 'root', 'root');
		} 
		catch (Exception $e)
		{
			die('Erreur : '.$e->getMessage());
		}

		$pass_hache = sha1($_POST['pass']);
		$req = $bdd->prepare('SELECT id, pseudo, email, pass FROM membres WHERE pseudo = :pseudo  AND pass = :pass');
		$req->execute(array('pseudo'=>$_POST['pseudo'], 'pass'=> $pass_hache));
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
		    $_SESSION['email'] = $resultat['email'];
		    $_SESSION['pass'] = $resultat['pass'];
		    header('location:index.php');
		}
        $req->closeCursor();
	}	
	else
	{
		echo '<h2>Saisissez votre pseudo et votre mot de passe.</h2>'; 
	}
				
?>
		
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="fonts_style/style.css"/>
		<title>Connection</title>
	</head>
	<body>
		<div id="container">
			
				<h1>CONNEXION</h1><br/>		
			<section>
				<form  id="form_connexion" action='connexion.php' method="POST">
						<label for="Pseudo">Pseudo </label><input type="text" name="pseudo"/><br/><br/>
						<label for="pass">Mot de passe </label><input type="password" name="pass"/><br/><br/>
						<input id="bouton_form" type="submit" value="Se connecter"/><br/>
				</form>
			</section>
		</div>
		<div style="margin-top:540px;">
<?php include("footer.php");?>
</div>
	</body>
	
</html>