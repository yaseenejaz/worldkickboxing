@extends('frontend.app')
@section('title')
    <title>Login</title>
@endsection
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="login">
                    <h2>LOGIN</h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form">
                            <div class="field">
                                <span>EMAIL</span>
                                <input type="email" class="@error('email') is-invalid @enderror" name="email"
                                       value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="field pbm">
                                <span>PASSWORD</span>
                                <input type="password" class="@error('password') is-invalid @enderror" name="password"
                                       required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 offset-md-2" style="padding-left: 35px">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember"
                                               id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="login-btn">Login</button>
                            <div class="acc">
                                <div class="sign">
                                    Don't have an account? <a href="{{ route('register') }}">Sign Up</a>
                                </div>
                                <div class="fp">
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
