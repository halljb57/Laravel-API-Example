<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Denomination extends Model
{
    protected $table = 'denominations';

    protected $fillable = [
        'denomination',
        'country_id',
    ];

    protected $guarded = ['denominations_id'];
}
