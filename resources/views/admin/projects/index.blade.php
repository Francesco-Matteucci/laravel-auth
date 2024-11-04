@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Gestione Progetti</h1>
    <a href="{{ route('admin.projects.create') }}" class="btn btn-primary mb-3">Crea Nuovo Progetto</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titolo</th>
                <th>Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->title }}</td>
                    <td>
                        <a href="{{ route('admin.projects.show', $project) }}" class="btn btn-info btn-sm">Visualizza</a>
                        <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-warning btn-sm">Modifica</a>
                        <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Elimina</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
