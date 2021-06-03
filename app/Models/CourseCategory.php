<?php namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseCategory extends Model
{
    protected $table = 'course_categories';

    protected $guarded = [
        'id'
    ];

     public function getRouteKeyName()
     {
         return 'slug';
     }

     public function courses()
     {
         return $this->hasMany(Course::class, 'category_id')->where('parent_course', null)->orWhere('parent_course', 0);
     }
}
