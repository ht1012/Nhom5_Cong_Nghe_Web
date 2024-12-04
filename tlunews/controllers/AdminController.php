<?php
require_once 'models/News.php';
require_once 'models/User.php';
class AdminController{
    public function login(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $user = User::authenticate($username, $password);
            if($user){
                session_start();
                $_SESSION['user'] = $user;
                header('Location: index.php?controller=admin&action=dashboard');
                exit;  
            }else{
                $error = 'Tên đăng nhập hoặc mật khẩu không đúng!';
            }
        }
        include 'views/admin/login.php';
    }

    public function logout(){
        session_start();
        session_destroy();
        header('Location: index.php?controller=admin&action=login');
    }

    public function requireLogin(){
        session_start();
        if(!isset($_SESSION['user']) || $_SESSION['user']['role'] != 1){
            header('Location: index.php?controller=admin&action=login');
            exit;
        }
    }
}