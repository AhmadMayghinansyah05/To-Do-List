<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Password | To-Do List App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: linear-gradient(120deg, #fdfbfb, #ebedee); height: 100vh; display:flex; justify-content:center; align-items:center; font-family:'Segoe UI'; }
        .card { background:#fff; border-radius:15px; padding:30px; box-shadow:0 4px 15px rgba(0,0,0,0.1); width:400px; }
    </style>
</head>
<body>
    <div class="card">
        <h3 class="text-center mb-3">🔐 Lupa Password</h3>
        @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required autofocus>
