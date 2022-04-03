<?php

namespace coding\app\models;

class Category extends Model{
    function show()
    {
        $rows = $this->table('categories')->get();
        return $rows;   
    }
}
?>