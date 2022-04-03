<?php

namespace coding\app\models;

class Book extends Model{
    function show()
    {
        $rows = $this->table('books')->get();
        return $rows;   
    }
}
?>