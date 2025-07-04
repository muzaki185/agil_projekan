<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Selamat Datang | Apotek</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #a8e063, #f5f5dc); /* gradasi hijau ke cream */
            color: #2d2d2d;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .card-custom {
            background: rgba(255, 255, 255, 0.2);
            border: none;
            border-radius: 20px;
            backdrop-filter: blur(10px);
            padding: 40px;
            text-align: center;
            box-shadow: 0 8px 16px rgba(0,0,0,0.15);
        }
        .icon-apotek {
            font-size: 80px;
            color: #2d2d2d;
            margin-bottom: 20px;
        }
        .btn-custom {
            background-color: #2d2d2d;
            color: white;
            font-weight: bold;
            border: none;
            transition: 0.3s;
        }
        .btn-custom:hover {
            background-color: #444;
            color: #fff;
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center vh-100">
    <div class="card-custom shadow-lg">
        <div class="icon-apotek">
            <i class="fas fa-clinic-medical"></i> {{-- Ikon klinik/apotek --}}
        </div>
        <h1 class="mb-3">Haii Admin Apotek</h1>
        <p class="mb-4">Semoga harimu menyenangkan dan sehat selalu</p>
        <a href="{{ route('login') }}" class="btn btn-custom px-4 py-2">Login sebagai Admin</a>
    </div>
</body>
</html>
