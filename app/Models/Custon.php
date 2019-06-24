<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Custon extends Model
{
    protected $table = 'custon_09';
    protected $primaryKey = 't09_idCuston';
    protected $filleble =['t08_idProducts',
                          't01_idClient',
                          't09_frame',
                          't09_rim',
                          't09_drivetrain',
                          't09_crankArm',
                          't09_hub',
                          't09_pedal',
                          't09_handlebar',
                          't09_gearBox',
                          't09_stem',
                          't09_saddle',
                          't09_shock',
                          't09_breakHood',
                          't09_rake',
                          't09_tyre'];
}
