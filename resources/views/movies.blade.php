@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row row-cols-5">
            @foreach ($movies as $movie)
                <div class="col my-3 d-flex align-items-stretch">
                    <div class="card">
                        <img src="{{$movie->image}}" class="card-img-top" alt="{{$movie->title}} poster">
                        <div class="descr">
                            <span>Title:</span>
                            <h2>{{$movie->title}}</h2>
                            <span>Original-Title:</span>
                            <h3>{{$movie->original_title}}</h3>
                            <div class="info">
                                <span >{{$movie->vote}}<i class="fa-solid fa-star"></i></span>
                                <span>{{$movie->date}} <i class="fa-regular fa-calendar-days"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection