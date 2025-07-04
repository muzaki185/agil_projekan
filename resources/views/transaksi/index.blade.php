@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h3 class="mb-4">Daftar Transaksi</h3>

    {{-- Tombol Kembali ke Dashboard --}}
    <div class="mb-3">
        <a href="{{ route('dashboard') }}" class="btn btn-secondary">← Kembali ke Dashboard</a>
        <a href="{{ route('transaksi.create') }}" class="btn btn-success">+ Tambah Transaksi</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-success">
            <tr>
                <th>No</th>
                <th>Pelanggan</th>
                <th>Obat</th>
                <th>Jumlah</th>
                <th>Total</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($transaksis as $i => $t)
            <tr>
                <td>{{ $i + 1 }}</td>
                <td>{{ $t->nama_pelanggan }}</td>
                <td>{{ $t->nama_obat }}</td> {{-- Ini sebelumnya salah: { { -> harus {{ --}}
                <td>{{ $t->jumlah }}</td>
                <td>Rp {{ number_format($t->total_harga, 0, ',', '.') }}</td>
                <td>{{ $t->tanggal_transaksi }}</td>
                <td>
                    <a href="{{ route('transaksi.edit', $t->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <a href="{{ route('transaksi.show', $t->id) }}" class="btn btn-info btn-sm">Invoice</a>
                    <form action="{{ route('transaksi.destroy', $t->id) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
