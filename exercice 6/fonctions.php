<?php


   function validNombre($nbre,string $key,array &$arrError ):void{
    if(estVide($nbre)){
        $arrError[$key]="Veuillez saisir une valeur";
    }else{
        if(!estNombre($nbre)){
            $arrError[$key]="Veuillez saisir un nombre";
        }
    }
   }
   function estNombre($nbre):bool{
       return is_numeric($nbre); 
   }
   function estVide($nbre):bool{
    return empty($nbre);
    }

    function equationSecondDegre(float $a, float $b, float $c):void{
        $delta=($b*$b)-(4*$a*$c);
        if($delta<0){
            echo "Votre équation n'a pas de solution dans R";
        }else if($delta==0){
            $x=-$b/2*$a;
            echo "Votre équation a pour solution: ".$x;
        }else if($delta>0){
            $x1=(-$b-(sqrt($delta)))/(2*$a); 
            $x2=(-$b+(sqrt($delta)))/(2*$a);
            echo "Votre équation admet deux solutions: ".$x1." et ".$x2;
        }
    }