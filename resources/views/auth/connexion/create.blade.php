<x-layout titre="Connexion">

    <div class="conteneur-create">
        <div>
            <span class="material-icons">wifi</span>
            <h2 class="titre-create">Connectes toi !</h2>
        </div>

        @if(session('email'))
            <p>{{ session('email') }}</p>
        @endif

        <div>
            {{-- FORMULAIRE DE CONNEXION --}}
            <form action="{{ route('connexion.authentifier') }}" method="POST">
                @csrf

                {{-- EMAIL --}}
                <div>
                    <label class="label-create" for="email">Courriel</label>
                    <div>
                        <input class="input-create" id="email" name="email" type="email" autocomplete="email" value="{{ old('email') }}">
                        <x-forms.erreur champ="email" />
                    </div>
                </div>

                {{-- PASSWORD --}}
                <div>
                    <label class="label-create" for="password">Mot de passe</label>
                    <div>
                        <input class="input-create" id="password" name="password" type="password" autocomplete="current-password">
                        <x-forms.erreur champ="password" />
                    </div>
                </div>

                <div>
                    <button class="btn-create" type="submit">Rejoins-moi !</button>
                </div>
            </form>

            <p class="links-create">
                <a class="a-create" href="{{ route('enregistrement.create') }}">Pas de compte ?</a>
                <a class="a-create" href="{{ route('accueil') }}">Accueil</a>
            </p>
        </div>
    </div>

</x-layout>
