@if(Auth::user()->role_id == 3)
@extends('layouts.app')
@section('content')

<div class="container">

    <div class="row">
        <h1>Register Courses</h1>

        @if(session()->get('success'))
        <div class="alert alert-success">
            <ul>
                <li>{{session()->get('success')}}</li>
            </ul>      
        </div>
        <br/>
        @endif

        @if(session()->get('err'))
        <div class="alert alert-danger">
            <ul>
                <li>{{session()->get('err')}}</li>
            </ul>      
        </div>
        <br/>
        @endif
        
    </div>

    <div class="row">
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
    </div>
</div>
@endsection

@else
<script type="text/javascript">
    window.location = "{{ url('/home') }}";
</script>
@endif