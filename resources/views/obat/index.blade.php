<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kelola Obat | Apotek</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #a8e063, #f5f5dc);
            color: #2d2d2d;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .card {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            box-shadow: 0 6px 12px rgba(0,0,0,0.1);
        }
        .table thead {
            background-color: #a8e063;
            color: white;
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
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2><i class="fas fa-capsules me-2"></i> Kelola Obat</h2>
            <a href="{{ url('/dashboard') }}" class="btn btn-secondary">Kembali</a>
        </div>

        <div class="card p-4">
            <div class="d-flex justify-content-end mb-3">
                <a href="{{ route('obat.create') }}" class="btn btn-custom">
                    <i class="fas fa-plus me-1"></i> Tambah Obat
                </a>
            </div>

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Nama Obat</th>
                        <th>Kategori</th>
                        <th>Stok</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($obats as $obat)
                        <tr>
                            <td>{{ $obat->nama }}</td>
                            <td>{{ $obat->kategori }}</td>
                            <td>{{ $obat->stok }}</td>
                            <td>Rp {{ number_format($obat->harga, 0, ',', '.') }}</td>
                            <td>
                                <a href="{{ route('obat.edit', $obat->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('obat.destroy', $obat->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    @if(count($obats) == 0)
                        <tr>
                            <td colspan="5" class="text-center">Belum ada data obat.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
