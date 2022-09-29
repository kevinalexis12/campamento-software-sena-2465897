<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'weeks',
        'enroll_cost',
        'minimum_skill',
        'created_at',
        'updated_at',
        'bootcamp_id'
    ];
}
