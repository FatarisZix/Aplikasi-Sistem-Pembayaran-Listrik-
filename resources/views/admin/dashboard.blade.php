@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('content')
<h2>Dashboard Admin</h2>

<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
    <div class="card">
        <h3>Data Menunggu Verifikasi</h3>
        <p style="font-size: 2em; color: #e67e22;">{{ $dataMenunggu }}</p>
        <a href="{{ route('admin.verifikasi') }}" class="btn btn-primary">Lihat Detail</a>
    </div>
    
    <div class="card">
        <h3>Data Telah Disetujui</h3>
        <p style="font-size: 2em; color: #27ae60;">{{ $dataDisetujui }}</p>
        <a href="{{ route('admin.tagihan') }}" class="btn btn-success">Buat Tagihan</a>
    </div>
</div>
@endsection