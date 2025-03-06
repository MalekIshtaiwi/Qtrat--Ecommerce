<?php
require_once 'models/Admin.php';
require_once 'controllers/Controller.php';
class AdminController extends Controller
{

    public function login(){
        $this->render('admin.auth.login', ['title' => 'Admin Login']);
    }

    public function authenticate(){
        $email = $_POST['email'] ?? null;
        $password = $_POST['password'] ?? null;
        $admin = $this->model('admin');
        $admin = $admin->findAdmin($email);
        // password_verify($password, $admin->password)
        if ($admin && $password === $admin->$password){
            $this->redirect('/users');
        }
        else{
            $this->render('admin.auth.login', ['title' => 'Admin Login']);
        }
    }


}