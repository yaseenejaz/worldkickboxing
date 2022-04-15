@extends('frontend.app')
@section('title')
    <title>Payment</title>
@endsection
@section('link')
    <style>
        .sideNavActive {
            transition: all 0.5s ease;
            background: #df4428;
            border-radius: 5px;
            color: #fff !important;
        }

        .sideNavActive a{
            color: #fff !important;
        }
    </style>
    <link rel="stylesheet" type="text/css"
          href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    {{--    <link href="{{ asset('frontend/css/bootstrap-editable.css') }}" rel="stylesheet"/>--}}
@endsection
@section('content')
    <section class="untitled">
        <h2>{{ $tournament->name }}</h2>
        <?php
            $date = explode("-",$tournament->date);
            $month = DateTime::createFromFormat('!m', $date[1]);
            $month = $month->format('F');
            $today = date(" " . $date[2] . ", " . $date[0]);
        ?>
        <span>{{ $month . $today }}</span>
    </section>
    @include('frontend.tournament.header')

    <section>
        <div class="tabbb">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <p>Complete your profile so you'll be able log in later.</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tabbs-hed">
                            <h2>Settings: Payment</h2>
                        </div>
                    </div>
                </div>
                <div class="row">

                    @include('frontend.setting.sidebar')

                    <div class="col-xl-8">
                        <div class="tab-content">

                            <div class="text-style">
                                <div class="tab-ef">
                                    <div class="ef-full">
                                        <label>Stripe Account</label>
                                        <div class="contnt">
                                            <div class="arr">
                                                <select>
                                                    <option>(No Stripe Account)</option>
                                                </select>
                                            </div>
                                            <p>Stripe is used for processing credit and debit cards.</p>
                                            <a href="#">Connect a Stripe account</a>
                                        </div>
                                    </div>
                                    <div class="ef-full">
                                        <label>PayPal Account</label>
                                        <div class="contnt">
                                            <div class="arr">
                                                <select>
                                                    <option>(No PayPal Account)</option>
                                                </select>
                                            </div>
                                            <p>Stripe is used for processing credit and debit cards.</p>
                                            <a href="#">Connect a PayPal account</a>
                                        </div>
                                    </div>
                                    <div class="ef-full">
                                        <label>Terms and refund policy</label>
                                        <div class="contnt">
                                            <textarea></textarea>
                                            <p>Your refund policy can be anything you want, it's up to you</p>
                                            <div class="rbx">
                                                <input type="radio" name="raid">
                                                <div class="rdo"></div>
                                                <label>Require explicit agreement to terms during registration</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ef-full">
                                        <label>Contact Information</label>
                                        <div class="contnt">
                                            <textarea></textarea>
                                            <p>This is shown at the bottom of the checkout page.</p>
                                        </div>
                                    </div>
                                    <a href="#" class="save">Save</a>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    {{--    <script src="{{ asset('frontend/js/bootstrap-editable.min.js') }}"></script>--}}
@endsection
