<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('custom.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 bg-dark text-white p-4">
                <h4 class="text-center">TARAMOGOK Admin</h4>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="/admin" class="nav-link text-white">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/cars" class="nav-link text-white">Daftar Mobil</a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/cars/create" class="nav-link text-white">Tambah Mobil Baru</a>
                    </li>
                    <li class="nav-item">
                        <form action="/logout" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn btn-danger w-100">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>

            <!-- Main Content -->
            <div class="col-md-9">
                <div class="p-4">
                    <h1 class="text-center my-4">Dashboard Admin</h1>

                    <div class="alert alert-info">
                        <p>Selamat datang, Admin!</p>
                    </div>

                    <!-- Daftar Mobil -->
                    <h2>Daftar Mobil</h2>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nama Mobil</th>
                                    <th>Merk</th> <!-- Tambahkan di bagian header tabel -->
                                    <th>Tahun</th>
                                    <th>Harga</th>
                                    <th>Status</th>
                                    <th>Deskripsi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cars as $car)
                                    <tr>
                                        <td>{{ $car->name }}</td>
                                        <td>{{ $car->tipe }}</td> <!-- Pastikan ini ada --->
                                        <td>{{ $car->tahun }}</td>
                                        <td>{{ $car->harga_per_hari }}</td>
                                        <td>{{ $car->status }}</td>
                                        <td>{{ $car->description }}</td>
                                        <td>
                                            <a href="/admin/cars/{{ $car->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                                            <form action="/admin/cars/{{ $car->id }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick="return confirm('Yakin hapus mobil ini?')" class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional: Add JS for Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
