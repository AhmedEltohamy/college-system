@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                
                    @if(Auth::user()->role_id == 1)
                    hello admin
                    @elseif(Auth::user()->role_id == 2)
                    hello teacher
                    @else
                    hello student
                    @endif

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
