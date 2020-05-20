@extends('structure')
@section('main')
     
<div class="row">
    <div class="row">
            <h1 class="display-3">Students</h1> 
        <div class="col-sm-12">  
            @if(session()->get('success'))
            <div class="alert alert-success">
            {{ session()->get('success') }}
            @endif
            </div>  
        </div>

        <div class="col-sm-12">
            <a style="margin-bottom: 19px;" href="{{ route('student.create')}}" class="btn btn-primary">New Student</a>
        </div>
    </div>   
    <table class="table table-striped">
        <thead>
            <tr>
            <td>Name</td>
            <td>Username</td>
            <td>Level</td>
            <td colspan = 2>Actions</td>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->student->level}}</td>
                <td>
                    <a href="{{route('student.edit',$user->id)}}" class="btn btn-primary">Edit</a>
                </td>
                <td>
                    <form action="{{route('student.destroy', $user->id)}}" method="post">
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