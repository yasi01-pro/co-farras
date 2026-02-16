<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KunjunganSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 100; $i++) {
            DB::table('kunjungans')->insert([
                'nama' => 'Pengunjung ' . $i,
                'email' => 'pengunjung' . $i . '@gmail.com',
                'institusi' => 'Sekolah ' . rand(1, 20),
                'tanggal' => now()->subDays(rand(0, 30)),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
