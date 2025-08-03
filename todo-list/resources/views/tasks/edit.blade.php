@extends('layout')
@section('title', 'Edit Tugas')
@section('content')
<h2 class="mb-3">Edit Tugas</h2>

<form action="{{ route('tasks.update',$task) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label class="form-label">Judul Tugas</label>
        <input type="text" name="title" class="form-control" value="{{ $task->title }}" required>
        @error('title')<div class="text-danger">{{ $message }}</div>@enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Deskripsi</label>
        <textarea name="description" class="form-control" rows="3">{{ $task->description }}</textarea>
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" name="is_completed" value="1" class="form-check-input" id="completed"
               {{ $task->is_completed ? 'checked' : '' }}>
        <label for="completed" class="form-check-label">Tandai sebagai selesai</label>
    </div>
    <button class="btn btn-primary">Update</button>
    <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
