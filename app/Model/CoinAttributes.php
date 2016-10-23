<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CoinAttributes extends Model
{
    protected $table = 'coin_attributes';

    protected $fillable = [
        'catalog_type',
        'collection_id',
        'composition',
        'quality',
        'country',
        'current_value',
        'denomination',
        'denomination_series',
        'designer',
        'diameter',
        'edge',
        'grade',
        'grade_by',
        'metal_content',
        'mint',
        'mint_mark',
        'mint_year',
        'mintage_for_circulation',
        'mintage_of_proofs',
        'purchase_date',
        'purchase_from',
        'purchase_price',
        'quantity',
        'serial_number',
        'sold_date',
        'sold_price',
        'sold_to',
        'thickness',
        'notes',
        'weight',
    ];

    protected $guarded = ['coin_attributes_id'];
}
