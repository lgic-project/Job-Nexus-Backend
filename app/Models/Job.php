<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $table = 'job_details';

    protected $fillable = [
        'job_title',
        'job_category',
        'job_address',
        'job_company_name',
        'job_experience',
        'job_max_salary',
        'job_min_salary',
        'job_slug',
        'job_status',
        'job_contact',
        'job_validity',
        'job_description',
        'job_type',
        'job_hour',

    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'id');
    }

    public function application()
    {
        return $this->hasMany(Application::class, 'job_id');
    }

    public function employer()
    {
        return $this->belongsTo(Employer::class, 'job_posted_by');
    }
}
