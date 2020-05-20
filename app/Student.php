<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //

    public $timestamps = false;

    protected $fillable = [
        'id', 'user_id', 'level',
    ];

    protected $table = 'student';

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }

    public function courses()
    {
        return $this->belongsToMany('App\Course', 'student_course', 'student_id', 'course_id');
    }

}
