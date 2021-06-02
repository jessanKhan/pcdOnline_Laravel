<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = ['id'];
    use HasFactory;

    public function course()
    {
        return $this->hasOne(Course::class, 'id', 'course_id');
    }

    public function student()
    {
        return $this->hasOne(User::class, 'id','user_id');
    }
}
