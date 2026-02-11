@extends('layouts.app')

@section('title', 'Form Kunjungan')

@section('content')

<!-- Tambah jarak dari navbar -->
<section class="section" style="padding-top: 150px; padding-bottom: 80px;">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-6">

                <div class="card shadow-lg border-0">
                    <div class="card-body p-5">

                        <h2 class="text-center mb-4">
                            Form Pendaftaran Kunjungan Kampus
                        </h2>

                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('kunjungan.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text"
                                       name="nama"
                                       class="form-control"
                                       value="{{ old('nama') }}">
                                @error('nama')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="text"
                                       name="email"
                                       class="form-control"
                                       value="{{ old('email') }}">
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Institusi</label>
                                <input type="text"
                                       name="institusi"
                                       class="form-control"
                                       value="{{ old('institusi') }}">
                                @error('institusi')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <button type="submit"
                                    class="btn btn-primary w-100 py-2">
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
