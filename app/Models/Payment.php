<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table ='payment_12';
    protected $primaryKey = 't12_idPayment';
    protected $fillable =  ['t12_FinalValue', 't02_idCard','t11_idPurchaseOrder'];
}
