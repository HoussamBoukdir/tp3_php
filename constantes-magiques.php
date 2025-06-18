<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //afficher le numero de la ligne ou la constante
    // a ete appelee
    echo "Numero de la ligne est : ".__LINE__."<br>";
    //afficher le chemin ainsi le nom du fichier en cours
    echo "le nom de la fichier ainsi son nom : ".__FILE__."<br>";
    //afficher le nom de du dossier qui contient le fichier en cours
    echo "Nom du dossier : ".__DIR__."<br>";
    //afficher á nouveau le numero de ligne
    echo "Numero de la ligne : ".__LINE__."<br>" ;   
   function message()
   {
    echo "Bienvenue <br>";
    echo "constante appelee depuis la fonction : ".__FUNCTION__."<br>";
   }
   message();
   ?>
</body>
</html>