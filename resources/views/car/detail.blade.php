<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('car.index') }}">liste des voitures</a>
    <div class="container">
        <h5>Detail du voiture</h5>
        <p><strong>marque:</strong>{{ $car->marque }}</p>
        <p><strong>nom:</strong>{{ $car->nom }}</p>
        <p><strong>number:</strong>{{ $car->number }}</p>
        <p><strong>color:</strong>{{ $car->color }}</p>
    </div>
    <a href="{{ route('car.update',$car->id) }}">modifier</a>
</body>
</html>