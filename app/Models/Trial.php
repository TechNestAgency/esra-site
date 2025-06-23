<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trial extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'course_type',
        'message',
        'status',
        'trial_date'
    ];

    protected $casts = [
        'trial_date' => 'datetime'
    ];
}
