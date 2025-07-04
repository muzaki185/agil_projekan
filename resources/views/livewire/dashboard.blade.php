<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard | Apotek</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #8e44ad, #3498db);
            color: white;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .dashboard-card {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 40px;
            text-align: center;
            backdrop-filter: blur(8px);
            width: 600px;
        }
        .btn-logout {
            background-color: white;
            color: #8e44ad;
            font-weight: bold;
        }
        .btn-logout:hover {
            background-color: #f0f0f0;
            color: #3498db;
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center vh-100">
    <div class="dashboard-card shadow">
        <div class="mb-4">
            <i class="fas fa-hospital-user fa-3x mb-3"></i>
            <h2>Selamat Datang, Admin Apotek!</h2>
            <p class="mb-0">Sistem Pengelolaan Apotek Pribadi</p>
        </div>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-logout">Logout</button>
        </form>
    </div>
</body>
</html>
