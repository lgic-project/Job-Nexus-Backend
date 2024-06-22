<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $table = 'application';

    protected $fillable = [
        'applicant_id',
        'job_id',
        'applicant_status',
        'applicant_description'

    ];
    public function job()
    {
        return $this->belongsTo(Job::class, 'id');
    }
}
