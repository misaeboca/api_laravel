<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table='categoria';
    protected $fillable=['id', 'nombre'];

    public $timestamps=false;

    public function post()
    {
        return $this->hasMany('App\Models\Post');
    }

}