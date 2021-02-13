@extends('layout.app')

@section('title')
    Prodotti
@endsection

@section('header')
    @include('layout.header')
@endsection

@section('main')
    <main id="main_content_prodotti">
        <h2>Le Lunghe</h2>
        <section>
            @foreach($data as $value ) 
                @if($value['tipo'] === 'lunga')
                    @include('partials.card_prodotti')
                @endif
            @endforeach
        </section>
        
        <h2>Le Corte</h2>
        <section>
            @foreach($data as $value ) 
                @if($value['tipo'] === 'corta')
                    @include('partials.card_prodotti')
                @endif
            @endforeach
        </section>

        <h2>Le Cortissime</h2>
        <section>
            @foreach($data as $value )
                @if($value['tipo'] === 'cortissima')
                    @include('partials.card_prodotti')
                @endif
            @endforeach
        </section>
    </main>
@endsection
