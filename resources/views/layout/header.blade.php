    <header id="site_header">   
        <div class="d-flex j_center">
            <img src="{{ asset('img/logo.png') }}" alt="">
        </div>
        <!-- Navbar -->
        <nav  class="d-flex j_center">
            <a href="{{ route('home') }}" class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}">Home</a>
            <a href="{{ route('prodotti') }}" class="{{ Route::currentRouteName() === 'prodotti' ? 'active' : '' }}">Prodotti</a>
            <a href="{{ route('contatti') }}" class="{{ Route::currentRouteName() === 'contatti' ? 'active' : '' }}">Contatti</a>
        </nav>
        <!-- /nav -->
    </header>