<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    use HasFactory;
    protected $table = "bill_detail";

    public function product(){
        return $this->belongsTo('app\BillDetail','id_product','id');
    }

    public function bills(){
        return $this->hasMany('app\BillDetaiBill','id','id_bill');
    }


}
