@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="text-center mb-4">✏️ Edit Pemesanan Obat</h2>

    <form action="{{ route('pemesanan.update', $pemesanan->id) }}" method="POST" class="bg-white p-4 rounded shadow-sm">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama_supplier" class="form-label">Nama Supplier</label>
            <input type="text" name="nama_supplier" class="form-control" value="{{ $pemesanan->nama_supplier }}" required>
        </div>

        <div class="mb-3">
            <label for="nama_obat" class="form-label">Nama Obat</label>
            <input type="text" name="nama_obat" class="form-control" value="{{ $pemesanan->nama_obat }}" required>
        </div>

        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" name="jumlah" class="form-control" value="{{ $pemesanan->jumlah }}" required>
        </div>

        <div class="mb-3">
            <label for="tanggal_pesan" class="form-label">Tanggal Pemesanan</label>
            <input type="date" name="tanggal_pesan" class="form-control" value="{{ $pemesanan->tanggal_pesan }}" required>
        </div>

        <div class="d-flex justify-content-between">
            <a href="{{ route('pemesanan.index') }}" class="btn btn-secondary">← Batal</a>
            <button type="submit" class="btn btn-success">Update Pemesanan</button>
        </div>
    </form>
</div>
@endsection
