<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | To-Do List App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(120deg, #a1c4fd, #c2e9fb);
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
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            width: 400px;
        }
    </style>
</head>
<body>
    <div class="card">
        <h3 class="text-center mb-3">🔑 Login</h3>

        @if(session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required autofocus>
                @error('email')<div class="text-danger">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
                @error('password')<div class="text-danger">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" name="remember" class="form-check-input" id="remember">
                <label for="remember" class="form-check-label">Ingat Saya</label>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>

        <!-- 🔗 Link ke Forgot Password -->
        <p class="text-center mt-3">
            <a href="{{ route('password.request') }}">❓ Lupa Password?</a>
        </p>

        <p class="text-center">Belum punya akun? 
            <a href="{{ route('register') }}">Daftar di sini</a>
        </p>
        <p class="text-center"><a href="{{ route('welcome') }}">⬅️ Kembali ke Home</a></p>
    </div>
</body>
</html>
