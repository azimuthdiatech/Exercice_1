<?php 
//procedure
  function saisieNombre(int $n1 ,int $n2):void{
      $som= $n1+$n2;
      $diff= $n1-$n2;
      $prod= $n1*$n2;
      $divi= $n1/$n2;
      $carre= pow ($n1,2);
      echo "la somme est ". $som."<br>";
      echo "la différence est ". $diff."<br>";
      echo "le produit est ". $prod."<br>";
      echo "la division est ". $divi."<br>";
      echo "le carré est ". $carre."<br>";
  }



?>