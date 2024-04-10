<?php
//on lance le session_start() avant l'envoi de contenu pour eviter l'erreur (header already send)

// lancement de session creation de l'id de session (phpsessid)
// cote utulisateur un cookie est cree il contien uniquement la cle de session
//cote server un fichez text est egalement cree, il porte le nom de la cle de session

session_start();

// la session est vide au debut de la connextion serveur/client
//var_dump($_SESSION);


// affichage de l'id de session (PHPSESSID)

//echo session_id();

// creation d'une variable de session 

//qui contiens l 'identifient de session

//$_SESSION ['idDeSession'] = session_id()."__".date('Y-m-d');

//$_SESSION ['laDate'] = date('Y-m-d H:i:s');

?> 

<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    include "menu.inc.php"
    ?>
    <h1>Homepage</h1>
    <?php
    if(isset($_SESSION['name'])):
    ?>
 
    <h2>bienvenu <?=$_SESSION['name']?></h2>
    <?php
    endif
    ?>
<p>Bienvenu sur le site</p>
</body>
</html>