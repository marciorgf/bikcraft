<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parts extends Model
{
      protected $table = 'parts_04';
      protected $primaryKey = 't04_idParts';
      protected $fillable = ['t04_name',
                              't04_material',
                              't04_color',
                              't04_value',
                              't07_idManufacturer'
                            ];
}
