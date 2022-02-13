<html>
<head>
<title>Exercice 1</title>
</head>
<body>
<style>
body{
  background: linear-gradient(darkgrey, turquoise);
}
div{
  text-align:center;
  padding-top:1em;
  margin:5em;
  width:70vh;
  height:25vh;
  background-color:lightgrey;
  border-radius: 3em;
}

</style>
<?php 
session_start();
include_once("fonctions.php");

if(isset($_POST['valider'])){
    $iput =$_POST['ipt'];
    $_SESSION['post']=$_POST;
    $arrError=[];
    validNombre($iput,"ipt",$arrError);
    
    if(count($arrError)==0){
        champInput($iput);
    }else{
        $_SESSION['error']=$arrError;
        //var_dump( $_SESSION);
        header('location:index.php'); 
        exit();
    }
}else{
    //Redirection
    header('location:index.php');
    exit();
}

?>
</body>
</html>