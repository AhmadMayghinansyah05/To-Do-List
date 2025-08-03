@extends('layout')
@section('title', 'Daftar Tugas')
@section('content')
<div class="d-flex justify-content-between mb-3">
    <h2>Daftar Tugas</h2>
    <a href="{{ route('tasks.create') }}" class="btn btn-primary">+ Tambah Tugas</a>
</div>

@if($tasks->isEmpty())
    <div class="alert alert-info">Belum ada tugas. Silakan tambah tugas baru.</div>
@else
<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Status</th>
            <th width="180">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tasks as $task)
        <tr>
            <td>{{ $task->title }}</td>
            <td>{{ $task->description ?? '-' }}</td>
            <td>
                @if($task->is_completed)
                    <span class="badge bg-success">Selesai</span>
                @else
                    <span class="badge bg-warning text-dark">Belum</span>
                @endif
            </td>
            <td>
                <a href="{{ route('tasks.edit',$task) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('tasks.destroy',$task) }}" method="POST" style="display:inline">
                    @csrf @method('DELETE')
                    <button onclick="return confirm('Hapus tugas ini?')" class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif
@endsection
