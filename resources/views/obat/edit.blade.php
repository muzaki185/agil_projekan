<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Obat | Apotek</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #a8e063, #f5f5dc);
            color: #2d2d2d;
        }
        .card {
            background-color: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            box-shadow: 0 6px 12px rgba(0,0,0,0.1);
        }
        .btn-custom {
            background-color: #2d2d2d;
            color: white;
            border: none;
        }
        .btn-custom:hover {
            background-color: #444;
        }
    </style>
</head>
<body>
<div class="container py-5">
    <h2 class="mb-4">Edit Obat</h2>
    <div class="card p-4">
        <form action="{{ route('obat.update', $obat->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Nama Obat</label>
                <input type="text" class="form-control" name="nama" value="{{ $obat->nama }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Kategori</label>
                <input type="text" class="form-control" name="kategori" value="{{ $obat->kategori }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Stok</label>
                <input type="number" class="form-control" name="stok" value="{{ $obat->stok }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Harga</label>
                <input type="number" class="form-control" name="harga" value="{{ $obat->harga }}" required>
            </div>
            <button type="submit" class="btn btn-custom">Update</button>
            <a href="{{ route('obat.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
</body>
</html>
