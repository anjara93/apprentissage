<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
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

            <button type="submit">enregistrer</button>
        </form>

        <a href="{{ route('car.index') }}">liste des voitures</a>
    </div>
</body>
</html>