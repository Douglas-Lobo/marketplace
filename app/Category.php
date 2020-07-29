<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'description', 'slug'
    ];

    //Mapeamento da relação n:n de categorias e produtos
    public function products(){
        return $this->belongsToMany(Product::class);
    }
}
