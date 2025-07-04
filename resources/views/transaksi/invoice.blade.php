@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invoice Transaksi | Apotek</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f5f5;
        }

        .invoice-box {
            background: #ffffff;
            max-width: 700px;
            margin: auto;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.15);
            font-size: 16px;
            color: #333;
        }

        .invoice-header {
            border-bottom: 2px solid #28a745;
            margin-bottom: 20px;
            padding-bottom: 10px;
        }

        .invoice-header h2 {
            font-weight: bold;
            color: #28a745;
        }

        .invoice-info p {
            margin-bottom: 5px;
        }

        .btn-back {
            margin-top: 30px;
        }

        .line-separator {
            border-top: 1px dashed #999;
            margin: 20px 0;
        }

        .thanks-note {
            font-style: italic;
            color: #666;
        }

        @media print {
            .btn-actions {
                display: none !important;
            }
        }
    </style>
</head>
<body>
    <div class="invoice-box mt-5">
        <div class="invoice-header text-center">
            <h2>🧾 Apotek Niaga Tangerang</h2>
            <small>Jl. Kesehatan No.123 - Telp: 0812-3456-7890</small>
        </div>

        <div class="invoice-info">
            <p><strong>Tanggal Transaksi:</strong> {{ $transaksi->tanggal_transaksi }}</p>
            <p><strong>Nama Pelanggan:</strong> {{ $transaksi->nama_pelanggan }}</p>
            <p><strong>Nama Obat:</strong> {{ $transaksi->nama_obat }}</p>
            <p><strong>Jumlah Beli:</strong> {{ $transaksi->jumlah }}</p>
            <p><strong>Harga Satuan:</strong> Rp{{ number_format($transaksi->harga_satuan, 0, ',', '.') }}</p>
            <p><strong>Total Bayar:</strong> <span class="fw-bold text-success">Rp{{ number_format($transaksi->total_harga, 0, ',', '.') }}</span></p>
        </div>

        <div class="line-separator"></div>
        <p class="thanks-note text-center">🙏 Terima kasih telah berbelanja di Apotek Kami.</p>

        <div class="text-center btn-actions">
            <a href="{{ route('transaksi.index') }}" class="btn btn-secondary me-2">← Kembali</a>
            <button class="btn btn-success" onclick="window.print()">🖨️ Cetak Struk</button>
        </div>
    </div>
</body>
</html>
@endsection
