<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{

    protected $table = "reviews";
    protected $primaryKey = "id";
    
    use HasFactory;
    protected $fillable = [
        'title',
        'text',
        'rating',
        'bootcamp_id',
        'user_id'
    ];
}
