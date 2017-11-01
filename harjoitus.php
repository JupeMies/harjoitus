<?php include "menu.php"; ?>
    <h1>moro</h1>
    <p>Seuraava taulukko on luotu php:llä</p>
    <?php
    $nimet=array(
      array("Etunimi"=>'Ville',"Sukunimi"=>'Virta'),
      array("Etunimi"=>'Kalle',"Sukunimi"=>'Järvi'),
      array("Etunimi"=>'Liisa',"Sukunimi"=>'Virta'),
      array("Etunimi"=>'Marja',"Sukunimi"=>'Joki')
    );
    echo "Ensimmäinen etunimi on", $nimet[0]['Etunimi'],'<br>';
    ?>

    <h2>Koko taulukko<h2>
    <table border="1">
      <tr>
        <th>Etunimi</th><th>Sukunimi</th>
      </tr>
      <tr>
        <td>Aino</td><td>Aho</td>
      </tr>
      <?php
      foreach ($nimet as $rivi) {
        echo '<tr><td>'.$rivi['Etunimi'].'</td><td>'.$rivi['Sukunimi'].'</td></tr>';
      }
      ?>
    </table>

<?php include "footer.php"; ?>
