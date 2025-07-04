@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="text-center mb-4">➕ Tambah Resep Obat</h2>

    <form action="{{ route('resep.store') }}" method="POST" class="bg-white p-4 rounded shadow-sm">
        @csrf

        <div class="mb-3">
            <label for="nama_pasien" class="form-label">Nama Pasien</label>
            <input type="text" name="nama_pasien" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="nama_obat" class="form-label">Nama Obat</label>
            <input type="text" name="nama_obat" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="aturan_pakai" class="form-label">Aturan Pakai</label>
            <input type="text" name="aturan_pakai" class="form-control" required>
        </div>

        <div class="d-flex justify-content-between">
            <a href="{{ route('resep.index') }}" class="btn btn-secondary">← Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan Resep</button>
        </div>
    </form>
</div>
@endsection
