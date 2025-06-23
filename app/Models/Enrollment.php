<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'mobile',
        'gender',
        'course',
        'days_per_week',
        'preferred_days',
        'message',
        'status'
    ];

    protected $casts = [
        'preferred_days' => 'array',
        'days_per_week' => 'integer'
    ];
}
