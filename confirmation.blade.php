@extends('layouts.app')

@section('content')
<div class="container max-w-xl mx-auto mt-6 bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-bold mb-4 text-green-700">Rental Berhasil!</h2>

    <p class="mb-4">Terima kasih telah melakukan pemesanan. Berikut adalah detail rental mobil Anda:</p>

    <div class="mb-3">
        <strong>Nama Mobil:</strong> {{ $rental->car->name }}
    </div>

    <div class="mb-3">
    <strong>Nama Penyewa:</strong> {{ $rental->user->name }}
    </div>
    
    <div class="mb-3">
        <strong>Merk / Tipe:</strong> {{ $rental->car->tipe }}
    </div>
    <div class="mb-3">
        <strong>Tanggal Mulai:</strong> {{ \Carbon\Carbon::parse($rental->start_date)->format('d M Y') }}
    </div>
    <div class="mb-3">
        <strong>Tanggal Selesai:</strong> {{ \Carbon\Carbon::parse($rental->end_date)->format('d M Y') }}
    </div>
    <div class="mb-3">
        <strong>Total Hari:</strong> {{ \Carbon\Carbon::parse($rental->start_date)->diffInDays($rental->end_date) + 1 }} hari
    </div>
    <div class="mb-3">
        <strong>Total Biaya:</strong> Rp {{ number_format($rental->total_cost, 0, ',', '.') }}
    </div>

    <a href="/cars" class="inline-block mt-4 px-4 py-2 bg-blue-600 text-white rounded">Kembali ke Daftar Mobil</a>
</div>
@endsection

