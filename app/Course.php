<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    
    public function students()
    {
        return $this->belongsToMany('App\Student', 'student_courses', 'student_id', 'course_id');
    }

    public function teachers()
    {
        return $this->belongsToMany('App\Teacher', 'teacher_courses', 'teacher_id', 'course_id');
    }
}
