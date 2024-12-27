@extends('layouts.app')

@section('title', 'History - Evans Project')

@section('content')
<header class="bg-navy text-white text-center py-5">
    <div class="container">
        <h1>Sejarah Peradaban Dunia</h1>
        <p class="lead">Menyelami Perjalanan Sejarah yang Membentuk Dunia Kita</p>
    </div>
</header>

<div class="container mt-4">
    <!-- Artikel Pertama -->
    <div class="row mb-4">
        <div class="col-md-6">
            <img src="{{ asset('images/history1.jpg') }}" class="img-fluid" alt="History Image 1">
        </div>
        <div class="col-md-6">
            <h3>Awal Mula Peradaban Manusia</h3>
            <p>
                Sejarah manusia dimulai dari zaman prasejarah, di mana peradaban pertama kali berkembang di lembah sungai besar seperti Mesopotamia, Mesir, dan Indus...
            </p>
            <a href="#" class="btn btn-navy">Baca Selengkapnya</a>
        </div>
    </div>

    <!-- Artikel Kedua -->
    <div class="row mb-4">
        <div class="col-md-6 order-md-2">
            <img src="{{ asset('images/history2.jpg') }}" class="img-fluid" alt="History Image 2">
        </div>
        <div class="col-md-6 order-md-1">
            <h3>Pertumbuhan Peradaban Romawi</h3>
            <p>
                Peradaban Romawi dikenal dengan kemajuan dalam berbagai aspek seperti hukum, teknologi, dan seni. Mereka meninggalkan jejak yang kuat dalam budaya Barat...
            </p>
            <a href="#" class="btn btn-navy">Baca Selengkapnya</a>
        </div>
    </div>

    <!-- Artikel Ketiga -->
    <div class="row mb-4">
        <div class="col-md-6">
            <img src="{{ asset('images/history3.jpg') }}" class="img-fluid" alt="History Image 3">
        </div>
        <div class="col-md-6">
            <h3>Revolusi Industri dan Dampaknya</h3>
            <p>
                Pada abad ke-18, Revolusi Industri membawa perubahan besar dalam kehidupan manusia, termasuk kemajuan teknologi, perubahan sosial, dan ekonomi...
            </p>
            <a href="#" class="btn btn-navy">Baca Selengkapnya</a>
        </div>
    </div>

    <!-- Artikel Keempat -->
    <div class="row mb-4">
        <div class="col-md-6 order-md-2">
            <img src="{{ asset('images/history4.jpg') }}" class="img-fluid" alt="History Image 4">
        </div>
        <div class="col-md-6 order-md-1">
            <h3>Penyebaran Agama dan Budaya di Dunia</h3>
            <p>
                Agama dan budaya telah memainkan peran penting dalam sejarah peradaban dunia. Penyebaran agama-agama besar seperti Kristen, Islam, dan Buddha...
            </p>
            <a href="#" class="btn btn-navy">Baca Selengkapnya</a>
        </div>
    </div>
</div>
@endsection
