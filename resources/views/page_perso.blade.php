@extends("components.app")

@section("content")
    <div class="app-info">
        <h1>Votre espace personnel</h1>

        <h2>Voyages réalisés</h2>
        <ul>
            @foreach($user->mesVoyages as $voyage)
                <li>{{ $voyage->titre }}</li>
            @endforeach
        </ul>

        <h2>Nombre de voyages aimés : {{ $user->likes->count() }}</h2>

        <h2>Commentaires postés</h2>
        <p>Nombre de commentaires : {{ $user->avis->count() }}</p>
    </div>
@endsection
