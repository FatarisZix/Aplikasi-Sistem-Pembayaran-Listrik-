@extends('layouts.app')

@section('title', 'Masuk')

@section('content')
<div style="max-width: 400px; margin: 50px auto;">
    <div class="card">
        <h2 style="text-align: center; margin-bottom: 20px;">Masuk</h2>
        
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            
            <div class="form-group">
                <label for="password">Kata Sandi:</label>
                <input type="password" id="password" name="password" required>
            </div>
            
            <button type="submit" class="btn btn-primary" style="width: 100%;">Masuk</button>
        </form>
        
        <p style="text-align: center; margin-top: 20px;">
            Belum punya akun? <a href="{{ route('register') }}">Daftar disini</a>
        </p>
    </div>
</div>
@endsection