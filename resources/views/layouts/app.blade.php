<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Voyages')</title>

    <!-- Bootstrap CSS (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<header class="bg-primary text-white py-3">
    <div class="container">
        <h1 class="mb-0">Voyages et Étapes</h1>
        <nav class="mt-2">
            <a href="{{ route('etapes.index') }}" class="text-white me-3">Étapes</a>
            <a href="{{ route('etapes.create') }}" class="text-white">Créer une étape</a>
        </nav>
    </div>
</header>

<main class="container my-4">
    @yield('content')
</main>

<footer class="bg-dark text-white text-center py-3 mt-auto">
    <p>&copy; {{ date('Y') }} Voyages et Étapes. Tous droits réservés.</p>
</footer>

<!-- Bootstrap JS (CDN) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
