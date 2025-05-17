@extends('layouts.app')

@section('content')
<h2 class="text-xl font-bold mb-4">Manajemen Mobil</h2>
<a href="/admin/cars/create" class="bg-green-600 text-white px-3 py-1 rounded mb-4 inline-block">Tambah Mobil</a>

<table class="w-full bg-white shadow rounded overflow-hidden">
    <thead class="bg-gray-200">
        <tr>
            <th class="p-2">Nama Mobil</th>
            <th>Tipe</th>
            <th>Harga</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cars as $car)
        <tr class="border-t">
            <td class="p-2">{{ $car->name }}</td>
            <td>{{ $car->type }}</td>
            <td>Rp{{ number_format($car->price_per_day, 0, ',', '.') }}</td>
            <td>{{ $car->status }}</td>
            <td>
                <a href="/admin/cars/{{ $car->id }}/edit" class="text-blue-600">Edit</a> |
                <form method="POST" action="/admin/cars/{{ $car->id }}" class="inline">
                    @csrf @method('DELETE')
                    <button class="text-red-600">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
