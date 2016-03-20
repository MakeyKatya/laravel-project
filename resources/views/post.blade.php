@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        {{$post->post_name}}
        <div class="panel-body">
            {{$post->content}}
        </div>
    </div>
@endsection