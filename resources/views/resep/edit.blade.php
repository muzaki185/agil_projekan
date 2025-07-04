@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="text-center mb-4">✏️ Edit Resep Obat</h2>

    <form action="{{ route('resep.update', $resep->id) }}" method="POST" class="bg-white p-4 rounded shadow-sm">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama_pasien" class="form-label">Nama Pasien</label>
            <input type="text" name="nama_pasien" class="form-control" value="{{ $resep->nama_pasien }}" required>
        </div>

        <div class="mb-3">
            <label for="nama_obat" class="form-label">Nama Obat</label>
            <input type="text" name="nama_obat" class="form-control" value="{{ $resep->nama_obat }}" required>
        </div>

        <div class="mb-3">
            <label for="aturan_pakai" class="form-label">Aturan Pakai</label>
            <input type="text" name="aturan_pakai" class="form-control" value="{{ $resep->aturan_pakai }}" required>
        </div>

        <div class="d-flex justify-content-between">
            <a href="{{ route('resep.index') }}" class="btn btn-secondary">← Batal</a>
            <button type="submit" class="btn btn-success">Update Resep</button>
        </div>
    </form>
</div>
@endsection
