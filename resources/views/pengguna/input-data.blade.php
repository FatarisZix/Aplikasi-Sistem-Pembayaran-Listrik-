@extends('layouts.app')

@section('title', 'Input Data Meteran')

@section('content')
<h2>Input Data Meteran Listrik</h2>



<div class="card">
    <form method="POST" action="{{ route('pengguna.simpan-data') }}">
        @csrf
        <div class="form-group">
            <label for="no_kwh">Nomor KWH:</label>
            <input type="text" id="no_kwh" name="no_kwh" required>
        </div>
        
        <div class="form-group">
            <label for="meter_awal">Meter Awal:</label>
            <input type="number" id="meter_awal" name="meter_awal" required>
        </div>
        
        <div class="form-group">
            <label for="meter_akhir">Meter Akhir:</label>
            <input type="number" id="meter_akhir" name="meter_akhir" required>
        </div>
           
        <div class="form-group">
            <label for="alamat">Alamat Lengkap:</label>
            <textarea id="alamat" name="alamat" rows="3" required></textarea>
        </div>
        
        <div class="form-group">
            <label for="no_telepon">Nomor Telepon:</label>
            <input type="text" id="no_telepon" name="no_telepon" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Kirim Data</button>
        <a href="{{ route('pengguna.dashboard') }}" class="btn btn-danger">Batal</a>
    </form>
    
</div>
@endsection