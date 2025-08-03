<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | To-Do List App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #fbc2eb, #a6c1ee); /* 🎨 pastel pink → soft blue */
            min-height: 100vh;
            color: #333; /* teks gelap agar kontras */
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Segoe UI', sans-serif;
        }
        .card {
            background: rgba(255,255,255,0.8); /* lebih terang agar nyaman */
            border: none;
            border-radius: 20px;
            padding: 40px;
            backdrop-filter: blur(6px);
            box-shadow: 0 6px 25px rgba(0,0,0,0.1);
        }
        h1 {
            color: #444;
        }
        .lead {
            color: #555;
        }
        .btn-custom {
            border-radius: 30px;
            padding: 10px 25px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-custom:hover {
            transform: scale(1.05);
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <div class="card text-center">
        <h1 class="mb-3">🌸 Selamat Datang di <strong>To-Do List App</strong> 🌸</h1>
        <p class="lead">Kelola aktivitas harianmu dengan cara yang lebih rapi dan tenang.</p>
        <div class="mt-4">
            @auth
                <a href="{{ route('tasks.index') }}" class="btn btn-success btn-custom">📋 Lihat Daftar Tugas</a>
                <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                    @csrf
                    <button class="btn btn-outline-dark btn-custom">🚪 Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="btn btn-primary btn-custom">🔑 Login</a>
                <a href="{{ route('register') }}" class="btn btn-outline-secondary btn-custom">📝 Register</a>
            @endauth
        </div>
    </div>
</body>
</html>
