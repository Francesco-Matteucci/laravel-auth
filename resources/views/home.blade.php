@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Progetti Pubblici</h1>
    <p>Visualizza i progetti più recenti e le statistiche generali.</p>

    <div class="row">
        <div class="col-md-8">
            <h2>Lista Progetti</h2>
            <ul class="list-group">
                @foreach ($projects as $project)
                    <li class="list-group-item">
                        <h5>{{ $project->title }}</h5>
                        <p>{{ $project->description }}</p>
                        <a href="{{ $project->url }}" target="_blank">Vai al Progetto</a>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="col-md-4">
            <h2>Statistiche</h2>
            <p>Totale Progetti: {{ $projects->count() }}</p>
        </div>
    </div>
</div>
@endsection
