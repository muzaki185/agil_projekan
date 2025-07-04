<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Apotek</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #a8e063, #f5f5dc); /* gradasi hijau ke cream */
            color: #2d2d2d;
        }
        .menu-box {
            background-color: rgba(255, 255, 255, 0.25);
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .menu-box:hover {
            background-color: rgba(255, 255, 255, 0.5);
            transform: translateY(-8px) scale(1.05);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }
        .menu-icon {
            font-size: 40px;
            margin-bottom: 10px;
            color: #2d2d2d;
        }
        .logout {
            position: absolute;
            right: 30px;
            top: 30px;
        }
    </style>
</head>
<body>

    <div class="container text-center py-5">
        <h1 class="mb-4">
            <i class="fas fa-clinic-medical me-2"></i> Apotek Niaga Tangerang
        </h1>

        <form method="POST" action="{{ route('logout') }}" class="logout">
            @csrf
            <button class="btn btn-danger">Logout</button>
        </form>

        <div class="row row-cols-1 row-cols-md-3 g-4 mt-4 justify-content-center">
            <div class="col">
                <a href="/obat" class="text-decoration-none text-dark">
                    <div class="menu-box">
                        <i class="fas fa-capsules menu-icon"></i>
                        <h4>Kelola Obat</h4>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="/transaksi" class="text-decoration-none text-dark">
                    <div class="menu-box">
                        <i class="fas fa-money-check-alt menu-icon"></i>
                        <h4>Transaksi</h4>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="/resep" class="text-decoration-none text-dark">
                    <div class="menu-box">
                        <i class="fas fa-file-prescription menu-icon"></i>
                        <h4>Resep</h4>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="/pemesanan" class="text-decoration-none text-dark">
                    <div class="menu-box">
                        <i class="fas fa-shopping-cart menu-icon"></i>
                        <h4>Pemesanan</h4>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="/laporan" class="text-decoration-none text-dark">
                    <div class="menu-box">
                        <i class="fas fa-chart-line menu-icon"></i>
                        <h4>Laporan</h4>
                    </div>
                </a>
            </div>
        </div>
    </div>

</body>
</html>
