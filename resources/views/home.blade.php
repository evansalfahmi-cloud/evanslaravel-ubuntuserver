@extends('layouts.app')

@section('title', 'Home - Evans Project')

@section('content')
<header class="bg-welcome text-white text-center py-5">
    <div class="container">
        <h1>Welcome to Literasi Sipil</h1>
        <p class="lead">Knowledge for Positive Change</p>
    </div>
</header>

<div class="row mt-4">
    <div class="col-md-4">
        <div class="card position-relative overflow-hidden">
            <!-- Label -->
            <div class="card-label position-absolute top-0 start-0 bg-navy text-white px-3 py-1">
            Tech
            </div>
            <!-- Clickable Image -->
            <a href="/history" class="d-block">
                <img src="{{ asset('images/tech.png') }}" class="card-img-top hover-zoom" alt="Feature Tech">
            </a>
            <!-- Card Body (Over Image) -->
            <div class="card-body position-absolute bottom-0 start-0 text-white bg-dark bg-opacity-75 w-100 px-3 py-2">
                <p class="card-text">Explore the evolution of technology and its impact on our lives.</p>
                <a href="/history" class="btn btn-navy btn-sm">Learn More</a>
            </div>
        </div>
    </div>


    <div class="col-md-4">
        <div class="card position-relative overflow-hidden">
            <!-- Label -->
            <div class="card-label position-absolute top-0 start-0 bg-navy text-white px-3 py-1">
            Tech
            </div>
            <!-- Clickable Image -->
            <a href="/history" class="d-block">
                <img src="{{ asset('images/tech.png') }}" class="card-img-top hover-zoom" alt="Feature Tech">
            </a>
            <!-- Card Body (Over Image) -->
            <div class="card-body position-absolute bottom-0 start-0 text-white bg-dark bg-opacity-75 w-100 px-3 py-2">
                <p class="card-text">Explore the evolution of technology and its impact on our lives.</p>
                <a href="/history" class="btn btn-navy btn-sm">Learn More</a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card position-relative overflow-hidden">
            <!-- Label -->
            <div class="card-label position-absolute top-0 start-0 bg-navy text-white px-3 py-1">
            Tech
            </div>
            <!-- Clickable Image -->
            <a href="/history" class="d-block">
                <img src="{{ asset('images/tech.png') }}" class="card-img-top hover-zoom" alt="Feature Tech">
            </a>
            <!-- Card Body (Over Image) -->
            <div class="card-body position-absolute bottom-0 start-0 text-white bg-dark bg-opacity-75 w-100 px-3 py-2">
                <p class="card-text">Explore the evolution of technology and its impact on our lives.</p>
                <a href="/history" class="btn btn-navy btn-sm">Learn More</a>
            </div>
        </div>
    </div>
</div>
@endsection
