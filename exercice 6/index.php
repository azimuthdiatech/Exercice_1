<?php 
   session_start();
?>
<form action="controller.php" method="post">
    <label for="">Entrer a</label>
      <input type="text" name="a" id="" value="<?php if(!isset($_SESSION['error']['a']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['a']; else ''  ?>"> 
      <?php if(isset($_SESSION['error']['a'])):?>
          <span style="color:red"><?php echo $_SESSION['error']['a'] ?></span>
      <?php session_unset();endif?>
      <br>
    <label for="">Entrer b</label>
      <input type="text" name="b" id="" value="<?php if(!isset($_SESSION['error']['b']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['b']; else ''  ?>" >
      <?php if(isset($_SESSION['error']['b'])):?>
          <span style="color:red"><?php echo $_SESSION['error']['b'] ?></span>
      <?php session_unset();endif?>
      <br>
    <label for="">Entrer c</label>
      <input type="text" name="c" id="" value="<?php if(!isset($_SESSION['error']['c']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['c']; else ''  ?>">
      <?php if(isset($_SESSION['error']['c'])):?>
          <span style="color:red"><?php echo $_SESSION['error']['c'] ?></span>
      <?php session_unset();endif?>
      <br>

      <input type="submit" name="ok" id="" value="ok">

</form>

