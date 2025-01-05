<?php
require_once 'model/model_barang.php';

class ControllerBarang
{
  private $modelBarang;

  public function __construct()
  {
    $this->modelBarang = new modelBarang();
  }

  public function listBarang()
  {
    $barangs = $this->modelBarang->getAllBarang();
    include 'view/barang_list.php';
    return $barangs;
  }

  public function getAllBarang()
  {
    $barangs = $this->modelBarang->getAllBarang();
    return $barangs;
  }

  public function addbarang($namaBarang, $hargaBarang, $totalBarang)
  {
    $this->modelBarang->addBarang($namaBarang, $hargaBarang, $totalBarang);
    header('location: index.php?modul=dataBarang');
  }

  public function editById($id)
  {
    $barang = $this->modelBarang->getBarangById($id);
    include 'view/barang_edit.php';
    return $barang;
  }

  public function getBarangById($id)
  {
    return $this->modelBarang->getBarangById($id);
  }

  public function updateBarang($id, $namaBarang, $hargaBarang, $totalBarang)
  {
    $this->modelBarang->updateBarang($id, $namaBarang, $hargaBarang, $totalBarang);
    header('location: index.php?modul=dataBarang');
  }

  public function deleteBarang($idBarang)
  {
    $detele = $this->modelBarang->deleteBarang($idBarang);
    if ($detele == false) {
      throw new Exception('barang tidak ada');
    } else {
      header('location: index.php?modul=dataBarang');
    }
  }

  public function getListBarangName()
  {
    $listBarangName = [];
    foreach ($this->modelBarang->getAllBarang() as $barang) {
      $listBarangName[] = $barang->namaBarang;
    }
    return $listBarangName;
  }
}
