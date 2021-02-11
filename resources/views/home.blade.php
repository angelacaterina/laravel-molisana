@extends('layout.app')

@section('title')
    Home
@endsection

@section('header')
    <header id="site_header">
        <div class="d-flex j_center">
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
    <main id="main_content_home">
        <h2>Home</h2>
    </main>
@endsection