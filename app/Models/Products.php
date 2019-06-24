<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'product_08';
    protected $primaryKey = 't08_idProduct';
    protected $filleble =['t08_name',
                          't08_frame',
                          't08_rim',
                          't08_drivetrain',
                          't08_crankArm',
                          't08_hub',
                          't08_pedal',
                          't08_handlebar',
                          't08_gearBox',
                          't08_stem',
                          't08_saddle',
                          't08_shock',
                          't08_breakHood',
                          't08_rake',
                          't08_tyre'];
}
