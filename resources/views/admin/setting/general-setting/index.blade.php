@extends('admin.layouts.layouts')

@section('content')
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Általános beállítások</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ url('/') }}">Dashboard</a></div>
            </div>
        </div>

        <div class="section-body">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Általános beállítások</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.general-setting.update', 1) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Logó előnézet</label>
                                    <div class="col-sm-12 col-md-7">
                                        <img style="width: 200px" src="{{asset($setting->logo)}}" alt="">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Logó</label>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="custom-file">
                                            <input type="file" name="logo" class="custom-file-input" id="customFile">
                                            <label for="customFile" class="custom-file-label">Válassz fájlt</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="half">
                                    <hr class="bordered-bottom">
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Lábléc Logó előnézet</label>
                                    <div class="col-sm-12 col-md-7">
                                        <img style="width: 200px" src="{{asset($setting->footer_logo)}}" alt="">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Lábléc Logó</label>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="custom-file">
                                            <input type="file" name="footer_logo" class="custom-file-input" id="customFile">
                                            <label for="customFile" class="custom-file-label">Válassz fájlt</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="half">
                                    <hr class="bordered-bottom">
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Favicon előnézet</label>
                                    <div class="col-sm-12 col-md-7">
                                        <img style="width: 200px" src="{{asset($setting->favicon)}}" alt="">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Favicon</label>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="custom-file">
                                            <input type="file" name="favicon" class="custom-file-input" id="customFile">
                                            <label for="customFile" class="custom-file-label">Válassz fájlt</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="custom-file">
                                            <button class="btn btn-primary">Feltöltés</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
