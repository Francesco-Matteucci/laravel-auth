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
                    <p>Nessun progetto recente.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header">Statistiche</div>
                <div class="card-body">
                    <p>Nessun dato disponibile.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
