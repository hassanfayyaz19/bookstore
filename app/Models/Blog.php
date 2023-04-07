<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';

    protected $fillable = [
        'title',
        'slug',
        'body',
        'image',
        'user_id',
        'published_at',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'status',
    ];
}
