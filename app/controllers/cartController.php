<?php

namespace coding\app\controllers;

use coding\app\models\Book;
use coding\app\models\Model;
class CartController extends Controller{
    
    function showCart(){
        session_start();
        $books = new Model();
        $book = $books->table('books')->get();
        $this->viewSite('cart', array(
            'books'     => $book,
        ));
    }
}