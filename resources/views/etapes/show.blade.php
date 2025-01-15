@extends('components.app')

@section('title', $etape->titre)

@section('content')
    <div class="container">
        <h1>{{ $etape->titre }}</h1>

        <p><strong>Résumé :</strong> {{ $etape->resume }}</p>
        <p><strong>Description :</strong> {{ $etape->description }}</p>
        <p><strong>Début :</strong> {{ $etape->debut }}</p>
        <p><strong>Fin :</strong> {{ $etape->fin }}</p>

        <!-- Affichage des médias -->
        @if ($etape->media_link)
            <div class="media">
                @if (str_contains($etape->media_link, ['.jpg', '.png', '.gif']))
                    <img src="{{ $etape->media_link }}" alt="Media de {{ $etape->titre }}" class="img-fluid">
                @elseif (str_contains($etape->media_link, ['.mp4', '.webm']))
                    <video controls>
                        <source src="{{ $etape->media_link }}" type="video/mp4">
                        Votre navigateur ne supporte pas ce format vidéo.
                    </video>
                @elseif (str_contains($etape->media_link, ['.mp3', '.wav']))
                    <audio controls>
                        <source src="{{ $etape->media_link }}" type="audio/mpeg">
                        Votre navigateur ne supporte pas ce format audio.
                    </audio>
                @else
                    <a href="{{ $etape->media_link }}" target="_blank">Voir le média associé</a>
                @endif
            </div>
        @else
            <p>Aucun média associé à cette étape.</p>
        @endif

        <a href="{{ route('etapes.edit', $etape->id) }}" class="btn btn-primary mt-3">Modifier l'étape</a>

        <form action="{{ route('etapes.destroy', $etape->id) }}" method="POST" class="mt-3">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Supprimer l'étape</button>
        </form>

        <a href="{{ route('voyages.show', $etape->voyage_id) }}" class="btn btn-primary mt-3">Retour à la description du voyage</a>
    </div>
@endsection

