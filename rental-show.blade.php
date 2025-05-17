@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detail Rental</h2>
    <p><strong>Nama Penyewa:</strong> {{ $rental->user->name }}</p>
    <p><strong>Mobil:</strong> {{ $rental->car->name }}</p>
    <p><strong>Tanggal Mulai:</strong> {{ $rental->start_date }}</p>
    <p><strong>Tanggal Selesai:</strong> {{ $rental->end_date }}</p>
    <p><strong>Total Biaya:</strong> Rp{{ number_format($rental->total_cost) }}</p>
</div>
@endsection
