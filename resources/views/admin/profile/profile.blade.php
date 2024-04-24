@extends('admin.layouts.layouts')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Profil</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Profil</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">
                @auth
                    Üdvözöllek, {{ auth()->user()->name }}
                @endauth!</h2>
            <p class="section-lead">
                Módosítsa az adatait ezen az oldalon.
            </p>

            <div class="row mt-sm-4">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">

                        <div class="card-header">
                            <h4>Profil módosítása</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('profile.update') }}" method="POST">
                                @csrf
                                @method('patch')
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Név</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ old('name', $user->name) }}" required="">
                                        @if ($errors->has('name'))
                                            <code>{{ $errors->first('name') }}</code>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Email cím</label>
                                        <input type="email" class="form-control" name="email"
                                            value="{{ old('email', $user->email) }}" required="">
                                        @if ($errors->has('email'))
                                            <code>{{ $errors->first('email') }}</code>
                                        @endif
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h4>Jelszó módosítása</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('password.update') }}" method="POST">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Jelenlegi jelszó</label>
                                        <input type="password" class="form-control" name="current_password"
                                            autocomplete="current-password" required>
                                        @if ($errors->updatePassword->has('current-password'))
                                            <code>{{ $errors->updatePassword->first('current-password') }}</code>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Új jelszó</label>
                                        <input type="password" class="form-control" name="password"
                                            autocomplete="new-password">
                                        @if ($errors->updatePassword->has('password'))
                                            <code>{{ $errors->updatePassword->first('password') }}</code>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Új jelszó ismét</label>
                                        <input type="password" class="form-control" name="password_confirmation"
                                            autocomplete="password_confirmation">
                                        @if ($errors->updatePassword->has('password_confirmation'))
                                            <code>{{ $errors->updatePassword->first('password_confirmation') }}</code>
                                        @endif
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
