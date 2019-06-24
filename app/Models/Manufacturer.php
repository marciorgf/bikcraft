<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    protected $table = 'manufacturer_07';
    protected $primaryKey = 't07_idManufacturer';
    protected $filleble =['t07_name',
                          't07_cnpj',
                          't07_address',
                          't07_addon',
                          't07_neighborhood',
                          't07_city',
                          't07_zipCode',
                          't07_state'
                         ];
}
