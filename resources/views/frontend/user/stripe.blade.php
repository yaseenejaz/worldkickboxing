@extends('frontend.app')
@section('title')
    <title>Stripe</title>
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
                    <h2>Stripe</h2>
                    <div class="pow-in">
                        @include('frontend.user.navHeader')

                        <div class="tab-content" id="myTabContent">

                            <div>
                                <div class="pf">
                                    <ul class="ss">
                                        <a href="#">Stripe</a> allows you to receive the following payment methods:
                                        <li>Credit cards</li>
                                        <li>Debit cards</li>
                                        <li>iDEAL</li>
                                    </ul>
                                    <div class="cns">
                                        <p>If you don't have a Stripe account yet, the button below will walk you
                                            through creating one.</p>
                                        <p>Kihapp uses Stripe Connect, which means you will receive your payments
                                            directly to your Stripe account.</p>
                                        <a class="cns-bt"><i class="fa fa-plus"></i>Connect With Stripe</a>
                                    </div>
                                    <div class="cns">
                                        <p>This connection doesn't enable Kihapp to receive payments from you. To add a
                                            payment method, go to <a href="#">Billing</a>.</p>
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
