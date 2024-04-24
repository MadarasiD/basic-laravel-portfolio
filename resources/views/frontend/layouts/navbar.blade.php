@php

    $generlaSetting = \App\Models\GeneralSetting::first();

@endphp

<nav class="navbar navbar-expand-lg main_menu" id="main_menu_area">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/')}}">
            <img src="{{$generlaSetting->logo}}" alt="logó" style="height: 50px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars-staggered"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ Route::currentRouteName() == 'home' ? '#home-page' : url('/')}}">Főoldal</a>
                </li>
                @if (Route::currentRouteName() == 'home')
                <li class="nav-item">
                    <a class="nav-link" href="#about-page">Rólam</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#portfolio-page">Portfólió</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#skills-page">Készségek</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact-page">Kapcsolat</a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>