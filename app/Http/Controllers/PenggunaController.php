<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPelanggan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PenggunaController extends Controller
{
    public function dashboard()
    {
        $dataPelanggan = Auth::user()->dataPelanggan;
        return view('pengguna.dashboard', compact('dataPelanggan'));
    }

    public function inputData()
    {
        return view('pengguna.input-data');
    }

    public function cetakStruk()
    {
    $user = auth()->user();

    $data = DB::table('data_pelanggan')
        ->where('user_id', $user->id)
        ->latest()
        ->first();

    return view('pengguna.struk', compact('data', 'user'));
    }

    public function simpanData(Request $request)
    {
        $request->validate([
            'no_kwh' => 'required|string',
            'meter_awal' => 'required|integer',
            'meter_akhir' => 'required|integer|gt:meter_awal',
            'alamat' => 'required|string',
            'no_telepon' => 'required|string'
        ]);

        DataPelanggan::create([
            'user_id' => Auth::id(),
            'no_kwh' => $request->no_kwh,
            'meter_awal' => $request->meter_awal,
            'meter_akhir' => $request->meter_akhir,
            'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon,
        ]);

        return redirect()->route('pengguna.dashboard')->with('success', 'Data berhasil dikirim! Menunggu verifikasi admin.');
    }
}