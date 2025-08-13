@extends('layouts.app')

@section('title', 'Dashboard Pengguna')

@section('content')
<h2>Dashboard Pengguna</h2>

<div class="card">
    <h3>Selamat datang, {{ Auth::user()->name }}!</h3>
    
    @if(!$dataPelanggan)
        <p>Anda belum mengisi data meteran listrik.</p>
        <a href="{{ route('pengguna.input-data') }}" class="btn btn-primary">Input Data Meteran</a>
    @else
        <h4>Status Data Anda:</h4>
        <p>No KWH: {{ $dataPelanggan->no_kwh }}</p>
        <p>Meter Awal: {{ number_format($dataPelanggan->meter_awal) }}</p>
        <p>Meter Akhir: {{ number_format($dataPelanggan->meter_akhir) }}</p>
        <p>Status: 
            @if($dataPelanggan->status == 'menunggu')
                <span style="background: #fff3cd; color: #856404; padding: 4px 8px; border-radius: 4px;">Menunggu Verifikasi</span>
            @elseif($dataPelanggan->status == 'disetujui')
                <span style="background: #d4edda; color: #155724; padding: 4px 8px; border-radius: 4px;">Disetujui</span>
            @else
                <span style="background: #f8d7da; color: #721c24; padding: 4px 8px; border-radius: 4px;">Ditolak</span>
            @endif
        </p>
        
        @if($dataPelanggan->tagihan)
            <h4>Tagihan Anda:</h4>
            <p>Pemakaian: {{ number_format($dataPelanggan->tagihan->pemakaian_kwh) }} KWH</p>
            <p>Tarif per KWH: Rp {{ number_format($dataPelanggan->tagihan->tarif_per_kwh) }}</p>
            <p>Total Tagihan: <strong>Rp {{ number_format($dataPelanggan->tagihan->total_tagihan) }}</strong></p>
            <a href="{{ route('pengguna.cetakStruk') }}" target="_blank" class="btn btn-success mt-3">Cetak Struk</a>
        @endif
    @endif
</div>
@endsection