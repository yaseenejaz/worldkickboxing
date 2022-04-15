@extends('frontend.app')
@section('title')
    <title>Pricing</title>
@endsection
@section('content')

    <section class="inner-header">
        <h1>PRICING</h1>
    </section>

    <section class="p-page">
        <div class="container">
            <div class="row">
                <div class="prng">
                    <div class="col-xl-7">
                        <div class="half">
                            <h2 class="hd-blk-th">How much does it cost to host a tournament with Kick boxing ?</h2>
                            <p>The pricing of Kick Boxing is based on the number of competitors in a tournament, as well as the entry fee. The rate is 5 percent of gross fees.</p>

                            <p>For example, if your entry fee is £25 per competitor, the price of using Kick Boxing is £1.25 per competitor.</p>

                            <p>This includes all features provided by Kick Boxing, including registration, payments, draw generation, wireless scoring, live streaming, and high‑quality technical support.</p>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="half">
                            <img src="{{ asset('frontend/images/p1.png') }}">
                            <div class="over-lay">
                                <h2>5%</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="prng">
                    <div class="col-xl-5">
                        <div class="half">
                            <img src="{{ asset('frontend/images/p2.png') }}">
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="half">
                            <h2 class="hd-blk-th">Full satisfaction<br>guarantee</h2>
                            <p>We are confident that you will enjoy using Kick Boxing, and that it will save you hours upon hours of time. If not, we will not charge you for your tournament.</p>
                        </div>
                    </div>
                </div>
                <div class="prng">
                    <div class="col-xl-7">
                        <div class="half">
                            <h2 class="hd-blk-th">How and when do I pay?</h2>
                            <p>Kick Boxing fee is paid by card after your tournament has been successfully completed. Visa, Mastercard, and American Express are accepted.</p>

                            <p>You don't need to have a card on file to get started – Kick Boxing will ask for it during the course of registration.</p>
                        </div>
                        <div class="half">
                            <h2 class="hd-blk-th">If I use an online payment processor, does Kick Boxing automatically subtract a fee?</h2>
                            <p>No. Kick Boxing fee does not depend on how you receive payments, and Kick Boxing doesnt subtract a fee when customers pay by card or by PayPal.</p>

                            <p>If you choose to process entry fees through Kick Boxing, your customers will pay into your account (not Kick Boxing.) At this point, the payment processor will withhold their own transaction fee.</p>

                            <p>For example, if a competitor pays £25 to enter, your account will show something like £24.27, depending on what the payment processor's fees are. Later on, after the tournament, Kick Boxing will charge your card the 5% fee, which is £1.25 for this particular competitor.</p>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="half">
                            <img src="{{ asset('frontend/images/p3.png') }}">
                        </div>
                    </div>
                </div>
                <div class="ques">
                    <div class="q-sec">
                        <h3>Does the fee apply to people who pay cash on the day?</h3>
                        <span>Yes</span>
                    </div>
                    <div class="q-sec">
                        <h3>Does the fee apply to tickets sold through Kick boxing</h3>
                        <span>Yes</span>
                    </div>
                    <div class="q-sec">
                        <h3>Does the fee apply to other on-the-day sales such as spectators or merchandise?</h3>
                        <span>No</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
