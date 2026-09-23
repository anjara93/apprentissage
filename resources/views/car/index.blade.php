@extends('layouts.app')

@section('title', 'Liste des voitures')

@section('content')
    <div class="index_container">
        @foreach ($car as $car)
            <ul class="list-unstyled">
                <li>
                    <a href="{{ route('car.detail', $car->id) }}" class="text-decoration-none">
                        {{ $car->nom }}
                    </a>
                </li>
            </ul>
        @endforeach

        <a href="{{ route('car.form') }}" class="btn btn-primary mt-3">
            Nouvelle voiture
        </a>
    </div>
@endsection