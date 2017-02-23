<!DOCTYPE html>
<html>
    <head>
        <title>TestPHP <?php echo date('h:i:s'); ?></title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h2>Page de test</h2>
        
        <p>
            Cette page contient du code HTML avec des balises PHP.<br />
            <?php echo 'Cette phrase est générée par PHP.'?> 
            Voici quelques petits tests :
        </p>
        
        <ul>
        <li style="color: blue;">Texte en bleu</li>
        <li style="color: red;">Texte en rouge</li>
        <li style="color: green;">Texte en vert</li>
        </ul>
        
        <?php
			$age = 24;
			$majeur = ($age >= 18) ? true : false; //ternary condition (condtion ternaire)
			if ($majeur)
			{
			echo 'Tu es majeur';
			}
		?>

		<?php
		$prenoms = array ('Mathieu','Marie','Robert');//formating with an array
		echo $prenoms[0];
		echo print_r($prenoms);//add a print_r to see what's in the array

		?>
    </body>
</html>