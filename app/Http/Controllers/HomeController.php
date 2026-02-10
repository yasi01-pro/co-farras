<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'nama_kampus' => 'Politeknik Caltex Riau',
            'slogan' => 'Excellence in Applied Technology',

            'visi' => [
                'Menjadi perguruan tinggi vokasi unggulan di tingkat nasional',
                'Menghasilkan lulusan profesional yang siap kerja',
                'Berperan aktif dalam pengembangan teknologi terapan'
            ],

            'misi' => [
                'Menyelenggarakan pendidikan vokasi berbasis industri',
                'Mengembangkan penelitian terapan yang inovatif',
                'Menjalin kerja sama dengan dunia usaha dan industri'
            ],

            'sejarah' => [
                'Politeknik Caltex Riau didirikan sebagai hasil kerja sama antara Pemerintah Provinsi Riau dan PT Caltex Pacific Indonesia untuk memenuhi kebutuhan tenaga kerja terampil.',
                'Seiring perkembangan zaman, Politeknik Caltex Riau terus meningkatkan kualitas pendidikan, kurikulum, serta fasilitas penunjang pembelajaran.',
                'Saat ini, Politeknik Caltex Riau dikenal sebagai salah satu perguruan tinggi vokasi terbaik yang menghasilkan lulusan siap bersaing di dunia industri.'
            ],

            // ✅ DATA DAY 2 – PROGRAM STUDI
            'prodi' => [
                ['nama' => 'Sistem Informasi', 'status' => 'Unggulan'],
                ['nama' => 'Teknik Informatika', 'status' => 'Reguler'],
                ['nama' => 'Manajemen Informatika', 'status' => 'Reguler'],
                ['nama' => 'Teknologi Rekayasa Perangkat Lunak', 'status' => 'Unggulan'],
                ['nama' => 'Teknik Komputer', 'status' => 'Reguler'],
            ],

            'logo' => 'images/logo_pcr.png'
        ]);
    }
}
