<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/update.css')
</head>
<body>
    <div class="container">
        <form action="{{ route('car.update',$car->id) }}" method="POST">
            @csrf
            <label>marque</label>
            <input type="text" name="marque" value="{{ $car->marque }}">

            <label>nom</label>
            <input type="text" name="nom" value="{{ $car->nom }}"><br>

            <label>number</label>
            <input type="text" name="number" value="{{ $car->number }}">

            <label>color</label>
            <input type="text" name="color"value="{{ $car->color }}"><br>

            <button type="submit">enregistrer</button>
        </form>
        <a href="{{ route('car.detail',$car->id) }}">Annuler</a>
    </div>
</body>
</html>