@extends('admin.layouts.layouts')

@section('content')

<section class="section">
    <div class="section-header">
      <h1>Üzenetek</h1>
    </div>

    <div class="section-body">

      <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="card">
            <div class="card-header">
              <h4>Üzenetek</h4>
            </div>
            <div class="card-body">
              @foreach ($messages as $message)
                  <div class="message-box mt-3">
                    <a href="{{route('admin.messages.destroy', $message->id)}}" style="float: right;" class='btn btn-danger ml-2 delete-item'><i class='fas fa-trash-alt'></i></a>
                    <div class="message-mail">
                        <h4>{{$message->subject}}</h4>
                    </div>
                    <div class="message-name">
                        <p><span><</span>{{$message->email}}<span>></span> - <span>{{$message->name}}</span></p>
                    </div>
                    <div class="message-subject">
                        <p>{{$message->message}}</p>
                    </div>
                  </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection