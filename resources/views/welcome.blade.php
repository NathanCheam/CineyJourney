@extends("components.app")

@section('content')
<body class="no-footer">
    <div class="textuel-welcome">

    <h1>CINE JOURNEY</h1>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias eveniet architecto praesentium facere cum molestiae amet, facilis illum tenetur error libero laborum deleniti consequuntur corrupti voluptatum dolorum, dignissimos dolore laudantium.
    Omnis officiis reiciendis esse repellat? Eius aliquam alias delectus eos modi, placeat debitis magnam nemo facilis! Explicabo unde illum perferendis autem veritatis, distinctio, minima omnis rerum repellat ullam illo repudiandae?
    Fuga ab illo cumque repellendus dolorum
    </div>

    <a href="{{ route('univers.index') }}" class="btn btn-primary">Voir les univers</a>
<h2>LES UNIVERS LES PLUS POPULAIRES :</h2>
<div class=boutton>
    <button id="prev">PRÉCEDENT</button>
    <button id="next">SUIVANT</button>
</div>

<div id="parent-grosCercle-motie">

    <div id="bobine" class="welcome-gros-cercle">
    <img class="img-land" src="{{Vite::asset('resources/images/bobine.png')}}" alt="bobine">

        <!-- <div class="welcome-parent-moyen-circle"> -->

            <div id="c0" class="container-carre-petit-cercle container-carre-petit-cercle1">

                    <a href="{{ route('univers.show', ['continent' => 'STAR WARS']) }}" class="welcome-moyen-cercle welcome-moyen-cercle1">
                        <img src="{{Vite::asset('resources/images/starwars.png')}}" alt="Star Wars">
                    </a>
            </div>

            <div id="c1" class="container-carre-petit-cercle container-carre-petit-cercle2">

                    <a href="{{ route('univers.show', ['continent' => 'HARRY POTTER']) }}" class="welcome-moyen-cercle welcome-moyen-cercle2">
                        <img src="{{Vite::asset('resources/images/harrypotter.png')}}" alt="Harry Potter">
                    </a>
            </div>

            <div id="c2" class="container-carre-petit-cercle container-carre-petit-cercle3">

                    <a href="{{ route('univers.show', ['continent' => 'LE VOYAGE DE CHIHIRO']) }}" class="welcome-moyen-cercle welcome-moyen-cercle3">
                        <img src="{{Vite::asset('resources/images/chihiro.png')}}" alt="Le voyage de Chihiro">
                    </a>
            </div>

            <div id="c3" class="container-carre-petit-cercle container-carre-petit-cercle4">

                    <a href="{{ route('univers.show', ['continent' => 'STAR WARS']) }}" class="welcome-moyen-cercle welcome-moyen-cercle4">
                        <img src="{{Vite::asset('resources/images/gravityfalls.png')}}" alt="Gravity Falls">
                    </a>
            </div>

            <div id="c4" class="container-carre-petit-cercle container-carre-petit-cercle5">

                    <a href="{{ route('univers.show', ['continent' => 'FORREST GUMP']) }}" class="welcome-moyen-cercle welcome-moyen-cercle5">
                        <img src="{{Vite::asset('resources/images/forrestgump.png')}}" alt="Forrest Gump">
                    </a>
            </div>

            <div id="c5" class="container-carre-petit-cercle container-carre-petit-cercle6 active">

                    <a href="{{ route('univers.show', ['continent' => 'MARVEL']) }}" class="welcome-moyen-cercle welcome-moyen-cercle6">
                        <img src="{{Vite::asset('resources/images/marvel.png')}}" alt="Marvel">
                    </a>
            </div>
</div>



@endsection
