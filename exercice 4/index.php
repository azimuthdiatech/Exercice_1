<html>
<head>
<title>Exercice 1</title>
</head>
<body>
<style>
body{
  background: linear-gradient(green,yellow,red);
}
</style>

<?php 
include("fonctions.php");
define("VAL_MIN",1);
define("VAL_MAX",100);
$n1=rand(VAL_MIN,VAL_MAX) ;
$n2=rand(VAL_MIN,VAL_MAX) ;
$temp=0;
permute($n1,$n2,$temp);
?>

</body>
</html> 