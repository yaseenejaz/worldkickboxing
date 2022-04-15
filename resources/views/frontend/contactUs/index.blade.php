@extends('frontend.app')
@section('title')
    <title>Contact Us</title>
@endsection
@section('content')
    <section class="inner-header">
        <h1>CONTACT US</h1>
    </section>

    <section>
        <div class="c-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="info">
                            <p>Need more Information?</p>
                            <h3>CONTACT US</h3>
                            <h2>QUESTION?</h2>
                            <span>
							<div class="pin">
								<img src="{{ asset('frontend/images/pin.png') }}">
							</div>
							<div class="pin-txt">
								<h4>Address</h4>
								<a href="https://goo.gl/maps/SC9xCxZQn9S5wtn28">32 The Crescent London SW67 1NJ</a>
							</div>
						</span>
                            <span>
							<div class="pin">
								<img src="{{ asset('frontend/images/phone.png') }}">
							</div>
							<div class="pin-txt">
								<h4>Call Us</h4>
								<a href="tel:01582 461027">01582 461027</a>
							</div>
						</span>
                            <span>
							<div class="pin">
								<img src="{{ asset('frontend/images/eenvelope.png') }}">
							</div>
							<div class="pin-txt">
								<h4>Email</h4>
								<a href="mailto:info@kickboxing.com">info@kickboxing.com</a>
							</div>
						</span>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="form-sec">
                            <h3>Send Message</h3>
                            <div class="form">
                                <input type="text" name="First name" placeholder="First name*" class="left">
                                <input type="text" name="Last name" placeholder="Last name*" class="right">
                                <input type="text" name="E-mail" placeholder="E-mail" class="left">
                                <input type="tel" name="Phone number" placeholder="Phone number*" class="right">
                                <textarea type="text" name="Message" placeholder="Message" cols="50" rows="7"></textarea>
                                <a href="#">Send Message</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
