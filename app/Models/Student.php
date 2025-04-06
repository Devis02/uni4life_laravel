<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name',
        'password',
        'email',
        'profile_photo_path',
        'birth_date'
    ];

    public $timestamps = false;
}
