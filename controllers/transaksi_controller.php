<?php
require_once "model/model_transaksi.php";

class ControllerTransaksi{
  private $modelTransaksi;

  function __construct(){
    $this->modelTransaksi = new modelTransaksi();
  }

  public function listTransaksi(){
    $transaksi = $this->modelTransaksi->getAllTransaksi();
    include "view/transaksi_list.php";
  }

  public function addTransaksi($barang, $jumlah, $customer, $kasir){
    $this->modelTransaksi->addTransaksi($barang, $jumlah, $customer, $kasir);
    header('location: index.php?modul=transaksi');
  }
}