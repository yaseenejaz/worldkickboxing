@extends('frontend.app')
@section('title')
    <title>Profile</title>
@endsection
@section('link')
    <style>
        .navActive {
            transition: all 0.5s ease;
            background: #df4428;
            border-radius: 5px;
            color: #fff !important;
        }

        .navActive a{
            color: #fff !important;
        }
    </style>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
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
                    <h2>Profile</h2>
                    <div class="pow-in">
                        @include('frontend.user.navHeader')
                        <div>
                            <div class="pf">
                                <div class="nt">
                                    <a href="{{ route('tournament.create') }}"><i class="fa fa-plus"></i>New Tournament</a>
                                    <a href="#"><i class="fa fa-plus"></i>New Ranking</a>
                                </div>
                                <div class="tb-in">
                                    @include('frontend.user.subNavHeader')
                                    <div>
                                        <div class="ran">
                                            <div class="bax">
                                                <p>Once you've created a ranking, it will appear here.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('script')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
@endsection
