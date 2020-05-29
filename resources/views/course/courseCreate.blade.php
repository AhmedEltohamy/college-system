@if(Auth::user()->role_id == 1)
@extends('layouts.app')
@section('content')

<div class="container">

  <div class="row">
        <h1 class="display-3">Add Course</h1>
      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
      <br/>
      @endif
  </div>
  <div class="row">
      <form method="post" action="{{route('course.store')}}">
        {{csrf_field()}}

        <div class="form-group">    
          <label for="name">Name:</label>
          <input type="text" class="form-control" name="name"/>
        </div>

        <div class="form-group">
          <label for="code">code:</label>
          <input type="text" class="form-control" name="code"/>
        </div>
            
        <div class="form-group">
          <label for="content">content:</label>
          <textarea class="form-control" name="content"></textarea>
        </div>   
            
        <button type="submit" class="btn btn-primary">Add course</button>
      </form>
  </div>    
</div>  
@endsection

@else
<script type="text/javascript">
    window.location = "{{ url('/home') }}";
</script>
@endif