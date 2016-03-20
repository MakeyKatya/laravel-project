<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{$title}}</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1 class="text-center">
    {{--@if (!empty($pagetitle))
        {{$pagetitile}}
        @elseif(!empty($title))
            {{$title}}
        @else
            'Гостевая книга'
        @endif--}}

        {{--@unless (empty($pagetitle))
            {{$pagetitle}}
        @else
            "Empty"
            @endunless--}}
       {{-- @{{ скобки не виден }}--}}

        {{isset($pagetitle) ? $pagetitle : 'Гостевая книга'}}

    </h1><hr/>
{{--@for ($i=0;$i<5;$i++)
    <p>'№ {{$i}}'</p>
@endfor--}}
{{--@if(!empty($users) & is_array($users))
    @foreach ($users as $user)
        <p>{{$user['name']}}</p>
        @endforeach
@endif--}}

    @yield('content')

</div>

<!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>