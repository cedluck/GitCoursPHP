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
            <?php echo 'Cette phrase est générée par PHP.' ?>
            Voici quelques petits tests :
        </p>
        
        <ul>
        <li style="color: blue;">Texte en bleu</li>
        <li style="color: red;">Texte en rouge</li>
        <li style="color: green;">Texte en vert</li>
        </ul>
        
        <?php
           echo 'Cette phrase est aussi générée par PHP.'
        ?>
    </body>
</html>