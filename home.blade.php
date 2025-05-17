@extends('layouts.app')

@section('content')
<div class="bg-hero">
    <h1 class="hero-title">Selamat datang di TARAMOGOK</h1>
    <p class="hero-subtitle">Rental mobil mudah, cepat, dan terpercaya.</p>
    <a href="/cars" class="hero-button">Lihat Mobil</a>
</div>
<style>
    .bg-hero {
        background-image: url('{{ asset('images/mobil.jpg') }}');
        background-size: cover;
        background-position: center;
        height: 100vh; /* Full layar */
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center; flex-start; /*Posisi vertikal ke atas*/
        color: #fff;
        text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.8);
        text-align: center;
        padding: 100px; /* Geser ke bawah sedikit dari atas */
    }

    .hero-title {
        font-size: 3rem;
        font-weight: bold;
        margin-bottom: 1rem;
        color; #f87171; /* merah muda */
    }

    .hero-subtitle {
        font-size: 1.25rem;
        margin-bootom: 1.5rem
    }

    .hero-button {
        background-color: #2563eb;
        color: white;
        padding: 12px 24px;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 600;
        transition: background-color 0.3s;
    }

    .hero-button:hover {
        background-color: #1d4ed8;
    }
</style>
@endsection
