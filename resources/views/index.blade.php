<x-layout titre="LaraGPT">

    <div class="conteneur-accueil">
        <header class="header-accueil">
            <h1 class="titre-accueil">LaraGPT</h1>
            <div class="links-accueil">
                <a class="a-accueil" href="{{ route('connexion.create') }}">Connexion</a>
                <a class="a-accueil" href="{{ route('enregistrement.create') }}">Test moi !</a>
            </div>
        </header>

        <div>
            @if(session('succes'))
                <div>
                    {{ session('succes') }}
                </div>
            @endif
        </div>
    </div>

</x-layout>
