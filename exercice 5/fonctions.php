<?php 
   //Procedures "" ou ''=>chaine
      function distance(int $xa,int $xb,int $ya,int $yb):void{
       $dist= sqrt(pow(($xb-$xa),2)+pow(($yb-$ya),2));
       echo "La distance entre x et y est ". $dist."<br>";
   }
