<?php
require_once 'model/model_user.php';

class AuthController
{
    private $modelUser;

    public function __construct()
    {
        $this->modelUser = new modelUser();
    }

    public function login($username, $password)
    {
        $users = $this->modelUser->getAllUsers();
        foreach ($users as $user) {
            if ($user->username === $username && $user->password === $password) {
                $_SESSION['user'] = [
                    'id' => $user->idUser,
                    'name' => $user->name,
                    'role' => $user->role->role_name,
                ];
                header('Location: index.php');
                exit;
            }
        }
        echo "Login gagal. Username atau password salah.";
    }

    public function logout()
    {
        session_destroy();
        header('Location: index.php?modul=auth&action=login');
        exit;
    }
}
