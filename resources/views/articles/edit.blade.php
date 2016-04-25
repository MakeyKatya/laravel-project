@extends('app')

@section('content')
    <h1>{{$article->title}}</h1>

    {!! Form::model($article, ['method'=>'PATCH', 'action'=>['ArticleController@update', $article->id] ]) !!}
         @include('articles.partials', ['submitButtonText'=>'Update Article'])
    {!! Form::close() !!}

    @include('errors.list')

@endsection