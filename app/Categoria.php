<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //atributos de la tabla

    protected $table="category";
    protected $primaryKey = "category_id";
    public $timestamps = false;
    
}