<?php

class Opiskelija
{
  private $nimet=array(
    array("Etunimi"=>'Ville',"Sukunimi"=>'Virta'),
    array("Etunimi"=>'Kalle',"Sukunimi"=>'Järvi'),
    array("Etunimi"=>'Liisa',"Sukunimi"=>'Virta'),
    array("Etunimi"=>'Marja',"Sukunimi"=>'Joki')
  );
  public function get_nimet(){
    return $this->nimet;
  }
}
?>
