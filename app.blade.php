<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TARAMOGOK Rental Mobil</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('custom.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="bg-blue-600 p-4 text-white flex justify-between">
        <div class="font-bold">TARAMOGOK</div>
        <div>
            <a href="/" class="mx-2">Home</a>
            <a href="/cars" class="mx-2">Daftar Mobil</a>
            @auth
                <a href="/dashboard" class="mx-2">Dashboard</a>
                <form method="POST" action="/logout" class="inline">
                    @csrf
                    <button class="mx-2">Logout</button>
                </form>
            @else
                <a href="/login" class="mx-2">Login</a>
            @endauth
        </div>
    </nav>

    <div class="p-6">
        @yield('content')
    </div>
</body>
</html>
