@extends('layouts.app')

@section('title', 'Verifikasi Data')

@section('content')
<h2>Verifikasi Data Pelanggan</h2>

<div class="card">
    @if($dataPelanggan->count() > 0)
        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
            <thead>
                <tr style="background: #f8f9fa;">
                    <th style="padding: 12px; border-bottom: 1px solid #ddd;">Nama</th>
                    <th style="padding: 12px; border-bottom: 1px solid #ddd;">No KWH</th>
                    <th style="padding: 12px; border-bottom: 1px solid #ddd;">Meter Awal</th>
                    <th style="padding: 12px; border-bottom: 1px solid #ddd;">Meter Akhir</th>
                    <th style="padding: 12px; border-bottom: 1px solid #ddd;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dataPelanggan as $data)
                <tr>
                    <td style="padding: 12px; border-bottom: 1px solid #ddd;">{{ $data->pengguna->name }}</td>
                    <td style="padding: 12px; border-bottom: 1px solid #ddd;">{{ $data->no_kwh }}</td>
                    <td style="padding: 12px; border-bottom: 1px solid #ddd;">{{ number_format($data->meter_awal) }}</td>
                    <td style="padding: 12px; border-bottom: 1px solid #ddd;">{{ number_format($data->meter_akhir) }}</td>
                    <td style="padding: 12px; border-bottom: 1px solid #ddd;">
                        <a href="{{ route('admin.setujui', $data->id) }}" class="btn btn-success">Setujui</a>
                        <a href="{{ route('admin.tolak', $data->id) }}" class="btn btn-danger">Tolak</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Tidak ada data yang perlu diverifikasi.</p>
    @endif
</div>
@endsection