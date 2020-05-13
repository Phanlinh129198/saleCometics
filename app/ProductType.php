<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $table = "type_products";

    //relationship 1 loại sp có nhiều sp
    public function products(){
        return $this->hasMany('App\Product','id_type','id');
    }
}
