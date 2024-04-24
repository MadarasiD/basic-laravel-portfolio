@extends('admin.layouts.layouts')

@section('content')
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Portfólió elem módosítása</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ url('/') }}">Dashboard</a></div>
            </div>
        </div>

        <div class="section-body">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Portfólió elem módosítása</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.portfolio-item.update', $portfolioItem->id)}}" method="POST" enctype="multipart/form-data">
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
                                        <input type="text" name="title" class="form-control" value="{{$portfolioItem->title}}">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kategória</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select name="category_id" class="form-control mod-option">
                                            @foreach ($categories as $category)
                                                <option {{$category->id == $portfolioItem->category_id ? 'selected' : ''}} value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Szöveg</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea name="description" class="form-control summernote" style="height: 100px">{!! $portfolioItem->description !!}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Ügyfél</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="client" class="form-control" value="{{$portfolioItem->client}}">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">URL</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="website" class="form-control" value="{{$portfolioItem->website}}">
                                    </div>
                                </div>
            
                                <div class="form-group row mb-4">
                                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                  <div class="col-sm-12 col-md-7">
                                    <button class="btn btn-primary">Módosítás</button>
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
          'background-image': 'url("{{asset($portfolioItem->image)}}")',
          'background-size': 'cover',
          'background-position': 'center center'
      })
  });
</script>
@endpush