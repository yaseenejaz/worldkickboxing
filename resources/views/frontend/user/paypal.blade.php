@extends('frontend.app')
@section('title')
    <title>Paypal</title>
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
                    <h2>Paypsl</h2>
                    <div class="pow-in">
                        @include('frontend.user.navHeader')

                        <div class="tab-content" id="myTabContent">

                            <div>
                                <div class="pf">
                                    <div class="cns">
                                        <p>If you don't have a Stripe account yet, the button below will walk you
                                            through creating one.</p>
                                        <button class="cns-bt" href="#" type="button" data-toggle="modal"
                                                data-target="#exampleModal"><i class="fa fa-plus"></i>Connect With
                                            PayPal
                                        </button>
                                        <div class="modal fade paypal" id="exampleModal" tabindex="-1" role="dialog"
                                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5>New Paypal Connection</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="fld">
                                                            <label>PayPal Merchant ID</label>
                                                            <input type="text" name="merchant">
                                                        </div>
                                                        <p>Your Merchant ID is the email address you use to log in to
                                                            PayPal.</p>
                                                        <a href="#" class="modal-btn">Grant Permissions</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cns">
                                        <p>To receive entry fees through PayPal, you need a verified PayPal account.</p>
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
