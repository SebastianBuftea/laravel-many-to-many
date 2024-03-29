@extends('layouts.index')
@section('admin')
    <div class="container">
        <div class="row">
            <div class="col">
                <h2><strong>{{ $project->title }}</strong></h2>
                <div><strong>Descrizione</strong></div>
                <p>{{ $project->description }}</p>
                <img src="{{ $project->mockup_image == null ? 'https://static.vecteezy.com/system/resources/previews/005/337/799/original/icon-image-not-found-free-vector.jpg' : asset('/storage/' . $project->mockup_image) }}"
                    alt="" width="300px"> <br>
                @if ($project->mockup_image !== null)
                    <a href="{{ asset('/storage/' . $project->mockup_image) }}" target="_blanck">visualizza immagine a schermo
                        intero</a>
                @endif

                {{-- creo la visulizzazione della tabella many to many --}}
                <p>
                    <strong>Technologie: </strong>
                    @forelse ($project->technologies as $technology)
                        {{ $technology->name }}
                    @empty
                        Il progetto non ha tecnologie assegnate
                    @endforelse
                </p>
                <div><strong>Data consegna:</strong> {{ $project->relese_date }}</div>
            </div>
        </div>
    </div>
    </div>
@endsection
