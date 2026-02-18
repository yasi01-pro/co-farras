@extends('layouts.app')

@section('title', 'Form Kunjungan')

@section('content')

    <!-- Spacer agar tidak ketabrak navbar -->
    <section class="section" style="padding-top: 160px; padding-bottom: 100px;">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-6">

                    <div class="card shadow-lg border-0">
                        <div class="card-body p-5">

                            <h2 class="text-center mb-4 fw-bold">
                                Form Pendaftaran Kunjungan Kampus
                            </h2>

                            {{-- Alert sukses --}}
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            {{-- IMPORTANT: enctype wajib untuk upload --}}
                            <form action="{{ route('kunjungan.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                {{-- Nama --}}
                                <div class="mb-3">
                                    <label class="form-label">Nama</label>
                                    <input type="text" name="nama"
                                        class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}"
                                        placeholder="Masukkan nama lengkap">

                                    @error('nama')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                {{-- Email --}}
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        value="{{ old('email') }}" placeholder="Masukkan email aktif">

                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                {{-- Institusi --}}
                                <div class="mb-3">
                                    <label class="form-label">Institusi</label>
                                    <input type="text" name="institusi"
                                        class="form-control @error('institusi') is-invalid @enderror"
                                        value="{{ old('institusi') }}" placeholder="Nama sekolah / universitas">

                                    @error('institusi')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                {{-- Tanggal --}}
                                <div class="mb-3">
                                    <label class="form-label">Tanggal Kunjungan</label>
                                    <input type="date" name="tanggal"
                                        class="form-control @error('tanggal') is-invalid @enderror"
                                        value="{{ old('tanggal') }}">

                                    @error('tanggal')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                {{-- Upload Dokumentasi --}}
                                <div class="mb-4">
                                    <label class="form-label">Upload Dokumentasi</label>
                                    <input type="file" name="foto"
                                        class="form-control @error('foto') is-invalid @enderror">

                                    @error('foto')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary w-100 py-2 fw-bold">
                                    Kirim Pendaftaran
                                </button>

                            </form>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

@endsection
