@extends('layout')
@section('title', 'Tambah Tugas')
@section('content')
<h2 class="mb-3">Tambah Tugas Baru</h2>

<form action="{{ route('tasks.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Judul Tugas</label>
        <input type="text" name="title" class="form-control" required>
        @error('title')<div class="text-danger">{{ $message }}</div>@enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Deskripsi</label>
        <textarea name="description" class="form-control" rows="3"></textarea>
    </div>
    <button class="btn btn-success">Simpan</button>
    <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
