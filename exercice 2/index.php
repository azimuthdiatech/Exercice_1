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
//Charge mes fonctions 
include_once("fonctions.php");

    define("VAL_MIN",1);
    define("VAL_MAX",100);
    $long=rand(VAL_MIN,VAL_MAX) ;
    echo "La longueur est ". $long."<br>";
    $larg=rand(VAL_MIN,VAL_MAX) ;
    echo "La largeur est ". $larg."<br>";
    calculrectangle($long,$larg);
    
?>

</body>
</html>