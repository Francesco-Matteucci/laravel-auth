@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dettagli del Progetto: {{ $project->title }}</h1>

    <div class="card">
        <div class="card-header">{{ $project->title }}</div>
        <div class="card-body">
            <h5 class="card-title">Descrizione</h5>
            <p class="card-text">{{ $project->description }}</p>
            <a href="{{ $project->url }}" target="_blank" class="btn btn-primary">Vai al Progetto</a>
            <hr>
            <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-warning">Modifica</a>
            <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Elimina</button>
            </form>
        </div>
    </div>
</div>
@endsection
