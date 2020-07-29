<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        'name', 'description', 'phone', 'mobile_phone', 'slug'
    ];

    //Mapeamento da relação 1:1 de loja e usuario
    public function user(){
        return $this->belongsTo(User::class);
    }
    //Mapeamento da relação 1:N de loja e produtos
    public function products(){
        return $this->hasMany(Product::class);
    }
    
}
