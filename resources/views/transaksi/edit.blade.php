@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h3>Edit Transaksi</h3>

    <form method="POST" action="{{ route('transaksi.update', $transaksi->id) }}">
        @csrf @method('PUT')

        <div class="mb-3">
            <label>Nama Pelanggan</label>
            <input type="text" name="nama_pelanggan" value="{{ $transaksi->nama_pelanggan }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Nama Obat</label>
            <input type="text" name="nama_obat" value="{{ $transaksi->nama_obat }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Jumlah</label>
            <input type="number" name="jumlah" id="jumlah" value="{{ $transaksi->jumlah }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Harga Satuan</label>
            <input type="number" name="harga_satuan" id="harga_satuan" value="{{ $transaksi->harga_satuan }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Total Harga</label>
            <input type="number" name="total_harga" id="total_harga" value="{{ $transaksi->total_harga }}" class="form-control" readonly>
        </div>

        <div class="mb-3">
            <label>Tanggal Transaksi</label>
            <input type="date" name="tanggal_transaksi" value="{{ $transaksi->tanggal_transaksi }}" class="form-control">
        </div>

        <button class="btn btn-warning">Update</button>
        <a href="{{ route('transaksi.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<script>
    const jumlah = document.getElementById('jumlah');
    const harga = document.getElementById('harga_satuan');
    const total = document.getElementById('total_harga');

    function hitungTotal() {
        total.value = jumlah.value * harga.value;
    }

    jumlah.addEventListener('input', hitungTotal);
    harga.addEventListener('input', hitungTotal);
</script>
@endsection
