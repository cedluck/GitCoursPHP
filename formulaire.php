<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon super site</title>
    </head>
 
    <body>
    <p><strong>Version 1 </strong> Veuilez tapez votre mot de passe : </p>
 	 <!--Version 1 : reste sur formulaire.php-->
 	 <?php

    if (!isset($_POST["code"]) OR $_POST["code"]!="kangourou")
    {     
    echo "<form action=\"formulaire.php\" method=\"post\">
		<p>
    		<input type=\"password\" name=\"code\" />
    		<input type=\"submit\" value=\"Valider\" />
		</p>
		</form>";
    }
    else
    {
     echo "les codes de lancement sont : 5649 4845 4832 9242";
    }
    
    ?>

	<!--Version 2 : ouvre la page secret.php -->
	<p><strong>Version 2 </strong> Veuillez tapez votre mot de passe :</p>
	<form action="secret.php" method="post">
	<p>
    	<input type="password" name="code" />
    	<input type="submit" value="Valider" />
	</p>
	</form>

    </body>
</html>