@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Mobil</h2>
    <form action="{{ url('/admin/cars/' . $car->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nama Mobil</label>
            <input type="text" name="name" value="{{ $car->name }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="tipe" class="form-label">Merk</label>
            <input type="text" name="tipe" value="{{ $car->tipe  }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="tipe" class="form-label">Tahun</label>
            <input type="number" name="tahun" value="{{ $car->tahun }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="harga_per_hari" class="form-label">Harga Sewa per Hari</label>
            <input type="number" name="harga_per_hari" value="{{ $car->harga_per_hari }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" class="form-control" required>
                <option value="tersedia" {{$car->status == 'tersedia' ? 'selected' : ''}}>Tersedia</option>
                <option value="tidak tersedia" {{$car->status == 'tidak tersedia' ? 'selected' : ''}}>Tidak Tersedia</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea name="description" id="description" class="form-control">{{ old('description', $car->description ?? '') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="user_name" class="form-label">Nama Penyewa</label>
            <input type="text" name="user_name" value="{{ $car->user->name ?? '' }}" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
