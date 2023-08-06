<x-layout :titre="$film->titre">

    <x-nav />

    <div class="conteneur-carte-film">
        <img class="poster"src="{{ $film->poster }}" alt="">

        <div class="conteneur-description">
            <div class="typing-animation">
                <h1>{{ $film->titre }}</h1>
            </div>
            <p class="synopsis">{{ $film->synopsis }}</p>
            <p class="date">{{ $film->date_sortie }}</p>

            <div class="conteneur-votes">
                <div class="conteneur-star">
                    <p class="rating"> {{ $film->vote_moyen }}</p>
                    <img class="star" src="/images/star.png" alt="star">
                </div>
                <p class="vote">Nombre de votes: {{ $film->votes }}</p>
            </div>
        </div>

    </div>
    <div class="conteneur-boutton">
        <button>
            <a href="{{ route('films.index') }}">Retour à l'accueil</a>
        </button>
    </div>

    <x-footer />

</x-layout>
