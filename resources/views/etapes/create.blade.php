@extends('components.app')

@section('title', 'Ajouter une étape')

@section('content')
    <h2>Ajouter une étape pour le voyage: {{ $voyage->titre }}</h2>

    <form action="{{ route('etapes.store') }}" method="POST">
        @csrf
        <input type="hidden" name="voyage_id" value="{{ $voyage->id }}">
        <div class="form-group">
            <label for="titre">Titre</label>
            <input type="text" name="titre" id="titre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="resume">Résumé</label>
            <textarea name="resume" id="resume" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="debut">Début</label>
            <input type="date" name="debut" id="debut" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="fin">Fin</label>
            <input type="date" name="fin" id="fin" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Ajouter l'étape</button>
    </form>
@endsection
