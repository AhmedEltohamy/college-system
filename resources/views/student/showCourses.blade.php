@extends('structure')
@section('main')

<div class="row">
    <h1>Your courses</h1>
</div>

<table class="table table-striped">
    <thead>
        <tr>
        <td>Name</td>
        <td>Code</td>
        <td>Content</td>
        </tr>
    </thead>
    <tbody>
        @foreach($courses as $course)
        <tr>
            <td>{{$course->name}}</td>
            <td>{{$course->code}}</td>
            <td>{{$course->content}}</td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection