@extends('layouts.app')

@section('title', 'Tech News - Literasi Sipil')

@section('content')
<header class="bg-navy text-white text-center py-5">
    <div class="container">
        <h1>Berita Teknologi Terkini</h1>
        <p class="lead">Menyelami Tren dan Inovasi Teknologi Masa Kini</p>
    </div>
</header>

<div class="container mt-4">
    <!-- Artikel Pertama -->
    <div class="row mb-4">
        <div class="col-md-6">
            <img src="{{ asset('images/tech1.jpg') }}" class="img-fluid" alt="Tech News Image 1">
        </div>
        <div class="col-md-6">
            <h3>AI dan Dampaknya di Masa Depan</h3>
            <p>
                Kecerdasan buatan telah menjadi salah satu inovasi paling berpengaruh di abad ini. Dari chatbot hingga mobil otonom, AI mengubah cara kita hidup...
            </p>
            <a href="#" class="btn btn-navy">Baca Selengkapnya</a>
        </div>
    </div>

    <!-- Artikel Kedua -->
    <div class="row mb-4">
        <div class="col-md-6 order-md-2">
            <img src="{{ asset('images/tech2.jpg') }}" class="img-fluid" alt="Tech News Image 2">
        </div>
        <div class="col-md-6 order-md-1">
            <h3>Teknologi 5G dan Potensinya</h3>
            <p>
                Dengan kecepatan tinggi dan latensi rendah, teknologi 5G membuka jalan untuk pengembangan teknologi seperti IoT, kendaraan pintar, dan augmented reality...
            </p>
            <a href="#" class="btn btn-navy">Baca Selengkapnya</a>
        </div>
    </div>

    <!-- Artikel Ketiga -->
    <div class="row mb-4">
        <div class="col-md-6">
            <img src="{{ asset('images/tech3.jpg') }}" class="img-fluid" alt="Tech News Image 3">
        </div>
        <div class="col-md-6">
            <h3>Kemajuan Teknologi Energi Terbarukan</h3>
            <p>
                Dunia bergerak menuju sumber energi yang lebih bersih dan terbarukan. Solar panel, wind turbine, dan inovasi lainnya menjadi pusat perhatian...
            </p>
            <a href="#" class="btn btn-navy">Baca Selengkapnya</a>
        </div>
    </div>

    <!-- Artikel Keempat -->
    <div class="row mb-4">
        <div class="col-md-6 order-md-2">
            <img src="{{ asset('images/tech4.jpg') }}" class="img-fluid" alt="Tech News Image 4">
        </div>
        <div class="col-md-6 order-md-1">
            <h3>Keamanan Cyber di Era Digital</h3>
            <p>
                Dengan semakin banyaknya data yang diproses secara online, kebutuhan akan keamanan cyber menjadi lebih penting dari sebelumnya. Teknologi enkripsi dan AI...
            </p>
            <a href="#" class="btn btn-navy">Baca Selengkapnya</a>
        </div>
    </div>
</div>
@endsection
