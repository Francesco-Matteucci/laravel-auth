@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center my-4">
            <h1>Benvenuto nel tuo Dashboard Portfolio</h1>
            <p>Qui puoi gestire i tuoi progetti, visualizzare le statistiche e altro ancora.</p>
        </div>
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header">Progetti Recenti</div>
                <div class="card-body">
                    @if($projects->isEmpty())
                        <p>Non ci sono progetti recenti.</p>
                    @else
                        <ul class="list-group">
                            @foreach ($projects as $project)
                                <li class="list-group-item">
                                    <h5>{{ $project->title }}</h5>
                                    <p>{{ $project->description }}</p>
                                    <a href="{{ $project->url }}" target="_blank" class="btn btn-primary">Vai al Progetto</a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header">Statistiche</div>
                <div class="card-body">
                    <p>Numero Totale di Progetti: {{ $projects->count() }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
