<html>
<head>
<title>Exercice 1</title>
</head>
<body>
<style>
body{
  background: linear-gradient(red, yellow);
}
</style>

<?php
//Charge mes fonctions ou inclure
include_once("fonctions.php");

    const VAL_MIN=1;//Je veux pas le voir
    define("VAL_MAX",100);
  //Generer un nbre de maniere 
  //aleatoire entre 1 et 100
    $cote=rand(VAL_MIN,VAL_MAX) ;
    echo "Le Coté est ".  $cote."<br>";
    calculCarre($cote);   
?>
</body>
</html>





   
