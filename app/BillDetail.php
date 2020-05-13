<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    protected $table = "bill_detail";

    //relationship : 1 schi tiết hđ thuộc về 1 sp
    public function product_Bill()
    {
        return $this->belongsTo('App\Product','id_product','id');
    }

    //relationship : 1 chi tiết hđ thuộc về 1 hóa đơn
    public function bills()
    {
        return $this->belongsTo('App\Bill','id_bill','id');
    }
    
}
