@extends('layouts.app')

@section('content')

    @foreach($posts as $post)
        <a href="{{url('/article/'.$post->id)}}">
            <div class="panel panel-default">
                <div class="pull-right">{{$post->created_at}}</div>
                <div class="panel-heading">{{$post->post_name}}</div>

                <div class="panel-body">
                    {{$post->content}}
                    <br>
                    <div class="media-footer">
                        <a class="pull-left like" data-postid="{{$post->id}}" href="#" title="Like this">
                            <pre><i class="fa fa-thumbs-up"></i>  Like </pre>
                        </a>
                        <a class="pull-left dislike" data-postid="{{$post->id}}" href="#" title="Dislike this">
                            <pre><i class="fa fa-thumbs-down"></i>  Dislike </pre>
                        </a>
                        <span class="rating-text">Rating: <span id="rating{{$post->id}}"> {{$post->rating}}</span></span>
                    </div>
                </div>
            </div>
        </a>
    @endforeach
    @unless(Auth::guest())
        <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
    @endunless
@endsection

