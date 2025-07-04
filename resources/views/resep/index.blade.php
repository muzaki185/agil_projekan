@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="text-center mb-4">📋 Daftar Resep Obat</h2>

    <div class="d-flex justify-content-between mb-3">
        <a href="{{ route('dashboard') }}" class="btn btn-secondary text-white px-4">
            ← Kembali ke Dashboard
        </a>
        <a href="{{ route('resep.create') }}" class="btn btn-success text-white px-4">
            + Tambah Resep
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered bg-white shadow-sm rounded">
        <thead class="table-success text-center">
            <tr>
                <th>No</th>
                <th>Nama Pasien</th>
                <th>Nama Obat</th>
                <th>Aturan Pakai</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reseps as $resep)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $resep->nama_pasien }}</td>
                <td>{{ $resep->nama_obat }}</td>
                <td>{{ $resep->aturan_pakai }}</td>
                <td>
                    <a href="{{ route('resep.edit', $resep->id) }}" class="btn btn-warning btn-sm text-white">Edit</a>
                    <form action="{{ route('resep.destroy', $resep->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
