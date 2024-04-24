@extends('admin.layouts.layouts')

@section('content')
    <div class="main-wrapper main-wrapper-1">


        <!-- Main Content -->
        <section class="section">
            <div class="section-header">
                <h1>Dashboard</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fa-solid fa-wrench" style="color: #fff; font-size: 30px"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Összes szolgáltatás</h4>
                            </div>
                            <div class="card-body">
                                {{$serviceCount}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-danger">
                            <i class="fa-solid fa-dumbbell" style="color: #fff; font-size: 30px"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Összes munkám</h4>
                            </div>
                            <div class="card-body">
                                {{$portfolioCount}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="fa-solid fa-graduation-cap" style="color: #fff; font-size: 30px"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Összes Készség</h4>
                            </div>
                            <div class="card-body">
                                {{$skillsCount}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="fa-regular fa-envelope" style="color: #fff; font-size: 30px"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Összes üzenet</h4>
                            </div>
                            <div class="card-body">
                                {{$messageCount}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    @endsection
