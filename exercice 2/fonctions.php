<?php 
   function perimetre(int $long,int $larg):int{
        return ($long+$larg)*2; 
    }
    function surface(int $long,int $larg):int{
        return $long*$larg; 
    }
    //X puissance n =>pow(x,n)
    function diagonale(int $cote):float{
        return sqrt(pow($long,2)+pow($larg,2));
    }
   
   //Procedures
      function calculrectangle(int $long,int $larg):void{
       $peri= ($long+$larg)*2; 
       $surf=$long*$larg; 
       $diag= sqrt(pow($long,2)+pow($larg,2));
       echo "Le Perimetre est ". $peri ."<br>";
       echo "La Surface est ". $surf ."<br>";
       echo "La Diagonale est " .$diag ."<br>";
   }

