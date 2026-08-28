<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title', 'slug', 'category', 'client_name',
        'short_description', 'description',
        'completion_date', 'image', 'images',
        'duration', 'location', 'size', 'year',
        'status'
    ];

    protected $casts = [
        'completion_date' => 'date',
        'images' => 'array',
    ];
}
