<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Coins extends Model
{
    protected $table = 'coins';

    protected $fillable = [
        'mint_year',
        'mintage_for_circulation',
        'mintage_of_proofs',
        'denomination_series_id',
        'mint_mark',
        'designer',
        'diameter',
        'metal_content',
        'weight',
        'edge',
        'notes',
    ];

    protected $guarded = ['coin_id'];
}
