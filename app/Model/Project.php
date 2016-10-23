<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';

    protected $fillable = [
        'type',
        'name',
        'budget', 10, 2,
        'leaderId',
    ];

    protected $guarded = ['id'];
}
