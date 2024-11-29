<nav>
    <ul>
        <li><a href="{{ route('welcome') }}">Welcome</a></li>
        <li><a href="/blog">Blog</a></li>
        <li><a href="/about">About</a></li>
        {{-- se utiliza para responder al nombre de la ruta no a la url --}}
        <li><a href="{{ route('welcome') }}">welcomen</a></li>
    </ul>
</nav>