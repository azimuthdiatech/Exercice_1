<?php 
//procedure
function permutation(int $n1, int $n2, int $temp):void{
    $temp=$n1;
    $n1=$n2;
    $n2=$temp;
}
function permute($n1,$n2,$temp){
    echo "Voici les deux nombres avant permutation ".$n1 ." et " .$n2 ."<br>";
    permutation($n1,$n2,$temp);
    echo "Voici les deux nombres aprés permutation ".$n2 ." et " .$n1;
    return 0;
}


?>