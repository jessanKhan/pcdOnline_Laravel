<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function child_courses()
    {
        return $this->hasMany(Course::class, 'parent_course', 'id');
    }

    public function category()
    {
        return $this->belongsTo(CourseCategory::class);
    }
}
