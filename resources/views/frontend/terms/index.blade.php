
@extends('frontend.layouts.layout')

@section('content')
<header class="site-header parallax-bg">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-sm-8">
                <h2 class="title">Adatkezelési Tájékoztató</h2>
            </div>
            <div class="col-sm-4">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="{{ url('/')}}">Főoldal</a></li>
                        <li>Adatkezelés</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Portfolio-Area-Start -->
<section class="portfolio-details section-padding" id="portfolio-page">

    <div class="container">
        <div class="wsus__pay_info_area">
            <div class="row">
                <div class="card">
                    <div class="card-body pt-5">
                        {!! $terms->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Portfolio-Area-End -->
@endsection
