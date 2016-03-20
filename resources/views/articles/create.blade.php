@extends('app')

@section('content')
<h1>Write a new article</h1>

    <hr/>

        {!! Form::open(['url' => 'articles']) !!}
            @include('articles.partials', ['submitButtonText'=>'Add Article'])
        {!! Form::close() !!}


   @include('errors.list', $errors)
@endsection