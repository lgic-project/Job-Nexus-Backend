<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;
    protected $table = 'employer_details';

    protected $fillable = [

        'employer_address',
        'employer_slug',
        'employer_status',
        'employer_company_name',
        'employer_pan_vat',
        'employer_certificate',
        'employer_image',
        'employer_description',
        'company_website',
        'user_id'
    ];




    public function job()
    {
        return $this->hasMany(Job::class, 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
