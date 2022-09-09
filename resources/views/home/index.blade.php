@extends('layouts.main')

@section('title', 'Homepage')

@section('main-content')
    <div class="home-index text-center">
        <div class="title-main"> Welcome to this Movie Homepage</div>
        <div class="home-imager">
            <img class="image-home" src="assets/images/home-image.png" alt="splash">
        </div>
        <div class="pt-3">
            <a class="btn btn-outline-info my-button" href="{{ route('movies') }}"> Accedi ai film del Movie Database  </a>
        </div>

    </div>
@endsection
