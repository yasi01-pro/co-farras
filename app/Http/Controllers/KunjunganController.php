<?php

namespace App\Http\Controllers;

use App\Models\Kunjungan;
use Illuminate\Http\Request;

class KunjunganController extends Controller
{
    // =============================
    // TAMPILKAN FORM
    // =============================
    public function index()
    {
        return view('kunjungan');
    }

    // =============================
    // SIMPAN DATA + UPLOAD FOTO
    // =============================
    public function store(Request $request)
    {
        $request->validate([
            'nama'      => 'required|string|max:255',
            'email'     => 'required|email|max:255',
            'institusi' => 'required|string|max:255',
            'tanggal'   => 'required|date',
            'foto'      => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Simpan file ke storage/app/public/kunjungan
        $path = $request->file('foto')->store('kunjungan', 'public');

        // Simpan ke database
        Kunjungan::create([
            'nama'      => $request->nama,
            'email'     => $request->email,
            'institusi' => $request->institusi,
            'tanggal'   => $request->tanggal,
            'foto'      => $path,
        ]);

        return redirect()->route('kunjungan.form')
            ->with('success', 'Pendaftaran berhasil!');
    }

    // =============================
    // LIST + PAGINATION
    // =============================
    public function list()
    {
        $kunjungans = Kunjungan::latest()->paginate(10);

        return view('kunjungan_list', compact('kunjungans'));
    }
}
