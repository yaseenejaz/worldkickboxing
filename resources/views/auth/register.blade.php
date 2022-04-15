@extends('frontend.app')
@section('title')
    <title>Register</title>
@endsection
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="login">
                    <h2>Sign Up for Email Updates</h2>
                    <form method="post" action="{{ route('register') }}">
                        @csrf
                        <div class="form">
                            <p>We'll send you updates about new features and special offers on Kihapp.</p>
                            <p>We promise not to spam you or give your email address to anyone.</p>
                            <div class="spacer"></div>
                            <div class="field pbm">
                                <span>Your name</span>
                                <input id="name" type="text"
                                       class="form-control @error('name') is-invalid @enderror" name="name"
                                       value="{{ old('name') }}" autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="field pbm">
                                <span>Your email</span>
                                <input id="email" type="email"
                                       class="form-control @error('email') is-invalid @enderror" name="email"
                                       value="{{ old('email') }}" autocomplete="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="field pbm">
                                <span>New Password</span>
                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="field">
                                <span>Confirm Password</span>
                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation" autocomplete="new-password">

                            </div>
                            <div class="form-group row">
                                <div class="col-md-10 offset-md-2" style="padding-left: 35px">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remind_me" value="1"
                                               id="remind_me" {{ old('remind_me') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            Email me about new features and tournaments.
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="login-btn">Sign Up</button>
                            <div class="acc">
                                <p>By creating an account, you agree to <a href="privacy.html">Kihapp's Privacy
                                        Policy</a>,
                                    including data transfer outside of the EU.</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
