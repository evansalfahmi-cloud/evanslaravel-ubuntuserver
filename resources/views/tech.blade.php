@extends('layouts.app')

@section('title', 'Tech News - Literasi Sipil')

@section('content')
<header class="bg-welcome text-white text-center py-5">
    <div class="container">
        <h1>Tech News</h1>
        <p class="lead">Stay updated with the latest in technology and innovation.</p>
    </div>
</header>

<div class="container mt-4">
    <div class="row">
        <!-- Artikel 1 -->
        <div class="col-md-4">
            <div class="card position-relative overflow-hidden">
                <a href="/tech-news/article-1" class="d-block">
                    <img src="{{ asset('images/tech-article-1.jpg') }}" class="card-img-top hover-zoom" alt="Tech Article 1">
                </a>
                <div class="card-body">
                    <h5 class="card-title">Artificial Intelligence Advancements</h5>
                    <p class="card-text">Discover how AI is revolutionizing industries across the globe.</p>
                    <a href="/tech-news/article-1" class="btn btn-navy btn-sm">Read More</a>
                </div>
            </div>
        </div>

        <!-- Artikel 2 -->
        <div class="col-md-4">
            <div class="card position-relative overflow-hidden">
                <a href="/tech-news/article-2" class="d-block">
                    <img src="{{ asset('images/tech-article-2.jpg') }}" class="card-img-top hover-zoom" alt="Tech Article 2">
                </a>
                <div class="card-body">
                    <h5 class="card-title">The Future of Quantum Computing</h5>
                    <p class="card-text">How quantum computing could reshape the technological landscape.</p>
                    <a href="/tech-news/article-2" class="btn btn-navy btn-sm">Read More</a>
                </div>
            </div>
        </div>

        <!-- Artikel 3 -->
        <div class="col-md-4">
            <div class="card position-relative overflow-hidden">
                <a href="/tech-news/article-3" class="d-block">
                    <img src="{{ asset('images/tech-article-3.jpg') }}" class="card-img-top hover-zoom" alt="Tech Article 3">
                </a>
                <div class="card-body">
                    <h5 class="card-title">Top 10 Tech Innovations in 2024</h5>
                    <p class="card-text">A rundown of the most exciting technological breakthroughs this year.</p>
                    <a href="/tech-news/article-3" class="btn btn-navy btn-sm">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
