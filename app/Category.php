<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //Relacion de uno a muchos
    protected $fillable = [
        'name', 'description',
    ];
    public function products(){
        return $this->hasMany(Product::class);
    }
}
