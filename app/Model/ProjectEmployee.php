<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProjectEmployee extends Model
{
    protected $table = 'project_employees';

    protected $fillable = [
        'employeeId',
    ];

    protected $guarded = ['id'];
}
