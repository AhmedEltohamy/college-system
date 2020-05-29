@extends('layouts.app')
@section('content')
<div class="container">
        @if(Auth::user()->role_id == 1)
        <div class="row"> 
            <div class="col-sm-6"><a href="{{route('student.index')}}"><div class="functions well well-lg">Manage Student</div></a></div>
            <div class="col-sm-6"><a href="{{route('teacher.index')}}"><div class="functions well well-lg">Manage Teacher</div></a></div>
        </div>
        <div class="row"> 
            <div class="col-sm-6"><a href="{{route('course.index')}}"><div class="functions well well-lg">Manage Course</div></a></div>
            <div class="col-sm-6"><a href="{{route('teacher.assignCourse')}}"><div class="functions well well-lg">Assign Courses</div></a></div>
        </div>
        @elseif(Auth::user()->role_id == 2)
        <div class="row"> 
            <div class="col"><a href="{{route('teacher.showCourses')}}"><div class="functions well well-lg">Show Assigned Courses</div></a></div>
        </div>
        @else
        <div class="row"> 
            <div class="col"><a href="{{route('student.register')}}"><div class="functions well well-lg">Register Courses</div></a></div>
            <div class="col"><a href="{{route('student.showCourses')}}"><div class="functions well well-lg">Show Register Courses</div></a></div>
        </div>
        @endif
</div>
@endsection
