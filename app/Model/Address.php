<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'addresses';

    protected $fillable = [
        'street',
        'city',
        'province',
        'country',
        'postcode'
        ];

    protected $guarded = ['id'];
}
