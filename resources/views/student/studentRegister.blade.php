@extends('structure')
@section('main')

<div class="row">
    <h1>Register Courses</h1>
</div>

<form method="POST" action="{{route('student.submitCourses')}}">
    {{csrf_field()}}
    
    <div class="form-group">
        <label for="courses">Choose your courses:</label>
        <select class="form-control" name="courses[]" multiple data-max-options="6">
            @foreach($courses as $course)
                <option value="{{$course->id}}">{{$course->name}}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Register</button>
</form>

<div>
    @if(session()->get('success'))
    <div class="alert alert-success">
    {{ session()->get('success') }}
    @endif  
    </div>

    @if(session()->get('err'))
    <div class="alert alert-danger">
    {{ session()->get('err') }}
    @endif  
    </div>
</div>

@endsection