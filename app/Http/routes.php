<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

/*****************teacher**********************/
Route::get('/teacher/assignCourse','TeacherController@assignCourses')->name('teacher.assignCourse');

Route::get('/teacher/showCourses','TeacherController@showCourses')->name('teacher.showCourses');

Route::post('/teacher/saveCouses','TeacherController@saveCourses')->name('teacher.saveCouses');

Route::resource('teacher', 'TeacherController');
/******************end teacher**************************/

/******************student********************/
Route::get('/student/register','StudentController@registerCourses')->name('student.register');

Route::get('/student/showCourses','StudentController@showCourses')->name('student.showCourses');

Route::post('/student/saveCourses','StudentController@submitCourses')->name('student.submitCourses');

Route::resource('student', 'StudentController');
/*****************end student****************************/

Route::resource('course', 'CourseController');
