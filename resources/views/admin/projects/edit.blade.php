@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Modifica Progetto: {{ $project->title }}</h1>

    <form method="POST" action="{{ route('admin.projects.update', $project) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $project->title }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" id="description" name="description">{{ $project->description }}</textarea>
        </div>

        <div class="mb-3">
            <label for="url" class="form-label">URL</label>
            <input type="url" class="form-control" id="url" name="url" value="{{ $project->url }}">
        </div>

        <button type="submit" class="btn btn-primary">Aggiorna Progetto</button>
        <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">Annulla</a>
    </form>
</div>
@endsection
