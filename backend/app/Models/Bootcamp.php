<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bootcamp extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'website',
        'phone',
        'average_rating',
        'average_cost',
        'user_id'
    ];
}
