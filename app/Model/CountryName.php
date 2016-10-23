<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CountryName extends Model
{
    protected $table = 'country_names';

    protected $fillable = [
        'country',
    ];

    protected $guarded = ['country_id'];
}
