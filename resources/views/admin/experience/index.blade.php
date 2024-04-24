@extends('admin.layouts.layouts')

@section('content')
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Tapasztalat</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ url('/') }}">Dashboard</a></div>
            </div>
        </div>

        <div class="section-body">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tapasztalat hozzáadása</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{route('admin.experience.update',1)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kép feltöltése</label>
                                    <div class="col-sm-12 col-md-7">
                                        <div id="image-preview" class="image-preview">
                                            <label for="image-upload" id="image-label">Válassz fájlt</label>
                                            <input type="file" name="image" id="image-upload" />
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Cím</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="title" class="form-control" value="{{$experience->title}}">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Szöveg</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea name="description" class="form-control summernote" style="height: 100px">{!! $experience->description !!}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Telefonszám</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="phone" class="form-control" value="{{$experience->phone}}">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email cím</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="email" class="form-control" value="{{$experience->email}}">
                                    </div>
                                </div>

            
                                <div class="form-group row mb-4">
                                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                  <div class="col-sm-12 col-md-7">
                                    <button class="btn btn-primary">Frissítés</button>
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


@push('scripts')
<script>
  $(document).ready(function(){
      $('#image-preview').css({
          'background-image': 'url("{{asset($experience->image)}}")',
          'background-size': 'cover',
          'background-position': 'center center'
      })
  });
</script>
@endpush