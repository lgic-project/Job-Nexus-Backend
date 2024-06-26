<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employee_details';

    protected $fillable = [

        'employee_address',
        'employee_slug',
        'employee_status',
        'employee_image',
        'employee_cv',
        'employee_description',
        'employee_education',
        'employee_work_experience',
        'employee_participation',
        'employee_training',
        'employee_fb_link',
        'employee_linkedin_link',
        'user_id'
    ];

    // Employee.php
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
