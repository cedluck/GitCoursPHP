<!DOCTYPE html>
<html>
	<head>
		<title>Profil</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="fonts_style/style.css"/>
	</head>
	<body>
		<div id="container">
				
				<h1>MON PROFILE</h1>
			
			<section>
				
				<h2>Vous devrez vous reconnecter lorsque vous aurez effectué un changement.</h2>
				<form id="form_profile" action="nvpseudo.php" method="POST">
					<strong>Votre Pseudo </strong><br/><br/>
					<label for="pseudo">Pseudo actuel</label> <input type="text" name="pseudo" disabled="disabled" value=<?php session_start(); echo $_SESSION['pseudo']; ?> /> <br/>
					<label for="nvpseudo">Nouveau pseudo</label> <input type="text" name="nvpseudo"/><br/><br/> 
					<input id="bouton_form"  type="submit" value="Changer de pseudo"><br/><br/>
				</form>

				<form id="form_profile" action="nvpass.php" method="POST">
					<strong>Changer de mot de passe</strong></br/><br/>
					<label for="pass">Ancien mot de passe</label> <input type="password" name="pass"/><br/>
					<label for="nvpass">Nouveau mot de passe</label> <input type="password" name="nvpass"/><br/>
					<label for="confirmation">Retapez votre nouveau mot de passe</label> <input type="password" name="confirmation"/><br/><br/>
					<input id="bouton_form" type="submit" value="Changer de mot de passe"><br/><br/>
				</form>

				<form id="form_profile" action="nvemail.php" method="POST">
					<strong>Votre email</strong><br/><br/>
					<label for="email">Adresse email</label> <input type="text" name="email" disabled="disabled" value=<?php echo $_SESSION['email']; ?> /> <br/>
					<label for="email">Nouvelle adresse email</label> <input type="text" name="nvemail"/><br/><br/>
					<input id="bouton_form" type="submit" value="Changer de email"><br/><br/>
				</form>
			</section>
								
			
		</div>
		<div style="margin-top:150px;">
			<?php include("footer.php");?>
		</div>
	</body>
</html>