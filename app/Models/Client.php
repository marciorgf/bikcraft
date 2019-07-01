<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Faker\Provider\fr_CA\Address;

class Client extends Model
{
    protected $table = 'clients_01';
    protected $primaryKey = 't01_idClient';
    protected $fillable = ['t01_name',
                            't01_cpf',
                            't01_phone',
                            't01_mobile',
                            't01_birthDate',
                            't01_sex',
                            't01_email',
                            't01_password'
                        ];

    public function verifyClient($t01_email){
        $client = Client::where('t01_email','=',$t01_email);
        return $client;
    }

    public function clientAddress(){
        return hasMany(Address::class, 't01_idClient', 't01_idClient');
    }
}
