<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookReview extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    protected function profile(): Attribute
    {
        return Attribute::make(
            get: fn($value) => $value != null ? asset($value) : asset('assets/media/default-profile.png'),
        );
    }
}
