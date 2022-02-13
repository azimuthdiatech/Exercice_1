<?php 
    function nombreBon(int $nbre ):void{
    if(estVide($nbre)){
        echo "Veuillez saisir une valeur";
    }else{
        if(!estNombre($nbre)){
            echo "Veuillez saisir un nombre";
        }
    }
   }
   function estNombre($nbre):bool{
       return is_numeric($nbre); 
   }
   function estVide($nbre):bool{
    return empty($nbre);
    }
    function bissextile($annee):bool{
        if(($annee%4 == 0 && $annee%100!=0) || $annee%400==0){
            return true;
        }else {
            return false;
        }
    }
    /*function mois_30($mois):bool{
        if($mois==4 || $mois==6 || $mois==9 || $mois==11){
            return true;
        }else {
            return false;
        }
    }
    function mois_31($mois):bool{
        if($mois==1 || $mois==3 || $mois==5 || $mois==7 || $mois==8|| $mois==10 || $mois==12){
            return true;
        }else {
            return false;
        }
    }*/
    //Fonction nombre de jour
    function nombreJour($mois,$annee):int{
        if($mois==2){
            if(bissextile($annee)) {
                return 29;
            }else{
                return 28;
                }
        }elseif($mois==4 || $mois==6 || $mois==9 || $mois==11) {
            return 30;
        }else{
            return 31;
        }
    }
    //Fonction Date valide
    function dateValide($jour, $mois, $annee):bool{
        $nbrJr=nombreJour($mois,$annee);
            if($jour<=$nbrJr and  ($mois>=1 or $mois<=12) and $annee>0){
                return true;
            }else {
                return false;
            }
        }
     //Date suivante
     function dSuivant($jour,$mois,$annee):void{
         if(dateValide($jour,$mois,$annee)){
             $nj=nombreJour($mois,$annee);
             if($jour<$nj){
                 $jour++;
                 
            }else{
                $jour=1;
            }
                    if($mois==12){
                        $mois=1;
                        $annee++;
                    }else{
                    $mois++;
                }
                
         }echo" La date suivante est ".$jour ."/" .$mois ."/" .$annee;
     }  
?>
