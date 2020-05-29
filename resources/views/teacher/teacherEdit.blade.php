@if(Auth::user()->role_id == 1)
@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">

        <h1 class="display-3">Update Teacher</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

        <br /> 
        @endif
    </div>
    
    <div class="row">
        <form method="post" action="{{ route('teacher.update', $user->id) }}">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="PATCH">

            <div class="form-group">

                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" value="{{$user->name}}" />
            </div>

            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" name="username" value="{{$user->username}}" />
            </div>

            <div class="form-group">
                <label for="specialization">Specialization:</label>
                <input type="text" class="form-control" name="specialization" value="{{$user->teacher->specialization}}" />
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection

@else
<script type="text/javascript">
    window.location = "{{ url('/home') }}";
</script>
@endif