@extends('layouts.main')

@section('title') Movies @endsection

@section('content')

    <h3>Scegli un film!</h3>

    <section id="movies-list">
        <div class="container">
            @forelse ($movies as $movie)
            <div class="card">
                <p>{{$movie->id}}</p>
                <p>{{$movie->title}}</p>
                <p>{{$movie->original_title}}</p>
                <p>{{$movie->nationality}}</p>
                <p>{{$movie->date}}</p>
                <p>{{$movie->vote}}</p>
                <br>
            </div>
                
            @empty
            
            <p>Nessun film disponibile
                
            </p>

                
            @endforelse

        </div>

    </section>
    
@endsection