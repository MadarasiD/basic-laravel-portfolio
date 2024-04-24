@extends('frontend.layouts.layout')

@section('content')
<header class="site-header parallax-bg">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-sm-8">
                <h2 class="title">404</h2>
            </div>
            <div class="col-sm-4">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="{{url('/')}}">Főoldal</a></li>
                        <li>404</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="blog-details section-padding">
    <div class="container">
        <div class="row">
            <div id="notfound">
                <div class="notfound">
                    <div class="notfound-404">
                        <h1 style="color: #000 !important">Hoppá!</h1>
                    </div>
                    <h2>404 - Keresett oldal nem található!</h2>
                    <p>Előfordulhat, hogy a keresett oldalt eltávolították, vagy a neve megváltozott, vagy átmenetileg nem érhető el.
                    </p>
                    <a href="{{ url('/')}}">Vissza a főoldalra!</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection