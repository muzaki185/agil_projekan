@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="text-center mb-4">📦 Daftar Pemesanan Obat</h2>

    <div class="d-flex justify-content-between mb-3">
        <a href="{{ route('dashboard') }}" class="btn btn-secondary text-white px-4">
            ← Kembali ke Dashboard
        </a>
        <a href="{{ route('pemesanan.create') }}" class="btn btn-success text-white px-4">
            + Tambah Pemesanan
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered bg-white shadow-sm rounded">
        <thead class="table-success text-center">
            <tr>
                <th>No</th>
                <th>Nama Supplier</th>
                <th>Nama Obat</th>
                <th>Jumlah</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pemesanans as $pemesanan)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $pemesanan->nama_supplier }}</td>
                <td>{{ $pemesanan->nama_obat }}</td>
                <td>{{ $pemesanan->jumlah }} pcs</td>
                <td>{{ $pemesanan->tanggal_pesan }}</td>
                <td class="text-center">
                    <a href="{{ route('pemesanan.edit', $pemesanan->id) }}" class="btn btn-warning text-white btn-sm px-3">
                        ✏️ Edit
                    </a>
                    <form action="{{ route('pemesanan.destroy', $pemesanan->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm px-3" onclick="return confirm('Yakin ingin menghapus?')">
                            🗑️ Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
