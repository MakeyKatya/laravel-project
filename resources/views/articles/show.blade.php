@extends('app')

@section('content')
    <h1>{{$article->title}}</h1>
    <hr>
    @unless($article->tags->isEmpty())
        <h5>Tags</h5>
        <ul>
            @foreach($article->tags as $tag)
                <li>{{$tag->name}}</li>
            @endforeach
        </ul>
    @endunless
    <hr>
        <article>
            {{$article->body}}
        </article>
    <div class="img" align="center"><img src="../images/{{$article->id}}.jpg"></div>
    <ul class="nav navbar-nav">
        <li><a href="/articles">Back to Articles</a></li>
        <li><a href="/articles/{{ $article->id }}/edit"><span class="glyphicon glyphicon-pencil"></span>Edit an Article</a></li>
    </ul>
@endsection