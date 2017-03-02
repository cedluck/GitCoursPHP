<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon super site</title>
    </head>
 
    <body>
    <?php
      
    if (isset($_POST["code"]) AND $_POST["code"]=="kangourou")
    {        
      echo "les codes de lancement sont : 5649 4845 4832 9242"; 
    }
    else
    {
      echo "Non autorisé !";
    }
     
    ?> 
    </body>
</html>