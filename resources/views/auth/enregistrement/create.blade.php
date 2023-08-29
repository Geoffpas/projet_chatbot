<x-layout titre="Enregistrement">

    <div class="conteneur-enregistrer">
        <div>
            <span class="material-icons">account_circle</span>
            <h2 class="titre-create">Enregistrez-vous</h2>
        </div>

        <div>
            {{-- FORMULAIRE D'ENREGISTREMENT --}}
            <form action="{{ route('enregistrement.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- PRÉNOM --}}
                <div>
                    <label class="label-create" for="prenom">Prénom</label>
                    <div>
                        <input class="input-create" id="prenom" name="prenom" type="text" autocomplete="given-name" autofocus value="{{ old('prenom') }}">
                        <x-forms.erreur champ="prenom" />
                    </div>
                </div>

                {{-- NOM --}}
                <div>
                    <label class="label-create" for="nom">Nom</label>
                    <div>
                        <input class="input-create" id="nom" name="nom" type="text" value="{{ old('nom') }}" autocomplete="family-name">
                        <x-forms.erreur champ="nom" />
                    </div>
                </div>

                {{-- EMAIL --}}
                <div>
                    <label class="label-create" for="email">Courriel</label>
                    <div>
                        <input class="input-create" id="email" name="email" type="email" value="{{ old('email') }}" autocomplete="email">
                        <x-forms.erreur champ="email" />
                    </div>
                </div>

                {{-- AVATAR --}}
                <div>
                    <label class="label-create" for="avatar">Avatar (facultatif)</label>
                    <div>
                        <input class="input-create" id="avatar" name="avatar" type="file">
                        <x-forms.erreur champ="avatar" />
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

                {{-- CONFIRM PASSWORD --}}
                <div>
                    <label class="label-create" for="confirm-password">Confirmation du mot de passe</label>
                    <div>
                        <input class="input-create" id="confirm-password" name="confirmation_password" type="password">
                        <x-forms.erreur champ="confirmation_password" />
                    </div>
                </div>

                <div>
                    <button class="btn-create" type="submit">Créez votre compte !</button>
                </div>
            </form>

            <p class="links-create">
                <a class="a-create" href="{{ route('connexion.create') }}">Vous connaissez déjà LaraGPT ?</a>
                <a class="a-create" href="{{ route('accueil') }}">Accueil</a>
            </p>
        </div>
    </div>

</x-layout>
