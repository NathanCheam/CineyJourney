@extends("components.app")

@section('content')
    <div class="trips-list">
        <h1>Univers cinématographiques</h1>
        <ul>
            @foreach($univers as $unUnivers)
                <li class="list-group-item mb-3 shadow-sm">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="mb-1">
                                <a href="{{ route('univers.show', ['continent' => $unUnivers->continent]) }}">
                                    {{ $unUnivers->continent }}
                                </a>
                            </h5>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
