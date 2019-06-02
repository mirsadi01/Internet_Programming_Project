<?php
class Stafi {
  public $emri;
  public $mosha;
  public $shkolla;
  public $titulli;
  public $Alltitulli=['Prof.Dr.','Prof','Ass','Zyrtar'];
  public function setTitulli($titulli) {
  if ( in_array( $titulli, $this -> Alltitulli ) ) {
    $this -> titulli = $titulli;

  }
}}
?>
