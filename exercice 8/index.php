<html>
<head>
<title>Exercice 10</title>
</head>
<body>
<?php 
   session_start();
?>
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
    <legend align="center"> champ listé</legend>

      <label for="ipt">Entrer un nombre</label>
      <input type="text" name="list" id="list" placeholder="Entrer la table que vous voulez afficher" size="30" value="<?php if(!isset($_SESSION['error']['list']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['list']; else ''  ?>" />
      <?php if(isset($_SESSION['error']['list'])):?>
            <span style="color:red"><?php echo $_SESSION['error']['list'] ?></span>
      <?php session_unset(); endif?> <br/>
      <br/>
      <input type="submit" name="valider" id="" value="Valider">
  </fieldset>

    </form>
</div>


</body>
</html>
