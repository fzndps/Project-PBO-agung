<?php
  class user {
      public $idUser;
      public $username;
      public $password;
      public $role;
      public $name;
  
      function __construct($idUser, $username, $password, $role, $nama) {
          $this->idUser = $idUser;
          $this->username = $username;
          $this->password = $password;
          $this->role = $role;
          $this->name = $nama;
      }
  }
?>