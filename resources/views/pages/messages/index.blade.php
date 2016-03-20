@extends('index')

@section('content')
    @include('_common._form')
<hr>
    <div class="text-right"><b>Всего сообщений:</b><i class="badge">{{$count}}</i></div><br>

    @include('pages.messages._items')


@endsection