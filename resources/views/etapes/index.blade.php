@extends('components.app')

@section('title', 'Liste des Étapes')

@section('content')
    <h2>Liste des Étapes</h2>

    @if ($etapes->isEmpty())
        <p>Aucune étape disponible.</p>
    @else
        <ul>
            @foreach ($etapes as $etape)
                <li>
                    <a href="{{ route('etapes.show', $etape->id) }}">{{ $etape->titre }}</a>
                </li>
            @endforeach
        </ul>
    @endif
@endsection
