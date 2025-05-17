@extends('layouts.app')

@section('content')
<h2 class="text-xl font-semibold mb-4">Login</h2>
<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="mb-4">
        <label>Email</label>
        <input type="email" name="email" class="border rounded w-full" required>
    </div>
    <div class="mb-4">
        <label>Password</label>
        <input type="password" name="password" class="border rounded w-full" required>
    </div>
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Login</button>
</form>
@endsection

