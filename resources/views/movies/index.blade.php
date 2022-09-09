@extends('layouts.main')

@section('title', 'Movies')

@section('main-content')
    <div class="container-fluid movie-section">
        <div class="row p-5 justify-content-center ">
            @foreach($movies as $movie)
                @include('partials.movies.card')
              @endforeach
        </div>



    </div>


@endsection
