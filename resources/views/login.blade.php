<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Admin | Apotek</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #a8e063, #f5f5dc); /* gradasi hijau ke cream */
            color: #2d2d2d;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .login-card {
            background: rgba(255, 255, 255, 0.25);
            border: none;
            border-radius: 20px;
            backdrop-filter: blur(10px);
            padding: 40px;
            width: 400px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.15);
        }
        .form-label {
            color: #2d2d2d;
            font-weight: bold;
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
        .alert {
            font-size: 14px;
        }
        .icon-apotek {
            font-size: 40px;
            color: #2d2d2d;
            margin-bottom: 10px;
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center vh-100">
    <div class="login-card shadow">
        <div class="text-center mb-4">
            <div class="icon-apotek">
                <i class="fas fa-clinic-medical"></i> {{-- Ikon apotek --}}
            </div>
            <h3>Login Admin Apotek</h3>
        </div>

        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ url('/login') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label" for="email">Email</label>
                <input type="email" name="email" required class="form-control" placeholder="Masukkan email">
            </div>

            <div class="mb-3">
                <label class="form-label" for="password">Password</label>
                <input type="password" name="password" required class="form-control" placeholder="Masukkan password">
            </div>

            <button type="submit" class="btn btn-custom w-100">Login</button>
        </form>
    </div>
</body>
</html>
