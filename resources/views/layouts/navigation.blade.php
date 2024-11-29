<nav class="navbar fixed-top bg-white shadow-sm">
    <div class="container-xl">
      <a class="navbar-brand" href="{{ route('posts.index') }}">
        <img src="/img/world.png" alt="world" width="30" height="24" class="d-inline-block align-text-top">
        Curso Laravel
      </a>
        <ul class="nav nav-pills">
            <li class="nav-item">
                {{-- se utiliza para responder al nombre de la ruta no a la url --}}
                {{-- <a class="nav-link {{ request()->routeIs('welcome') ? 'active' : 'nav-link' }}"  href="{{ route('welcome') }}">Welcome</a> --}}
            </li>
            <li class="nav-item">
                {{-- matienen encendido el blog pero se pierde cuando ingresamos a un elemento de la lista --}}
                {{-- <a class="nav-link {{ request()->routeIs('posts.index') ? 'active' : 'nav-link' }}" href="{{ route('posts.index') }}">Blog</a> --}}
                {{-- matienen encendido el blog aun que ingresemos a un elemento de la lista --}}
                <a class="nav-link {{ request()->routeIs('posts.*') ? 'active' : 'nav-link' }}" href="{{ route('posts.index') }}">Blog</a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('about') ? 'active' : 'nav-link' }}" href="{{ route('about') }}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('contact') ? 'active' : 'nav-link' }}" href="{{ route('contact') }}">Contact</a>
            </li> --}}
            @guest
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('registro') ? 'active' : 'nav-link' }}" href="{{ route('registro') }}">Registro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('login') ? 'active' : 'nav-link' }}" href="{{ route('login') }}">Login</a>
                </li>
            @endguest
            @auth
                <form class="ms-2" action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="btn text-danger">Logout</button>
                </form>
            @endauth

        </ul>
    </div>
</nav>
