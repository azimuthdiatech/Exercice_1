<?php
function validNombre($nbr,string $key,array &$arrError ):void{
    if(empty($nbr)){
        $arrError[$key]="Veullez saisir une valeur";
    }else{
        if (!is_numeric($nbr)){
            $arrError[$key]="Veullez saisir un nombre";
        }else{
            if($nbr<0){
                $arrError[$key]="Veullez saisir un nombre positif";
            }
        }
    }
   }
function champInput($iput):void{
    for ($i=1; $i<=$iput; $i++){
        echo '<label for="">Champ</label> '.$i.'<br>';
        echo ' <input type="text" name="input".$i>'.'<br>';

        }
    }
