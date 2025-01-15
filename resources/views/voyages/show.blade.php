@extends('components.app')

@section('title', $voyage->titre)

@section('content')
    <h2>{{ $voyage->titre }}</h2>

    <p><strong>Résumé :</strong> {{ $voyage->resume }}</p>
    <p><strong>Description :</strong> {{ $voyage->description }}</p>
    <p><strong>Univers cinématographique :</strong> {{ $voyage->univers_cine }}</p>
    <p><strong>En ligne :</strong> {{ $voyage->en_ligne ? 'Oui' : 'Non' }}</p>

    @if ($voyage->visuel && file_exists(public_path('storage/visuels/' . $voyage->visuel)))
        <img src="{{ asset('storage/visuels/' . $voyage->visuel) }}" alt="{{ $voyage->titre }}" class="img-fluid mt-3">
    @else
        <p class="text-muted mt-3">Aucun visuel disponible pour ce voyage.</p>
    @endif

    <p><strong>{{ $voyage->likeCount() }}</strong> {{ Str::plural('personne aime ce voyage', $voyage->likeCount()) }}.</p>

    <a href="{{ route('voyages.edit', $voyage->id) }}" class="btn btn-primary">Modifier le voyage</a>

    <form action="{{ route('voyages.destroy', $voyage->id) }}" method="POST" class="mt-3">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Supprimer le voyage</button>
    </form>

    <h2>Étapes</h2>
    <div style="display: flex">
    @if($voyage->etapes->isEmpty())
        <p>Aucune étape disponible pour ce voyage.</p>
    @else
        <ul>
            @foreach($voyage->etapes as $etape)
                <li>
                    <h3>{{ $etape->titre }}</h3>
                    <a href="{{ route('etapes.show', $etape->id) }}" class="btn btn-primary">Voir l'étape</a>
                </li>
            @endforeach
        </ul>
    @endif

        <div>
            <a href="{{ route('etapes.create', $voyage->id) }}" class="btn btn-primary mt-3">Ajouter une étape</a>
        </div>
    </div>

    <p>
        <strong>{{ $voyage->likeCount() }}</strong>
        {{ Str::plural('personne aime ce voyage', $voyage->likeCount()) }}.
    </p>

    @auth
        @if ($voyage->isLikedBy(auth()->user()))
            <form action="{{ route('voyages.unlike', $voyage) }}" method="POST" class="mt-3">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Je n'aime plus</button>
            </form>
        @else
            <form action="{{ route('voyages.like', $voyage) }}" method="POST" class="mt-3">
                @csrf
                <button type="submit" class="btn btn-primary">J'aime</button>
            </form>
        @endif

        <form action="{{ route('voyages.addComment', $voyage->id) }}" method="POST" class="mt-3">
            @csrf
            <div class="form-group">
                <label for="contenu">Votre commentaire :</label>
                <textarea name="contenu" id="contenu" class="form-control" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Ajouter un commentaire</button>
        </form>
    @else
        <p><a href="{{ route('login') }}">Connectez-vous</a> pour commenter.</p>
    @endauth

    <h3>Commentaires</h3>
    @foreach ($voyage->avis as $avis)
        <div>
            <strong>{{ $avis->user->name }}</strong>: {{ $avis->contenu }}
        </div>
    @endforeach
    @php
        $universId = $voyage->univers_id;  // Assurez-vous que 'univers_id' est bien une colonne dans la table 'voyages'
    @endphp

    <p><a href="{{ route('univers.show', ['continent' => $voyage->continent]) }}" class="btn btn-primary mt-3">Retour à la liste des voyages</a></p>

@endsection
