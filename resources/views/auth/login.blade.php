@extends('auth.auth-html')

@section('auth-content')

<div class="container-fluid">
    <div class=row>
        <!-- Default form login -->
        <form class="text-center" method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-logo">
                <img src="img/Tracé-1.png" alt="">
                <p class="info"><i class="fas fa-info-circle fa-2x"></i></p>
                <p class="h1 mb-4">UNIVERBAL</p>
                <p class="h4 mb-4">Interprétariat Social</p>
            </div>

            <div class="login-form">

                <!-- Email -->
                <div class="mail">
                    <label>
                        <input id="email" type="email" class="form-control mb-4 {{ $errors->has('email') ? ' is-invalid' : '' }}"
                            placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </label>
                    <p class="flotte"><i class="fas fa-envelope fa-lg"></i></p>
                </div>

                <!-- Password -->
                <div class="mail">
                    <input id="password" type="password" class="form-control mb-4 {{ $errors->has('password') ? ' is-invalid' : '' }}"
                        name="password" required placeholder="Mot de passe">
                    @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                    <p class="flotte"><i class="fas fa-lock fa-lg"></i></p>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember
                                Me
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Sign in button -->
                <button class="btn btn-info btn-block my-4" type="submit">CONNECTION</button>

                <!-- Password Request -->
                <p><a href="{{ route('password.request') }}">Mot de passe oublié ?</a></p>
            </div>
        </form>
        <!-- Default form login -->
    </div>
</div>
@endsection
