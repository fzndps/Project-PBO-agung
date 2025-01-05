<?php
class dataBarang{
  public $idBarang;
  public $namaBarang;
  public $hargaBarang;
  public $totalBarang;

  public function __construct($idBarang, $namaBarang, $hargaBarang, $totalBarang){
    $this->idBarang = $idBarang;
    $this->namaBarang = $namaBarang;
    $this->hargaBarang = $hargaBarang;
    $this->totalBarang = $totalBarang;
  }
}
?>