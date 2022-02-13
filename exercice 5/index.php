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
    $xa=rand(VAL_MIN,VAL_MAX) ;
    $ya=rand(VAL_MIN,VAL_MAX) ;
    echo "Les coordonnés de A sont (". $xa." , ".$ya.")". "<br>";
    $xb=rand(VAL_MIN,VAL_MAX) ;
    $yb=rand(VAL_MIN,VAL_MAX) ;
    echo "Les coordonnés de B sont (". $xb." , ".$yb.")". "<br>";
    distance($xa,$xb,$ya,$yb);
    
?>
</body>
</html>
