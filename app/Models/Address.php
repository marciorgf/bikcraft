<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'address_03';
    protected $primaryKey = 't03_idAddress';
    protected $fillable =['t03_address',
                          't01_idClient',
                          't03_addon',
                          't03_neighborhood',
                          't03_city',
                          't03_zipCode',
                          't03_state'
];
}
