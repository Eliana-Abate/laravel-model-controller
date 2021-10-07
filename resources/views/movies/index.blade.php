@extends('layouts.main')

@section('title') Movies @endsection

@section('content')

    <h3>Scegli un film!</h3>

    <section id="movies-list">
        <div class="container">
            @forelse ($movies as $item)
                
            @empty
            
            <p>Nessun film disponibile</p>

                
            @endforelse

        </div>

    </section>
    
@endsection