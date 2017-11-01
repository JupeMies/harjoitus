<?php include "menu.php"; ?>

<h1>POST esimerkki</h1>

<form action="post_esim.php" method="post">
  <table border ="0">
  <tr>
    <td><label for="en">Etunimi</label></td>
    <td><input type="text" id="en" name="en"></td>
  </tr>
  <tr>
    <td><label for="sn">Sukunimi</label></td>
    <td><input type="text" id="sn" name="sn"></td>
  </table>
  <input type="submit" name="btnSend" value="Lähetä">
</form>

<?php
    if(isset($_POST['btnSend'])){
      $etu=$_POST['en'];
      $suk=$_POST['sn'];
      echo 'Hei '.$etu.' '.$suk;
    }

?>

<?php include "footer.php"; ?>
