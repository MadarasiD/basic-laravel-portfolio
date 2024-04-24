@extends('admin.layouts.layouts')

@section('content')

    <section class="section">
      <div class="section-header">
        <h1>Adatkezelési tájékoztató</h1>
      </div>

      <div class="section-body">

        <div class="row">
          <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4>Adatkezelési tájékoztató</h4>
              </div>
              <div class="card-body">
                <form action="{{ route('admin.terms-and-conditions.update')}}" method="POST">
                  @csrf
                  @method('PUT')
                  <div class="form-group">
                    <label>Szöveg</label>
                    <textarea name="content" class="summernote">{!!@$content->content!!}</textarea>
                  </div>

                  <button type="submit" class="btn btn-primary">Feltöltés</button>
                </form>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
    
@endsection
