@if(Auth::user()->role_id == 1)
@extends('layouts.app')
@section('content')

<div class="container">

  <div class="row">

    <h1 class="display-3">Add Teacher</h1>
  
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
    <form method="post" action="{{ route('teacher.store') }}">
      {{csrf_field()}}

      <div class="form-group">    
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name"/>
      </div>

      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" name="username"/>
      </div>
          
      <div class="form-group">
        <label for="specialization">Specialization:</label>
        <input type="text" class="form-control" name="specialization"/>
      </div>   
          
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" name="password"/>
      </div>

          
      <button type="submit" class="btn btn-primary">Add Teacher</button>
    </form>
  </div>
</div>
@endsection

@else
<script type="text/javascript">
    window.location = "{{ url('/home') }}";
</script>
@endif