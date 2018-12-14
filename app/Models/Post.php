<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table='post';
    protected $fillable=['id', 'titulo', 'contenido', 'autor'];

    public $timestamps=true;

    public function categorias()
    {
        //return $this->belognsToMany('App\Models\Categoria_Post', 'categoria_id', 'id');
    }

}