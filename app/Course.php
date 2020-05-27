<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $table = 'course';

    protected $fillable = [
        'id', 'name', 'code', 'content',
    ];

    public $timestamps = false;
    
    public function students()
    {
        return $this->belongsToMany('App\Student', 'student_course', 'course_id', 'student_id')->withPivot('grade');
    }

    public function teachers()
    {
        return $this->belongsToMany('App\Teacher', 'teacher_course', 'teacher_id', 'course_id');
    }
}
