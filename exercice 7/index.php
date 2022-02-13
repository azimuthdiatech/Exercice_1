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
  height:35vh;
  background-color:lightgrey;
  border-radius: 3em;
}
fieldset{
  border-radius: 3em;
}
input{
  border-radius: 2em;
}
form{
  font-size:3vh;
}
</style>
<div> 
  <form action="controller.php" method="post">
  <fieldset>
    <legend align="center"> DETERMINE LA DATE SUIVANTE</legend>

      <label for="jour">Jour</label>
      <input type="text" name="jour" id="jour" placeholder="Insérer le jour" size="20" value=""/><br/>
      
      <br/>
      <label for="mois">Mois</label>
      <input type="text" name="mois" id="mois" placeholder="Insérer le mois" size="20" value=""/><br/>
      
      <br/>
      <label for="annee">Annee</label>
      <input type="text" name="annee" id="annee" placeholder="Insérer l'année" size="20" value=""/><br/>
      
      <br/>
      <input type="submit" name="soumettre" id="" value="Valider">
  </fieldset>

    </form>
</div>

<?php 
include("fonctions.php");

?>

</body>
</html>