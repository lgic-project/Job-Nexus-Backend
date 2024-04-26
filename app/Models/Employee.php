<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employee_details';

    protected $fillable = [
        'employee_email',
        'employee_password',
        'employee_first_name',
        'employee_middle_name',
        'employee_last_name',
        'employee_address',
        'employee_slug',
        'employee_status',
        'employee_contact',
        'employee_image',
        'employee_description',
        'employee_cV'
    ];
}
