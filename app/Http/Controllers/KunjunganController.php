<?php
namespace App\Http\Controllers;

use App\Models\Kunjungan;
use Illuminate\Http\Request;

class KunjunganController extends Controller
{
    // Tampilkan form
    public function index()
    {
        return view('kunjungan');
    }

    // Simpan data
    public function store(Request $request)
    {
        $request->validate([
            'nama'      => 'required|string|max:255',
            'email'     => 'required|email|max:255',
            'institusi' => 'required|string|max:255',
            'tanggal'   => 'required|date',
        ]);

        Kunjungan::create([
            'nama'      => $request->nama,
            'email'     => $request->email,
            'institusi' => $request->institusi,
            'tanggal'   => $request->tanggal, // ← INI WAJIB ADA
        ]);

        return redirect()->route('kunjungan.form')
            ->with('success', 'Pendaftaran berhasil!');
    }

    // Tampilkan list + pagination
    public function list()
    {
        $kunjungans = Kunjungan::latest()->paginate(10);

        return view('kunjungan_list', compact('kunjungans'));
    }
}
