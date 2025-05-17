@extends('layouts.app')

@section('content')
<h2 class="text-xl font-bold mb-4">Form Sewa Mobil: {{ $car->nama_mobil }}</h2>
<form action="/rent/{{ $car->id }}" method="POST" class="bg-white p-6 rounded shadow w-full max-w-md">
    @csrf
    <div class="mb-4">
        <label for="start_date">Tanggal Mulai</label>
        <input type="date" name="start_date" class="w-full border p-2 rounded" required>
    </div>
    <div class="mb-4">
        <label for="end_date">Tanggal Selesai</label>
        <input type="date" name="end_date" class="w-full border p-2 rounded" required>
    </div>
    <button class="bg-blue-600 text-white px-4 py-2 rounded">Konfirmasi Rental</button>
</form>
@endsection
