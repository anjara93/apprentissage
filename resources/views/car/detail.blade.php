@extends('layouts.app')

@section('title', 'Détail de la voiture')
@section('content')
    <div class="detail_container">
        <h1>Détail de la voiture</h1>
        <p><strong>Nom :</strong> {{ $car->nom }}</p>
        <p><strong>Marque :</strong> {{ $car->marque }}</p>
        <p><strong>Année :</strong> {{ $car->annee }}</p>
        <p><strong>Couleur :</strong> {{ $car->couleur }}</p>

        <a href="{{ route('car.index') }}" class="btn btn-secondary mt-3">Retour à la liste</a>
    </div>
@endsection 