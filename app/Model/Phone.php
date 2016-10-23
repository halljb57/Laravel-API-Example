<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $table = 'phones';

    protected $fillable = [
        'type',
        'phoneNumber',
        'areaCode',
        'ownerId',
    ];

    protected $guarded = ['id'];
}
