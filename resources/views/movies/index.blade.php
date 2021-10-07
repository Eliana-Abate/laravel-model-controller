@extends('layouts.main')

@section('title') Movies @endsection

@section('content')
    <div class="text-center my-5 text-danger">
        <h3>Best movies list ever!</h3>
    </div>

    <section id="movies-list" class="pt-3">
        <div class="container">
            @forelse ($movies as $movie)
            <div class="card my-4">
                <div class="card-header">
                    <h4 class="card-title"> {{$movie->title}}</h4>
                </div>
                <div class="card-body">
                  <h6 class="card-title">Titolo originale: {{$movie->original_title}}</h6>
                  <p class="card-text">Nazionalità: {{$movie->nationality}}</p>
                  <p class="card-text">Data: {{$movie->date}}</p>
                  <p class="card-text">Voto: {{$movie->vote}}</p>
                  
                </div>
              </div>
            
                
            @empty
            
            <p>Nessun film disponibile
                
            </p>

                
            @endforelse

        </div>

    </section>
    
@endsection