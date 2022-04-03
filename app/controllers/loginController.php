<?php
namespace coding\app\controllers;

use coding\app\models\Model;
class LoginController extends Controller{
    function siginup(){
        $user = new Model();
        $name = $_POST['fullname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $pass = sha1($password);

        $stmt = $user->insert('users', [
            'name'  => $name,
            'email' => $email,
            'password'  => $pass,
            'is_active' => 1,
            'role_id'   => 1
        ]);
        if($stmt){ ?>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <?php 
            echo "<div class='container mt-6'>";
                $mes = "<div class='alert alert-success'>تم انشاء حساب بنجاح يمكنك الان تسجيل الدخول</div>";
                $this->redirectHome($mes, 'back', 10); 
            echo "</div>";
        }
        $this->viewSite('/home');
    }
    function login(){
        $user = new Model();
        // session_start();
        if(isset($_SESSION['user'])){
            $this->viewSite('home');
        }
        $email = $_POST['email'];
        $password = $_POST['password'];
        $pass = sha1($password);
        $login = $user->table('users')->where('email', $email)
                        ->where('password', $pass)->getFetch();
        if($login['email'] == $email && $login['password'] == $pass){
            session_start();
            $_SESSION['user'] = $login['name'];
            $_SESSION['email'] = $login['email'];
            $_SESSION['userid'] = $login['id']; 
            ?>
            

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <?php 
            echo "<div class='container mt-6'>";
                $mes = "<div class='alert alert-success'>تم انشاء حساب بنجاح يمكنك الان تسجيل الدخول</div>";
                $this->redirectHome($mes, 'login', 10); 
            echo "</div>";
            
        }else{ ?>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <?php 
            echo "<div class='container mt-6'>";
                $mes = "<div class='alert alert-danger'>خطأ في عملية تسجيل الدخول</div>";
                $this->redirectHome($mes, 'login', 10); 
            echo "</div>";
        }
        $this->viewSite('/home');
    }
}

?>