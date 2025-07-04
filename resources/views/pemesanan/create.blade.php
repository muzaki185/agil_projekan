@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="text-center mb-4">🛒 Tambah Pemesanan Obat</h2>

    <form action="{{ route('pemesanan.store') }}" method="POST" class="bg-white p-4 rounded shadow-sm">
        @csrf

        <div class="mb-3">
            <label for="nama_supplier" class="form-label">Nama Supplier</label>
            <input type="text" name="nama_supplier" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="nama_obat" class="form-label">Nama Obat</label>
            <input type="text" name="nama_obat" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" name="jumlah" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="tanggal_pesan" class="form-label">Tanggal Pemesanan</label>
            <input type="date" name="tanggal_pesan" class="form-control" required>
        </div>

        <div class="d-flex justify-content-between">
            <a href="{{ route('pemesanan.index') }}" class="btn btn-secondary">← Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan Pemesanan</button>
        </div>
    </form>
</div>
@endsection
