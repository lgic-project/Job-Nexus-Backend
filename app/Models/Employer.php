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
        'employer_name',
        'employer_address',
        'employer_slug',
        'employer_status',
        'employer_contact',
        'employer_company_name',
        'employer_image',
        'employer_description',
        'employer_certificate',
        'user_id'
    ];

    public function job()
    {
        return $this->hasMany(Job::class, 'id');
    }
}
