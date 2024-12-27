@extends('layouts.app')

@section('title', 'Tech News - Literasi Sipil')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Tech News</h1>

    <!-- Artikel 1 -->
    <div class="row mb-4 align-items-center">
        <div class="col-md-6">
            <h5 class="fw-bold">Artificial Intelligence Advancements</h5>
            <p>Discover how AI is revolutionizing industries across the globe.</p>
            <a href="/tech-news/article-1" class="btn btn-navy btn-sm">Read More</a>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('images/tech-article-1.jpg') }}" class="img-fluid rounded" alt="Tech Article 1">
        </div>
    </div>

    <!-- Artikel 2 -->
    <div class="row mb-4 align-items-center">
        <div class="col-md-6 order-md-2">
            <h5 class="fw-bold">The Future of Quantum Computing</h5>
            <p>How quantum computing could reshape the technological landscape.</p>
            <a href="/tech-news/article-2" class="btn btn-navy btn-sm">Read More</a>
        </div>
        <div class="col-md-6 order-md-1">
            <img src="{{ asset('images/tech-article-2.jpg') }}" class="img-fluid rounded" alt="Tech Article 2">
        </div>
    </div>

    <!-- Artikel 3 -->
    <div class="row mb-4 align-items-center">
        <div class="col-md-6">
            <h5 class="fw-bold">Top 10 Tech Innovations in 2024</h5>
            <p>A rundown of the most exciting technological breakthroughs this year.</p>
            <a href="/tech-news/article-3" class="btn btn-navy btn-sm">Read More</a>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('images/tech-article-3.jpg') }}" class="img-fluid rounded" alt="Tech Article 3">
        </div>
    </div>
</div>
@endsection
