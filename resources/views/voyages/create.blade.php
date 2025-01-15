@extends('components.app')

@section('title', 'Créer un Voyage')

@section('content')
    <h2>Créer un Voyage</h2>

    <form action="{{ route('voyages.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="continent" value="{{ $continent }}">
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
            <label for="en_ligne">En ligne</label>
            <select name="en_ligne" id="en_ligne" class="form-control" required>
                <option value="1">Oui</option>
                <option value="0">Non</option>
            </select>
        </div>
        <div class="form-group">
            <label for="visuel">Visuel</label>
            <input type="file" name="visuel" id="visuel" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Créer</button>
    </form>
@endsection
