<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients_01';
    protected $primaryKey = 't01_idClient';
    protected $fillable = ['t01_name',
                            't01_name',
                            't01_cpf',
                            't01_phone',
                            't01_mobile',
                            't01_birthDate',
                            't01_sex',
                            't01_email',
                            't01_password'
                        ];

}
