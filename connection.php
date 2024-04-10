<?php
//on lance le session_start() avant l'envoi de contenu pour eviter l'erreur (header already send)

session_start();


//si nous somme deja connecter 

if(isset($_SESSION['monID']) && $_SESSION['monID'] === session_id())
{
    header("location: homepage.php");
    exit();
}

// lancement de session creation de l'id de session (phpsessid)
// cote utulisateur un cookie est cree il contien uniquement la cle de session
//cote server un fichez text est egalement cree, il porte le nom de la cle de session


// la session est vide au debut de la connextion serveur/client
//var_dump($_SESSION);


// affichage de l'id de session (PHPSESSID)

//echo session_id();

// creation d'une variable de session 

//qui contiens l 'identifient de session
//

//$_SESSION ['laDate'] = date('Y-m-d H:i:s');


//login et mot de passe de l admin
$user ="admin";
$pwd = "root";

if(isset($_POST['login'],$_POST['password'])){
    if($_POST['login']===$user && $_POST ['password']===$pwd){
        //creation d'une variable de session permettant d identifier l admin 
        $_SESSION['monID'] = session_id();
        //autre variable
        $_SESSION['name'] = $user;

        //redirection vers l admin
        header("location: admin.php");

    }else{
        $erreur = "login ou password incorectes";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>connection</title>
</head>
<body>
<?php
include "menu.inc.php"
?>
    <h1>Connection</h1>
<p>Connecter vous ici</p>
<?php if (isset($erreur)) echo "<h3>$erreur</h3>" ?>
<form action="" name="connextion" method="POST">
    <input type="text" name="login" placeholder="username" required><br>
    <input type="password" name="password" placeholder="password" required><br>
    <input type="submit" value="se connecter">
    <p>utuliser "admin" avec "root"</p>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>