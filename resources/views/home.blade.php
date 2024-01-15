@extends('layouts.app')

@section('content')
    <h1>HELL COME TO LARAVEL</h1>
    <ul>
        @foreach ($movies as $movie)
            <li>
                {{$movie->title}}
            </li>
        @endforeach
    </ul>
@endsection