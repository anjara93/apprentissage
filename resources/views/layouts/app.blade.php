<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gestion de voitures - @yield('title', 'Accueil')</title>
    @vite('resources/css/app.css')
</head>
<body>

    {{-- Navbar --}}
    <div class="navbar">
        <div class="layout_container">
            <ul>
                <li><a href="{{ route('car.index') }}">Accueil</a></li>
                <li><a href="{{ route('car.form') }}">Ajouter une voiture</a></li>
            </ul>
        </div>
    </div>

    {{-- Contenu des pages --}}
    <div class="container mt-4">
        @yield('content')
    </div>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>