<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PurcheseOrder extends Model
{
    protected $table = 'purchaseOrder_11';
    protected $primaryKey = 't11_idPurchaseOrder';
    protected $fillable =['t09_idCuston', 't01_idClient', 't03_idAddress'];

}
