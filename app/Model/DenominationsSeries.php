<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DenominationsSeries extends Model
{
    protected $table = 'denominations_series';

    protected $fillable = [
        'denomination_series',
        'denominations_id',
    ];

    protected $guarded = ['denomination_series_id'];
}
