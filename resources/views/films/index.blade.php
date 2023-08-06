<x-layout titre="Liste des films">

    <x-nav />

    <section class="liste-des-films">
        @foreach ($films as $film)
            <article class="films">

                <div class="conteneur-image">
                    <a href="{{ route('films.show', ['id' => $film->id]) }}">
                        <img class="thumbnail" src="{{ $film->poster }}" alt="image du film">
                    </a>
                </div>
                <div class="titre">
                    <a href="{{ route('films.show', ['id' => $film->id]) }}">
                        {{ $film->titre }}
                    </a>
                </div>

            </article>
        @endforeach
    </section>

    <x-footer />

</x-layout>
