<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;
    protected $table = 'employer_details';

    protected $fillable = [
        'employer_email',
        'employer_password',
        'employer_first_name',
        'employer_middle_name',
        'employer_last_name',
        'employer_address',
        'employer_slug',
        'employer_status',
        'employer_contact',
        'employer_company_name',
        'employer_image',
        'employer_description',
        'employer_certificate'
    ];

    public function job()
    {
        return $this->hasMany(Job::class, 'job_posted_by');
    }
}
