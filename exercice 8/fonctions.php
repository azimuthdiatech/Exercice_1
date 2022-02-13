<?php
function validNombre($nbr,string $key,array &$arrError ):void{
    if(empty($nbr)){
        $arrError[$key]="Veuillez saisir une valeur";
    }else{
        if (!is_numeric($nbr)){
            $arrError[$key]="Veuillez saisir un nombre";
        }else{
            if($nbr<0){
                $arrError[$key]="Veuillez saisir un nombre positif";
            }
        }
    }
   }
function listeUl($list):void{
    for ($i=1; $i<=$list; $i++){
        echo "<ul><li>Nombre $i</li></ul>";
        }
    }
