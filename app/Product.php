<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    
    //relationship : 1 sản phẩm thuộc về 1 loại sp
    public function type_product()
    {
        return $this->belongsTo('App\ProductType','id_type','id');
    }
     //relationship : 1 sản phẩm có nhiều chi tiết hóa đơn
    public function bill_Product()
    {
        return $this->hasMany('App\BillDetail','id_product','id');
    }
}
