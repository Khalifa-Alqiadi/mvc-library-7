<?php

namespace coding\app\controllers;

use coding\app\models\Index;
use coding\app\models\Model;

class IndexController extends Controller{
    function viewIndex(){
        $index = new Model();
        $cat = $index->table('categories')->get();
        $book = $index->table('books')->get();
        $this->viewSite('home', array(
            'categories'    => $cat,
            'books'    => $book,
        ));
        
    }
    function list(){
        $this->view('/home');
    }
    function cartSession($params=[]){
        session_start();
        if(isset($_SESSION['user'])){
            $id = $params['bookid'];
            echo $id;
            if(isset($_SESSION['mycart'][$id])){
                $provi = $_SESSION['mycart'][$id]['quantity'];
                $_SESSION['mycart'][$id] = array(
                    "bookid" => $id,
                    "quantity" => $provi+$_POST['quantity']);
                header("location:/");
            }else{
                $_SESSION['mycart'][$id] = array(
                    "bookid"=>$id,
                    "quantity"=> $_POST['quantity']
                );
                header("location:/");
            }
        }else{ ?>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <?php 
            echo "<div class='container mt-6'>";
                $mes = "<div class='alert alert-danger'>لا يمكنك الاضافة الى السلة  قبل عملية تسجيل الدخول</div>";
                $this->redirectHome($mes, 'login', 10); 
            echo "</div>";
            $this->viewSite('/home');
        }
    }
}

?>