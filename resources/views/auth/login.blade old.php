@extends('layouts.auth')
@section('content')
    <div class="card text-wihte">
        <style>
                  html, body {
                background-image: url('{{('assets/img/lahan.jpg')}}');;
                background-size:cover;
                /* color: #636b6f; */
                font-family: 'Raleway';
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            </style>
        <div class="card-header bg-primary text-white">
            Login Manajemen Lahan</div>

        <div class="card-body">

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <label for="username">{{ __('Username') }}</label>
                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror"
                           name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                    @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">{{ __('Password') }}</label>
                    <input id="password" type="password"
                           class="form-control @error('password') is-invalid @enderror" name="password" required
                           autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
