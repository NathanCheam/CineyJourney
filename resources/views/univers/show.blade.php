@extends("components.app")

@section('content')
    <div class="trips-list">
        <h1>VOYAGE DANS L'UNIVERS {{ $univers_cine }} :</h1>
        <br>
        <ul>
            @foreach($voyages as $voyage)
                <li class="list-group-item">
                    <div class="d-flex">
                        <div class="block">
                            <h5 class="mb-1">{{ $voyage->titre }}</h5>
                            <p class="mb-1">{{ $voyage->description }}</p>
                        </div>
                    </div>
                    <a href="{{ route('voyages.show', $voyage->id) }}" class="btn btn-primary mt-3">Afficher les détails</a>
                </li>
            @endforeach
                <a href="{{ route('voyages.create', ['continent' => $univers_cine]) }}" class="btn btn-primary mt-3">Créer un Voyage</a>
        </ul>
    </div>
@endsection
