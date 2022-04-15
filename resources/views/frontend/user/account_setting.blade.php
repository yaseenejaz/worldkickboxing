@extends('frontend.app')
@section('title')
    <title>Account Setting</title>
@endsection
@section('link')
    <style>
        .navActive {
            transition: all 0.5s ease;
            background: #df4428;
            border-radius: 5px;
            color: #fff !important;
        }

        .navActive a {
            color: #fff !important;
        }

        .save_button {
            background: #e04529;
            color: #fff;
            padding: 10px 30px;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.5s ease;
            border: none;
        }

        .save_button:hover {
            transition: all 0.5s ease;
            background: #000;
        }
    </style>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet"
          id="bootstrap-css">
@endsection
@section('content')
    <section class="untitled">
        <h2>{{ auth()->user()->name }}</h2>
    </section>
{{--    @include('frontend.user.header')--}}
    <section class="ver-tab">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h2>Account Setting</h2>
                    <div class="pow-in">
                        @include('frontend.user.navHeader')
                        <div>
             
                            @if(auth()->user()->email == "")
                                <form method="post" action="{{ route('guest.info.update') }}">
                                    @csrf
                                    <div class="pf">
                                        <h2>Your Details</h2>
                                        <div class="fmr">
                                            <div class="fld">
                                                <label>Name</label>
                                                <input class="form-control @error('name') is-invalid @enderror"
                                                       type="text" name="name" value="{{ $user->name }}">
                                                @error('name')
                                                <p style="padding-left: 115px" class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </p>
                                                @enderror
                                            </div>
                                            <div class="fld">
                                                <label>Email</label>
                                                <input class="form-control @error('email') is-invalid @enderror"
                                                       type="email" name="email" value="{{ $user->email }}">
                                                @error('email')
                                                <p style="padding-left: 115px" class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </p>
                                                @enderror
                                            </div>
                                            <div class="fld">
                                                <label>New Password</label>
                                                <input type="Password" name="password"
                                                       class="form-control @error('password') is-invalid @enderror"
                                                       id="password" autocomplete="new-password">
                                                @error('password')
                                                <p style="padding-left: 115px" class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </p>
                                                @enderror
                                            </div>
                                            <div class="fld">
                                                <label>Confirm Password</label>
                                                <input id="password-confirm" type="password" class="form-control"
                                                       name="password_confirmation" autocomplete="new-password">
                                            </div>
                                            <div class="fld">
                                                <div class="wt-lab">
                                                    <div class="rad-txt">
                                                        <?php
                                                        if ($user->remind == 1) {
                                                            $checked = 'checked';
                                                        } else {
                                                            $checked = '';
                                                        }
                                                        ?>
                                                        <input type="checkbox" name="remind_me" value="1" {{ $checked }}>
                                                        <div class="rado"></div>
                                                    </div>
                                                    <p>Email me about new features and tournaments.</p>
                                                </div>
                                            </div>
                                            <div class="fld">
                                                <div class="wt-lab">
                                                    <button class="save_button" type="submit">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            @else
                                <form method="post" action="{{ route('user.info.update') }}">
                                    @csrf
                                    <div class="pf">
                                        <h2>Your Details</h2>
                                        <div class="fmr">
                                            <div class="fld">
                                                <label>Name</label>
                                                <input class="form-control @error('name') is-invalid @enderror" type="text"
                                                       name="name" value="{{ $user->name }}">
                                                @error('name')
                                                <p style="padding-left: 115px" class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </p>
                                                @enderror
                                            </div>
                                            <div class="fld">
                                                <label>Email</label>
                                                <input class="form-control @error('email') is-invalid @enderror"
                                                       type="email" name="email" value="{{ $user->email }}">
                                                @error('email')
                                                <p style="padding-left: 115px" class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </p>
                                                @enderror
                                            </div>
                                            <div class="fld">
                                                <div class="wt-lab">
                                                    <div class="rad-txt">
                                                        <?php
                                                        if ($user->remind == 1) {
                                                            $checked = 'checked';
                                                        } else {
                                                            $checked = '';
                                                        }
                                                        ?>
                                                        <input type="checkbox" name="remind_me" value="1" {{ $checked }}>
                                                        <div class="rado"></div>
                                                    </div>
                                                    <p>Email me about new features and tournaments.</p>
                                                </div>
                                            </div>
                                            <div class="fld">
                                                <div class="wt-lab">
                                                    <button class="save_button" type="submit">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <form method="post" action="{{ route('user.password.update') }}">
                                    @csrf
                                    <div class="pf">
                                        <h2>Change Password</h2>
                                        <div class="fmr">
                                            <div class="fld">
                                                <label>Old Password</label>
                                                <input type="Password" name="old_password">
                                            </div>
                                            <div class="fld">
                                                <label>New Password</label>
                                                <input type="Password" name="password"
                                                       class="form-control @error('password') is-invalid @enderror">
                                                @error('password')
                                                <p style="padding-left: 115px" class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </p>
                                                @enderror
                                            </div>
                                            <div class="fld">
                                                <div class="wt-lab">
                                                    <button class="save_button" type="submit">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('script')
    {{--    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>--}}
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {

            @if(\Session::has('message'))
            $.toast({
                heading: 'Success!',
                position: 'top-center',
                text: '{{session()->get('message')}}',
                loaderBg: '#ff6849',
                icon: 'success',
                hideAfter: 3000,
                stack: 6
            });
            @endif

            @if(\Session::has('password'))
            $.toast({
                heading: 'Success!',
                position: 'top-center',
                text: '{{session()->get('password')}}',
                loaderBg: '#ff6849',
                icon: 'success',
                hideAfter: 3000,
                stack: 6
            });
            @endif

            @if(\Session::has('error'))
            $.toast({
                heading: 'Error',
                position: 'top-center',
                text: '{{session()->get('error')}}',
                loaderBg: '#a94442',
                icon: 'error',
                hideAfter: 3000,
                stack: 6,
            });
            @endif
        })
    </script>
@endsection
