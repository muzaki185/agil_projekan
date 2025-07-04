@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="text-center mb-4">📊 Laporan Transaksi & Pemesanan</h2>

    <div class="d-flex justify-content-between mb-3">
        <a href="{{ route('dashboard') }}" class="btn btn-secondary text-white px-4 shadow-sm">
            ← Kembali ke Dashboard
        </a>
        <a href="{{ route('laporan.cetak') }}" target="_blank" class="btn btn-danger text-white px-4 shadow-sm">
            🖨️ Cetak PDF
        </a>
    </div>

    <div class="bg-white p-4 rounded shadow-sm">
        <h5 class="mb-3">Ringkasan Transaksi</h5>
        <table class="table table-bordered">
            <thead class="table-info text-center">
                <tr>
                    <th>Tanggal</th>
                    <th>Nama Obat</th>
                    <th>Jenis</th>
                    <th>Jumlah</th>
                </tr>
            </thead>
            <tbody>
                @foreach($laporans as $laporan)
                    <tr>
                        <td>{{ $laporan->tanggal }}</td>
                        <td>{{ $laporan->nama_obat }}</td>
                        <td>{{ $laporan->jenis }}</td>
                        <td>{{ $laporan->jumlah }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection