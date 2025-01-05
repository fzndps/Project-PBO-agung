<?php
require_once "node/node_barang.php";
class modelBarang {
  private $barang = [];
  private $nextId = 1;
  private $objBarang;

  public function __construct(){
    if(isset($_SESSION['barang'])){
        $this->barang = unserialize($_SESSION['barang']);
        $this->nextId = count($this->barang)+1;
    }else{
        $this->initializeDefaultBarang();
    }
  }

  public function addBarang($namaBarang, $hargaBarang, $totalBarang){
    $this->objBarang = new dataBarang($this->nextId++, $namaBarang, $hargaBarang, $totalBarang);
    $this->barang[] = $this->objBarang;
    $this->saveToSession();
  }

  private function saveToSession(){
    $_SESSION['barang'] = serialize($this->barang);
  }

  public function getAllBarang(){
    return $this->barang;
  }

  public function initializeDefaultBarang(){
    $this->addBarang("mouse", 100000, 5);
    $this->addBarang("Kursi", 500000, 3);
    $this->addBarang("Meja", 450000, 3);
    $this->addBarang("PC", 8000000, 4);
    $this->addBarang("Laptop", 6000000, 7);
  }

  public function getBarangById ($idBarang){
    foreach($this->barang as $barangs){
      if ($barangs->idBarang == $idBarang){
        return $barangs;
      }
    }
    return null;
  }

  public function getListBarang(){
    $listBarang = [];
    foreach($this->barang as $barangs){
      $listBarang[] = $this->$barangs->namaBarang;
    }
    return $listBarang;
  }

  public function updateBarang($idBarang, $namaBarang, $hargaBarang, $totalBarang) {
    foreach ($this->barang as $barangs) {
        if ($barangs->idBarang == $idBarang) {
            $barangs->namaBarang = $namaBarang;
            $barangs->hargaBarang = $hargaBarang;
            $barangs->totalBarang = $totalBarang;
            $this->saveToSession();
            return true;
        }
    }
    return false;
}

// public function deleteBarang($idBarang) {
//     foreach ($this->barang as $key => $barangs) {
//         if ($barangs->idBarang == $idBarang) {
//             unset($this->barang[$key]);
//             $this->barang = array_values($this->barang);
//             $this->saveToSession();
//             return true;
//         }
//     }
//     return false;
// }

public function deleteBarang($idBarang) {
  foreach ($this->barang as $key => $barangs) {
      if ($barangs->idBarang == $idBarang) {
          unset($this->barang[$key]); 
          $this->barang = array_values($this->barang); 
          $this->reorderRoleIds();
          $this->saveToSession();
          return true;
      }
  }
  return false;
}

private function reorderRoleIds() {
  foreach ($this->barang as $index => $barangs) {
      $barangs->idBarang = $index + 1; 
  }
  $this->nextId = count($this->barang) + 1; 
}

}
?>