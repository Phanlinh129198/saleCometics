<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "customer";

    //relationship : 1 kh có nhiều bill
    public function customer_bill()
    {
        return $this->hasMany('App\Bill','id_customer','id');
    }
}
