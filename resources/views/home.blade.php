@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center my-4">
            <h1>Benvenuto nella tua Dashboard del Portfolio</h1>
            <p>Qui puoi gestire i tuoi progetti, visualizzare le statistiche e molto altro.</p>
        </div>
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header">Progetti Recenti</div>
                <div class="card-body">
                    @forelse ($projects as $project)
                        <h5>{{ $project->title }}</h5>
                        <p>{{ $project->description }}</p>
                        <a href="{{ $project->url }}" target="_blank">Visita il progetto</a>
                        <hr>
                    @empty
                        <p>Non ci sono progetti al momento.</p>
                    @endforelse
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header">Statistiche</div>
                <div class="card-body">
                    <p>Totale Progetti: {{ $projects->count() }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
