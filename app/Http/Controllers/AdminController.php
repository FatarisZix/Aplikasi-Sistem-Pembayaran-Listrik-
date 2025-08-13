<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPelanggan;
use App\Models\Tagihan;

class AdminController extends Controller
{
    public function dashboard()
    {
        $dataMenunggu = DataPelanggan::where('status', 'menunggu')->count();
        $dataDisetujui = DataPelanggan::where('status', 'disetujui')->count();
        return view('admin.dashboard', compact('dataMenunggu', 'dataDisetujui'));
    }

    public function daftarVerifikasi()
    {
        $dataPelanggan = DataPelanggan::where('status', 'menunggu')->with('pengguna')->get();
        return view('admin.verifikasi', compact('dataPelanggan'));
    }

    public function setujuiData($id)
    {
        $dataPelanggan = DataPelanggan::findOrFail($id);
        $dataPelanggan->update(['status' => 'disetujui']);
        
        return redirect()->back()->with('success', 'Data berhasil disetujui!');
    }

    public function tolakData($id)
    {
        $dataPelanggan = DataPelanggan::findOrFail($id);
        $dataPelanggan->update(['status' => 'ditolak']);
        
        return redirect()->back()->with('success', 'Data ditolak!');
    }

    public function daftarTagihan()
    {
        $dataDisetujui = DataPelanggan::where('status', 'disetujui')
                                     ->whereDoesntHave('tagihan')
                                     ->with('pengguna')
                                     ->get();
        return view('admin.tagihan', compact('dataDisetujui'));
    }

    public function buatTagihan($id)
    {
        $dataPelanggan = DataPelanggan::findOrFail($id);
        $pemakaian = $dataPelanggan->meter_akhir - $dataPelanggan->meter_awal;
        $tarif = 1500; // Rp 1500 per KWH
        $total = $pemakaian * $tarif;

        Tagihan::create([
            'data_pelanggan_id' => $dataPelanggan->id,
            'pemakaian_kwh' => $pemakaian,
            'tarif_per_kwh' => $tarif,
            'total_tagihan' => $total
        ]);

        return redirect()->back()->with('success', 'Tagihan berhasil dibuat!');
    }
}