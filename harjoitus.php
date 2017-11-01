<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>moro</h1>
    <p>Seuraava taulukko on luotu php:llä</p>
    <?php
    $nimet=array(
      array("Etunimi"=>'Ville',"Sukunimi"=>'Virta')
      array("Etunimi"=>'Kalle',"Sukunimi"=>'Järvi')
      array("Etunimi"=>'Liisa',"Sukunimi"=>'Virta')
      array("Etunimi"=>'Marja',"Sukunimi"=>'Joki')
    );
    foreach ($nimet as $rivi) {
      echo $rivi['Etunimi'];
    }
    ?>
  </body>
</html>
