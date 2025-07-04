@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="mb-4">Tambah Transaksi</h2>
    <div class="card p-4">
        <form action="{{ route('transaksi.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nama Pelanggan</label>
                <input type="text" name="nama_pelanggan" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Obat</label>
                <input type="text" name="nama_obat" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Jumlah</label>
                <input type="number" name="jumlah" id="jumlah" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Harga Satuan</label>
                <input type="number" name="harga_satuan" id="harga_satuan" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Total Harga</label>
                <input type="number" name="total_harga" id="total_harga" class="form-control" readonly required>
            </div>
            <div class="mb-3">
                <label class="form-label">Tanggal Transaksi</label>
                <input type="date" name="tanggal_transaksi" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-custom">Simpan</button>
            <a href="{{ route('transaksi.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>

<script>
    const jumlah = document.getElementById('jumlah');
    const harga = document.getElementById('harga_satuan');
    const total = document.getElementById('total_harga');

    function hitungTotal() {
        const jml = parseFloat(jumlah.value) || 0;
        const hrg = parseFloat(harga.value) || 0;
        total.value = jml * hrg;
    }

    jumlah.addEventListener('input', hitungTotal);
    harga.addEventListener('input', hitungTotal);
</script>
@endsection
