<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //

    public $timestamps = false;

    protected $fillable = [
        'id', 'user_id', 'specialization',
    ];

    protected $table = 'teacher';

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function courses()
    {
        return $this->belongsToMany('App\Course', 'teacher_course', 'teacher_id', 'course_id');
    }
}
