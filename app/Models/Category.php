<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public function courses()
    {
        return $this->hasMany(Course::class, 'category_id', 'id');
    }

    public function files()
    {
        return $this->morphMany(File::class, 'fileable');
    }

    // Accessor for fetching a short description
    public function getShortDescriptionAttribute()
    {
        $description = Str::limit($this->description, 120, '...');
        return $description;
    }
}
