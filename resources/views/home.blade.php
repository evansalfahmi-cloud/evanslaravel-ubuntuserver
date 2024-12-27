@extends('layouts.app')

@section('title', 'Home - Evans Project')

@section('content')
<header class="bg-welcome text-white text-center py-5">
    <div class="container">
        <h1>Welcome to Literatur.com</h1>
        <p class="lead">Knowledge for Positive Change</p>
    </div>
</header>

<div class="row mt-4">
    <div class="col-md-4">
        <div class="card position-relative overflow-hidden">
            <!-- Label -->
            <div class="card-label position-absolute top-0 start-0 bg-navy text-white px-3 py-1">
            Tech News
            </div>
            <!-- Clickable Image -->
            <a href="/tech" class="d-block">
                <img src="{{ asset('images/tech.png') }}" class="card-img-top hover-zoom" alt="Feature Tech">
            </a>
            <!-- Card Body (Over Image) -->
            <div class="card-body position-absolute bottom-0 start-0 text-white bg-dark bg-opacity-75 w-100 px-3 py-2">
                <p class="card-text">"Explore the evolution of technology and its impact on our lives."</p>
                <a href="/tech" class="btn btn-navy btn-sm">See Tech News</a>

            </div>
        </div>
    </div>


    <div class="col-md-4">
        <div class="card position-relative overflow-hidden">
            <!-- Label -->
            <div class="card-label position-absolute top-0 start-0 bg-navy text-white px-3 py-1">
            History
            </div>
            <!-- Clickable Image -->
            <a href="/history" class="d-block">
                <img src="{{ asset('images/history.png') }}" class="card-img-top hover-zoom" alt="History">
            </a>
            <!-- Card Body (Over Image) -->
            <div class="card-body position-absolute bottom-0 start-0 text-white bg-dark bg-opacity-75 w-100 px-3 py-2">
                <p class="card-text">"Delving into the Journey of History That Shaped Our World"</p>
                <a href="/history" class="btn btn-navy btn-sm">See History</a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card position-relative overflow-hidden">
            <!-- Label -->
            <div class="card-label position-absolute top-0 start-0 bg-navy text-white px-3 py-1">
            Other
            </div>
            <!-- Clickable Image -->
            <a href="/history" class="d-block">
                <img src="{{ asset('images/other.png') }}" class="card-img-top hover-zoom" alt="Feature Tech">
            </a>
            <!-- Card Body (Over Image) -->
            <div class="card-body position-absolute bottom-0 start-0 text-white bg-dark bg-opacity-75 w-100 px-3 py-2">
                <p class="card-text">"Many other things can provide important information here."</p>
                <a href="/history" class="btn btn-navy btn-sm">See Other</a>
            </div>
        </div>
    </div>
</div>
@endsection
