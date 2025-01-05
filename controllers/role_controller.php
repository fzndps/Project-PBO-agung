<?php
require_once 'model/model_role.php';

class ControllerRole
{
  private $modelRole;

  public function __construct()
  {
    $this->modelRole = new modelRole();
  }

  public function listRole()
  {
    $roles = $this->modelRole->getAllRoles();
    include 'view/role_list.php';
    return $roles;
  }

  public function addRole($role_name, $role_desc, $role_status)
  {
    $this->modelRole->addRole($role_name, $role_desc, $role_status);
    header('location: index.php?modul=role');
  }

  public function editById($role_id)
  {
    $role = $this->modelRole->getRoleById($role_id);
    include 'view/role_edit.php';
    return $role;
  }

  public function updateRole($role_id, $role_name, $role_desc, $role_status)
  {
    $this->modelRole->updateRole($role_id, $role_name, $role_desc, $role_status);
    header('location: index.php?modul=role');
  }

  public function deleteRole($role_id)
  {
    $detele = $this->modelRole->deleteRole($role_id);
    if ($detele == false) {
      throw new Exception('Role tidak ada');
    } else {
      header('location: index.php?modul=role');
    }
  }

  public function getListRoleName()
  {
    $listRoleName = [];
    foreach ($this->modelRole->getAllRoles() as $role) {
      $listRoleName[] = $role->role_name;
    }
    return $listRoleName;
  }

  public function getRoleByName($role_name)
  {
    return $this->modelRole->getRoleByName($role_name);
  }
}
