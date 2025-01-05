<?php
class nodeTransaksi{
  public $idTransaksi;
  public $barang = [];
  public $jumlah = [];
  public $total;
  public $customer;
  public $kasir;

  public function __construct($idTransaksi, $barang, $jumlah, $customer, $kasir){
    $this->idTransaksi = $idTransaksi;
    $this->barang = $barang;
    $this->jumlah = $jumlah;
    $this->customer = $customer;
    $this->kasir = $kasir;
  }

  public function calculateTotal() {
    $this->total = 0;
    foreach ($this->barang as $index => $barang) {
        $this->total += $barang->hargaBarang * $this->jumlah[$index];
    }
  }

}