@extends('layouts.app')

@section('content')
    <div class="container" >
        <form action="" method="POST">
            @csrf
            <label>marque</label>
            <input type="text" name="marque">

            <label>nom</label>
            <input type="text" name="nom">

            <label>number</label>
            <input type="number" name="number">

            <label>color</label>
            <input type="text" name="color">

            <button type="submit" class="btn btn-secondary">enregistrer</button>
        </form>
    </div>
    <a href="{{ route('car.index') }}" class="btn btn-link">liste des voitures</a>
@endsection    