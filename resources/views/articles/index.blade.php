@extends('app')

@section('content')
<h1>Articles</h1>
<hr>
    @foreach($articles as $article)
        <div class="row">
            <div class="col-sm-1">
                <img src="../images/{{$article->id}}.jpg" class="img-circle" width="90" height="80">
            </div>

            <div class="col-sm-8">
                <article>
                    <a href="{{action('ArticleController@show',[$article->id])}}"><h2>{{$article->title}}</h2></a>
                    <div class="body">
                        {{$article->body}}
                    </div>
                </article>
            </div>
        </div>
        <hr>

    @endforeach
@endsection