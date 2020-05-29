@if(Auth::user()->role_id == 1)
@extends('layouts.app')
@section('content')

<div class="container">

    <div class="row">
        <h1>Assign courses to teacher</h1>

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
        <form method="POST" action="{{route('teacher.saveCouses')}}">
            {{csrf_field()}}
            
            <div class="form-group">
                <label for="teacher">Choose the teacher:</label>
                <select class="form-control" name="taecher">
                    @foreach($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="courses">Choose courses for this teacher:</label>
                <select class="form-control" name="courses[]" multiple data-max-options="6">
                    @foreach($courses as $course)
                        <option value="{{$course->id}}">{{$course->name}}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Assign</button>
        </form>
    </div>
</div>
@endsection

@else
<script type="text/javascript">
    window.location = "{{ url('/home') }}";
</script>
@endif