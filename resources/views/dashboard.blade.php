@extends("components.app")

@section("content")
    <div class="app-info">
        Vous vous êtes bien connecté
        <a href="{{ route('account', ['id' => Auth::user()->id]) }}" class="btn btn-secondary">Accéder à votre espace personnel</a>
    </div>
@endsection
