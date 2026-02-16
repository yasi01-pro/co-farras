@extends('layouts.app')

@section('title', 'List Kunjungan')

@section('content')

<section class="section" style="padding-top: 150px; padding-bottom: 80px;">
    <div class="container">

        <h2 class="text-center mb-5">List Data Kunjungan Kampus</h2>

        <div class="card shadow-lg border-0">
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Institusi</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kunjungans as $index => $k)
                                <tr>
                                    <td>{{ $kunjungans->firstItem() + $index }}</td>
                                    <td>{{ $k->nama }}</td>
                                    <td>{{ $k->email }}</td>
                                    <td>{{ $k->institusi }}</td>
                                    <td>{{ $k->created_at->format('d M Y') }}</td>
                                </tr>
                            @endforeach
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
