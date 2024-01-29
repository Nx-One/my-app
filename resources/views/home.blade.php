@extends('layout.header')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
@endsection

@section('content')
<div class="container">
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/bisnis.jpg') }}" class="d-block w-100" alt="bisnis">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777" /></svg>
    
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>Ruang Kantor.</h1>
                        <p>Ruang kantor yang dapat menunjang kebutuhan bisnis anda.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/bisnis1.jpg') }}" class="d-block w-100" alt="bisnis1">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777" /></svg>
    
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Gedung.</h1>
                        <p>Struktur gedung yang baik.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/bisnis2.jpg') }}" class="d-block w-100" alt="bisnis2">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777" /></svg>
    
                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>Relasi.</h1>
                        <p>Perluas relasi anda dengan kolega.</p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <h1>Selamat datang di MyApp - Di mana Inovasi Bertemu dengan Kesederhanaan!</h1>
    <p>
        Mengubah pengalaman digital Anda dimulai dari sini. Temukan perpaduan sempurna antara teknologi mutakhir dan desain ramah pengguna yang memberdayakan Anda untuk mencapai lebih banyak hal. MyApp lebih dari sekadar platform;
        ini adalah pintu gerbang Anda menuju efisiensi, kreativitas, dan kesuksesan.
    </p>

    <h2>Mengapa Memilih MyApp?</h2>

    <ul>
        <li><strong>Antarmuka yang intuitif:</strong> Ucapkan selamat tinggal pada kerumitan. Antarmuka kami yang ramah pengguna memastikan navigasi yang lancar dan intuitif, membuat tugas Anda menjadi mudah.</li>

        <li><strong>Fungsionalitas yang Kuat, Sederhana:</strong> Keluarkan potensi penuh dari platform kami yang kaya fitur tanpa kurva pembelajaran. Kami telah menyederhanakan proses yang rumit untuk meningkatkan produktivitas Anda.</li>

        <li><strong>Kustomisasi di Ujung Jari Anda:</strong> Sesuaikan pengalaman Anda untuk memenuhi kebutuhan unik Anda. Dengan opsi yang dapat disesuaikan, Anda memegang kendali, menciptakan lingkungan yang cocok untuk Anda.</li>

        <li><strong>Kolaborasi Tanpa Batas:</strong> Memupuk kerja sama tim dengan mudah. Alat kolaboratif kami memudahkan Anda untuk terhubung, berbagi, dan bekerja sama, meruntuhkan hambatan dan mendorong inovasi.</li>

        <li><strong>Keamanan Data yang Dapat Anda Percayai:</strong> Data Anda sangat berharga. Tenang saja karena kami menerapkan langkah-langkah keamanan canggih untuk menjaga informasi Anda tetap aman dan terlindungi.</li>

        <li>
            <strong>Tim Dukungan yang Responsif:</strong> Pertanyaan? Kekhawatiran? Tim dukungan kami yang berdedikasi siap membantu Anda. Kami bangga dapat memberikan bantuan yang tepat waktu dan responsif untuk memastikan pengalaman Anda luar
            biasa.
        </li>
    </ul>

    <p>Siap untuk meningkatkan perjalanan digital Anda? Selami masa depan dengan [Aplikasi Web Anda]. Daftar hari ini dan mulailah era baru efisiensi, kreativitas, dan kesuksesan. Perjalanan Anda dimulai di sini!</p>
</div>


@endsection
