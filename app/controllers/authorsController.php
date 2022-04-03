<?php

namespace coding\app\controllers;

use coding\app\models\Model;
use coding\app\models\Author;

class AuthorsController extends Controller{

    function showAuthor(){
        $authors = new Author();
        $rows = $authors->show();
        $this->view('authors', $rows);
    }
    function showAuthorById($params=[]){
        $authors = new Author();
        $rows = $authors->showById($params['id']);
        $this->view('edit_author', $rows);
    }

    function cearteAuthor(){
        $this->view('add_author');

    }

    function storeAuthor(){
        $author=new Model();
        
        $name   = $_POST['author_name'];
        $phone  = $_POST['phone'];
        $email  = $_POST['email'];
        $bio    = $_POST['bio'];

        $created_by = 1;
        $is_active  = $_POST['is_active'];

        $stmt = $author->insert('authors', [
            'name'      => $name,
            'phone'     => $phone,
            'email'     => $email,
            'bio'       => $bio
        ]);
        if($stmt){
            $mes = "<div> inserted successfully</div>";
            $this->redirectHome($mes, 'back');
        }

    }
    function updateAuthor(){
        $author = new Model();
        $id = $_POST['authorid'];
        $name = $_POST['author_name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $bio = $_POST['bio'];
        $stmt = $author->update('authors', [
            'name'      => $name,
            'phone'     => $phone,
            'email'     => $email,
            'bio'       => $bio
        ])->where('id', $id)->exec();
        if($stmt){ ?>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <?php 
            echo "<div class='container mt-6'>";
                $mes = "<div class='alert alert-success'>Updated successfully</div>";
                $this->redirectHome($mes, 'authors', 10); 
            echo "</div>";
        }
        $this->view('authors');
    }

    function deleteAuthor($id=[]){
        $author = new Author();
        $stmt = $author->deleteAuthor($id['id']);
        if($stmt){ ?>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <?php 
            echo "<div class='container mt-6'>";
                $mes = "<div class='alert alert-success'>Deleted successfully</div>";
                $this->redirectHome($mes, 'authors', 10); 
            echo "</div>";
        }
        $this->view('authors');
    }
    function isActiveAuthor($isActiv=[]){
        $author = new Model();
        $stmt = $author->update('authors', ['is_active' => 1])->where($isActiv['id'])->exec();
        if($stmt){ ?>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <?php 
            echo "<div class='container mt-6'>";
                $mes = "<div class='alert alert-success'>Updated successfully</div>";
                $this->redirectHome($mes, 'authors', 10); 
            echo "</div>";
        }
        $this->view('authors');
    }
    function noActiveAuthor($noActiv=[]){
        $author = new Model();
        $stmt = $author->update('authors', ['is_active' => 0])->where($noActiv['id'])->exec();
        if($stmt){ ?>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <?php 
            echo "<div class='container mt-6'>";
                $mes = "<div class='alert alert-success'>Updated successfully</div>";
                $this->redirectHome($mes, 'authors', 10); 
            echo "</div>";
        }
        $this->view('authors');
    }

    public static function uploadFile(array $imageFile): string
    {
        // check images direction
        if (!is_dir(__DIR__ . '/../../public/images')) {
            mkdir(__DIR__ . '/../../public/images');
        }

        if ($imageFile && $imageFile['tmp_name']) {
            $image = explode('.', $imageFile['name']);
            $imageExtension = end($image);

            $imageName = uniqid(). "." . $imageExtension;
            $imagePath =  __DIR__ . '/../../public/images/' . $imageName;

            move_uploaded_file($imageFile['tmp_name'], $imagePath);

            return $imageName;
        }

        return null;
    }

    




}

?>