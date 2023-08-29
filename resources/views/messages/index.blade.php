<x-layout titre="Conversation">

    <div class="conteneur-lara">
        <header class="header-lara">
            <h1 class="titre-lara">LaraGPT</h1>
            <p>De quoi veux tu parler  <em>{{ auth()->user()->prenom }}</em> ?</p>
            @if(session('succes'))
                <div>
                    {{ session('succes') }}
                </div>
            @endif

            <div class="avatar">
                @if(auth()->user()->avatar)
                    <div class="img-conteneur">
                        <img class="img-avatar" src="{{ Storage::url(auth()->user()->avatar) }}" alt="Avatar de {{ auth()->user()->prenom }} {{ auth()->user()->nom }}">
                    </div>
                @else
                    <div class="img-conteneur">
                        <img class="img-avatar" src="{{ asset('storage/uploads/defaut.jpg') }}" alt="Avatar par défaut">
                    </div>
                @endif
            </div>

            <form action="{{ route('deconnexion') }}" method="POST">
                @csrf
                <input class="deco-lara" type="submit" value="Déconnexion">
            </form>
            <a class="a-lara" href="{{ route('accueil') }}">Accueil</a>
        </header>

        <main class="conteneur-msg">
            <div class="conversation">
                @foreach($messages as $message)
                    @if($message->reponse)
                    <div class="msg-lara">
                        <p><strong>LaraGPT</strong></p>
                        <p>{!! $message->reponse !!}</p>
                        <p><em>{{ $message->created_at->diffForHumans() }}</em></p>
                    </div>
                    @endif
                    <div class="msg-user">
                        <p><strong>{{ $message->user->prenom }} {{ $message->user->nom }}</strong></p>
                        <p>{{ $message->question }}</p>
                        <p><em>{{ $message->created_at->diffForHumans() }}</em></p>
                    </div>
                    <br>
                @endforeach
            </div>

            <div class="form-msg">
                <form action="{{ route('messages.conversation') }}" method="POST">
                    @csrf
                    <label class="votre-msg">Votre message :</label><br>
                    <textarea type="text" id="question" name="question" maxlength="60" required></textarea><br>
                    <input type="submit" id="envoyer" value="Envoyer">
                </form>
            </div>
        </main>
    </div>

</x-layout>

