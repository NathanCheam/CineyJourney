<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ isset($title) ? $title : "Page en cours" }}</title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="resources/css/welcome.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/css/uikit.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Viaoda+Libre&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

    <!-- par défaut on charge ces css/js -->
    <!-- on peut étendre cette section, voir la vue test-vite.blade.php -->
    @section("head")
        @vite(["resources/css/normalize.css", "resources/css/app.css", "resources/js/app.js"])
    @show
</head>
<body>
<header>
<nav class="nav">

    <div class="nav-first-links">
    <img src="../resources/images/Logo_Carrefour.svg.png" alt="">
    <a href="{{ route('accueil') }}">Accueil</a>
    <a href="{{ route('contact') }}">Contact</a>
    <a href="{{ route('test-vite') }}">Test Vite</a>
    </div>
    @auth
        {{ Auth::user()->name }}
        <a href="{{ route('logout') }}"
           onclick="document.getElementById('logout').submit(); return false;">Logout</a>
        <form id="logout" action="{{ route('logout') }}" method="post">
            @csrf
        </form>
        <a href="{{ route('account', ['id' => Auth::user()->id]) }}">Account</a>
    @else
    <div class="nav-last-links">
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('register') }}">Register</a>
</div>
    @endauth
</nav>
</header>


<main>
    @if(session('msg'))
        <x-message-info :type="session('type')" :message="session('msg')"></x-message-info>
    @endif
    @yield("content")
</main>

<footer>


    <x-footer></x-footer>
</footer>
</body>
</html>
