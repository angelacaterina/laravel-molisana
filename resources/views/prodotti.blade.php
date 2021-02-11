@extends('layout.app')

@section('title')
    Prodotti
@endsection

@section('header')
    <header id="site_header">
        <div class="logo d-flex j_center">
            <img src="{{ asset('img/logo.png') }}" alt="">
        </div>
        <!-- Navbar -->
        <nav  class="d-flex j_center">
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('prodotti') }}">Prodotti</a>
            <a href="{{ url('contatti') }}">Contatti</a>
        </nav>
        <!-- /nav -->
    </header>
@endsection

@section('main')
    <main id="main_content_prodotti">
        <h2>Le Lunghe</h2>
        <section>
            @foreach($data as $value ) 
                @if($value['tipo'] === 'lunga')
                    <div class="pasta">
                        <img src="{{ $value['src'] }}" alt="">
                    </div>
                @endif
            @endforeach
        </section>
        
        <h2>Le Corte</h2>
        <section>
            @foreach($data as $value ) 
                @if($value['tipo'] === 'corta')
                    <div class="pasta">
                        <img src="{{ $value['src'] }}" alt="">
                    </div>
                @endif
            @endforeach
        </section>

        <h2>Le Cortissime</h2>
        <section>
            @foreach($data as $value )
                @if($value['tipo'] === 'cortissima')
                    <div class="pasta">
                        <img src="{{ $value['src'] }}" alt="">
                    </div>
                @endif
            @endforeach
        </section>
    </main>
@endsection
