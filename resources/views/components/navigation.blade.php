<header class="header" id="header">
    <a class="site-logo" href="{{ request()->is('/') ? '#' : "/" }}">
        <img src="{{asset('images/eu.png')}}" alt="image">
    </a>

    <button class="burger"><i class="fa-solid fa-bars"></i></button>
    <nav class="navbar">
        <a href="{{ request()->is('/') ? '#about-us' : "/" }}" class="nav-item"><i class="fa-regular fa-user"></i><span>Ποιοι είμαστε</span></a>
        <a href="{{ request()->is('/') ? '#projects' : "/" }}" class="nav-item"><i class="fa-solid fa-list-ul"></i><span>Προγράμματα</span></a>
        <a href="/admin/login" class="nav-item login-link"><i class="fa-solid fa-arrow-right-to-bracket"></i><span>Σύνδεση</span></a>
    </nav>
</header>