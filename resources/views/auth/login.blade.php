@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class=row>
        <!-- Default form login -->
        <form class="text-center">


            <div class="form-logo">
                <img src="img/Tracé-1.png" alt="">
                <p class="info"><i class="fas fa-info-circle fa-2x"></i></p>
                <p class="h1 mb-4">UNIVERBAL</p>
                <p class="h4 mb-4">Interprétariat Social</p>
            </div>
            <!-- Email -->

            <div class="login-form">
                <div class="mail">
                    <label><input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Email"
                            required></label>
                    <p class="flotte"><i class="fas fa-envelope fa-lg"></i></p>
                </div>

                <!-- Password -->
                <div class="mail">
                    <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Mot de passe"
                        required>
                    <p class="flotte"><i class="fas fa-lock fa-lg"></i></p>
                </div>
                <!-- Sign in button -->
                <button class="btn btn-info btn-block my-4" type="submit">CONNECTION</button>
                <!-- Creation de compte -->
                <p><a href="">Mot de passe oublié ?</a></p>
            </div>
        </form>
        <!-- Default form login -->
    </div>
</div>

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                    name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                    name="password" required>

                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
