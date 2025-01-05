<?php
require_once 'model/model_user.php';
require_once 'model/model_role.php';

class ControllerUser
{
  private $modelUser;
  private $modelRole;

  public function __construct()
  {
    $this->modelUser = new modelUser();
    $this->modelRole = new modelRole();
  }

  public function listUsers()
  {
    // $this->modelRole->getAllRoles();
    $users = $this->modelUser->getAllUsers();
    include 'view/user_list.php';
    return $users;
  }

  public function addUser($username, $password, $role_name, $nama)
  {
    $roles = $this->modelRole->getRoleByName($role_name);
    $this->modelUser->addUser($username, $password, $roles, $nama);
    header('location: index.php?modul=dataUser');
  }

  public function editUserById($idUser)
  {
    // Ambil data user
    $user = $this->modelUser->getUserById($idUser);

    // Ambil semua role untuk dropdown
    $roles = $this->modelRole->getAllRoles();

    // Jika user ditemukan, tampilkan form edit
    if ($user) {
      // Sediakan kedua data untuk view
      include 'view/user_edit.php';
      return ['user' => $user, 'roles' => $roles];
    } else {
      // Redirect jika user tidak ditemukan
      header('location: index.php?modul=dataUser');
      exit;
    }
  }

  public function updateUser($idUser, $username, $password, $role_name, $nama)
  {
    $this->modelUser->updateUser($idUser, $username, $password, $role_name, $nama);
    header('location: index.php?modul=dataUser');
  }

  public function deleteUser($idUser)
  {
    $detele = $this->modelUser->deleteUser($idUser);
    if ($detele == false) {
      throw new Exception('Role tidak ada');
    } else {
      header('location: index.php?modul=dataUser');
    }
  }

  public function getUsers()
  {
    return $this->modelUser->getAllUsers();
  }

  public function getRoles()
  {
    return $this->modelRole->getAllRoles();
  }

  public function getUserByid($id)
  {
    return $this->modelUser->getUserByid($id);
  }

  // public function getListUserName(){
  //   $listUserName = [];
  //   foreach($this->modelUser->getAllUsers() as $users){
  //     $listUserName[] = $users->username;
  //   }
  //   return $listUserName;
  // }

  public function getUserByName($name)
  {
    return $this->modelUser->getUserByName($name);
  }
}
