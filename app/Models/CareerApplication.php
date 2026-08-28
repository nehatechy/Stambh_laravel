<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CareerApplication extends Model
{
    protected $fillable = [
        'career_id', 'name', 'email', 'phone',
        'applied_for', 'cover_message', 'resume'
    ];

public function career()
    {
        return $this->belongsTo(Career::class);
    }
}