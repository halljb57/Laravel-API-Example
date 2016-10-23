<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CollectionName extends Model
{
    protected $table = 'collection_names';

    protected $fillable = [
        'collection_name',
        'country_id',
        'comments'
    ];

    protected $guarded = ['collection_id'];
}
