<!DOCTYPE html>
<html>

<head>
    <title>Inscription</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="fonts_style/style.css" />

</head>

<body>
    <div id="container">

        <h1>INSCRIPTION</h1><br/>
    
               <form id="form_inscription" action="inscription.php" method="post">
                <label for="pseudo">Pseudo * </label><input type="text" name="pseudo" /><br/><br/>
                <label for="pass">Mot de passe * </label><input type="password" name="pass" /><br/><br/>
                <label for="confirmation">Retapez votre mot de passe * </label><input type="password" name="confirmation" /><br/><br/>
                <label for="email">Adresse email * </label><input type="text" name="email" /><br/><br/>
                <input id="bouton_form" type="submit" value="Inscription"><br/>
            </form>

            <?php
				
			if (isset($_POST['pseudo']) AND ($_POST['pass'] AND $_POST['email'])!=NULL)
			{				
					
				try
				{
					$bdd = new PDO('mysql:host=127.0.0.1;port=8889;dbname=test;charset=utf8', 'root', 'root');
				} 
				catch (Exception $e)
				{
					die('Erreur : '.$e->getMessage());
				}

				$req = $bdd->prepare('SELECT pseudo FROM membres WHERE pseudo = :pseudo');
				$req->execute(array('pseudo'=>htmlspecialchars($_POST['pseudo'])));
				$resultat = $req->fetch();

				if ($resultat)
				{
					echo '<h2>-- Ce pseudo existe déjà, choisissez-en  un autre --</h2>';
				}
			
				else
				{
					 if($_POST['confirmation']!=$_POST['pass'])
					{
						echo '<h2>--Les mots de passe ne correspondent pas !--</h2>';
					}
					else
					{
						$pass_hache = sha1($_POST['pass']);
						$req = $bdd->prepare('INSERT INTO membres (pseudo, pass, email, date_inscription) VALUES (:pseudo, :pass, :email, CURDATE())');
						$req->execute(array('pseudo'=>htmlspecialchars($_POST['pseudo']), 'pass'=>$pass_hache, 'email'=>htmlspecialchars($_POST['email'])));
						$req->closeCursor();
						header('location:index.php');
					}
				}				
			}
			else
			{				
				echo'<h2>-- Vous devez remplir tous les champs marqués par * --</h2><br/>';
			}
			?>

        
    </div>

</body>
<div style="margin-top:450px;">
<?php include("footer.php");?>
</div>

</html>
