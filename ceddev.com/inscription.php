<!DOCTYPE html>
<html>
	<head>
		<title>Inscription</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="style.css">
		
	</head>
	<body>
		<h1>INSCRIPTION</h1>
				
		<section>
			<form id="form_inscription" action="inscription.php" method="post">
				<p>
					<label for="pseudo">Pseudo<span style="color:red">*</span></label><input type="text" name="pseudo" value=""/><br/><br/>
					<label for="pass">Mot de passe<span style="color:red">*</span> </label><input type="password" name="pass"/><br/><br/>
					<label for="confirmation">Retapez votre mot de passe<span style="color:red">*</span> </label><input type="password" name="confirmation"/><br/><br/>
					<label for="email">Adresse email<span style="color:red">*</span> </label><input type="text" name="email"/><br/><br/>
					<input type="submit" value="Inscription">
				</p>
			</form>

			<?php
			if (isset($_POST['pseudo']) AND ($_POST['pseudo'] AND $_POST['pass'] AND $_POST['email'])!=NULL)
			{
				 if($_POST['confirmation']!=$_POST['pass'])
				{
					echo '<h2>--Les mots de passe ne correspondent pas !--</h2>';
				}
				else
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
					$req = $bdd->prepare('INSERT INTO membres (pseudo, pass, email, date_inscription) VALUES (:pseudo, :pass, :email, CURDATE())');
					$req->execute(array('pseudo'=>htmlspecialchars($_POST['pseudo']), 'pass'=>$pass_hache, 'email'=>htmlspecialchars($_POST['email'])));
					$req->closeCursor();
					header('location:index.php');
				}
			}
			else
			{	
				echo '<h2>-- Vous devez remplir tous les champs marqués par <span style="color:red">*</span>--<br/>
				<a href="index.php">Cliquez ici pour accéder au site.</a></h2>';
			}
			
				?>
		</section>
		
	</body>
</html>