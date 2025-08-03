@extends('layout')

@section('title', 'Dashboard')
@section('content')
<div class="p-4">
    <h2>👋 Selamat Datang, {{ Auth::user()->name }}</h2>
    <p>Ini adalah halaman Dashboard Anda.</p>
    <a href="{{ route('tasks.index') }}" class="btn btn-primary mt-3">📋 Lihat Daftar Tugas</a>
</div>
@endsection
