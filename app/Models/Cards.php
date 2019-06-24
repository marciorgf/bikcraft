<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cards extends Model
{
    protected $table = 'cards_02';
    protected $primaryKey = 't02_idCard';
    protected $fillable = ['t02_cardNumber',
                           't01_idClient',
                           't02_company',
                           't02_expiration',
                           't02_cardholder'
                          ];
}
