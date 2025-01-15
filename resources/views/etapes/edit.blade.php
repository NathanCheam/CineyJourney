@extends('components.app')

@section('title', 'Modifier une Etape')

@section('content')

<form action="{{ route('etapes.update', ['etape' => $etape->id]) }}" method="POST">
@csrf
@method('PUT')
<div class="form-group">
    <label for="titre">Titre:</label>
    <input type="text" name="titre" id="titre" class="form-control" value="{{ $etape->titre }}" required>
</div>
<div class="form-group">
    <label for="description">Description:</label>
    <textarea name="description" id="description" class="form-control" rows="4" required>{{ $etape->description }}</textarea>
</div>
<div class="form-group">
    <label for="date">Date:</label>
    <input type="date" name="date" id="date" class="form-control" value="{{ $etape->date }}" required>
</div>
<button type="submit" class="btn btn-primary mt-2">Update Étape</button>
</form>

@endsection
