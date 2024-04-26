<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $table = 'application_details';

    protected $fillable = [
        'application_title',
        'application_employer_name',
        'application_employee_name',
        'application_employee_address',
        'application_company_name',
        'application_slug',
        'application_description',
        'application_employee_image',
        'application_employee_cv',

    ];
}
