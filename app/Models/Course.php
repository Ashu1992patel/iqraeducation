<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
        'description',
        'requirement',
        'period',
        'duration',
        'price',
        'assessment',
        'language',
        'teacher',
    ];

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
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

    // Accessor for fetching a Assessment
    public function getCustomAssessmentAttribute()
    {
        if ($this->assessment)
            return 'Yes';
        return 'No';
    }

    // Accessor for fetching a Thumbnail image
    public function getThumbnailAttribute()
    {
        if (isset($this->files[0]))
            return url($this->files[0]->path);
        return url('frontend') . '/images/iqra/about.png';
    }

    // Accessor for fetching a Course image
    public function getImageAttribute()
    {
        if (isset($this->files[1]))
            return url($this->files[1]->path);
        return url('frontend') . '/images/iqra/about.png';
    }
}
