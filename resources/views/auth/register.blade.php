@extends('layouts.app')

@section('title', 'Daftar')

@section('content')
<div style="max-width: 400px; margin: 50px auto;">
    <div class="card">
        <h2 style="text-align: center; margin-bottom: 20px;">Daftar Akun Baru</h2>
        
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <label for="name">Nama Lengkap:</label>
                <input type="text" id="name" name="name" required>
            </div>
            
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            
            <div class="form-group">
                <label for="password">Kata Sandi:</label>
                <input type="password" id="password" name="password" required>
            </div>
            
            <div class="form-group">
                <label for="password_confirmation">Konfirmasi Kata Sandi:</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
            </div>
            
            <button type="submit" class="btn btn-primary" style="width: 100%;">Daftar</button>
        </form>
        
        <p style="text-align: center; margin-top: 20px;">
            Sudah punya akun? <a href="{{ route('login') }}">Masuk disini</a>
        </p>
    </div>
</div>
@endsection