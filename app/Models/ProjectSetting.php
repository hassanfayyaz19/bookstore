<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectSetting extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected function profile(): Attribute
    {
        return Attribute::make(
            get: fn($value) => asset($value),
        );
    }

    protected function logo(): Attribute
    {
        return Attribute::make(
            get: fn($value) => asset($value),
        );
    }

    protected function details(): Attribute
    {
        return Attribute::make(
            get: fn($value) => !is_null($value) ? json_decode($value) : new \stdClass(),
        );
    }
}
