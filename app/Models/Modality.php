
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modality extends Model
{
    protected $table = 'modality_05';
    protected $primaryKey = 't05_idModality';
    protected $fillable = ['t05_name'];

}
