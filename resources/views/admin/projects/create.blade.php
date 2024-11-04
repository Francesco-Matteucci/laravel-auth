@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crea un Nuovo Progetto</h1>

    <form action="{{ route('admin.projects.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea name="description" id="description" class="form-control" rows="5"></textarea>
        </div>

        <div class="mb-3">
            <label for="url" class="form-label">URL</label>
            <input type="url" name="url" id="url" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Salva Progetto</button>
    </form>
</div>
@endsection
