<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Password | To-Do List App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(120deg, #e0c3fc, #8ec5fc);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: 'Segoe UI', sans-serif;
        }
        .card {
            background: #fff;
            border-radius: 15px;
            padding: 30px;
            width: 400px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="card">
        <h3 class="text-center mb-3">🔒 Konfirmasi Password</h3>
        <p class="text-muted text-center mb-3">Harap konfirmasi password Anda sebelum melanjutkan ke halaman ini.</p>

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required autofocus>
                @error('password')<div class="text-danger">{{ $message }}</div>@enderror
            </div>
            <button type="submit" class="btn btn-primary w-100">Konfirmasi</button>
        </form>

        <p class="text-center mt-3">
            <a href="{{ route('welcome') }}">⬅️ Kembali ke Home</a>
        </p>
    </div>
</body>
</html>
