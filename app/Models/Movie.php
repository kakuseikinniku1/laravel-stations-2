<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'title', 'image_url', 'published_year', 'is_showing','description', 'updated_at'
    ];
    public $timestamps = true;
}
