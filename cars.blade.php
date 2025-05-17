@extends('layouts.app')

@section('content')
<h2 class="text-xl font-bold mb-4">Daftar Mobil Tersedia</h2>
<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
    @foreach ($cars as $car)
    <div class="bg-white p-4 rounded shadow">
        <h3 class="text-lg font-semibold">{{ $car->name }}</h3>
        <p>Tipe: {{ $car->tipe }}</p>
        <p>Harga_per_Hari: Rp{{ number_format($car->harga_per_hari, 0, ',', '.') }}</p>
        <a href="/rent/{{ $car->id }}" class="mt-2 inline-block bg-green-500 text-white px-3 py-1 rounded">Sewa</a>
    </div>
    @endforeach
</div>
@endsection



