@extends('structure')
@section('main')
     
<div class="row">
    <div class="row">
            <h1 class="display-3">Courses</h1> 
        <div class="col-sm-12">  
            @if(session()->get('success'))
            <div class="alert alert-success">
            {{ session()->get('success') }}
            @endif
            </div>  
        </div>

        <div class="col-sm-12">
            <a style="margin-bottom: 19px;" href="{{ route('course.create')}}" class="btn btn-primary">New Course</a>
        </div>
    </div>   
    <table class="table table-striped">
        <thead>
            <tr>
            <td>Name</td>
            <td>Code</td>
            <td>Content</td>
            <td colspan = 2>Actions</td>
            </tr>
        </thead>
        <tbody>
            @foreach($courses as $course)
            <tr>
                <td>{{$course->name}}</td>
                <td>{{$course->code}}</td>
                <td>{{$course->content}}</td>
                <td>
                    <a href="{{route('course.edit',$course->id)}}" class="btn btn-primary">Edit</a>
                </td>
                <td>
                    <form action="{{route('course.destroy', $course->id)}}" method="post">
                    {{csrf_field()}}
                    
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>    
@endsection