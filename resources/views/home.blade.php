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
        <div class="card">
            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Feature 1">
            <div class="card-body">
                <h5 class="card-title">Feature 1</h5>
                <p class="card-text">Description for feature 1. This could be a quick overview of your services.</p>
                <a href="#" class="btn btn-dark">Learn More</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Feature 2">
            <div class="card-body">
                <h5 class="card-title">Feature 2</h5>
                <p class="card-text">Description for feature 2. This could be an introduction to your projects.</p>
                <a href="#" class="btn btn-dark">Learn More</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Feature 3">
            <div class="card-body">
                <h5 class="card-title">Feature 3</h5>
                <p class="card-text">Description for feature 3. This could be testimonials or highlights.</p>
                <a href="#" class="btn btn-dark">Learn More</a>
            </div>
        </div>
    </div>
</div>
@endsection
