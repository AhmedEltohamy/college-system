<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //

    protected $table = 'teacher';

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }

    public function courses()
    {
        return $this->belongsToMany('App\Course', 'teacher_courses', 'teacher_id', 'course_id');
    }
}
