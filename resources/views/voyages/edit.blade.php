@extends('components.app')

@section('title', 'Modifier un Voyage')

@section('content')

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('voyages.update', ['id' => $voyage]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="titre">Titre:</label>
            <input type="text" name="titre" id="titre" class="form-control" value="{{ $voyage->titre }}" required>
        </div>
        <div class="form-group">
            <label for="resume">Résumé:</label>
            <textarea name="resume" id="resume" class="form-control" rows="4" required>{{ $voyage->resume }}</textarea>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" id="description" class="form-control" rows="4"
                      required>{{ $voyage->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="continent">Continent:</label>
            <input type="text" name="continent" id="continent" class="form-control" value="{{ $voyage->continent }}"
                   required>
        </div>

        <div class="form-group">
            Mettre en ligne
            <label for="en_ligne">Oui </label>
            <input type="radio" name="en_ligne" id="en_ligne" class="form-control" @checked($voyage->en_ligne) value="true">
            <label for="hors_ligne">Non </label>
            <input type="radio" name="en_ligne" id="hors_ligne" class="form-control" @checked(!$voyage->en_ligne) value="false">
        </div>
        <div class="form-group">
            <label for="visuel">Visuel:</label>
            <input type="file" name="visuel" id="visuel" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary mt-2">Mettre à jour le voyage</button>
    </form>

@endsection
