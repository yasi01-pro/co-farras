@extends('layouts.app')

@section('title', 'List Kunjungan')

@section('content')

<section class="section" style="padding-top: 150px; padding-bottom: 80px;">
    <div class="container">

        <h2 class="text-center mb-5 fw-bold">
            List Data Kunjungan Kampus
        </h2>

        <div class="card shadow-lg border-0">
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-bordered table-striped align-middle">
                        <thead class="table-dark text-center">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Institusi</th>
                                <th>Tanggal</th>
                                <th>Foto</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse($kunjungans as $index => $k)
                                <tr>
                                    <td class="text-center">
                                        {{ $kunjungans->firstItem() + $index }}
                                    </td>
                                    <td>{{ $k->nama }}</td>
                                    <td>{{ $k->email }}</td>
                                    <td>{{ $k->institusi }}</td>

                                    {{-- Gunakan tanggal kunjungan --}}
                                    <td class="text-center">
                                        {{ \Carbon\Carbon::parse($k->tanggal)->format('d M Y') }}
                                    </td>

                                    {{-- Tampilkan Foto --}}
                                    <td class="text-center">
                                        <img src="{{ asset('storage/' . $k->foto) }}"
                                             width="80"
                                             class="rounded shadow-sm">
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">
                                        Belum ada data kunjungan.
                                    </td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="d-flex justify-content-center mt-4">
                    {{ $kunjungans->links('pagination::bootstrap-5') }}
                </div>

            </div>
        </div>

    </div>
</section>

@endsection
