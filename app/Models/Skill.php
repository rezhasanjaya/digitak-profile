<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'skill', 'percent', 'email', 'email_verified_at', 'password',
    ];

    protected $hidden = [
        'skill_id', 'user_id',
    ];
}
