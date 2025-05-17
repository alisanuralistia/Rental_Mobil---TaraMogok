@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Data Penyewa</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('rental.updatePenyewa', $rental->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="user_name" class="form-label">Nama Penyewa</label>
            <input type="text" name="user_name" value="{{ $rental->user->name }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="car_name" class="form-label">Nama Mobil</label>
            <input type="text" value="{{ $rental->car->name }}" class="form-control" readonly>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>
@endsection
