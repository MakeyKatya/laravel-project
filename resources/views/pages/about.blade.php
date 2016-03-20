@extends('app')

@section('content')
<h1>About me</h1>
<h3>People o like</h3>
<ul>
    @foreach ($people as $person)
        <li> {{ $person}} </li>
    @endforeach
</ul>
<p>
    Some migration operations are destructive,
    meaning they may cause you to lose data.
    In order to protect you from running these
    commands against your production database,
    you will be prompted for confirmation before
    these commands are executed. To force the
    commands to run without a prompt, use the --force flag:
</p>
@endsection