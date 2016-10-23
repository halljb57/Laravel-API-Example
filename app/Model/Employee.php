<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';

    protected $fillable = [
        'firstName',
        'lastName',
        'salary',
        'startDate',
        'endDate',
        'managerId',
        'addressId'
    ];

    protected $guarded = ['id'];
}
