@extends('layouts.layout')

@section('title', 'Form Pemesanan')

@section('hero')
    @include('layouts.hero')
@endsection

@section('content')
    <div class="container mt-5">
        <h2>Form Pemesanan</h2>

        {{-- Notifikasi Sukses --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        {{-- Menampilkan Error Validasi --}}
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        {{-- Form --}}
        <form action="{{ route('order.submit') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Telepon</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" required>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Alamat</label>
                <textarea class="form-control" id="address" name="address" rows="3" required>{{ old('address') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="destination" class="form-label">Tujuan</label>
                <input type="text" class="form-control" id="destination" name="destination" value="{{ old('destination') }}" required>
            </div>

            <div class="mb-3">
                <label for="package_type" class="form-label">Jenis Paket</label>
                <select class="form-select" id="package_type" name="package_type" required>
                    <option value="" disabled selected>Pilih jenis paket</option>
                    <option value="Cargo" {{ old('package_type') == 'Cargo' ? 'selected' : '' }}>Cargo</option>
                    <option value="Regular" {{ old('package_type') == 'Regular' ? 'selected' : '' }}>Regular</option>
                    <option value="Same Day" {{ old('package_type') == 'Same Day' ? 'selected' : '' }}>Same Day</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary mb-3">Pesan Sekarang</button>
        </form>
    </div>
@endsection

@push('scripts')
    <script>
        setTimeout(() => {
            const alert = document.querySelector('.alert');
            if (alert) {
                alert.classList.remove('show');
                alert.classList.add('fade');
                setTimeout(() => alert.remove(), 500);
            }
        }, 3000);
    </script>
@endpush
