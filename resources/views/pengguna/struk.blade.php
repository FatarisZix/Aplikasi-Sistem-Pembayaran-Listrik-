<!DOCTYPE html>
<html>
<head>
    <title>Struk Pembayaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        .struk {
            width: 300px;
            border: 1px solid #000;
            padding: 20px;
        }
        h3 {
            text-align: center;
        }
        .item {
            margin-bottom: 8px;
        }
        .total {
            font-weight: bold;
        }
        @media print {
            .no-print {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="struk">
        <h3>Struk Pembayaran Listrik</h3>
        <div class="item">Nama: {{ $user->name }}</div>
        <div class="item">No KWH: {{ $data->no_kwh }}</div>
        <div class="item">Meter Awal: {{ $data->meter_awal }}</div>
        <div class="item">Meter Akhir: {{ $data->meter_akhir }}</div>
        <div class="item">Pemakaian: {{ $data->meter_akhir - $data->meter_awal }} KWH</div>
        <div class="item">Tarif per KWH: Rp 1,500</div>
        <div class="item total">Total Tagihan: Rp {{ number_format(($data->meter_akhir - $data->meter_awal) * 1500, 0, ',', '.') }}</div>
        <hr>
        <div style="text-align: center;">Terima kasih!</div>
    </div>
    <div class="no-print" style="margin-top: 20px;">
        <button onclick="window.print()">Print Sekarang</button>
    </div>
</body>
</html>
