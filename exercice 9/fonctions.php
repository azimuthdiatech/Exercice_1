<?php
function validNombre($nbre,string $key,array &$arrError ):void{
    if(empty($nbre)){
        $arrError[$key]="Veullez saisir une valeur";
    }else{
        if (!is_numeric($nbre)){
            $arrError[$key]="Veullez saisir un nombre";
        }else{
            if($nbre<0){
                $arrError[$key]="Veullez saisir un nombre positif";
            }
        }
    }
   }
function multiplication($nbr):void{
        for ($i=1; $i<=10; $i++){
        $result=$nbr*$i;
        echo "$nbr*$i=".$result."<br>";
        }
    }
    