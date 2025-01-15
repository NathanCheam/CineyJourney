@extends('layouts.app')

@section('content')
    <h1>Voyages en {{ $continent->name }}</h1>

    @if($continent->travels->isEmpty())
        <p>Aucun voyage n'est disponible pour ce continent.</p>
    @else
        <ul>
            @foreach($continent->travels as $travel)
                <li>
                    <a href="{{ route('travel.show', $travel->id) }}">
                        {{ $travel->name }}
                    </a>
                    <p>{{ $travel->description }}</p>
                </li>
            @endforeach
        </ul>
    @endif

    <a href="{{ route('home') }}">Retour à l'accueil</a>
@endsection
