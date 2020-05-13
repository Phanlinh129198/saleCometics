<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = "bills";

    ////relationship : 1 bill thuộc về 1 kh
    public function bill_customer()
    {
        return $this->belongsTo('App\Customer','id_customer','id');
    }

    ////relationship : 1 bill có nhiều chi tiết bill
    public function bill_detail()
    {
        return $this->hasMany('App\BillDetail','id_bill','id');
    }
}
