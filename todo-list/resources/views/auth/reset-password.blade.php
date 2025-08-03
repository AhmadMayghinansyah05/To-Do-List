<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password | To-Do List App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: linear-gradient(120deg, #d4fc79, #96e6a1); height: 100vh; display:flex; justify-content:center; align-items:center; font-family:'Segoe UI'; }
        .card { background:#fff; border-radius:15px; padding:30px; box-shadow:0 4px 15px rgba(0,0,0,0.1); width:400px; }
    </style>
</head>
<body>
    <div class="card">
        <h3 class="text-center mb-3">🔑 Reset Password</h3>
        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $request->route('token') }}">
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" value="{{ old('email', $request->email) }}" class="form-control" required readonly>
            </div>
            <div class="mb-3">
                <label>Password Baru</label>
                <input type="password" name="password" class="form-control" required>
                @error('password')<div class="text-danger">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label>Konfirmasi Password</label>
                <input type="password" name="password_confirmation" class="form-control" required>
            </div>
            <button class="btn btn-success w-100">Update Password</button>
        </form>
        <p class="text-center mt-3"><a href="{{ route('login') }}">⬅️ Kembali ke Login</a></p>
    </div>
</body>
</html>
