<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Email | To-Do List App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: linear-gradient(120deg, #f6d365, #fda085); height:100vh; display:flex; justify-content:center; align-items:center; font-family:'Segoe UI'; }
        .card { background:#fff; border-radius:15px; padding:30px; width:450px; box-shadow:0 4px 15px rgba(0,0,0,0.1); }
    </style>
</head>
<body>
    <div class="card text-center">
        <h3>📧 Verifikasi Email Anda</h3>
        <p class="mb-3">Kami telah mengirimkan link verifikasi ke email Anda. Silakan cek inbox/spam.</p>

        @if (session('status') == 'verification-link-sent')
            <div class="alert alert-success">✅ Link verifikasi baru telah dikirim!</div>
        @endif

        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button class="btn btn-primary w-100">Kirim Ulang Email Verifikasi</button>
        </form>

        <form method="POST" action="{{ route('logout') }}" class="mt-3">
            @csrf
            <button class="btn btn-outline-danger w-100">Logout</button>
        </form>
    </div>
</body>
</html>
