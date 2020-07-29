<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'description', 'body', 'price', 'slug'
    ];

    //Mapeamento da relação 1:1 de produtos e lojas
    public function store(){
        return $this->belongsTo(Store::class);
    }

    //Mapeamento da relação n:n de produtos e categorias
    public function categories(){
        return $this->belongsToMany(Category::class);
    }
}
