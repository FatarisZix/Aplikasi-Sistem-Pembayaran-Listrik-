@extends('layouts.app')

@section('title', 'Buat Tagihan')

@section('content')
<h2>Buat Tagihan Pelanggan</h2>

<div class="card">
    @if($dataDisetujui->count() > 0)
        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
            <thead>
                <tr style="background: #f8f9fa;">
                    <th style="padding: 12px; border-bottom: 1px solid #ddd;">Nama</th>
                    <th style="padding: 12px; border-bottom: 1px solid #ddd;">No KWH</th>
                    <th style="padding: 12px; border-bottom: 1px solid #ddd;">Pemakaian</th>
                    <th style="padding: 12px; border-bottom: 1px solid #ddd;">Total</th>
                    <th style="padding: 12px; border-bottom: 1px solid #ddd;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dataDisetujui as $data)
                @php
                    $pemakaian = $data->meter_akhir - $data->meter_awal;
                    $total = $pemakaian * 1500;
                @endphp
                <tr>
                    <td style="padding: 12px; border-bottom: 1px solid #ddd;">{{ $data->pengguna->name }}</td>
                    <td style="padding: 12px; border-bottom: 1px solid #ddd;">{{ $data->no_kwh }}</td>
                    <td style="padding: 12px; border-bottom: 1px solid #ddd;">{{ number_format($pemakaian) }} KWH</td>
                    <td style="padding: 12px; border-bottom: 1px solid #ddd;">Rp {{ number_format($total) }}</td>
                    <td style="padding: 12px; border-bottom: 1px solid #ddd;">
                        <a href="{{ route('admin.buat-tagihan', $data->id) }}" class="btn btn-primary">Buat Tagihan</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Tidak ada data yang perlu dibuatkan tagihan.</p>
    @endif
</div>
@endsection