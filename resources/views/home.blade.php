@extends('layouts.app')

@section('title', 'Home - ' . $nama_kampus)

@section('content')

    <!-- ===== HERO SECTION BLISS ===== -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">

                <!-- KIRI -->
                <div class="col-lg-6 col-md-10">
                    <div class="hero-content">
                        <h5 class="wow fadeInUp">Welcome To {{ $nama_kampus }}</h5>

                        <h1 class="wow fadeInUp" data-wow-delay=".2s">
                            {{ $slogan }}
                        </h1>

                        <p class="wow fadeInUp" data-wow-delay=".4s">
                            Politeknik Caltex Riau merupakan perguruan tinggi vokasi unggulan
                            yang menghasilkan lulusan siap kerja dan berdaya saing industri.
                        </p>
                    </div>
                </div>

                <!-- KANAN (GAMBAR BLISS) -->
                <div class="col-lg-6 col-md-12">
                    <div class="hero-image wow fadeInRight" data-wow-delay=".4s">
                        <img src="{{ asset('images/logo_pcr.png') }}" alt="Logo Politeknik Caltex Riau" class="img-fluid"
                            style="max-width: 80%; height: auto;">

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ===== VISI & MISI ===== -->
    <section class="services section">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <h3>Visi</h3>
                    <ul>
                        @foreach ($visi as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-md-6">
                    <h3>Misi</h3>
                    <ul>
                        @foreach ($misi as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <!-- ===== PROGRAM STUDI ===== -->
    <section class="pricing section">
        <div class="container">
            <h3 class="mb-4 text-center">Daftar Program Studi</h3>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>Nama Program Studi</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($prodi as $p)
                            <tr>
                                <td>{{ $p['nama'] }}</td>
                                <td>{{ $p['status'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- ===== FOOTER ===== -->
    <footer class="footer text-center">
        <p>© {{ date('Y') }} {{ $nama_kampus }} | Company Orientation</p>
    </footer>

@endsection
