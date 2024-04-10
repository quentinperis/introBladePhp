<body>
<header>
    <h1>@yield('title')</h1>
</header>

<nav>
    <ul>
        @foreach(['Accueil', 'À propos', 'Contact'] as $index => $page)
            @php
                $urls = ['/', '/apropos', '/contact'];
            @endphp
            <li><a href="{{ $urls[$index] }}">{{ $page }}</a></li>
        @endforeach
    </ul>
</nav>

<main>
    @yield('content')
</main>

<footer>
    <p><a href="/contact">@yield('contact')</a></p>
</footer>
</body>
