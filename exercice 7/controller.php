<?php 
include_once("fonctions.php");
$jour=$_POST['jour'];
$mois=$_POST['mois'];
$annee=$_POST['annee'];
dateValide($jour,$mois,$annee);
dSuivant($jour,$mois,$annee);
