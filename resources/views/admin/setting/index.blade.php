@extends('admin.layouts.layouts')

@section('content')
    <section class="section">
      <div class="section-header">
        <h1>Beállítások</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="{{ url('/')}}">Dashboard</a></div>
          <div class="breadcrumb-item">Beállítások</div>
        </div>
      </div>

      <div class="section-body">
        <h2 class="section-title">Rendszerezze és módosítsa a webhely összes beállítását.</h2>


        <div class="row">
          <div class="col-lg-6">
            <div class="card card-large-icons">
              <div class="card-icon bg-primary text-white">
                <i class="fas fa-cog"></i>
              </div>
              <div class="card-body">
                <h4>Általános</h4>
                <p>Általános beállítások, mint például a webhely címe, leírása, címe...</p>
                <a href="{{route('admin.general-setting.index')}}" class="card-cta">Beállítások módosítása <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card card-large-icons">
              <div class="card-icon bg-primary text-white">
                <i class="fas fa-search"></i>
              </div>
              <div class="card-body">
                <h4>SEO</h4>
                <p>Keresőoptimalizálási beállítások, például metacímkék és közösségi média.</p>
                <a href="{{route('admin.seo-setting.index')}}" class="card-cta">Beállítások módosítása <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
@endsection