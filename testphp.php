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
		<br/>
		<?php
		$personne = array ('nom' => 'Nebar', 'prenom' => 'Mathieu', 'age' => '99');//formating with an array
		print_r($personne);//add a print_r to see what's in the array
		?>
		<br/>

		<?php

		$noms = array('Mathieu', 'Marie','Robert');
		foreach($noms as $nom)//function foreach returns the name
		{
		echo '<p>' .$nom. '</p>';
		}
		
		$personne = array ('nom'=>'Nebra', 'prenom' => 'Mathieu', 'age' => 99);
		foreach ($personne as $label => $detail)//foreach returns label and details
		{
			echo '<p>'.$label.' : '.$detail.'</p>';
		}
		echo '<pre>';
		print_r($personne);//tell what's in the array
		echo'</pre>';

		$coordonnees = array (
		    'prenom' => 'François',
		    'nom' => 'Dupont',
		    'adresse' => '3 Rue du Paradis',
		    'ville' => 'Marseille');

		if (array_key_exists('nom', $coordonnees))//returns bool true if key found in array
		{
		    echo 'La clé "nom" se trouve dans les coordonnées !';//displayed on screen
		}

		if (array_key_exists('pays', $coordonnees))
		{
		    echo 'La clé "pays" se trouve dans les coordonnées !';//not displayed on screen
		}

		$fruits = array ('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');

		if (in_array('Myrtille', $fruits))//returns bool true if value found in array
		{
		    echo 'La valeur "Myrtille" se trouve dans les fruits !';//displyed on screen
		}

		if (in_array('Cerise', $fruits))
		{
		    echo 'La valeur "Cerise" se trouve dans les fruits !';//not displayed on screen
		}
		$position = array_search('Fraise', $fruits);//return the key of the value in the array
		echo '"Fraise" se trouve en position ' . $position . '<br />';

		$position = array_search('Banane', $fruits);
		echo '"Banane" se trouve en position ' . $position;

		?>


    </body>
</html>