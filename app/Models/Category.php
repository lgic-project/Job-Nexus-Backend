<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'category_details';

    protected $fillable = [
        'category_title',
        'category_image'
    ];

    public function jobs()
    {
        return $this->hasMany(Job::class, 'job_category');
    }
}