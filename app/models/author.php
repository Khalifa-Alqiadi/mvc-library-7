<?php

namespace coding\app\models;

class Author extends Model{
    function show()
    {
        $rows = $this->table('authors')->get();
        return $rows;   
    }
    function showById($id)
    {
        $rows = $this->table('authors')->where("id", $id)->getFetch();
        return $rows;   
    }
    function deleteAuthor($id)
    {
        $rows = $this->delete('authors')->where("id", $id)->exec();
        return $rows;   
    }
}
?>