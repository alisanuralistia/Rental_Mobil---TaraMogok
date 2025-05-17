@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Mobil</h2>
    <form action="{{ url('/admin/cars') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama Mobil</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="tipe" class="form-label">Merk</label>
            <input type="text" name="tipe" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Harga Sewa per Hari</label>
            <input type="number" name="price" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea name="description" id="description" class="form-control" row="3">{{ old('description') }}</textarea>
        </div>

        <div class="mb-3">
        <label for="tahun" class="form-label">Tahun</label>
        <input type="number" name="tahun" class="form-control" required>

        </div>

        <div class="mb-3">
        <label for="status" class="form-label">Status</label>
          <select name="status" class="form-control">
              <option value="tersedia">Tersedia</option>
              <option value="disewa">Disewa</option>
           </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
