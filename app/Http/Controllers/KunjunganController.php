<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kunjungan;

class KunjunganController extends Controller
{
    public function index()
    {
        return view('kunjungan');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'institusi' => 'required'
        ]);

        Kunjungan::create($validated);

        return redirect()->route('kunjungan.form')
            ->with('success', 'Pendaftaran berhasil!');
    }
}
