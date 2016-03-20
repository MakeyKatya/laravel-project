@extends('layouts.app')


<div class="container">
    @section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>

                <div class="panel-body">
                    <h2><a href="{{url('/article')}}">You can read all posts</a></h2>
                </div>
            </div>
        </div>
    </div>
    @endsection
</div>



