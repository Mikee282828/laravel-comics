<header>

    {{-- Questo è un commento blade, non si vedrà in browser --}}

    <!-- I commenti HTML sono visibili in pagina -->

    {{-- <div id="logo-wrapper">
        <img id="logo-img" src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Laravel.svg" />
        <span id="logo-text">Laravel Scaffold</span>
    </div> --}}

    <h1>Questo è l'header :)</h1>
    <h2>Attualmente ti trovi su: {{ Route::currentRouteName() }}</h2>
    <nav>
        {{-- I link usano i percorsi dichiarati nelle rotte --}}
        @if (Route::currentRouteName() == 'home')
            <a href='{{ route('home') }}' class="highlight">HOME</a>
        @else
            <a href='{{ route('home') }}' class="">HOME</a>
        @endif

        @if (Route::currentRouteName() == 'about')
            <a href='{{ route('about') }}' class="highlight">ABOUT</a>
        @else
            <a href='{{ route('about') }}' class="">ABOUT</a>
        @endif
    </nav>

</header>
