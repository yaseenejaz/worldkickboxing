@extends('frontend.app')
@section('title')
    <title>Forgot Password</title>
@endsection

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="login">
                    <h2>Reset your password</h2>
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form">
                            <div class="field">
                                <span>Your email</span>
                                <input id="email" type="email"
                                       class="form-control @error('email') is-invalid @enderror" name="email"
                                       value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button style="max-width: 252px !important;" type="submit" class="login-btn">{{ __('Send Password Reset Link') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
