<?php include "menu.php"; ?>

<h1>Get esimerkki</h1>

<form action="get_esim.php" method="get">
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
    if(isset($_GET['btnSend'])){
      $etu=$_GET['en'];
      $suk=$_GET['sn'];
      echo 'Hei '.$etu.' '.$suk;
    }

?>

<?php include "footer.php"; ?>
