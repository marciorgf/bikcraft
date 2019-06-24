<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Values extends Model
{
     protected $table = 'values_10';
     protected $primaryKey = 't10_idValue';
     protected $fillable = ['t09_idCuston',	't10_value'];
}
