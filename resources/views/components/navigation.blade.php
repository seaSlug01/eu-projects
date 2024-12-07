<header class="header" id="header" wire:ignore>
    @php
        $isHomePage = Route::currentRouteName() === 'homepage';
    @endphp
    <a class="site-logo" href="{{ $isHomePage ? '#' : "/" }}">
        <img src="{{asset('images/eu.png')}}" alt="image">
    </a>

    <button class="burger"><i class="fa-solid fa-bars"></i></button>
    <nav class="navbar">
        <a href="{{ $isHomePage ? '#about-us' : "/" }}" class="nav-item"><i class="fa-regular fa-user"></i><span>Ποιοι είμαστε</span></a>
        <a href="{{ $isHomePage ? '#projects' : "/" }}" class="nav-item"><i class="fa-solid fa-list-ul"></i><span>Προγράμματα</span></a>
        <a href="/admin/login" class="nav-item login-link"><i class="fa-solid fa-arrow-right-to-bracket"></i><span>Σύνδεση</span></a>
    </nav>
</header>