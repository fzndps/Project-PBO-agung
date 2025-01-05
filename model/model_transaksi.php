<?php
require_once "node/node_transaksi.php";
require_once "node/node_barang.php";
require_once "node/node_user.php";

class modelTransaksi{
  private $transaksi = [];
  private $nextId = 1;
  private $objModelTransaksi;

  public function __construct(){
    if(isset($_SESSION['transaksi'])){
      $this->transaksi = unserialize($_SESSION['transaksi']);
      $this->nextId = count($this->transaksi) + 1;
    } else {
      $this->initializeDefaultTransaksi();
    }
  }

  public function addTransaksi($barang, $jumlah, $customer, $kasir){
    $transaksis = new nodeTransaksi($this->nextId++, $barang, $jumlah, $customer, $kasir);
    $transaksis->calculateTotal();
    $this->transaksi[] = $transaksis;
    $this->saveToSession();
  }

  public function saveToSession() {
    $_SESSION['transaksi'] = serialize($this->transaksi);
  }

  public function getAllTransaksi(){
    return $this->transaksi;
  }

  // public function initDefaultTransaksi(){
  //   $this->addTransaksi();
  // }

  public function getBarangInTransaksi($id){
    foreach($this->transaksi as $transaksis){
      if($transaksis->idTransaksi == $id){
        return $transaksis;
      }
    }
    return null;
  }

  private function initializeDefaultTransaksi(){
    $objUser = new modelUser();
    $objBarang = new modelBarang();

    $barang1 = $objBarang->getBarangById(1);
    $jumlah1 = 2;
    
    $barang2 = $objBarang->getBarangById(2);
    $jumlah2 = 3;

    $barangA[] = $barang1;
    $barangB[] = $barang2;
    $barangC[] = $barang1;

    $jumlahA = [2];
    $jumlahB = [9];

    $this->addTransaksi($barangA, $jumlahA, $objUser->getUserByid(1), $objUser->getUserByid(2));
    $this->addTransaksi($barangB, $jumlahB, $objUser->getUserByid(1), $objUser->getUserByid(2));
  }
}


?>